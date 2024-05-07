<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Classicstore";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$columns = ["ProductCode", "ProductName", "ProductLine", "ProductScale", "ProductVendor", "ProductDescription", "QuantityInStock", "BuyPrice", "MSRP"];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select Columns</title>
    </head>
    <body>
        <form action="" method="POST">
        <b>Select rows to display: </b>
        <?php
            foreach($columns as $column)
                echo "<input type='checkbox' name='$column' value=$column>$column";
        ?>
        <button type="submit" name="submit">Display</button>

<?php
if(isset($_POST['submit']))
{
    $selected_columns=[];
    foreach($columns as $column)
    {
        if($_POST[$column])
            array_push($selected_columns, $column);
    }


$sql = "SELECT".implode(",", $selected_columns)."FROM PRODUCTS";

$result = $conn->query($sql);

echo "<h1 style='text-align: center'>Products</h1>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <thead>
                <th>ProductCode</th>
                <th>ProductName</th>
                <th>ProductLine</th>
                <th>ProductScale</th>
                <th>ProductVendor</th>
                <th>ProductDescription</th>
                <th>QuantityInStock</th>
                <th>BuyPrice</th>
                <th>MSRP</th>
            </thead>";
    while($row = $result->fetch_row()) {
        echo "<tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
                <td>$row[4]</td>
                <td>$row[5]</td>
                <td>$row[6]</td>
                <td>$row[7]</td>
                <td>$row[8]</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}

$conn->close();
?>

</body>
</html>