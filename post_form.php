<?php
require_once 'configDB.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$submit = $_POST['submit'];


    if(isset($submit))
    {
        if(isset($name) && isset($email)&& isset($pass))
        {
           $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('{$name}', '{$email}', '{$pass}')";
            if(mysqli_query($link, $query))
            {
                  require_once 'authorization.php';
             }
        }
    }

mysqli_close($link);
?>
