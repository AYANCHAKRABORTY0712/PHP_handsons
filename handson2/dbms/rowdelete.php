<?php
 
 
class Database {
    private $host = "localhost";
    private $db_name = "Classicstore";
    private $username = "root";
    private $password = "";
    private $conn;
 
    public function dbConnection() {
        $this->conn = null;    
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        } catch (Exception $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
 
class Customer {
    private $conn;
    private $table_name = "customers";
 
    public function __construct($db) {
        $this->conn = $db;
    }
 
    public function deleteCustomer($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE customerNumber = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        if($stmt->execute()){
            return true;
        } else {
            return false;
        }
    }
}
 
$database = new Database();
$db = $database->dbConnection();
$customer = new Customer($db);
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $result = $customer->deleteCustomer($id);
    if ($result) {
        echo "Customer deleted successfully";
    } else {
        echo "Error deleting customer";
    }
}
 
?>
 
<form method="post">
    <label for="id">Customer ID:</label><br>
    <input type="number" id="id" name="id" required><br>
    <input type="submit" value="Delete Customer">
</form>