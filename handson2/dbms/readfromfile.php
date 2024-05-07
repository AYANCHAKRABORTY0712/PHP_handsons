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
 
$file = fopen("Data_products.txt", "r") or die("Unable to open file!");
$sql = fread($file,filesize("Data_products.txt"));
fclose($file);

$result = $conn->query($sql);

if ($result === TRUE) {
    echo "Table Customers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

 

$conn->close();
?>