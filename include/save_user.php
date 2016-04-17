<?php
    if (isset($_GET['login'])) {
     $login = $_GET['login']; 
     if ($login == '') {
      unset($login);
  } 
} //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (isset($_POST['password'])) { 
        $password=$_POST['password']; 
        if ($password =='') {
         unset($password);
     } 
}
    if (isset($_POST['email'])) { 
        $email=$_POST['email']; 
        if ($email =='') {
         unset($email);
     } 
}    
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
 //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
 // подключаемся к базе
    include ("bd.php");
    $result = mysql_query("SELECT id FROM users WHERE login='$login'");
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.<a href='reg.php'> Вернутся</a>");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysql_query ("INSERT INTO users (login,password,email) VALUES('$login','$password','$email')");
 // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='vhod.php'>Главная страница</a><br>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }

// $login1 = $_SESSION['login'];
include ("bd.php");
$result3 = mysql_query("CREATE TABLE $login (
id int(11) NOT NULL auto_increment,
familia varchar(32) NOT NULL default 'qw',
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
$result5 = mysql_query("INSERT INTO $login (familia) VALUES(default)");
// создаём таблицу для каждого пользователя
    if ($result3=='TRUE') {
    echo "Данные успешно добавлены<br>";
}else{
    echo "Произошла ошибка попробуйте еще раз<br><a href='redactor.php'>Главная страница</a>";
}
if ($result5=='TRUE') {
    echo "Данные успешно добавлены<br>";
}else{
    echo "Произошла ошибка попробуйте еще раз<br>".mysql_error();
}
?>
