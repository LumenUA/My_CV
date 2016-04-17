<?php
session_start();
$uid = $_SESSION['uid'];
$first_name = $_SESSION['first_name'];
include ("bd.php");

$familia = $_POST['familia'];
$name = $_POST['name'];
$username = $_POST['username'];
$age = $_POST['age'];
$email = $_POST['email'];
$skype = $_POST['skype'];
$mobile = $_POST['mobile'];
$location = $_POST['location'];
$education = $_POST['education'];
$skills = $_POST['skills'];
$qualities = $_POST['qualities'];

$result4 = mysql_query ("UPDATE $first_name$uid SET familia='$familia',name='$name',username='$username',age='$age',email='$email',skype='$skype',mobile='$mobile',location='$location',education='$education',skills='$skills',qualities='$qualities'");
if ($result4=='TRUE') {
    echo "Данные успешно добавлены<br><a href='vk_index.php'>Главная страница</a>";
}else{
    echo "Произошла ошибка попробуйте еще раз<br><a href='redactor.php'>Главная страница</a>".mysql_error();
}

?>
