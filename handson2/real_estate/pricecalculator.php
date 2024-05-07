<?php 
include 'homepage.php';
include 'cookies.php'; 
?>

<section>
    <h2>Price Calculator</h2>
    <form action="#" method="POST">
    <label>Select City</label>
    <select id="city" name="city">
        <option value="Chennai">Chennai</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Kolkata">Kolkata</option>
    </select>
    <br>
    <label>Price Per <?php echo $unit ?></label>
    <input type="number" id="price" name="price">
    <br>
    <label>Number of <?php echo $unit ?></label>
    <input type="number" id="num" name="num">
    <br>
    <button type="submit" name="calculate">Calculate</button>
    </form>
    <?php
        if(isset($_POST['calculate'])){
            $price=$_POST['price'];
            $num=$_POST['num'];
            $total=$price*$area*$num;

        echo "<div id='total-value'>Total Area = $total</div>";
        }
    ?>
    </section>
</body>
</html>
