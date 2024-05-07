<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
</head>
<style>
    body{
        background-color: wheat;
    }
    h2{
    background-color: blue;
    color:aliceblue;
    padding: 10px;
    }
    input, button {
        margin: 1%;
    }
</style>
<body align="center">
    <h2>Age Calculator</h2>
    <form method="post" action="age.php">
        <label for="dob">Enter your Date of Birth:</label><br>
        <input type="text" id="dob" name="dob" value="--/--/----"><br>
        <input type="submit" value="Calculate">
    </form>
<?php
 
function validateDate($date, $format = 'm/d/Y')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}
 
function calculateAge($dob)
{
    $now = new DateTime();
    $age = $now->diff(new DateTime($dob));
 
    $age_years = $age->y;
    $age_months = $age->m;
    $age_days = $age->d;
 
    $age_weeks = floor($age->days / 7);
 
    $age_total_months = $age_years * 12 + $age_months;
 
    return [
        'years' => $age_years,
        'months' => $age_total_months,
        'days' => $age_days,
        'weeks' => $age_weeks
    ];
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST['dob'];
    $now = new DateTime();
    if (validateDate($dob)) {
        $age = calculateAge($dob);
 
        echo "<h2>Your Age is {$age['years']} Years.</h2>";
        echo "<p>Born On: " . date('l F j, Y', strtotime($dob)) . "</p>";
        echo "<p>Age On (Today): " . $now ->format('l F j, Y') . "</p>";
        echo "<p>{$age['years']} years, {$age['months']} months, {$age['days']} days</p>";
        echo "<p>{$age['years']} years, {$age['months']} months, {$age['weeks']} weeks and {$age['days']} days</p>";
    } else {
        echo "Invalid Date Format. Please use the format MM/DD/YYYY.";
    }
}
 
?>
</body>
</html>
 