<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <!-- CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
            padding-right: 10px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px #ccc;
            width: 400px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="number"], select {
            width: 300px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            display: flex;
            justify-content: center;
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

        p {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }

        .result {
            width: 250px;
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
    <h1>Temperature Converter</h1>

    <?php
        //Define variables
        $temperature = "";
        $result = "";
        $conversionType = "";  

        //If condition
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = $_POST["temperature"];
            $conversionType = $_POST["conversionType"];
        
            if ($conversionType == "celsiusToFahrenheit") {
                $result = ($temperature * 9/5) + 32;
            } elseif ($conversionType == "fahrenheitToCelsius") {
                $result = ($temperature -32) * 5/9;
            }
        }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temperature">Enter Temperature : </label>
        <input type="number" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required>
        <br>

        <label for="conversionType">Select Conversion :</label>
        <select name="conversionType" id="conversionType">
            <option value="celsiusToFahrenheit" 
            <?php if ($conversionType == "celsiusToFahrenheit") echo "selected";?>>
            Celsius To Fahrenheit</option>

            <option value="fahrenheitToCelsius" 
            <?php if ($conversionType == "fahrenheitToCelsius") echo "selected";?>>
            Fahrenheit To Celsius</option>
        </select>
        <br>

        <input type="Submit" value="Convert">
    </form>

    <?php
        // Result will be available if user takes action
      
        if ($result !== "") {
            echo '<input class="result" type="text" value="Result: ' 
            . number_format($result, 2) . ($conversionType == "celsiusToFahrenheit" ? '°F' : '°C') . '" readonly>';
        }
    ?>



</body>
</html>