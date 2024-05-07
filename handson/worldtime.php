<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" meta http-equiv="refresh" content="1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The World Time</title>
    <style>
        body{
            background-color: lightcyan;
        }
        h1 {
            background-color: darkred;
            border-radius: 20px;
            color:aliceblue;
            margin-top: 4%
        }
        .time-box {
            float: left;
            background-color: lightgoldenrodyellow;
            padding: 10px;
            margin-left: 4%;
            border-radius: 20px;
            border-style: groove;
            margin-top: 4.5%
        }
    </style>
</head>
<body align="center">
    <h1>The World Time</h1>
    <?php
    
    $time_zones = [
        'America/New_York' => 'New York',
        'Asia/Tokyo' => 'Tokyo',
        'Europe/London' => 'London',
        'Australia/Sydney' => 'Sydney',
        'Africa/Johannesburg' => 'Johannesburg',
        'America/Guyana' => 'Guyana'
    ];

   
    foreach ($time_zones as $zone => $city) {
        date_default_timezone_set($zone);
        $current_time = date('H:i:s A');
        $current_date = date('m-d-Y');
        $current_weekday = date('l');
        echo '<div class="time-box">';
        echo "<strong>$city</strong> <br>$current_time<br>";
        echo "Date: $current_date<br>";
        echo "Weekday: $current_weekday";
        echo '</div>';
    }
    ?>
</body>
</html>