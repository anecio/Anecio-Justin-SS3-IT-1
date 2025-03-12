<!DOCTYPE html>
<html>
<head>
    <title>Sum of Squares and Cubes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(135deg,rgb(156, 34, 38),rgb(219, 90, 55),rgb(196, 118, 54),rgb(168, 31, 47));
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
            overflow: hidden;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            animation: bounceIn 1s;
        }
        @keyframes bounceIn {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        .container:hover {
            transform: scale(1.05);
        }
        h2 {
            color: #333;
        }
        input[type="number"] {
            padding: 10px;
            width: 60%;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            background: #007bff;
            color: white;
            border-radius: 5px;
        }
        
        /* Particle effect */
        .particle {
            position: absolute;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            pointer-events: none;
            animation: fadeOut 1s linear;
        }
        @keyframes fadeOut {
            0% { opacity: 1; transform: scale(1); }
            100% { opacity: 0; transform: scale(3); }
        }
    </style>
    <script>
        document.addEventListener("mousemove", function(e) {
            let particle = document.createElement("div");
            particle.classList.add("particle");
            document.body.appendChild(particle);
            
            let colors = ["#ff0000", "#ff7f00", "#ffff00", "#00ff00", "#0000ff", "#4b0082", "#9400d3"];
            let randomColor = colors[Math.floor(Math.random() * colors.length)];
            particle.style.backgroundColor = randomColor;
            
            particle.style.left = `${e.pageX}px`;
            particle.style.top = `${e.pageY}px`;
            
            setTimeout(() => {
                particle.remove();
            }, 1000);
        });
    </script>
</head>
<body>
    <div class="container">
        <h2>Calculate Sum of Squares and Cubes</h2>
        <form method="post">
            <input type="number" name="number" placeholder="Enter an upper limit" required>
            <br>
            <button type="submit">Calculate</button>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST['number']);
            if ($n > 0) {
                $sumSquares = 0;
                $sumCubes = 0;
                
                for ($i = 1; $i <= $n; $i++) {
                    $sumSquares += $i * $i;
                    $sumCubes += $i * $i * $i;
                }
                
                echo "<div class='result'>";
                echo "<p>The sum of Squares from 1 to $n is <strong>$sumSquares</strong>.</p>";
                echo "<p>The sum of Cubes from 1 to $n is <strong>$sumCubes</strong>.</p>";
                echo "</div>";
            } else {
                echo "<p style='color: red;'>Please enter a positive integer.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
