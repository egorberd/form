<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="css/style_reg.css">
    <style type="text/css">
        body {
            background: url(css/background.jpg);
        }

    </style>
</head>

<body>
    <a href="index.php">Главная</a>
    <h1>Регистрационная форма</h1>
    <form class="form_box" action="post_form.php" method="POST">
        <label for="name">Имя:</label>
        <br>
        <input type="text" name="name" required>
        <br>
        <label for="email">E-mail:</label>
        <br>
        <input class="input_email" type="email" name="email" required>
        <br>
        <label for="password">Пароль:</label>
        <br>
        <input type="password" name="password" required>
        <br>
        <input class="btn_submit" type="submit" name="submit" value="Отправить">
    </form>

</body>

</html>
