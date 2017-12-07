<?php
session_start();
include_once('db.php');

if(!isset($_SESSION['loggedin'])){
	header('Location: adminLogin.php');
}

if(isset($_POST['postid'])){
	if(empty($_POST['postid'])){
		$_SESSION['emptyfield_nr'] = True;
		header("Location: adminPanel.php");
	}
	else
	{

	//Zmiana hasła
	$pdo = connect();
	$query = "DELETE FROM posts WHERE id=:id";
	$stmt = $pdo -> prepare($query);
	$stmt -> bindParam(':id', $_POST['postid'], PDO::PARAM_INT);
	$stmt -> execute();

	header("Location: adminPanel.php");
	}
}
else
{
	header('Location: adminPanel.php');
}

?>