<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Logowanie</title>
<style>
body {
    background-color: grey;
    font-size: 130%;
}
</style>
</head>
<body>
<?php

session_start();
include_once('db.php');
if(isset($_SESSION['loggedin'])){


echo '<a href="adminLogin.php">Wyloguj mnie.</a>';






















}
else{
	header('Location: adminLogin.php');
}
?>
</body>
</html>