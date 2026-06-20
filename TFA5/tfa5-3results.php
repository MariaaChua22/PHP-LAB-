<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 

    <title>Fave color results</title>

</head>
<body>

<div class="header">
    <h1>My Favorite Colors</h1>
</div>

<hr>

<div class="row">
    <br>
    

    <p>My Favorite Color 1: <?= $_SESSION['color1']; ?></p>
    <p>My Favorite Color 2: <?= $_SESSION['color2']; ?></p>
    <p>My Favorite Color 3: <?= $_SESSION['color3']; ?></p>
    <p>My Favorite Color 4: <?= $_SESSION['color4']; ?></p>
    <p>My Favorite Color 5: <?= $_SESSION['color5']; ?></p>

</div>

</body>
</html>