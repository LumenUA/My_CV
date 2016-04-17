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
<?php session_start();
include("bd.php");
    ?>
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a href="my_index.php?<?echo $_SESSION['login']?>">Главная</a></li>
                <li><a href="my_CV.php?$login">Профиль</a></li>
                <li><a href="redactor.php?$login">Редактор профиля</a></li>
                <li><a href="API.php?$login">Переводчик</a></li>
                <li class="navbar-right"><?include("reg1.php");?></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
<img src="/images/my_foto.jpg" class="img-rounded pull-right">
<form class="form-inline" role="form">
  <div class="form-group has-success has-feedback">
<details>
    <summary><strong><em>PERSONAL DETAILS</em></strong></summary>
    <p class="control-label" for="inputSuccess4">Фамилия</p>
    <input class="form-control" id="inputSuccess4" placeholder="Рыбалкин" disabled>

    <p class="control-label" for="inputSuccess4">Имя</p>
    <input type="text" class="form-control" id="inputSuccess4" placeholder="Игорь" disabled>
    
    <p class="control-label" for="inputSuccess4">Отчество</p>
    <input class="form-control" id="inputSuccess4" placeholder="Валериевич" disabled>

    <p class="control-label" for="inputSuccess4">Date of birth</p>
    <input class="form-control" id="inputSuccess4" placeholder="15.08.1993" disabled>

    <p class="control-label" for="inputSuccess4">E-mail</p>
    <input class="form-control" id="inputSuccess4" placeholder=" lumenwin@gmail.com" disabled>

    <p class="control-label" for="inputSuccess4">Skype</p>
    <input class="form-control" id="inputSuccess4" placeholder="nickelbackua" disabled>

    <p class="control-label" for="inputSuccess4">Mobile</p>
    <input class="form-control" id="inputSuccess4" placeholder="+38 (099) 741 - 05 – 37" disabled>

    <p class="control-label" for="inputSuccess4">Location</p>
    <input class="form-control" id="inputSuccess4" placeholder="Kharkov" disabled>
</details>
    <img class="img" src="/images/images.jpg"><br>
<details>
    <summary><strong><em>SKILLS SUMMARY</em></strong></summary>
        <textarea class="form-control" cols="70" rows="5" disabled>Basic knowledge of web-development: PHP 5.5, HTML , CSS
        Basic knowledge of CMS: WordPress 4.4.2
        Basic knowledge of data bases: MySQL, MyPHPAdmin
        Basic knowledge of web-technologies : HTTP, API, POST, GET
        Basic knowledge of OOP
        Tools: Git, OpenServer, Denwer, Sumbline Text, Browser dev tool
        English: elementary</textarea></p>
</details>
    <img class="img" src="/images/images.jpg"><br>
<details>
    <summary><strong><em>EDUCATION</em></strong></summary>
    <p>01.2016 - current<br>
    <span class="letter">T</span>raining courses PHP Web – development at “Source IT”<br><br>
    2008 – 2011<br>
    <span class="letter">T</span>echnical colleague №69</p>
</details>
    <img class="img" src="/images/images.jpg"><br>
<details>
    <summary><strong><em>PERSONAL QUALITIES</em></strong></summary>
    <p><span class="letter">R</span>esponsibility<br>
    <span class="letter">A</span>ttention to details<br>
    <span class="letter">G</span>ood communication skills<br>
    <span class="letter">Q</span>uick learner</p>
</details>
    <img class="img" src="/images/images.jpg"><br>
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
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>