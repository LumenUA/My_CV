<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My_Rezyme</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a href="vk_index.php">Главная</a></li>
                <li><a href="my_rezyme.php">Профиль</a></li>
                <li><a href="redactor.php">Редактор профиля</a></li>
                <li><a href="API.php">Переводчик</a></li>
                <li class="navbar-right"><?php session_start();
                    echo "<i class='text-info'>Имя: ".$_SESSION['first_name']."</i><br>";
                    echo "<i class='text-info'>ID: ".$_SESSION['uid']."</i><br>";
                    if(isset($_GET['logoff'])){
                        $_SESSION = array();
                        session_destroy();
                        header("Location: ../index.php");
                        exit;
                    }
                ?></li>
                <li><a href="?logoff">Выйти из системы</a></li>
            </ul>
        </div>
    </div>
</div>
<form method="POST" action="save_profile.php">
    <strong><em>PERSONAL DETAILS</em></strong>
    <p class="control-label" for="inputSuccess4">Second name</p>
    <input name="familia"class="form-control" id="inputSuccess4" required placeholder="Рыбалкин">

    <p class="control-label" for="inputSuccess4">First name</p>
    <input name="name" type="text" class="form-control" id="inputSuccess4" required placeholder="Игорь">
    
    <p class="control-label" for="inputSuccess4">Middle name</p>
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
    <textarea name="qualities" class="form-control" cols="70" rows="5" placeholder="Responsibility....." required></textarea>
    
    <button type="submit">Ok</button>
</form>
</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
