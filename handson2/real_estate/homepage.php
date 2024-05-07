<?php 
include 'cookies.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indiabulls Real Estate Ltd</title>
    <style>
        h1{
            text-align: center;
        }
        body {
            font-family: <?php echo $font; ?>;
            color: <?php echo $color; ?>;
            margin: 5%;
        }
        .details {
            border-style: groove;
        }
        p {
            text-align: justify;
        }
        section{
            border-color: <?php echo $color; ?>;
            border-style: groove;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
<div align="right">
    <form action="cookies.php" method="POST">
    Select Font
    <select name="font">
        <option value="Arial">Arial</option>
        <option value="Times New Roman">Times New Roman</option>
        <option value="Cambria">Cambria</option>
    </select>
    Select Color
    <input type="color" name="color">
    <br>
    <input type="submit" name="setpref" value="Set My Preferences">
    </form>
</div>
</div>
    <h1>Indiabulls Real Estate Ltd</h1>
    <p>
        Indiabulls Real Estate stands for excellence and luxury in residential and commercial properties.
        It was incorporated in 2006 with its focus on construction and development of residential, commercial,
        and SEZ projects across major Indian metros. Indiabulls Real Estate is one of the largest real estate
        companies in Chennai. It has delivered iconic commercial developments of over 3.3 million sq. ft.
        in Mumbai, including One Indiabulls Centre & Indiabulls Finance Centre, and in the residential segment –
        Indiabulls Sky, Mumbai, Greens Panvel, apart from delivering projects in Gurugram, Chennai, Madurai,
        Ahmedabad, and Thane.
    </p>
    <section>
        <h2>Area Conversion Calculator</h2>
        <form action="cookies.php" method="POST">
            <label>Enter Area:</label>
            <input type="number" id="area" name="area" value=<?=$area ?> required>
            <select name="unit" id="units">
                <option value="Acre">Acre</option>
                <option value="Sq Ft." <?=$unit=="Sq Ft."? "selected" : "" ?>>Sq Ft.</option>
                <option value="Hectare" <?=$unit=='Hectare'? "selected": "" ?>>Hectare</option>
            </select>
            <button type="submit" name="area_unit">Convert</button>
        </form>
    </section>
 
 