<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even & Odd Checker</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 20px;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        input[type="text"] {
            width: 335px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            display: flex;
            justify-content: center;
        }

        
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 2px;
            box-shadow: 0 2px 5px #ccc;
            width: 360px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        .result{
            width: 360px;
            padding: 5px;
            margin-top: 10px;
            margin-left: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            text-align: center;
            font-size: 18px;
            background-color: #f7f7f7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Even Odd Checker</h1>
        <form method="POST">
            <label for="number">Enter a number :</label>
            <input type="text" name="number" id="number" class="input-field" required>
            <br>
            <input type="submit" value="Check Result">
        </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];

            if (is_numeric($number)) {
                $result = ($number % 2 == 0) ? "Even" : "Odd";
                echo "<div class='result'>The number {$number} is {$result}.</div>";
            } else {
                echo "<div class='result'>Please enter a valid number.</div>";
            }
        }
    ?>
    </div>
    
</body>
</html>