<!DOCTYPE html>
<html>
    <head>
        <title>Stock Market</title>
        <meta charset="UTF-8">
    </head>
    <style>
        h1{
            background-color: darkblue;
            color: wheat;
            padding: 10px;
            margin: 5px;
            border-radius: 20px;
        }
        input {
            margin: 10px;
            background-color: brown;
            color: white;
            border-radius: 20px;
        }
        body {
            background-color: lightpink;
        }
        #result{
            background-color: lightblue;
            font-weight: bold;
            border-style: double;
            border-radius: 20px;
            margin-left: 30%;
            margin-right: 30%;
        }
    </style>
    <?php
        $params=["Mean","Median","Mode","Range","Minimum","Maximum","Count"];
        function statscal($arr){
            $mean = array_sum($arr) / count($arr);
            sort($arr);
            $count = count($arr);
            $middle = floor($count / 2);
            $median = ($count % 2 == 0) ? ($arr[$middle - 1] + $arr[$middle]) / 2 : $arr[$middle];
 
        // Calculate mode
            $frequency = array_count_values($arr);
            $max_frequency = max($frequency);
            $mode = array_keys($frequency, $max_frequency);
 
        // Calculate range
            $range = max($arr) - min($arr);
 
        // Calculate minimum and maximum
            $minimum = min($arr);
            $maximum = max($arr);
 
        // Count elements
            $count = count($arr);
            return [
                "Mean"=>$mean,
                "Median"=>$median,
                "Mode"=>implode(", ",$mode),
                "Range"=>$range,
                "Minimum"=>$minimum,
                "Maximum"=>$maximum,
                "Count"=>$count
            ];
        }
    ?>
    <body align="center">
        <h1>Analyzing Stock Price Changes</h1>
        <form action="#" method="POST">
            <label>Enter the series of Stock Price separated by comma</label>
            <textarea rows=4 cols=50 name="inputs"></textarea>
            <br><input type="submit"  name="submit" value="Analyse">
        </form>
        
        <?php 
        
            if(isset($_POST['submit'])){
                echo "<div id='result'>";
                $values=$_POST['inputs'];
                $val_list=explode(", ",$values);
                foreach($params as $p){
                    $result=statscal($val_list)[$p];
                    echo "<p>$p: $result</p>";
                }
                echo "</div>";
            }
            
        ?>
        
        </body>
        </html>