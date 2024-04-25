<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Клетенкова А.Д.</title>
</head>
<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="row">
                <div class="col-2 nav_logo">
                </div>
                <div class="col-10">
                    <div class="nav_text">Эта страница обо мне!</div>
                </div>
            </div>
        </div>
    </div> 
    <div class="container">
        <div class="row">
            <div class="col-3">
                <p>Клетенкова Алёна, студентка 4 курса ИТМО по специальности <strong>Информационная безопаность</strong>.</p>
            </div>
            <div class="col-12">
                Этот сайт создан про меня для прохождения <i>стажировки</i>. Очень рада, что имею такую возможность.
            </div>
            <div class="col-4 photo_text">
                <div class="row my_photo">
                </div>
                <div class="row">
                    <p class="title_photo">Клетенкова А.Д.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Нажми!</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
                <form action="profile.php" method="POST">
                    <div class="row form_post">
                        <input type="text" class="form" name="title" placeholder="Заголовок вашего поста">
                    </div>
                    <div class="row form_post">
                        <textarea name="text" cols="30" placeholder="Введите текст вашего поста..."></textarea>
                    </div>
                    <button class="btn_post" type="submit" name="submit">Сохранить пост</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', '1234', 'PT');
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];
    if (!$title || !$main_text) die ("Заполните все поля");
    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
}
?>