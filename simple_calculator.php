<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
        }

        .calculator {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f3f3f3;
            border-radius: 5px;
        }

        select, input[type="number"] {
            width: max-content;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .result {
            font-size: 24px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Simple Calculator</h2>
        <form method="post">
            <input type="number" name="num1" placeholder="enter number..." required><br>
            <input type="number" name="num2" placeholder="enter number..." required><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select><br>
            <input type="submit" name="calculate" value="Calculate">
        </form>

        <?php
            if (isset($_POST['calculate'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation =$_POST['operation'];

                switch ($operation) {
                    case 'add':
                        $result = $num1 + $num2;
                        $opeSymbol = '+';
                        break;
                    
                    case 'subtract':
                        $result = $num1 - $num2;
                        $opeSymbol = '-';
                        break;
                    
                    case 'multiply':
                        $result = $num1 * $num2;
                        $opeSymbol = '*';
                        break;
                    
                    case 'divide':
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            $opeSymbol = '/';
                        } else {
                            $result = "Cannot divide by zero";
                        }
                        break;

                    default:
                        $result = "Invalid operation";
                        break;
                }

                echo '<div class="result"> Result: ' . $num1 . '' . $opeSymbol . '' . $num2 . '=' . $result . '</div>';
            }
        ?>
    </div>
</body>
</html>