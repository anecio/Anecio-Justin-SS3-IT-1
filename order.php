<?php
$menu = [
    "Grilled Steak" => 899.00,
    "Caesar Salad" => 450.00,
    "Spaghetti Carbonara" => 675.00,
    "Chicken Parmesan" => 750.00,
    "Lobster Bisque" => 550.00
];

function displayMenu($menu) {
    echo '<table>
            <tr>
                <th>Item</th>
                <th>Price (₱)</th>
            </tr>';
    foreach ($menu as $item => $price) {
        echo "<tr><td>$item</td><td>₱" . number_format($price, 2) . "</td></tr>";
    }
    echo '</table>';
}

function calculateTotal($menu, $item, $quantity, $orderType) {
    $price = $menu[$item];
    $totalAmount = $price * $quantity;
    if ($orderType == "Take out") {
        $tax = $totalAmount * 0.12;
        $totalAmount += $tax;
    }
    return $totalAmount;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Order</title>
    <style>
        body {
            background: url('https://i.pinimg.com/736x/d8/0d/15/d80d1551e2a3b6f458fc5e065642d9b4.jpg') no-repeat center center/cover;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .menu-container {
            background: url('https://as1.ftcdn.net/jpg/05/12/85/94/1000_F_512859486_vuAxRHm8jg1DeiDtVbKnRuCjSAnNc4vy.jpg') no-repeat center center/cover;
            color: white;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
        }
        .form-container {
            background: linear-gradient(to bottom, #ff7e5f, #feb47b);
            margin-top: 20px;
        }
        .result-container {
            background: url('https://media.istockphoto.com/id/1401278160/photo/meteor-trails-in-the-night-sky-beautiful-meteor-shower-falling-stars.jpg?s=612x612&w=0&k=20&c=GCLm7nsTQ2-WTBgOuKPptAs5WOLigBioTBS-d7qIQE8=') no-repeat center center/cover;
            color: white;
            margin-top: 20px;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Available Menu</h2>
    <div class="menu-container">
        <?php displayMenu($menu); ?>
    </div>
    
    <div class="container form-container">
        <h2>Place Your Order</h2>
        <form method="post">
            <label for="item">Select Item:</label>
            <select name="item" required>
                <?php foreach ($menu as $item => $price) { ?>
                    <option value="<?php echo $item; ?>"> <?php echo $item . " - ₱" . number_format($price, 2); ?> </option>
                <?php } ?>
            </select>
            <br><br>
            
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" min="1" required>
            <br><br>
            
            <label>Order Type:</label>
            <input type="radio" name="order_type" value="Dine in" required> Dine In
            <input type="radio" name="order_type" value="Take out" required> Take Out
            <br><br>
            
            <input type="submit" value="Submit Order">
            <input type="reset" value="Reset">
        </form>
    </div>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<div class="container result-container">';
        
        $item = $_POST['item'];
        $quantity = intval($_POST['quantity']);
        $orderType = $_POST['order_type'];
        
        $totalAmount = calculateTotal($menu, $item, $quantity, $orderType);
        
        echo "<h2>Order Summary</h2>";
        echo "Item: $item<br>";
        echo "Quantity: $quantity<br>";
        echo "Order Type: $orderType<br>";
        echo "Total Amount: ₱" . number_format($totalAmount, 2);
        
        echo '</div>';
    }
    ?>
</body>
</html>
