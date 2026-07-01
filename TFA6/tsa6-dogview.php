<?php
include("db.php");

$result = $conn->query("SELECT * FROM dogs");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dogs List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h1>Registered Dogs</h1>
</div>
<hr>
<div class="row">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Age</th>
                <th>Address</th>
                <th>Color</th>
                <th>Height</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['dog_id']; ?></td>
                        <td><?php echo $row['dog_name']; ?></td>
                        <td><?php echo $row['breed_name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['color']; ?></td>
                        <td><?php echo $row['height']; ?></td>
                        <td><?php echo $row['weight']; ?></td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="8">No dogs registered yet.</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <p style="text-align:center; margin-top:20px;">
        <a href="tsa6-dogregister.php">Add New Dog</a>
    </p>
</div>
</body>
</html>
