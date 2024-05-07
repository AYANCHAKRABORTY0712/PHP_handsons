<!DOCTYPE html>
<html>
<head>
<title>Multiplication Table</title>
<meta charset="UTF-8">
</head>
<body style="background-color:aliceblue" align="center">
    <h1 style="background-color:bisque">Multiplication Table</h1>
    <hr color="#0000ff">
    <form action="#" method="POST">
        <label>Enter the table number</label> <input type="number" name="num"> 
        <label>Multiple up to </label><input type="number" name="range">
        <button style="background-color: aqua; border-radius: 5px" type="submit" name="submit">Display</button>
    </form>
    <hr color="0000ff">
    <br><br>
<div style="background-color:bisque; margin-left: 30%; margin-right: 30%">
<?php
    if(isset($_POST["submit"])){
        $num=$_POST["num"];
        $range=$_POST["range"];
        for($i=1;$i<=$range;$i++)
            echo "$num*$i=".$num*$i."<br>";
    }
?>
</div>
</body>

</html>