<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ошибка</title>
    <style type="text/css">
        body {
            background: url(css/background.jpg);
        }

        .error {
            width: 340px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -200px 0 0 -200px;
            height: 40px;
            padding: 10px 20px 30px 20px;

            color: black;
            font-weight: bold;
            background-color: #FFBABA;
        }

        .error .logo {
            width: 40px;
            height: 40px;

            padding: 10px 0 0 0;
        }

    </style>
</head>

<body>
    <a href="index.php">Главная</a>
    <div class="error">
        <img class="logo" src="css/error_logo.png" alt="">
        Введён неправиьный email или пароль
    </div>
</body>

</html>
