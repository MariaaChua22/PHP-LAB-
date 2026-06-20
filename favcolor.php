<?php
session_start();

if(isset($_POST['submit']))
{
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];

    header("Location: results.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Colors</title>

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

        label{
            display: inline-block;
            width: 120px;
            margin-bottom: 10px;
        }

        input[type="text"]{
            width: 250px;
            padding: 5px;
        }

        .btn{
            margin-top: 15px;
            padding: 8px 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Enter Your Favorite Colors</h2>

    <form method="post">

        <label>Favorite Color 1:</label>
        <input type="text" name="color1"><br>

        <label>Favorite Color 2:</label>
        <input type="text" name="color2"><br>

        <label>Favorite Color 3:</label>
        <input type="text" name="color3"><br>

        <label>Favorite Color 4:</label>
        <input type="text" name="color4"><br>

        <label>Favorite Color 5:</label>
        <input type="text" name="color5"><br>

        <input type="submit" name="submit" value="Send Colors" class="btn">

    </form>
</div>

</body>
</html>