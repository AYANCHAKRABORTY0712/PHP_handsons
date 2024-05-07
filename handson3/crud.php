<?php

Class Connection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $conn;

    public function __construct($database) {
        $this->conn = null;
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $database);
        } 
        catch (Exception $exception) {
            echo "Connection error= " . $exception->getMessage();
        }
    }

    public function db_connection() {
        return $this->conn;
    }
}

class Customer {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function fetch_data() {
        $query = "SELECT * FROM CUSTOMERS";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function fetch_row($customerNumber) {
        $query = "SELECT * FROM CUSTOMERS WHERE CUSTOMERNUMBER=$customerNumber";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function data_insert($customerNumber, $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $addressLine2, $city, $state, $postalCode, $country, $salesRepEmployeeNumber, $creditLimit)
    {
        $query = "INSERT INTO CUSTOMERS VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("issssssssssid", $customerNumber, $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $addressLine2, $city, $state, $postalCode, $country, $salesRepEmployeeNumber, $creditLimit);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function data_update($customerNumber, $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $addressLine2, $city, $state, $postalCode, $country, $salesRepEmployeeNumber, $creditLimit)
    {   
        $query = "UPDATE CUSTOMERS
                SET customerName=?,
                contactLastName=?,
                contactFirstName=?,
                phone=?,
                addressLine1=?,
                addressLine2=?, 
                city=?, 
                state=?, 
                postalCode=?, 
                country=?, 
                salesRepEmployeeNumber=?, 
                creditLimit=?
                WHERE CUSTOMERNUMBER = ?;";
        echo $query;
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssssssssssidi", $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $addressLine2, $city, $state, $postalCode, $country, $salesRepEmployeeNumber, $creditLimit, $customerNumber);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function data_delete($customerNumber) {
        $query = "DELETE FROM CUSTOMERS WHERE CUSTOMERNUMBER = $customerNumber";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}

$database = "Classicstore";
$connection = new Connection($database);
$dbconn = $connection->db_connection();

//$customer = new Customer($dbconn, $customerNumber, $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $addressLine2, $city, $state, $postalCode, $country, $salesRepEmployeeNumber, $creditLimit);


?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Customer Name</th><th>Contact Name</th><th>City</th><th>Phone</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $customer = new Customer($dbconn);
    $result = $customer->fetch_data();
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<form action='' method='POST'>
                    <tr>
                        <td>" . $row["customerName"] . "</td>
                        <td>" . $row["contactLastName"] . " " . $row["contactFirstName"] . "</td>
                        <td>" . $row["city"] . "</td> 
                        <td>" . $row["phone"] . "</td>
                        <td><button type='submit' name='Edit' value=".$row["customerNumber"].">Edit</button><button type='submit' name='Delete' value=".$row["customerNumber"].">Delete</button></td>
                    </tr>
                </form>";
        }
        echo "</table>";
    } elseif ($result) {
        echo "0 results";
    }

    if(isset($_POST['Edit'])){
        $cN=$_POST['Edit'];
        $result=$customer->fetch_row($cN);
        $row=$result->fetch_assoc();
        $cname=$row['customerName'];
        echo "<h3>Edit</h3>";
        echo "<form action='update.php' method='POST'>
                Customer Number: <input type='number' name='customerNumber' value=$cN required><br>
                Customer Name: <input type='text' name='customerName' pattern='[a-zA-Z0-9\s]+' value=$cname required><br>
                Contact Last Name: <input type='text' name='contactLastName' value=$row[contactLastName] required><br>
                Contact First Name: <input type='text' name='contactFirstName' value=$row[contactFirstName] required><br>
                Phone: <input type='text' name='phone' value='.$row[phone].' required><br>
                Address Line 1: <input type='text' name='addressLine1' value='.$row[addressLine1].' required><br>
                Address Line 2: <input type='text' name='addressLine2' value='.$row[addressLine2].'><br>
                City: <input type='text' name='city' value='.$row[city].' required><br>
                State: <input type='text' name='state' value='.$row[state].'><br>
                Postal Code: <input type='text' name='postalCode' value='.$row[postalCode].'><br>
                Country: <input type='text' name='country' value='.$row[country].' required><br>
                Sales Rep Employee Number: <input type='number' name='salesRepEmployeeNumber' value='.$row[salesRepEmployeeNumber].'><br>
                Credit Limit: <input type='number' step='0.01' name='creditLimit' value='.$row[creditLimit].'><br>
                <button type='submit' name='update'>Update</button>
            </form>";
    }

    if(isset($_POST['Delete'])){
        $customer->data_delete($_POST['Delete']);
        echo "1 row deleted successfully"."CustomerNumber: ".$_POST['Delete'];
        header("Location: crud.php");
    }

    ?>
    </table>
</body>

</html>