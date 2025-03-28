<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            color: white;
        }
        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 320px;
            text-align: center;
        }
        h2 {
            margin-bottom: 15px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 12px;
            border: none;
            background: #ffcc00;
            color: black;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #ffdb4d;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 10px;
            font-weight: bold;
            background: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>BMI Calculator</h2>
        <form method="POST" action="">
            <input type="number" name="weight" placeholder="Enter weight (kg)" step="0.1" required>
            <input type="number" name="height" placeholder="Enter height (cm)" step="0.1" required>
            <button type="submit" name="calculate">Calculate BMI</button>
        </form>

        <?php
        if (isset($_POST["calculate"])) {
            $weight = $_POST["weight"];
            $height_cm = $_POST["height"];

            if ($height_cm > 0) {
                $height_m = $height_cm / 100; // Convert cm to meters
                $bmi = $weight / ($height_m * $height_m);
                $bmi = round($bmi, 1);

                // Determine BMI Category
                if ($bmi < 18.5) {
                    $category = "Underweight";
                    $color = "#1e90ff";
                } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                    $category = "Normal weight";
                    $color = "#2ecc71";
                } elseif ($bmi >= 25 && $bmi <= 29.9) {
                    $category = "Overweight";
                    $color = "#f39c12";
                } elseif ($bmi >= 30 && $bmi <= 34.9) {
                    $category = "Obese (Class I)";
                    $color = "#e67e22";
                } elseif ($bmi >= 35 && $bmi <= 39.9) {
                    $category = "Obese (Class II)";
                    $color = "#c0392b";
                } else {
                    $category = "Obese (Class III)";
                    $color = "#8e44ad";
                }

                echo "<div class='result' style='border-left: 5px solid $color;'>
                        Your BMI: <strong>$bmi</strong> <br> 
                        Category: <span style='color: $color;'>$category</span>
                      </div>";
            } else {
                echo "<div class='result' style='color: red;'>Invalid height!</div>";
            }
        }
        ?>
    </div>

</body>
</html>
