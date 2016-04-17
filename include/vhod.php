<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My_CV</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
<body>
<div class="container">
    <form action="testreg.php" method="GET" class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input name="login" type="text" class="form-control" placeholder="Login" required="" autofocus="">
    <!-- </form> -->
    <!-- <form action="testreg.php" method="POST" class="form-signin" role="form"> -->
        <input name="password" type="password" class="form-control" placeholder="Password" required="">
        <label class="checkbox">
        <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="location.href='index.php'">Sign in</button>
    </form>
</div>
        <?php
// Проверяем, пусты ли переменные
        if (empty($_SESSION['login']) or empty($_SESSION['id']))
        {
// Если пусты, то мы не выводим ссылку
            // echo "Вы вошли на сайт, как гость<br><a href='index.php'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
        }
        else
        {

// Если не пусты, то мы выводим ссылку
            echo "Вы вошли на сайт, как ".$_SESSION['login']."<br>";
        }

        ?>
</body>
</html>