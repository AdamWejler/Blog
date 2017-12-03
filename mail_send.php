<?php
	session_start();
    ob_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST')  //If form was send
    {
        //        FORM VARIABLES
        $mail  =  $_POST['mail'];
        $title =  $_POST['title'];
        $text  =  $_POST['text'];        
        
        $to = 'reljewa@op.pl';             //Admin's e-mail adress

        //            HEADERS   
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
		$headers .= 'From: User Guest' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 

        // Content
        $content = "\n
        <b>Wiadomosc od:</b> ".$mail."\n<br/><br/>
        <b>Tytul:</b> ".$title."\n<br/><br/>
        <b>Tresc maila:</b>\n<br/><br/>"
        .$text."\n";

        //////////////    SENDING MAIL  ////////////// 
        try{
	        if(mail($to, $title, $content, $headers)){
	        	$_SESSION['mail_was_send']=true;
	        }
	        header('location: contact.php');
	    } catch (Exception $e) {
		    echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
    }
    else
    {
        header('location: contact.php');
    }
?>