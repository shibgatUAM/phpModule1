<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 2px;
            box-shadow: 0 2px 5px #ccc;
            width: 360px;
        }

        input[type="number"] {
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

        .result {
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
        <h1>Grade Calculator</h1>
        <form method="POST">
            <label for="bangla">Bangla: </label>
            <input type="number" name="bangla" required><br>

            <label for="english">English: </label>
            <input type="number" name="english" required><br>

            <label for="math">Math: </label>
            <input type="number" name="math" required><br>

            <input type="submit" name="calculate" value="Calculate">
        </form>
    
    <?php
        if (isset($_POST['calculate'])) {
            $bangla = $_POST['bangla'];
            $english = $_POST['english'];
            $math = $_POST['math'];

            $average = ($bangla + $english + $math) / 3;

            $grade = '';

            if ($average >= 90) {
                $grade = 'A';
            } elseif ($average >= 80) {
                $grade = 'B';
            } elseif ($average >= 70) {
                $grade = 'C';
            } elseif ($average >= 60) {
                $grade = 'D';
            } else {
                $grade ='F';
            }

            echo '<div class="result">Bangla: ' . $bangla . ' | English: ' . $english . ' | Math: ' . $math . '</div>';
            echo '<div class="result">Average Score: ' . number_format($average, 2). ' | Grade: ' . $grade. '</div>';
        }
    ?>

    </div>
</body>
</html>