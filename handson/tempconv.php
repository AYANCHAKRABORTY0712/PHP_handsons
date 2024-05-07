<!DOCTYPE html>
<html>
    <head>
        <title>Temperature Converter</title>
        <meta charset="UTF-8">
    </head>
    <style>
        body {
            background-color: lightyellow;
        }
        .temp {
            background-color: lightskyblue;
            border-radius: 20px;
            border-style: inset;
            margin-top: 10%;
            margin-left: 20%;
            margin-right: 20%;
            padding-bottom: 5%;
        }
        aside {
            float: right;
            background-color: lightcoral;
            padding: 10px;
            margin-right: 5%;
            border-radius: 10px;
        }
    </style>
    <body align="center">
        <div class='temp'>
        <h1 style="margin-top: 5%">Temperature Converter</h1>
        <form action="#" method="POST">
            <table align="center">
                <tr>
                    <td><label>From</label></td>
                    <td><select id="from" name="from">
                            <option value="C">Celsius (°C)</option>
                            <option value="F">Fahrenheit (°F)</option>
                        </select>
                    </td>
                </tr>
            <br><br>
                <tr>
                    <td><label>To</label></td>
                    <td><select id="from" name="to">
                            <option value="C">Celsius (°C)</option>
                            <option value="F">Fahrenheit (°F)</option>
                        </select>
                    </td>
                </tr>
            <br><br>
                <tr>
                    <td><label>Enter Value to Convert</label></td>
                    <td><input type="number" name="temp"></td>
                </tr>
                <tr>
                    <td><input type="submit" style="background-color: #F0F0F0; border-radius: 5px"  name="submit" value="Calculate"></td>
                    <td><input type="button" style="background-color: #F0F0F0; border-radius: 5px" onclick="window.location.replace('tempconv.php')" name="clear" value="Clear"></td>
                </tr>
            </table>
        </form>
        
        <?php
            if(isset($_POST["submit"])){
                echo "<aside>";
                $from=$_POST['from'];
                $to=$_POST['to'];
                $temp=$_POST['temp'];
                if($from=="C" && $to=="F"){
                    $result=(9/5)*$temp+32;
                    echo "Answer = $result °F";
                }
                else if($from=="F" && $to=="C"){
                    $result=(5/9)*($temp-32);
                    echo "Answer = $result °C";
                }
                else
                    echo "Answer = $temp °$from</aside>";
                    
            }
        ?>
        
        </div>
    </body>
</html>