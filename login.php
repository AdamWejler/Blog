<?php
session_start();
include_once('db.php');

if((isset($_POST['login'])) && (isset($_POST['password']))){
	if(empty($_POST['login']) || empty($_POST['password'])){
		$_SESSION['emptyfield'] = True;
		header("Location: adminLogin.php");
	}
	else
	{
		//Logowanie
		$pdo = connect();
		$query = "SELECT iduser FROM `users` WHERE nick=:login AND password=:password";
		$stmt = $pdo -> prepare($query);
		$stmt -> bindParam(':login', $_POST['login'], PDO::PARAM_STR, 20);
		$stmt -> bindParam(':password', $_POST['password'], PDO::PARAM_STR, 20);
		$stmt -> execute();

		if($stmt -> rowCount() == 0){
			$_SESSION['wrongloginorparrword'] = True;
			header("Location: adminLogin.php");
		}
		else{
			$r = $stmt -> fetch();
			$_SESSION['loggedin'] = True;
			header("Location: adminPanel.php");
		}

		
	}
}
else
{
	header('Location: adminLogin.php');
}
?>