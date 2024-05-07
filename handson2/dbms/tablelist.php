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
 
// sql to create table
$sql = "CREATE TABLE Customers (
customerNumber INT(11) NOT NULL PRIMARY KEY,
customerName VARCHAR(50) NOT NULL,
contactLastName VARCHAR(50) NOT NULL,
contactFirstName VARCHAR(50) NOT NULL,
phone VARCHAR(50) NOT NULL,
addressLine1 VARCHAR(50) NOT NULL,
addressLine2 VARCHAR(50) DEFAULT NULL,
city VARCHAR(50) NOT NULL,
state VARCHAR(50) DEFAULT NULL,
postalCode VARCHAR(15) DEFAULT NULL,
country VARCHAR(50) NOT NULL,
salesRepEmployeeNumber INT(11) DEFAULT NULL,
creditLimit DOUBLE DEFAULT NULL
)";
 
if ($conn->query($sql) === TRUE) {
    echo "Table Customers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
 
$sql = "SHOW TABLES";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
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