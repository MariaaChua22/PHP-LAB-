<?php
session_start();

if(isset($_POST['submit']))
{
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];

    header("Location: tfa5-3results.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 

    <title>Fave color input</title>
</head>
<body>

<div class="header">
    <h1> Favourite color input </h1>
</div>

<hr>

<div class="container">
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

        <input type="submit" name="submit" value="Send Colors" class="button">

    </form>
</div>

</body>
</html>