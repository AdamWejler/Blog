<?php
session_start();

	echo '<u>Witaj na stronie logowania</u><br /><br />
	<form action="login.php" method="post">
	Nazwa użytkownika:<br>
	<input type="text" name="login"><br>
	Hasło:<br>
	<input type="password" name="password"><br>
	<input type="submit" value="zaloguj">
	</form>';

	if(isset($_SESSION['emptyfield'])){
		echo '<font color="orange">Oba pola muszą być wypełnione!</font></br>';
		unset($_SESSION['emptyfield']);
	}
	if(isset($_SESSION['wrongloginorparrword'])){
		echo '<font color="orange">Niepoprawny login lub hasło!</font></br>';
		unset($_SESSION['wrongloginorparrword']);
	}
	if(isset($_SESSION['loggedin'])){
		echo '<font color="blue">Zostałeś wylogowany.</font></br>';
		unset($_SESSION['loggedin']);
		session_destroy();
		session_start();
	}

?>