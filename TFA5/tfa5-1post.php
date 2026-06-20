<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 

    <title>Data retrieved using $_POST</title>
</head>

<body>
<div class="header">
    <h1> Registration </h1>
</div>

<hr>

<div class="container">
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="fullname" class="form-label"><b>Full Name:</b></label>
    <input type="text" name="fullname" id="fullname"> <br>
    <label for="middlename" class="form-label"><b>Middle Name:</b></label>
    <input type="text" name="middlename" id="middlename"> <br>
    <label for="lastname" class="form-label"><b>Last Name:</b></label>
    <input type="text" name="lastname" id="lastname"><br>
    <label for="dateofbirth" class="form-label"><b>Date of Birth:</b></label>
    <input type="text" name="dateofbirth" id="dateofbirth"><br>
    <label for="address" class="form-label"><b>Address:</b></label>
    <input type="text" name="address" id="address"><br>
    <input type="submit" name="submit" id="submit">
</form>
</div>

<div class="row">
        <h2> Data retrieved using $_POST</h2>

        <?php
        if(isset($_POST['submit'])):
        ?>

        <p>FULL NAME: <?= $_POST['fullname'] ?></p>
        <p>MIDDLE NAME: <?= $_POST['middlename'] ?></p>
        <p>LAST NAME: <?= $_POST['lastname'] ?></p>
        <p>DATE OF BIRTH: <?= $_POST['dateofbirth'] ?></p>
        <p>ADDRESS: <?= $_POST['address'] ?></p>

        <?php
        endif;
        ?>
</div>
</body>
</html>