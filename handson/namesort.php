<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Name Sort</title>
        <style>
            body{
                background-color: whitesmoke;
            }
            aside {
            width: 40%;
            float: right;
            padding: 5px;
            margin: 10px;
            height: 100px;
            }
            table {
                margin-left: 20%;
                text-align: center;
            }
            button {
                background-color: antiquewhite;
                border-radius: 20px;
            }
            #data .odd_row:hover, .even_row:hover {
                background-color: yellow;
            }
            .even_row {
                background-color: #d8f9ff;
            } 

            .odd_row {
                background-color: #add8e6;
            }
        </style>
        <?php
            $row_order=array('even_row','odd_row');
        ?>
    </head>
    <body>
        <h1 style="text-align:center; background-color:blue;color:white; padding: 10px; border-radius: 20px"> Sorting Name and Allocate Serial Number</h1>
        <form action="#" method="POST">
            <table>
                <tr>
                    <td><label>Enter list of Name<br> separate by comma</label></td>
                    <td><textarea name="list" required></textarea></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Generate Serial<br> Number</button></td>
                    <td><button name="clear" onclick="window.location.reload(true)">Clear</button></td>
                </tr>
            </table>
        </form>
        <aside>
            <?php
                if(isset($_POST['submit'])){
                    $list=$_POST['list'];
                    $names=explode(", ",$list);
                    sort($names);
                    $sl=1001;
                    echo "<table id='data' border='1'>
                            <thead style='background-color: blue; color: white'>
                                <tr>
                                    <td>S.No</td>
                                    <td>Name</td>
                                </tr>
                            </thead>";
                    foreach ($names as $name){
                        echo "<tr class=".$row_order[$sl%2].">
                                <td>".$sl++."</td>
                                <td>$name</td>
                            </tr>";
                    }
                    echo "</table>";
                }
            ?>
        </aside>
    </body>
</html>