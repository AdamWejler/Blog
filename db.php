<?php


function connect()
{
	try{
		$pdo = new PDO('mysql:host=localhost;port=3306;dbname=newsdb', 'root', '');
		$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		return $pdo;
	}catch(PDOException $e){
		echo 'Połączenie nie mogło zostać utworzone: ' . $e->getMessage();
	}
}

?>