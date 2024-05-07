<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Classicstore";
 
 
$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
$stmt = $conn->prepare("INSERT INTO Customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssssssssid", $customerNumber, $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $addressLine2, $city, $state, $postalCode, $country, $salesRepEmployeeNumber, $creditLimit);
 
 
$customerNumber = 103;
$customerName = 'Atelier graphique';
$contactLastName = 'Schmitt';
$contactFirstName = 'Carine ';
$phone = '40.32.2555';
$addressLine1 = '54, rue Royale';
$addressLine2 = NULL;
$city = 'Nantes';
$state = NULL;
$postalCode = '44000';
$country = 'France';
$salesRepEmployeeNumber = 1370;
$creditLimit = 21000;
$stmt->execute();
 
$customerNumber = 112;
$customerName = 'Signal Gift Stores';
$contactLastName = 'King';
$contactFirstName = 'Jean';
$phone = '7025551838';
$addressLine1 = '8489 Strong St.';
$addressLine2 = NULL;
$city = 'Las Vegas';
$state = 'NV';
$postalCode = '83030';
$country = 'USA';
$salesRepEmployeeNumber = 1166;
$creditLimit = 71800;
$stmt->execute();
 
$customerNumber = 114;
$customerName = 'Australian Collectors, Co.';
$contactLastName = 'Ferguson';
$contactFirstName = 'Peter';
$phone = '03 9520 4555';
$addressLine1 = '636 St Kilda Road';
$addressLine2 = 'Level 3';
$city = 'Melbourne';
$state = 'Victoria';
$postalCode = '3004';
$country = 'Australia';
$salesRepEmployeeNumber = 1611;
$creditLimit = 117300;
$stmt->execute();
 
echo "New records created successfully";
 
$stmt->close();
$conn->close();
?>