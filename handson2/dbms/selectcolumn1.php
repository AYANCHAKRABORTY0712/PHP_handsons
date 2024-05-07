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
 
class Product {
    private $conn;
    private $table_name = "Products";
 
    public function __construct($db) {
        $this->conn = $db;
    }
 
    public function getProducts($columns) {
        $query = "SELECT " . implode(',', $columns) . " FROM " . $this->table_name;
        $result = $this->conn->query($query);
        return $result;
    }
}
 
$database = new Database();
$db = $database->dbConnection();
$product = new Product($db);
 
$columns = ['productCode', 'productName', 'productLine', 'productScale', 'productVendor', 'productDescription', 'quantityInStock', 'buyPrice', 'MSRP'];
$selected_columns = isset($_POST['columns']) ? $_POST['columns'] : $columns;
 
$result = $product->getProducts($selected_columns);
 
?>
 
<form method="post">
    <?php foreach ($columns as $column): ?>
        <input type="checkbox" name="columns[]" value="<?php echo $column; ?>" <?php echo in_array($column, $selected_columns) ? 'checked' : ''; ?>><?php echo $column; ?><br>
    <?php endforeach; ?>
    <input type="submit" value="Submit">
</form>
 
<?php
 
if ($result->num_rows > 0) {
    echo "<h1 align='center'>Products Table</h1>";
    echo "<table>";
    echo "<tr>";
    foreach ($selected_columns as $column) {
        echo "<th>" . $column . "</th>";
    }
    echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($selected_columns as $column) {
            echo "<td>" . $row[$column] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
 
?>