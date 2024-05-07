<!DOCTYPE html>
<html>
    <head>
        <title>Factorial</title>
        <meta charset="UTF-8">
    <?php
     function facto($num){
        if($num==1)
            return 1;
        else
            return $num*facto($num-1);
     }
    ?>
    </head>
    <style>
        body{
            background-color: lightgoldenrodyellow;
        }
        #facto {
            background-color: lightskyblue;
            border-radius: 30px;
            border-style: inset;
            margin-left: 25%;
            margin-right: 25%;
            margin-top: 15%;
            margin-bottom: auto;
            padding: 20px;
        }
        h1{
            margin-left: 20%;
            margin-right: 20%;
            background-color: crimson;
            color:beige;
            border-radius: 20px;
            border-style: groove;
        }
        h4{
            margin-left: 20%;
            margin-right: 20%;
            color: white;
            background-color: brown;
            border-radius: 20px;
            border-style: groove;
        }
        label {
            padding: 5px;
            font-weight: bold;
        }
        input {
            border-radius: 10px;
        }
    </style>
    <body align="center">
        <div id="facto">
        <h1>Factorial Number</h1>
        <form action="#" method="POST">
            <label>Enter a number</label>
            <input type="number" name="num" placeholder="Enter any positive integer" required>
            <br><br>
            <button style="background-color: #F0F0F0; border-radius: 5px" type="submit" name="submit">Get Factorial Number</button>
            <br><br>
        </form>
        <?php
        if(isset($_POST['submit'])){
            $num = $_POST['num'];
            echo "<h4><i>The Factorial of $num is ".facto($num)."</i></h4>";
        }
        ?>
        </div>
    </body>
</html>