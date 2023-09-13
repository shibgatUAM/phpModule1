<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0, 0.1);
            text-align: center;
            border-radius: 5px;
            margin-top: 20px;
        }

        h1 {
            color: #333;
            font-size: 24px;
            text-transform: uppercase;
        }

        .info-card {
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
            margin-top: 20px;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        strong {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>

    <?php

        $name = "Shibgat Ullah Al Mahmud";
        $age = 31;
        $country = "Bangladesh";
        $city = "Chattogram";
        $intro = "Hello I'm {$name}. I am {$age} years old. Currently, I live at {$city} in {$country}. 
        My journey in the world of web development has been a thrilling one, 
        where I've honed my skills to create seamless and sophisticated digital experiences.";
    ?>

    <div class="container">
        <h1>Personal Information</h1>
        <div class="info-card">
            <p><strong>Name: </strong> <?php echo $name; ?></p>
            <p><strong>Age: </strong> <?php echo $age; ?></p>
            <p><strong>Coountry: </strong> <?php echo $country; ?></p>
            <p><strong>Introduction: </strong> <?php echo $intro; ?></p>
        </div>
    </div>
    
</body>
</html>