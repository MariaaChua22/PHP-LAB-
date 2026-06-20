<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Colors</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container{
            width: 500px;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }

        h2{
            text-align: center;
        }

        p{
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>My Favorite Colors</h2>

    <p>My Favorite Color 1: <?= $_SESSION['color1']; ?></p>
    <p>My Favorite Color 2: <?= $_SESSION['color2']; ?></p>
    <p>My Favorite Color 3: <?= $_SESSION['color3']; ?></p>
    <p>My Favorite Color 4: <?= $_SESSION['color4']; ?></p>
    <p>My Favorite Color 5: <?= $_SESSION['color5']; ?></p>

</div>

</body>
</html>