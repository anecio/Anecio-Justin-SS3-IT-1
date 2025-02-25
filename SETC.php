<!DOCTYPE html>
<html>
<head>
    <title>State Income Tax Calculator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>State Income Tax Calculator</h2>
        <form method="POST">
            <label for="hourlyRate">Enter your hourly rate ($):</label>
            <input type="number" step="0.01" name="hourlyRate" id="hourlyRate" required>
            <br><br>
            <button type="submit">Calculate Net Income</button>
        </form>
    </div>

    <?php
    function calculateNetIncome($hourlyRate) {
        $hoursPerDay = 8;
        $workingDays = 26;
        $grossIncome = $hourlyRate * $hoursPerDay * $workingDays;
        
        if ($grossIncome <= 15000) {
            $tax = 0;
        } elseif ($grossIncome <= 30000) {
            $tax = ($grossIncome - 15000) * 0.05;
        } else {
            $tax = (15000 * 0.05) + (($grossIncome - 30000) * 0.10);
        }
        
        $netIncome = $grossIncome - $tax;
        return [$grossIncome, $tax, $netIncome];
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['hourlyRate'])) {
            $hourlyRate = filter_input(INPUT_POST, 'hourlyRate', FILTER_VALIDATE_FLOAT);
            
            if ($hourlyRate === false || $hourlyRate <= 0) {
                echo "<p style='color: red; text-align: center;'>Invalid input. Please enter a valid hourly rate.</p>";
            } else {
                list($grossIncome, $tax, $netIncome) = calculateNetIncome($hourlyRate);
                echo "<div class='container'>";
                echo "<p><strong>Hourly Rate:</strong> $" . number_format($hourlyRate, 2) . "</p>";
                echo "<p><strong>Gross Income:</strong> $" . number_format($grossIncome, 2) . "</p>";
                echo "<p><strong>Tax:</strong> $" . number_format($tax, 2) . "</p>";
                echo "<p><strong>Net Income:</strong> $" . number_format($netIncome, 2) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p style='color: red; text-align: center;'>No input received.</p>";
        }
    }
    ?>
</body>
</html>
