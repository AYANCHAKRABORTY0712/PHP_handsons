<?php
include 'crud.php';
if(isset($_POST['update'])){
    $customerNumber=$_POST['customerNumber'];
    $customerName=$_POST['customerName'];
    $contactLastName=$_POST['contactLastName'];
    $contactFirstName=$_POST['contactFirstName'];
    $phone=$_POST['phone'];
    $addressLine1=$_POST['addressLine1'];
    $addressLine2=$_POST['addressLine2'];
    $city=$_POST['city']; 
    $state=$_POST['state']; 
    $postalCode=$_POST['postalCode'];
    $country=$_POST['country'];
    $salesRepEmployeeNumber=$_POST['salesRepEmployeeNumber'];
    $creditLimit=$_POST['creditLimit'];

    $customer->data_update($customerNumber, $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $addressLine2, $city, $state, $postalCode, $country, $salesRepEmployeeNumber, $creditLimit);
    header("Location: crud.php");
}
?>