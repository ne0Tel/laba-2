<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Скрипальщиков С.И</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">

</head>
<body>
  <div class="container">

    <div class="row">
      <div class="col-12">
        <h1>Регистрация</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <form method="POST" action="registration.php">
          <div class="row form_reg"><input class="form" type="email" name="email" placeholder="Email"></div>
          <div class="row form_reg"><input class="form" type="text" name="login" placeholder="Login"></div>
          <div class="row form_reg"><input class="form" type="password" name="password" placeholder="Password"></div>
          <button type="submit" class="btn_red btn_reg" name="submit">Продолжить</button>
        </form>
      </div>
    </div>

  </div>

</body>
</html>


<?php
  require_once('db.php');

  if (!isset($_COOKIE['User'])) {
    header('Location: login.php');
  }

  $link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['login'];
    $pass = $_POST['password'];

    if (!$email || !$username || !$pass) die ("Пожалуйста введите все значения!");

    $sql = "INSERT INTO users (email, username, pass ) VALUES ('$email', '$username', '$pass')";

    if (!mysqli_query($link, $sql)) {
      echo "Не удалось добавить пользователя";
    };
  };
?>