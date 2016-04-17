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
<form method="post">
<p>
	<input name="log" type="text" size="25" maxlength="25" class="pager" placeholder="Введи слово">
</p>
<p>
	<input id="perevod" type="submit" name="ok" value="Ok">
</p>
</form>
	<?php
		$text_input = $_POST['log'];

	if (isset($_POST['ok'])) {
		$url = file_get_contents('https://dictionary.yandex.net/api/v1/dicservice.json/lookup?key=dict.1.1.20160318T202458Z.1f096f4217403a0a.ff0eac3843a0da2d7333e9f76335c3fd834dcf6c&lang=en-ru&text='.$text_input.'&options=1');
		$jsonData = json_decode($url);
		$rest = $jsonData->def;

		for($k =0; $k<count($rest); $k++){
			$rest1 = $jsonData->def[$k]->tr;

			for($i =0; $i<count($rest1); $i++){
				$rest2 = $rest1[$i] -> text;

				echo $rest2."<br>";
		}
	}
}

?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>