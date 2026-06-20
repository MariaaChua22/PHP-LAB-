<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Data retrieved using $_GET</title>
</head>

<style>
    label{
        display: inline-block;
        width: 150px;
    }
</style>
<!-- Do the same for $_POST -->
<body>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
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

<div class="row">
        <h3> Data retrieved using $_GET</h3>

        <?php
        if(isset($_GET['submit'])):
        ?>

        <p>FULL NAME: <?= $_GET['fullname'] ?></p>
        <p>MIDDLE NAME: <?= $_GET['middlename'] ?></p>
        <p>LAST NAME: <?= $_GET['lastname'] ?></p>
        <p>DATE OF BIRTH: <?= $_GET['dateofbirth'] ?></p>
        <p>ADDRESS: <?= $_GET['address'] ?></p>

        <?php
        endif;
        ?>
</div>
</body>
</html>