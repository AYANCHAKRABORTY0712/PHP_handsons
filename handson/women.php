<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>March-8 : International women's day</title>
    <style>
        body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-weight: 200;
            font-size: large;
            background-color: aliceblue;
        }
        select {
            padding: 10px;
            margin: 10px;
        }
        .achiever-list {
            list-style: none;
            padding: 0;
        }
        .achiever-list li {
            margin-bottom: 10px;
            color: grey;
        }
        #headline{
            color: hotpink;
            font-style: italic;
            text-align: left;
            font-size: xx-large;
        }
        h3{
            color: brown;
        }
        ul {
            margin-left: 30%;
        }
        li {
            text-align: left;
            font-size: medium;
        }
    </style>
</head>

<body align="center">
    <hr>
    <label id='headline'>March-8 - International Women's Day</label>
    <hr>
    <form method="post">
        <label for="category">Select Category:</label>
        <select id="category" name="category">
            <option value="sports">Sports</option>
            <option value="social_works">Social Works</option>
            <option value="politics">Politics</option>
            <option value="scientist">Scientist</option>
            <option value="entrepreneur">Entrepreneur</option>
        </select>
        <input type="submit" value="Show Achievers">
    </form>
 
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $category = $_POST['category'];
        echo "<h3>Popular Women Achievers in $category:</h3>";
        switch ($category) {
            case 'sports':
                echo "<table border='1'>
                    <tr>
                        <td>Sakshi Malik<br>India</td>
                        <td>Bronze in Asian Wrestling Championship and Olympics</td>
                    </tr>
                    <tr>
                        <td>Sania Mirza<br>India</td>
                        <td>Former world number 1 in Mixed Doubles</td>
                    </tr>
                    <tr>
                        <td>Saina Nehwal<br>India</td>
                        <td>Champion in Australian Open and Bronze in 2012 Olympics</td>
                    </tr>
                    <tr>
                        <td>Serena Williams<br>USA</td>
                        <td>23 Grand Slam titles</td>
                    </tr>
                </table>";
                break;
        }
    }
    ?>
</body>
</html>