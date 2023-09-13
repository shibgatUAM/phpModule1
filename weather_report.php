<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-size: 18px;
            font-weight: bold;
            display: block;
            text-align: center;
            margin-bottom: 5px;
        }

        input[type="number"] {
            max-width: min-content;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }

        p {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Weather Report</h1>
        <form method="post">
            <label for="temperature">Enter Temperature (in Celsisu) : </label>
            <input type="number" id="temperature" name="temperature" required>
            <br>
            <button type="submit">Check Weather</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperature = $_POST["temperature"];

                if ($temperature < 0) {
                    $message = "It's freezing!";
                } elseif ($temperature >= 0 && $temperature < 15) {
                    $message = "It's cool.";
                } elseif ($temperature >= 15 && $temperature < 25) {
                    $message = "It's warm.";
                } else {
                    $message = "It's hot!";
                }

                echo "<p>The current temperature is {$temperature} degree Celsius. {$message}</p>";
            }
        ?>
    </div>
</body>
</html>