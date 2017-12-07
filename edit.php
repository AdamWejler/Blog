<?php
session_start();
include_once('db.php');

if(!isset($_SESSION['loggedin'])){
	header('Location: adminLogin.php');
}
if( !isset($_POST['postid']) || !isset($_POST['title']) || !isset($_POST['text']) ){
	header('Location: adminPanel.php');
}

try{
	$pdo = connect();
	$stmt = $pdo -> prepare('UPDATE `posts` SET title=:title, text=:textt WHERE id=:postid');
	$stmt -> bindValue(':title', $_POST['title'], PDO::PARAM_STR);
	$stmt -> bindValue(':textt', $_POST['text'], PDO::PARAM_STR);
	$stmt -> bindValue(':postid', $_POST['postid'], PDO::PARAM_INT);

	$stmt -> execute();

	header('Location: adminPanel.php');
}
catch(PDOException $e)
{
	echo 'Wystapil błąd: ' . $e->getMessage();
}
?>