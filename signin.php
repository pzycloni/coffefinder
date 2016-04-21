<?php require_once "/app/core/init.php";?>
<?php require_once "/phpscripts/validate.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coffeefinder.ru</title>

	<!-- include css files -->
	<link rel="stylesheet" href="/stylesheets/styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="/jsscripts/style.js"></script>
</head>
<body>

	<div class="sign_in">
		<form action="index.php" method="post">
			<div class="title_sign">Coffeefinder.ru</div>
			<div class="logo_sign">
				<img src="/img/buzz_coffee.png" alt="" class="img_logo_sign">
			</div>
			<div class="inp_block">
				<input type="text" name="inp_user_name" class="inp_user_name" placeholder="E-mail"/>
				<input type="password" name="inp_password" class="inp_password" placeholder="Пароль"/>
				<input type="submit" name="inp_submit" class="inp_submit" value="Войти"/>
			</div>
			<div class="option_block">
				<div class="create_new_account">
					<a href="" class="create_acc">Создать аккаунт</a>
				</div>
				<div class="remember_password">
					<a href="" class="remember_pass">Забыли пароль?</a>
				</div>
			</div>
		</form>
	</div>
</body>
</html>