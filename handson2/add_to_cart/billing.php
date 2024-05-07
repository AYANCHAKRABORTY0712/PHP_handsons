<?php 
    session_start();
    include 'pricelist.php';
    $total = 0;
    if(isset($_POST['submit'])){
        foreach ($_POST as $key => $value) {
            if($key != 'submit' && $value > 0){
                $cart[$key] = $value;
            }
        }
        $_SESSION['cart'] = $cart;
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Billing</title>
        <style>
        </style>
    </head>
    
    <body>
        <h1>Billing Amount for Payment</h1>
        <table>
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Unit Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total=0;
                if(!empty($cart))
                {
                  foreach($cart as $item=>$qty)
                  { 
                        $item=explode('_',$item);
                        $item=implode(' ',$item);
                        $price=$item_price[$item]*$qty;
                        $total+=$price;
                        echo "<tr>
                                <td>$item</td>
                                <td>$item_price[$item]</td>
                                <td>$qty</td>
                                <td>$price</td>
                            </tr>";
                    }
                    echo "<tr>
                                <td></td>
                                <td>GRAND TOTAL</td>
                                <td></td>
                                <td>$total</td>
                            </tr>";
                    unset($_SESSION['cart']);
                }
                else
                {
                    echo "No Items Selected!";
                }
                ?>
            </tbody>
        </table>
    </body>
</html>