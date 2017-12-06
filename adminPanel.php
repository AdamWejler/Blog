<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Logowanie</title>
<style>
	body {
	    background-color: grey;
	    font-size: 120%;
		}
	form {text-align: center;}
</style>
</head>
<body>
<?php

session_start();
include_once('db.php');
if(isset($_SESSION['loggedin'])){

// Logg out link
echo '<a href="adminLogin.php">Wyloguj mnie.</a>';

// Add post form
echo '
		<br><br>
		<form action="addpost.php" method="POST" id="newpostform">
			<fieldset>
				<legend>Nowy post:</legend>
	        	Tytuł posta: <br>
	        	<input type="text" name="title"></input><br>
	        	Treść posta: <br>
	        	<textarea type="text" name="text" cols=100 rows=15/></textarea><br><br>
	        	<input type="submit" value="Wyślij">
	        </fieldset>
        </form>
';

// Remove posts
echo '
		<br><br>
		<form action="removepost.php" method="POST" id="removepostform">
			<fieldset>
				<legend>Usuwanie postów:</legend>
	        	Numer posta do usunięcia: <br>
	        	<input type="number" name="postid" min="1"></input><br>
	        	<input type="submit" value="Usuń">
	        </fieldset>
        </form>
';

// Update post
echo '

		<br><br>
		<fieldset>
			<legend>Edycja postów</legend>

			<form action="edit.php" method="POST" id="editpostform">
	        	Numer posta do modyfikacji: <br>
	        	<input type="number" name="postid" min="1"></input><br>

	        	Nowy tytuł posta: <br>
	        	<input type="text" name="title"></input><br>
	        	Nowa treść posta: <br>
	        	<textarea type="text" name="text" cols=100 rows=15/></textarea><br><br>

	        	<input type="submit" value="Zapisz zmiany">
	        </form>




		</fieldset>

';




















}
else{
	header('Location: adminLogin.php');
}
?>
</body>
</html>