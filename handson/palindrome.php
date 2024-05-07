<!DOCTYPE html>
<html>
    <head>
        <title>Palindrome Check</title>
        <meta charset="UTF-8">
    </head>
    
    <style>
        body {
            background-color: lightpink;
        }
        h1{
            padding: 10px;
            background-color: darkcyan;
            color: white;
            margin: 10px;
            border-radius: 20px;
        }
        button {
            border-radius: 15px;
        }
        .palindrome{
            margin: 15%;
            background-color: skyblue;
            border-radius: 30px;
            border-style: double;
        }
    </style>
    
    <body align="center">
        <div class='palindrome'>
        <h1>Palindrome Check</h1>
        <form action="#" method="POST">
            <label>Enter the string</label>
            <input type="text" name="string" required>
            <br><br>
            <button style="background-color: #F0F0F0;" type="submit" name="submit">Check for Palindrome</button>
            <br><br>
        </form>
        <?php
            if(isset($_POST["submit"])){
                $str = $_POST["string"];
                $ispal=true;
                $n=strlen($str);
                for($i=0;$i<$n/2;$i++)
                {
                    if($str[$i]!=$str[$n-1-$i]){
                        $ispal=false;
                        break;
                    }
                }
                if($ispal)
                    echo "<strong>Given String is a Palindrome.</strong>";
                else
                    echo "<strong>Given String is not a Palindrome.</strong>";
            }
        ?>
        <div>
    </body>
</html>
