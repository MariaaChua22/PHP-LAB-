<html>
<head>
    <title>Student Resume</title>
    <link rel="stylesheet" href="tsa2-3.css">
</head>

<body>

<?php
    $name = "Ma. Allison Grace N. See";
    $title = "Cybersecurity Student";
?>

<div class="header">
    <h1><?php echo $name; ?></h1>
    <hr>
    <p><?php echo strtoupper($title); ?></p>
</div>

<div class="card">
    <a href="career.php">CAREER OBJECTIVE</a>
</div>

<div class="card">
    <a href="personal.php">PERSONAL INFORMATION</a>
</div>

<div class="card">
    <a href="education.php">EDUCATIONAL ATTAINMENT</a>
</div>

<div class="card">
    <a href="certification.php">CERTIFICATION</a>
</div>

<?php
 include("footer.php");
?>

</body>
</html>