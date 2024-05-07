<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Solid Geometry Shapes</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif, sans-serif;
            background-color: lightcyan;
            text-align: center;
        }
        .area {
            border-style: double;
            background-color: lightcoral;
            padding: 20px;
            border-radius: 50px;
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;
            max-width: 400px;
        }
        select, input, button {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: darkgreen;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="area">
        <h2>Area of Solid Geometry Shapes</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="shapes">Select a shape:</label>
            <select id="shapes" name="shape">
                <option value="circle">Circle</option>
                <option value="cylinder">Cylinder</option>
                <option value="square">Square</option>
                <option value="rectangle">Rectangle</option>
            </select>
            <?php
            if(isset($_POST['shape']) && ($_POST['shape'] === 'circle' || $_POST['shape'] === 'cylinder')) {
                echo '<br><input type="number" id="radius" name="radius" placeholder="Enter the Radius (r)">';
            }
            if(isset($_POST['shape']) && $_POST['shape'] === 'cylinder') {
                echo '<br><input type="number" id="height" name="height" placeholder="Enter the Height (h)">';
            }
            if(isset($_POST['shape']) && ($_POST['shape'] === 'square' || $_POST['shape'] === 'rectangle')){
                echo '<br><input type="number" id="length" name="length" placeholder="Enter the Length">';
            }
            if(isset($_POST['shape']) && $_POST['shape'] === 'rectangle') {
                echo '<br><input type="number" id="width" name="width" placeholder="Enter the Width">';
            }
            ?>
            <br><button type="submit">Calculate</button>
        </form>
        <p id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_POST["shape"])) {
                    $shape = $_POST["shape"];
                    $area = 0;

                    if ($shape === "circle") {
                        $radius = isset($_POST["radius"]) ? floatval($_POST["radius"]) : 0;
                        $area = M_PI * $radius * $radius;
                    } elseif ($shape === "cylinder") {
                        $radius = isset($_POST["radius"]) ? floatval($_POST["radius"]) : 0;
                        $height = isset($_POST["height"]) ? floatval($_POST["height"]) : 0;
                        $area = 2 * M_PI * $radius * ($radius + $height);
                    } elseif ($shape === "square") {
                        $length = isset($_POST["length"]) ? floatval($_POST["length"]) : 0;
                        $area = $length * $length;
                    } elseif ($shape === "rectangle") {
                        $length = isset($_POST["length"]) ? floatval($_POST["length"]) : 0;
                        $width = isset($_POST["width"]) ? floatval($_POST["width"]) : 0;
                        $area = $length * $width;
                    }

                    echo "<hr>Area of " . ucfirst($shape) . " = " . number_format($area, 4);
                }
            }
            ?>
        </p>
        </div>

</body>
</html>