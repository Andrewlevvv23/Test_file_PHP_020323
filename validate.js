// Отримання посилання на HTML елементи форми:
var form = document.querySelector('form');
var inputName = document.querySelector('#name');
var inputSurname = document.querySelector('#surname');
var inputEmail = document.querySelector('#email');
var inputPassword = document.querySelector('#password');
var inputPasswordRepeat = document.querySelector('#confirm-password');

//Перевірка форми без перезагрузки за допомогою Ajax
$('#email').blur(function () {
  var email = $(this).val();
  $.ajax({
    type: 'POST',
    url: 'register.php',
    data: formData,
    success: function (response) {
      if (response == 'success') {
        $('#registration-form')[0].reset();
        $('#registration-success').html('Дякуємо за реєстрацію!');
        $('#email-error').html('');
        $('#password-error').html('');
      } else if (response == 'email_error') {
        $('#email-error').html('Невірний формат email.');
        $('#password-error').html('');
      } else if (response == 'password_error') {
        $('#email-error').html('');
        $('#password-error').html('Паролі не співпадають.');
      }
    },
  });
});

$('#email').blur(function () {
  var email = $(this).val();
  $.ajax({
    type: 'POST',
    url: 'register.php',
    data: {
      email: email,
    },
    success: function (response) {
      if (response == 'invalid') {
        $('#email-error').html('Невірний формат email.');
      } else {
        $('#email-error').html('');
      }
    },
  });
});

$('#confirm-password').blur(function () {
  var password = $('#password').val();
  var confirmPassword = $(this).val();
  if (password != confirmPassword) {
    $('#password-error').html('Паролі не співпадають.');
  } else {
    $('#password-error').html('');
  }
});
// Додавання події відправки форми
form.addEventListener('submit', function (event) {
  // Скасування стандартної поведінки браузера
  event.preventDefault();
  // Перевірка на наявність помилок
	if (event) {
    inputName.value = '';
    inputSurname.value = '';
    inputEmail.value = '';
    inputPassword.value = '';
    inputPasswordRepeat.value = '';
    setTimeout('alert("Ви успішно зареєструвались!")', 2000);
  }
});