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
<form method="POST" action="save_profile.php">
    <strong><em>PERSONAL DETAILS</em></strong>
    <p class="control-label" for="inputSuccess4">Фамилия</p>
    <input name="familia"class="form-control" id="inputSuccess4" required placeholder="Рыбалкин">

    <p class="control-label" for="inputSuccess4">Имя</p>
    <input name="name" type="text" class="form-control" id="inputSuccess4" required placeholder="Игорь">
    
    <p class="control-label" for="inputSuccess4">Отчество</p>
    <input name="username" class="form-control" id="inputSuccess4" required placeholder="Валериевич">

    <p class="control-label" for="inputSuccess4">Age</p>
    <input name="age" class="form-control" id="inputSuccess4" maxlength="2" required placeholder="22">

    <p class="control-label" for="inputSuccess4">E-mail</p>
    <input name="email" class="form-control" id="inputSuccess4" required placeholder=" lumenwin@gmail.com">

    <p class="control-label" for="inputSuccess4">Skype</p>
    <input name="skype" class="form-control" id="inputSuccess4" required placeholder="nickelbackua">

    <p class="control-label" for="inputSuccess4">Mobile</p>
    <input name="mobile" class="form-control" id="inputSuccess4" required placeholder="+38 (099) 741 - 05 – 37">

    <p class="control-label" for="inputSuccess4">Location</p>
    <input name="location" class="form-control" id="inputSuccess4" required placeholder="Kharkov">
    
    <strong><em>EDUCATION</em></strong><br>
    <textarea name="education" class="form-control" cols="70" rows="5" required placeholder="01.2016 - current Training courses PHP Web – development at “Source IT”"></textarea>

    <strong><em>SKILLS SUMMARY</em></strong><br>
    <textarea name="skills" class="form-control" cols="70" rows="5" required placeholder="Basic knowledge of web-development: PHP 5.5, HTML , CSS"></textarea>

    <strong><em>PERSONAL QUALITIES</em></strong>
    <textarea name="qualities" class="form-control" cols="70" rows="5" required placeholder="Responsibility....."></textarea>
    
    <button type="submit">Ok</button>
</form>
<!-- <nav role="navigation" class="navbar navbar-inverse navbar-fixed-bottom"> -->
  <!-- <div class="container-fluid"> -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header">
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Бренд</a>
    </div> -->
    <!-- Collection of nav links and other content for toggling -->
    <!-- <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Главная</a></li>
        <li><a href="#">Статьи</a></li>
        <li><a href="#">Новости</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="vhod.php">Войти</a></li>
      </ul>
    </div>
  </div>
</nav> -->
</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
