<?php
include("db.php");

if (isset($_POST['save'])) {
    $name    = $_POST['dog_name'];
    $breed   = $_POST['breed_name'];
    $age     = $_POST['age'];
    $address = $_POST['address'];
    $color   = $_POST['color'];
    $height  = $_POST['height'];
    $weight  = $_POST['weight'];

    $sql = "INSERT INTO dogs (dog_name, breed_name, age, address, color, height, weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dogs-view.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>Dog Register</h1>
</div>
<hr>

<div class="container">
        <form method = "POST">
        <label>Name:</label><input type="text" name="dog_name"><br>
        <label>Breed:</label><input type="text" name="breed_name"><br>
        <label>Age:</label><input type="text" name="age"><br>
        <label>Address:</label><input type="text" name="address"><br>
        <label>Color:</label><input type="text" name="color"><br>
        <label>Height:</label><input type="text" name="height"><br>
        <label>Weight:</label><input type="text" name="weight"><br>
        <input type="submit" name="save" value="Save">
    </form>
</div>
</body>
</html>
