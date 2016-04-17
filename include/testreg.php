<?php
    session_start();
if (isset($_GET['login'])) {
 $login = $_GET['login']; 
 if ($login == '') { 
    unset($login);
 } 
} 
if (isset($_GET['password'])) { 
 $password=$_GET['password']; 
 if ($password =='') { 
    unset($password);
 } 
}
    
if (empty($login) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
// подключаемся к базе
include ("bd.php");

$result = mysql_query("SELECT * FROM users WHERE login='$login'"); 
//извлекаем из базы все данные 
$myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {
    //если пользователя с введенным логином не существует
    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {
    //если существует, то сверяем пароли
    if ($myrow['password']==$password) {

    $_SESSION['login']=$myrow['login']; 
    $_SESSION['id']=$myrow['id'];
    echo "Вы успешно вошли на сайт! <a href='my_index.php?$login'>Главная страница</a>";
    }
 else {
    exit ("Bведённый вами login или пароль неверный.");
    echo "<a href='reg.php'>Зарегистрироваться</a>";
    }
}

    ?>