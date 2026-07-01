<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> 

    <title>Personal Registration</title>
</head>

<body>
<div class="header">
    <h1> My Personal Information </h1>
</div>

<hr>

<div class="container">
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
    <label for="firstname" class="form-label"><b>First Name:</b></label>
    <input type="text" name="firstname" id="firstname"> <br>
    <label for="middlename" class="form-label"><b>Middle Name:</b></label>
    <input type="text" name="middlename" id="middlename"> <br>
    <label for="lastname" class="form-label"><b>Last Name:</b></label>
    <input type="text" name="lastname" id="lastname"><br>
    <label for="username" class="form-label"><b>Username:</b></label>
    <input type="text" name="username" id="username"><br>
    <label for="password" class="form-label"><b>Password:</b></label>
    <input type="text" name="password" id="password"><br>
    <label for="confirmpassword" class="form-label"><b>Confirm Password:</b></label>
    <input type="text" name="confirmpassword" id="confirmpassword"><br>
    <label for="birthday" class="form-label"><b>Birthday:</b></label>
    <input type="text" name="birthday" id="birthday"><br>
    <label for="email" class="form-label"><b>Email:</b></label>
    <input type="text" name="email" id="email"><br>
    <label for="contactnumber" class="form-label"><b>Contact Number:</b></label>
    <input type="text" name="contactnumber" id="contactnumber"><br>
    <input type="submit" name="submit" id="submit">
</form>
</div>


<div class="row">
        

        <?php
        if(isset($_GET['submit'])):
        ?>
        <h2> My Personal Information: </h2>
        <p>FULL NAME: <?= $_GET['fullname'] ?></p>
        <p>MIDDLE NAME: <?= $_GET['middlename'] ?></p>
        <p>LAST NAME: <?= $_GET['lastname'] ?></p>
        <p>USERNAME: <?= $_GET['username'] ?></p>
        <p>PASSWORD: <?= $_GET['password'] ?></p>
        <p>CONFIRM PASSWORD: <?= $_GET['confirmpassword'] ?></p>
        <p>BIRTHDAY: <?= $_GET['birthday'] ?></p>
        <p>EMAIL: <?= $_GET['email'] ?></p>
        <p>CONTACT NUMBER: <?= $_GET['contactnumber'] ?></p>

        <?php
        endif;
        ?>
</div>

<?php include ('footer.php') ?>

</body>
</html>