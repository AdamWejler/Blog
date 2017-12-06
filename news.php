<!doctype html>
<html>
     <head>
        <meta charset="UTF-8" />
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <style>
			body {background-color: #D46A6A;}
            div  {text-align: center;}
            b    {font-size: 25px;}
            p    {font-size: 17px; margin-right: 100px; margin-left: 100px;}
		</style>
     </head>

     <body>
     	<div id="newslist"/>

     	<?php


        // Printing posts frame function
        echo '
            <script>
                function frame(idNumber, title, content){
                    var frame = "<p><b> | " +title+ " |</b><br> News number: "+(idNumber)+"</p>";
                    frame += "<p> "+content+"</p><br><br>";
                    return frame;
                }
                var content = "";
            </script>
        ';

        include_once('db.php');

        // Reading posts from database
        try{
            $pdo = connect();
            $stmt = $pdo -> query('SELECT * FROM posts');
            $posts = $stmt -> fetchAll();
            //echo 'Success';




            foreach ($posts as $r) {
                $title = json_encode($r['title']);
                $text = json_encode($r['text']);
                echo '
                        <script>
                            content = content + frame('.$r['id'].', '.$title.', '.$text.');
                        </script>
                ';
            }

            echo '
                    <script>
                        document.getElementById("newslist").innerHTML = content;
                    </script>
                ';
























        }
        catch(PDOException $e)
        {
            //echo 'ERROR ocured: ' . $e->getMessage();
        }
        ?>
     	
     </body>

</html>
