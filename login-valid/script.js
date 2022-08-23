var $form = document.querySelector('.form');
var $error = document.querySelector('.error');
var $email = document.getElementById('email');
var $password = document.getElementById('password');

function addError(message) {
  $error.innerHTML = message;
  $error.style.display = 'block';
}

function removeError() {
  $error.innerHTML = '';
  $error.style.display = 'hidden';
}

function validate(event) {
  // event.preventDefault() untuk tidak menjalankan fungsi form apabila di submit, yaitu mengirim data ke 'action'.
  event.preventDefault();
  $error.style.display = 'none';

  if ($email.value !== 'admin@example.com' || $password.value !== 'password') {
    addError('Email atau password salah');
  } else {
    removeError();
    alert('Anda Berhasil Login!');
    // location.href = 'page2.php';
    window.open('page2.php', '_blank', 'name = ${email.value}')
  }
}

$form.addEventListener('submit', validate);
