<!DOCTYPE html>
<?php require_once 'configDB.php';?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Вход на сайт</title>
    <link rel="stylesheet" type="text/css" href="css/style_auto.css">
    <style type="text/css">
        body {
            background: url(css/background.jpg);
        }

    </style>
</head>

<body>
    <a href="index.php">Главная</a>
    <h1>Вход на сайт</h1>
    <form class="form_box" action="login.php" method="POST">
        <label for="email">E-mail:</label>
        <br>
        <input class="input_email" type="email" name="email" required>
        <br>
        <label for="password">Пароль:</label>
        <br>
        <input type="password" name="password" required>
        <br>
        <input class="btn_submit" type="submit" name="submit" value="Войти">
    </form>
</body>

</html>
