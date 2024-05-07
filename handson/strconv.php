<!DOCTYPE html>
<html>
    <head>
        <title>String Converter</title>
        <meta charset="UTF-8">
    </head>
    <body align="center">
        <style>
            #result {
                border-style: groove;
                border-color: #3e8ede;
                margin: 5px;
            }
        </style>
        <h1 style="background-color:#3e8ede; color: white; padding: 10px;">String Converter</h1>
        <form action="#" method="POST">
            <label>Enter sentence</label>
            <textarea name="sentence" rows=4 cols=50></textarea>
            <br><br>
            <button style="background-color: #F0F0F0; border-radius: 5px" type="submit" name="uc">UpperCase</button>
            <button style="background-color: #F0F0F0; border-radius: 5px" type="submit" name="lc">LowerCase</button>
            <button style="background-color: #F0F0F0; border-radius: 5px" type="submit" name="cew">Capital Each Word</button>
            <button style="background-color: #F0F0F0; border-radius: 5px" type="submit" name="sc">Sentence Capital</button>
            <button style="background-color: #F0F0F0; border-radius: 5px" type="submit" name="cl">Clear</button>
            <br><br>
        </form>
        <hr color="#3e8ede">
        <aside style="float: right; margin-right: 10%">
        <?php
            if(isset($_POST['uc'])){
                $str=$_POST['sentence'];
                echo "<div id='result'>Converted to UPPERCASE: ";
                echo strtoupper($str)."</div>";
            }
            else if(isset($_POST['lc'])){
                $str=$_POST['sentence'];
                echo "<div id='result'>Converted to lowercase: ";
                echo strtolower($str)."</div>";
            }
            else if(isset($_POST['cew'])){
                $str=$_POST['sentence'];
                echo "<div id='result'>Converted to Capitalized Each Word: ";
                echo ucwords($str)."</div>";
            }
            else if(isset($_POST['sc'])){
                $str=substr($_POST['sentence'],0,-1);
                $sentences=explode(". ",$str);
                echo "<div id='result'>Converted to First letter capital sentences: ";
                foreach($sentences as $sent)
                    echo ucfirst($sent).". ";
                echo "</div>";
            }
        ?>
        </aside>
    </body>
</html>