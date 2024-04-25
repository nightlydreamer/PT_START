<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Клетенкова А.Д.</title>
</head>
<body>
    <div class="container">
        <div class="row col-12">
            <h1>Регистрация</h1>
        </div>
        <div class="row col-12">
            <form action="registration.php" method="POST">
                <div class="row form__reg" style="margin-bottom: 5px">
                    <input type="email" class="form" name="email" placeholder="Email">
                </div>
                <div class="row form__reg" style="margin-bottom: 5px">
                    <input type="text" class="form" name="login" placeholder="Login">
                </div>
                <div class="row form__reg" style="margin-bottom: 5px">
                    <input type="password" class="form" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn-red btn__reg" name="submit" style="background-color: rgb(128, 73, 0); color: white; width: 140px; height: 40px">Продолжить</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
require_once('db.php');
if (isset($_COOKIE['User'])) {
    header("Location: login.php");
}
$link = mysqli_connect('127.0.0.1', 'root', '1234', 'PT');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['login'];
    $password = $_POST['password'];
    
    if (!$email || !$username || !$password) die ('Пожалуйста введите все значения!');
    
    $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
  
    if (!mysqli_query($link, $sql)) {
        echo "Не удалось добавить пользователя";
    }
}
?>