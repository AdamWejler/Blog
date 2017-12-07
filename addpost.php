<?php
session_start();
include_once('db.php');

if(!isset($_SESSION['loggedin'])){
	header('Location: adminLogin.php');
}
if(!isset($_POST['title']) || !isset($_POST['text'])){
	header('Location: adminPanel.php');
}

try{
	$pdo = connect();
	$stmt = $pdo -> prepare('INSERT INTO `posts` (`title`, `text`) 
					VALUES(
						:title,
						:textt
					);'
				);
	$stmt -> bindValue(':title', $_POST['title'], PDO::PARAM_STR);
	$stmt -> bindValue(':textt', $_POST['text'], PDO::PARAM_STR);

	$stmt -> execute();

	header('Location: adminPanel.php');
}
catch(PDOException $e)
{
	echo 'Wystapil błąd: ' . $e->getMessage();
}
?>