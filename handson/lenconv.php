<!DOCTYPE html>
<html>
    <head>
        <title>Lenth Converter</title>
        <meta charset="UTF-8">
        <style>
            body {
                background-color: aliceblue;
            }
            h1{
                background-color: darkblue;
                color: antiquewhite;
                padding: 10px;
            }
            .converter {
                float: left; 
                width: 10%;
                margin-left: 10%;
                padding: 10px;
                border-radius: 20px;
                border-style: groove;
            }
            label {
                color:brown;
                font-weight: bold;
            }
            button {
                margin: 3%;
            }
            .res {
                font-weight: bold;
                color: darkmagenta;
            }
            </style>
    </head>
    <?php 
        $units=array("mi","m","km","ft","in");
        $colors=array("mi"=>'#87CEEB',"m"=>'#0096FF',"km"=>'#B8DA75',"ft"=>'#D6BAB4',"in"=>'#E8E533');
        $fullname=array("mi"=>"Miles","m"=>"Meters","km"=>"Kilometers","ft"=>"Feet","in"=>"Inches");
        function convert_to_meter($val,$unit){
            $result=$val;
            if($unit=="mi")
                $result=1609.344*$val;
            else if($unit=="km")
                $result=1000*$val;
            else if($unit=="ft")
                $result=0.3048*$val;
            else if($unit=="in")
                $result=0.0254*$val;
            return $result;
        }
        function convert_from_meter($val,$unit){
            $result=$val;
            if($unit=="mi")
                $result=$val/1609.344;
            else if($unit=="km")
                $result=$val/1000;
            else if($unit=="ft")
                $result=3.281*$val;
            else if($unit=="in")
                $result=39.3701*$val;
            return round($result,5);
        }
    ?>
    <body align="center">
        <h1>Length Converter Tool</h1>
        <form action="#" method="GET">
        <label>Enter the value to convert</label> <input type="number" name="val">
        <label>Unit</label> <select name="unit">
                    <option value="km">Kilometre</option>
                    <option value="mi">Mile</option>
                    <option value="m">Meter</option>
                    <option value="ft">Feet</option>
                    <option value="in">Inch</option>
            </select><br>
        <button type="submit" name="submit">Calculate</button>
        </form>
        <?php
            if(isset($_GET['submit'])){
                $val=$_GET['val'];
                $inp_unit=$_GET['unit'];
                $m_val=convert_to_meter($val,$inp_unit);
                foreach($units as $unit){
                    if($unit==$inp_unit)
                        continue;
                    echo "<div class='converter' style='background-color: ".$colors[$unit]."'><label class='res'>".
                            $fullname[$unit]."</label><br><br>".convert_from_meter($m_val,$unit)."
                        </div>";
                }
            }
        ?>
    </body>
</html>