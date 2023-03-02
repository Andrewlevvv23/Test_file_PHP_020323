<?php
//include 'validate.js';
//Дублююча валідація по емейлу
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo 'invalid';
} else {
	echo 'valid';
}
// Масив існуючих користувачів
$existingUsers = array(
	array('id' => 1, 'name' => 'Іван', 'email' => 'ivan@example.com'),
	array('id' => 2, 'name' => 'Олена', 'email' => 'olena@example.com'),
	array('id' => 3, 'name' => 'Петро', 'email' => 'petro@example.com')
);
echo $existingUsers;

// Функція для перевірки, чи існує користувач з вказаним email
function userExists($email, $existingUsers)
{
	foreach ($existingUsers as $user) {
		if ($user['email'] == $email) {
			return true;
		}
	}
	return false;
}

// Отримую дані з POST-запиту
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Перевіряю, чи існує користувач з вказаним email
if (userExists($email, $existingUsers)) {
	// Якщо користувач існує, логуємо повідомлення
	$logMessage = date('Y-m-d H:i:s') . " - Користувач з email '{$email}' вже існує.\n";
	file_put_contents('log.txt', $logMessage, FILE_APPEND);
	echo 'exists';
} else {
	// Якщо користувач не існує, додаю його в масив та логую повідомлення
	$newUser = array('id' => count($existingUsers) + 1, 'name' => $name, 'email' => $email);
	array_push($existingUsers, $newUser);
	$logMessage = date('Y-m-d H:i:s') . " - Додано нового користувача з email '{$email}'.\n";
	file_put_contents('log.txt', $logMessage, FILE_APPEND);
	echo 'success';
}
?>