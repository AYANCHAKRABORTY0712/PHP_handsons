<?php
$servername = "localhost";
$dbname = "Classicstore";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
    die("Connection failed:". $conn -> connect_error);
}

$sql = "CREATE TABLE PRODUCTS(
    ProductCode varchar(15) Primary Key,
	ProductName varchar(70),
	ProductLine varchar(50),
	ProductScale varchar(10),
	ProductVendor varchar(50),
	ProductDescription text,
	QuantityInStock  smallint,
	BuyPrice double,
	MSRP double);
";
if($conn -> query($sql) === TRUE)
    echo "Table Created Successfully!";
else
    echo "Error creating table: ".$conn->error;

$conn->select_db('Classicstore');

$sql = "SHOW TABLES";
$result = $conn -> query($sql);

if($result->num_rows > 0){
    echo "<table><tr><th>Tables</th></tr>";
    while($row = $result->fetch_row()) {
        echo "<tr><td>".$row[0]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
 
$conn->close();
?>
