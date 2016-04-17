<?php
session_start();
$login1 = $_SESSION['login'];
$bd = mysql_connect("localhost", "igor", "123");
mysql_select_db("reg");
$strSQL = mysql_query("SELECT * FROM $login1");
$row = @mysql_fetch_row($strSQL);
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
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a href="my_index.php">Главная</a></li>
                <li><a href="my_CV.php">Профиль</a></li>
                <li><a href="redactor.php">Редактор профиля</a></li>
                <li><a href="API.php">Переводчик</a></li>
                <li class="navbar-right"><?include("reg1.php");?></li>

            </ul>
        </div>
    </div>
</div>
<div class="container">
<form class="form-inline" role="form">
  <div class="form-group has-success has-feedback">
<details>
    <summary><strong><em>PERSONAL DETAILS</em></strong></summary>
    <p class="control-label" for="inputSuccess4">Фамилия</p>
    <input class="form-control" id="inputSuccess4" placeholder="<?echo $row['1']?>" disabled>

    <p class="control-label" for="inputSuccess4">Имя</p>
    <input type="text" class="form-control" id="inputSuccess4" placeholder="<?echo $row['2']?>" disabled>
    
    <p class="control-label" for="inputSuccess4">Отчество</p>
    <input class="form-control" id="inputSuccess4" placeholder="<?echo $row['3']?>" disabled>

    <p class="control-label" for="inputSuccess4">Age</p>
    <input class="form-control" id="inputSuccess4" placeholder="<?echo $row['4']?>" disabled>

    <p class="control-label" for="inputSuccess4">E-mail</p>
    <input class="form-control" id="inputSuccess4" placeholder="<?echo $row['5']?>" disabled>

    <p class="control-label" for="inputSuccess4">Skype</p>
    <input class="form-control" id="inputSuccess4" placeholder="<?echo $row['6']?>" disabled>

    <p class="control-label" for="inputSuccess4">Mobile</p>
    <input class="form-control" id="inputSuccess4" placeholder="<?echo $row['7']?>" disabled>

    <p class="control-label" for="inputSuccess4">Location</p>
    <input class="form-control" id="inputSuccess4" placeholder="<?echo $row['8']?>" disabled>
</details>
    <img class="img" src="../images/images.jpg"><br>
<details>
    <summary><strong><em>SKILLS SUMMARY</em></strong></summary>
        <textarea class="form-control" cols="70" rows="5" disabled><?echo $row['9']?></textarea></p>
</details>
    <img class="img" src="../images/images.jpg"><br>
<details>
    <summary><strong><em>EDUCATION</em></strong></summary>
    <p><?echo $row['10']?></p>
</details>
    <img class="img" src="../images/images.jpg"><br>
<details>
    <summary><strong><em>PERSONAL QUALITIES</em></strong></summary>
    <p><?echo $row['11']?></p>
</details>
    <img class="img" src="../images/images.jpg"><br>
  </div>
</div>
<nav role="navigation" class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Бренд</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Главная</a></li>
        <li><a href="#">Статьи</a></li>
        <li><a href="#">Новости</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Войти</a></li>
      </ul>
    </div>
  </div>
</nav>
</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>