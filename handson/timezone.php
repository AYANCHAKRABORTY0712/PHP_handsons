<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timezones</title>
</head>
    <style>
        body{
            background-color: lightcyan;
        }
        h1 {
            background-color: darkred;
            border-radius: 20px;
            color:aliceblue;
            margin-top: 4%;
            padding: 5px;
        }
        .time-box {
            float: left;
            background-color: lightgoldenrodyellow;
            padding-left: 2%;
            padding-right: 2%;
            margin-left: 5.5%;
            border-radius: 20px;
            border-style: groove;
            margin-top: 5%;
            text-align: center;
        }
    </style>
<body>
<center>
<h1>The World Time</h1>
<h5>All We have to decide is What to do With the Time</h5>
<form method="post">
    <label for="timezone">Select Time Zone:</label>
    <select id="timezone" name="timezone">
        <option value="Asia">Asia</option>
        <option value="Europe">Europe</option>
        <option value="Australia">Australia</option>
        <option value="Africa">Africa</option>
        <option value="America">America</option>
    </select>
    <input type="submit" value="Show Time">
</form>
    </center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function findWeekday($date) {
        $days = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        $day = date('w', strtotime($date));
        return $days[$day];
    }
    switch($_POST['timezone']){
        case 'Asia':
            date_default_timezone_set("Asia/Shanghai");
            echo "<div class='time-box'><p><strong>Shanghai </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Asia/Singapore");
            echo "<div class='time-box'><p><strong>Singapore </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Asia/Bangkok");
            echo "<div class='time-box'><p><strong>Bangkok </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Asia/Kolkata");
            echo "<div class='time-box'><p><strong>Kolkata </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Asia/Dubai");
            echo "<div class='time-box'><p><strong>Dubai </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Asia/Tehran");
            echo "<div class='time-box'><p><strong>Tehran </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            break;
        case 'Europe' :
            date_default_timezone_set("Europe/Moscow");
            echo "<div class='time-box'><p><strong>Moscow </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Europe/Vienna");
            echo "<div class='time-box'><p><strong>Vienna </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Europe/Berlin");
            echo "<div class='time-box'><p><strong>Berlin </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Europe/Amsterdam");
            echo "<div class='time-box'><p><strong>Amsterdam </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Europe/Zurich");
            echo "<div class='time-box'><p><strong>Zurich </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Europe/London");
            echo "<div class='time-box'><p><strong>London </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            break;
        case 'Australia' :
            date_default_timezone_set("Australia/Adelaide");
            echo "<div class='time-box'><p><strong>Adelaide </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Australia/Brisbane");
            echo "<div class='time-box'><p><strong>Brisbane </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Australia/Darwin");
            echo "<div class='time-box'><p><strong>Darwin </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Australia/Melbourne");
            echo "<div class='time-box'><p><strong>Melbourne </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Australia/Hobart");
            echo "<div class='time-box'><p><strong>Hobart </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Australia/Sydney");
            echo "<div class='time-box'><p><strong>Sydney </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
           
            break;
        case 'Africa' :
            date_default_timezone_set("Africa/Cairo");
            echo "<div class='time-box'><p><strong>Cairo </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Africa/Johannesburg");
            echo "<div class='time-box'><p><strong>Johannesburg </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Africa/Mogadishu");
            echo "<div class='time-box'><p><strong>Mogadishu </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Africa/Tripoli");
            echo "<div class='time-box'><p><strong>Tripoli </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Africa/Harare");
            echo "<div class='time-box'><p><strong>Harare </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("Africa/Nairobi");
            echo "<div class='time-box'><p><strong>Nairobi </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
           
            break;
        case 'America' :
            date_default_timezone_set("America/Los_Angeles");
            echo "<div class='time-box'><p><strong>Los_Angeles </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("America/New_York");
            echo "<div class='time-box'><p><strong>New_York </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("America/Chicago");
            echo "<div class='time-box'><p><strong>Chicago </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("America/Denver");
            echo "<div class='time-box'><p><strong>Denver </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("America/Costa_Rica");
            echo "<div class='time-box'><p><strong>Costa_Rica </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
            date_default_timezone_set("America/Phoenix");
            echo "<div class='time-box'><p><strong>Phoenix </strong><br>".date('d-m-Y')."<br>".findWeekday(date('d-m-Y'))."<br>".date('H:i A')."</p></div class='time-box'>";
           
            break;
    }
}
?>
 
</body>
</html>