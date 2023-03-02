<!DOCTYPE html>
<html>

<head>
	<title>Реєстрація користувача</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>Реєстрація користувача</h2>
		<form action="register.php" id="registration-form" method="POST">
			<div class="form-group">
				<label for="name">Ім'я:</label>
				<input type="text" class="form-control" id="name" name="name" required>
			</div>
			<div class="form-group">
				<label for="surname">Прізвище:</label>
				<input type="text" class="form-control" id="surname" name="surname" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
				<div id="email-error" class="text-danger"></div>
			</div>
			<div class="form-group">
				<label for="password">Пароль:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>
			<div class="form-group">
				<label for="confirm-password">Підтвердіть пароль:</label>
				<input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
				<div id="password-error" class="text-danger"></div>
			</div>
			<button type="submit" class="btn btn-primary">Зареєструватися</button>
		</form>
		<div id="registration-success" class="text-success"> </div>
	</div>
	<script src="validate.js" ></script>
</body>

</html>