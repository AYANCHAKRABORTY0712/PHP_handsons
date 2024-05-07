<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Classicstore";
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$sql = "INSERT INTO Customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit)
VALUES ('".$_POST["customerNumber"]."', '".$_POST["customerName"]."', '".$_POST["contactLastName"]."', '".$_POST["contactFirstName"]."', '".$_POST["phone"]."', '".$_POST["addressLine1"]."', '".$_POST["addressLine2"]."', '".$_POST["city"]."', '".$_POST["state"]."', '".$_POST["postalCode"]."', '".$_POST["country"]."', '".$_POST["salesRepEmployeeNumber"]."', '".$_POST["creditLimit"]."')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>