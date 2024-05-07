<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tourist Places</title>
        <style>
            body {
                background-color: lavenderblush;
            }
            .box {
                margin: 5%;
                border-style: groove;
            }
        </style>
    </head>
    <body>
        <div class="box">
        <h1>Tourist Places in Tamil Nadu</h1>
        <form action="#" method="POST">
        <input type="radio" name="place" value="Kodaikanal">Kodaikanal<br>
        <input type="radio" name="place" value="Ooty">Ooty<br>
        <input type="radio" name="place" value="Mahabalipuram">Mahabalipuram<br>
        <input type="radio" name="place" value="Kanchipuram">Kanchipuram<br>
        <button type="submit" name="choice">See about this place</button>
        <div id="result">
            <?php
                if(isset($_POST['choice']))
                {
                    $place=$_POST['place'];
                    $myfile = fopen("$place.txt", "r") or die("Unable to open file!");
                    echo fread($myfile,filesize("$place.txt"));
                    fclose($myfile);
                }
            ?>
        </div>
        </div>
    </body>
</html>