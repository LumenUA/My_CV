<?
session_start();
// Проверяем, пусты ли переменные
if (empty($_SESSION['login']) or empty($_SESSION['id'])){
// Если пусты, то мы не выводим ссылку
echo "<i class='text-info'>Вы вошли на сайт, как гость</i>";
}
else{

// Если не пусты, то мы выводим ссылку
echo "<i class='text-info'>Вы вошли на сайт, как ".$_SESSION['login']."</i>";
}
if(isset($_GET['logoff']))
{
$_SESSION = array();
session_destroy();
header("Location: ../index.php");
exit;
}
?>
<a href="?logoff">Выйти из системы</a>