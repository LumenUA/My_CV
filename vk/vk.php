<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
<title></title>
</head>
<body>
<?php
session_start();
$client_id = '5411283'; // ID приложения
$client_secret = 'k1TMnuyqsmv8X1t76r73'; // Защищённый ключ
$redirect_uri = 'http://localhost/vk/vk.php'; // Адрес сайта
$url = 'http://oauth.vk.com/authorize';

$params = array(
'client_id'     => $client_id,
'redirect_uri'  => $redirect_uri,
'response_type' => 'code'
);

echo $link = '<p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '">Аутентификация через ВКонтакте</a></p>';

if (isset($_GET['code'])) {
    $result = false;
    $params = array(
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $_GET['code'],
        'redirect_uri' => $redirect_uri
        );
    $token = @json_decode(file_get_contents('https://oauth.vk.com/access_token' . '?' . urldecode(http_build_query($params))), true);

    if (isset($token['access_token'])) {
        $params = array(
            'uids'         => $token['user_id'],
            'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big',
            'access_token' => $token['access_token']

            );

        $userInfo = json_decode(file_get_contents('https://api.vk.com/method/users.get' . '?' . urldecode(http_build_query($params))), true);
        if (isset($userInfo['response'][0]['uid'])) {
            $userInfo = $userInfo['response'][0];
            $result = true;
        }
    }
    if ($result === true) {
        $_SESSION['uid'] = $userInfo['uid'];
        $_SESSION['first_name'] = $userInfo['first_name'];
        $_SESSION['foto'] = $userInfo['photo_big'];
        $_SESSION['screen_name'] = $userInfo['screen_name'];
        $uid = $_SESSION['uid'];
        $first_name = $_SESSION['first_name'];
        include ("bd.php");

        $result4 = mysql_query("SELECT id FROM vk_users WHERE uid='$uid'");
        $myrow = mysql_fetch_array($result4);
        if (!empty($myrow['uid'])) {
        exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.<a href='reg.php'> Вернутся</a>".mysql_error());
        }
     // если такого нет, то сохраняем данные
        $result2 = mysql_query ("INSERT INTO vk_users (uid,first_name) VALUES('$uid','$first_name')");
     // Проверяем, есть ли ошибки
        if ($result2=='TRUE')
        {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a><br>";
        }
    else {
        echo "Поздравляем вы успешно вошли на сайт";
        }
        include ("bd.php");
        $result3 = mysql_query("CREATE TABLE $first_name$uid (
        id int(11) NOT NULL auto_increment,
        familia varchar(32) NOT NULL default '',
        name varchar(32) NOT NULL default '',
        username varchar(32) NOT NULL default '',
        age int(2) NOT NULL,
        email varchar(32) NOT NULL default '',
        skype varchar(32) NOT NULL default '',
        mobile int(20) NOT NULL,
        location varchar(32) NOT NULL default '',
        skills varchar(100) NOT NULL default '',
        education varchar(100) NOT NULL default '',
        qualities varchar(100) NOT NULL default '',
        PRIMARY KEY (id)
        )");
        $result5 = mysql_query("INSERT INTO $first_name$uid (familia) VALUES(default)");
        // создаём таблицу для каждого пользователя
            if ($result3=='TRUE') {
            echo "Данные успешно добавлены<br>";
        }else{
            echo "<a href='vk_index.php'>Главная страница</a>";
        }


        // echo "Социальный ID пользователя: " . $userInfo['uid'] . '<br>';
        // echo "Имя пользователя: " . $userInfo['first_name'] . '<br>';
        // echo $uid;
        // echo "Ссылка на профиль пользователя: " . $userInfo['screen_name'] . '<br />';
        // echo "Пол пользователя: " . $userInfo['sex'] . '<br />';
        // echo "День Рождения: " . $userInfo['bdate'] . '<br />';
        // echo '<img src="' . $userInfo['photo_big'] . '" />'; echo "<br />";

    }
}
?>
</body>
</html>
