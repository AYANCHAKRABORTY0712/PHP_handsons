<?php
if(isset($_POST['setpref'])){
    $font=$_POST['font'];
    $color=$_POST['color'];
    setcookie('font', $font, time() + (86400 * 30), "/");
    setcookie('color', $color, time() + (86400 * 30), "/");
    header("Location: homepage.php");
}

if(isset($_POST['area_unit'])){
    $area=$_POST['area'];
    $unit=$_POST['unit'];
    setcookie('area',$area, time() + (86400 * 30), "/");
    setcookie('unit',$unit, time() + (86400 * 30), "/");
    header("Location: pricecalculator.php");
}

$font = isset($_COOKIE['font']) ? $_COOKIE['font'] : "Arial";
$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : '#000000';
$unit = isset($_COOKIE['unit']) ? $_COOKIE['unit'] : 'Acre';
$area = isset($_COOKIE['area']) ? $_COOKIE['area'] : 0;
?>