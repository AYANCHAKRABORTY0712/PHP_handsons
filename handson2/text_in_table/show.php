<!DOCTYPE html>
<html>
<head>
<title>Television Products</title>
<style>
    table{
        font-size: x-large;
    }
    tr:nth-child(even){
        background-color: lightgrey;
    }
    thead {
        color: white;
        background-color: darkred;
    }
    
</style>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock Qty</th>
        </tr>
    </thead>
<?php
        $file = fopen("product.txt", "r");
 
        
        while (($line = fgets($file)) !== false) {
            $product_data = explode(",", $line);
 
            if (strpos($product_data[2], "Television") !== false) {
                echo "<tr>";
                echo "<td>" . $product_data[0] . "</td>";
                echo "<td>" . $product_data[1] . "</td>";
                echo "<td>" . $product_data[2] . "</td>";
                echo "<td>" . $product_data[3] . "</td>";
                echo "<td>" . $product_data[4] . "</td>";
                echo "</tr>";
            }
        }
        
 
if ($file === false) {
    echo "Error: Unable to open file.";
    exit();
}
 
       
        fclose($file);
        ?>
</table>
</body>
</html>