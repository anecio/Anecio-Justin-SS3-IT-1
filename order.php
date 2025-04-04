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

function calculateTotal($menu, $orders, $orderType) {
    $grandTotal = 0;
    foreach ($orders as $item => $quantity) {
        $price = $menu[$item];
        $total = $price * $quantity;
        if ($orderType == "Take out") {
            $tax = $total * 0.12;
            $total += $tax;
        }
        $grandTotal += $total;
    }
    return $grandTotal;
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

        .item-row {
            margin-bottom: 10px;
        }

        .settings-icon {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            padding: 10px;
            transition: background 0.3s;
        }

        .settings-icon:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        .settings-box {
            display: none;
            position: absolute;
            top: 60px;
            left: 20px;
            width: 300px;
            background: rgba(0, 0, 0, 0.85);
            color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px #000;
            text-align: left;
            z-index: 100;
        }

        .settings-box h3 {
            margin-top: 0;
        }

        .close-btn {
            background: #ff4c4c;
            color: white;
            border: none;
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            float: right;
        }

        .close-btn:hover {
            background: #e04343;
        }
    </style>

    <script>
        function toggleSettings() {
            const box = document.getElementById("settingsBox");
            box.style.display = (box.style.display === "block") ? "none" : "block";
        }

        function closeSettings() {
            document.getElementById("settingsBox").style.display = "none";
        }
    </script>
</head>
<body>
    <!-- Settings Icon and Box -->
    <div class="settings-icon" onclick="toggleSettings()">⚙️</div>
    <div class="settings-box" id="settingsBox">
        <button class="close-btn" onclick="closeSettings()">❌ Close</button>
        <h3>About This Restaurant Order</h3>
        <p>
            Welcome to our digital ordering system!<br><br>
            ➤ Select one or more items from the menu.<br>
            ➤ Choose your order type: Dine In or Take Out.<br>
            ➤ If Take Out is selected, 12% tax will be added.<br><br>
            Thank you for ordering!
        </p>
    </div>

    <h2>Available Menu</h2>
    <div class="menu-container">
        <?php displayMenu($menu); ?>
    </div>

    <div class="container form-container">
        <h2>Place Your Order</h2>
        <form method="post">
            <?php foreach ($menu as $item => $price) { ?>
                <div class="item-row">
                    <label>
                        <input type="checkbox" name="items[]" value="<?php echo $item; ?>">
                        <?php echo "$item - ₱" . number_format($price, 2); ?>
                    </label>
                    &nbsp;
                    Quantity:
                    <input type="number" name="quantity[<?php echo $item; ?>]" min="1" value="1">
                </div>
            <?php } ?>

            <br>
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
        $selectedItems = $_POST['items'] ?? [];
        $quantities = $_POST['quantity'] ?? [];
        $orderType = $_POST['order_type'] ?? "";

        $orders = [];
        foreach ($selectedItems as $item) {
            $qty = isset($quantities[$item]) ? (int)$quantities[$item] : 1;
            if ($qty > 0) {
                $orders[$item] = $qty;
            }
        }

        if (count($orders) > 0) {
            echo "<h2>Order Summary</h2>";
            foreach ($orders as $item => $qty) {
                echo "$item - Quantity: $qty<br>";
            }
            echo "Order Type: $orderType<br><br>";
            $totalAmount = calculateTotal($menu, $orders, $orderType);
            echo "<strong>Total Amount: ₱" . number_format($totalAmount, 2) . "</strong>";
        } else {
            echo "No items selected.";
        }

        echo '</div>';
    }
    ?>
</body>
</html>
