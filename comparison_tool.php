<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: max-content;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Number Comparison Tool</h1>
        <form method="post">
            <label for="number1">Enter first number :</label>
            <input type="number" id="number1" name="number1" required><br>
            <label for="number2">Enter second number :</label>
            <input type="number" id="number2" name="number2" required><br>
            <button type="submit">Compare Value</button>
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];

                $result = ($number1 > $number2) ? $number1 : $number2;

                echo "<p>The larger number is : {$result}</p>";
            }
        ?>
    </div>
</body>
</html>