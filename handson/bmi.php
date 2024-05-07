<!DOCTYPE html>
<html>
    <head>
        <title>BMI Calculator</title>
        <meta charset="UTF-8">
    </head>
    <style>
        body{
            background-color: wheat;
        }
        h1{
            background-color: darkmagenta;
            color:beige;
            border-radius: 20px;
        }
        table {
            margin-left: auto;
            margin-right: auto;
        }
        #result thead{
            background-color: darkblue;
            color: whitesmoke;
        }

    </style>
    <body align="center">
        <h1>BMI Calculator</h1>
        <form action="#" method="GET">
            <table>
                <tr>
                    <td><label>Enter the Height</label></td>
                    <td><input type="number" name="height"></td>
                    <td>
                        <select name="height_unit">
                            <option>cm</option>
                            <option>m</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Enter the Weight</label></td>
                    <td><input type="number" name="weight"></td>
                    <td>
                        <select name="weight_unit">
                            <option>kg</option>
                            <option>lbs</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Calculate" name="submit"></td>
                    <td><input type="button" value="Reset" onclick="window.location.replace('bmi.php')"></td>
                </tr>
            </table>
        </form>
        <br><br>
        <?php
            if(isset($_GET["submit"])){
                echo "<table id='result' border='1'>
                        <thead>
                            <tr>
                                <th>BMI Score</th>
                                <th>Category</th>
                                <th>Suggestion Steps</th>
                            </tr>
                        </thead>";
                $height=$_GET['height'];
                $weight=$_GET['weight'];
                $bmi=$weight/(($height/100)**2);
                if($bmi<18.5){
                    $cat="Underweight";
                    $sugg="Consult a doctor or a dietitian to develop a healthy eating plan and gain weight in a safe and sustainable way";
                }
                else if($bmi>=18.5 && $bmi<25.0){
                    $cat="Normal";
                    $sugg="Maintaining a balanced diet and engaging in regular physical activity are key to staying healthy and preventing weight-related health issues";
                }
                else if($bmi>=25.0 && $bmi<30.0){
                    $cat="Over Weight";
                    $sugg="Reducing your calorie intake and increasing your physical activity levels can help you achieve a healthy weight and reduce the risk of health problems";
                }
                else{
                    $cat="Obese";
                    $sugg="It is important to consult a doctor or a dietitian to develop a weight loss plan that includes diet modifications, physical activity, and possibly medication or surgery to reduce health risks associated with obesity";
                }
                echo    "<tbody>
                            <tr>
                                <th>".round($bmi,2)."</th>
                                <th>$cat</th>
                                <th>$sugg</th>
                            </tr>
                        </tbody>
                    </table>";
            }
        ?>
    </body>
</html>