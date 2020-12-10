<?php
require_once 'configDB.php';

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$email = $_POST['email'];
$password = $_POST['password'];

if ( !empty($_REQUEST['password']) and !empty($_REQUEST['email']) ) {		
		$email = $_REQUEST['email']; 
		$password = $_REQUEST['password']; 
		
		$query = 'SELECT*FROM users WHERE email="'.$email.'" AND password="'.$password.'"';
		$result = mysqli_query($link, $query); 
		$user = mysqli_fetch_assoc($result); 
		
		if (!empty($user)) {
			
			session_start(); 
			
			$_SESSION['auth'] = true; 
			
			$_SESSION['email'] = $user['email'];
            require_once 'success.php';
		} else {
			require_once 'error.php';
		}
	}
mysqli_close($link);
?>
