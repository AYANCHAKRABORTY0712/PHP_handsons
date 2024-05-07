<?php
class Database
{
    private $host = "localhost";
    private $db_name = "Classicstore";
    private $username = "root";
    private $password = "";
    private $conn;

    public function dbConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
        } catch (Exception $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

class Product
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getProductsByCategory($category)
    {
        $query = "SELECT * FROM Products WHERE productLine = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $category);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}

$database = new Database();
$db = $database->dbConnection();
$product = new Product($db);

$selected_category = isset($_POST['category']) ? $_POST['category'] : null;
$result = $selected_category ? $product->getProductsByCategory($selected_category) : null;

?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <form method="post">
        <select name="category">
            <option value="Motorcycles">Motorcycles</option>
            <option value="Classic Cars">Classic Cars</option>
            <option value="Trucks and Buses">Trucks and Buses</option>
            <option value="Planes">Planes</option>
            <option value="Ships">Ships</option>
            <option value="Vintage Cars">Vintage Cars</option>
        </select>
        <input type="submit" value="Display">
    </form>

    <?php
    if ($result && $result->num_rows > 0) {
        echo "<table><tr><th>productCode</th><th>productName</th><th>productLine</th><th>productScale</th><th>productVendor</th><th>productDescription</th><th>quantityInStock</th><th>buyPrice</th><th>MSRP</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["ProductCode"] . "</td><td>" . $row["ProductName"] . "</td><td>" . $row["ProductLine"] . "</td><td>" . $row["ProductScale"] . "</td><td>" . $row["ProductVendor"] . "</td><td>" . $row["ProductDescription"] . "</td><td>" . $row["QuantityInStock"] . "</td><td>" . $row["BuyPrice"] . "</td><td>" . $row["MSRP"] . "</td></tr>";
        }
        echo "</table>";
    } elseif ($result) {
        echo "0 results";
    }
    ?>

</body>

</html>