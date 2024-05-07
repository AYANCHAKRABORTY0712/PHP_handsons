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

$sql="SELECT * FROM PRODUCTS";
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
 