<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Успех!</title>
    <style type="text/css">
        body {
            background: url(css/background.jpg);
        }

        .success {
            width: 340px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -200px 0 0 -200px;
            height: 40px;
            padding: 10px 20px 30px 20px;

            color: white;
            font-weight: bold;
            background-color: green;
        }

        .success .logo {
            width: 40px;
            height: 40px;

            padding: 10px 0 0 0;
        }

    </style>
</head>

<body>
    <a href="index.php">Главная</a>
    <div class="success">
        <img class="logo" src="css/success_logo.png" alt="">
        Авторизация прошла успешно!
    </div>
</body>

</html>
