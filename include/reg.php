<!DOCTYPE html>
<html>
<head>
	<title>My_CV</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<center>
	<h2>Регистрация</h2>
	<form action="save_user.php" method="GET">
		<p>
			<label>Ваш логин:<br></label>
			<input name="login" type="text" size="25" maxlength="25">
		</p>
	</form>
	
	<form action="save_user.php" method="post">
		<p>
			<label>Ваш пароль:<br></label>
			<input name="password" type="password" size="25" maxlength="25">
		</p>
		<p>
			<label>E-mail:<br></label>
			<input name="email" type="text" size="25" maxlength="25">
		</p>
		<p>
			<input type="submit" name="submit" class="btn btn-primary btn-sm" value="Зарегистрироваться">
		</p>
	</form>
</center>
</body>
</html>