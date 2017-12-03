<?php  
    session_start();
?>
<!doctype html>
<html>
     <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
     </head>

     <body>
     	<h2>Jeśli masz jakieś pytania, napisz do mnie, z pewnością odpiszę na podanego przez ciebie maila.</h2>

     	<form action="mail_send.php" method="POST" id="mailGate">
        	Twój adres e-mail: <br>
        	<input type="text" name="mail"></input><br><br>
        	Tytuł wiadomości: <br>
        	<input type="text" name="title"></input><br><br>
        	Wiadomość: <br>
        	<textarea type="text" name="text" cols=100 rows=15/></textarea><br><br>
        	<input type="submit" value="Wyślij">
        </form>

        <h3>
            <?php  
            if(isset($_SESSION['mail_was_send'])){
                echo "Mail został pomyślnie wysłany.";
            }
                session_destroy();
            ?>
        </h3>

     </body>

</html>