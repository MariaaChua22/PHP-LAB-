<html>
<head>
    <title>Resume</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: #f5f1ec;
            color: #4a3f35;
        }

        .header {
            display: flex;
            align-items: center;
            padding: 50px;
            background: #f5f1ec;
        }

        .header-text h1 {
            margin: 0;
            font-size: 48px;
        }

        .header-text p {
            letter-spacing: 5px;
            margin-top: 10px;
        }

        hr {
            border: 1px solid #b8a999;
            width: 100%;
        }

        .container {
            display: flex;
            padding: 40px;
        }

        .left, .right {
            width: 50%;
            padding: 20px;
        }

        h2 {
            margin-top: 30px;
            letter-spacing: 2px;
        }

        .section {
            margin-bottom: 20px;
        }

        ul {
            padding-left: 20px;
        }

        .contact p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
<?php
    $name = "Ma. Allison Grace N. See";
    $title = "Cybersecurity Student";
    $email = "seemaallisongrace@gmail.com";
    $phone = "09456851875";
    $college = "FEU Institute of Technology";
    $shs = "University of the East - Manila";
    $strand = "Senior High School - ASTEM";
    $bsdegree = "Bachelor of Science in Information Technology Specialized in Cybersecurity";
    $address = "106 - D Jade Street, Greenheights Subdivision, San Bartolome, Novaliches, Quezon City";
    $about = "A 2nd year college student who is currently studying Bachelor of Science in Information Technology Specialized in Cybersecurity at FEU Institute of Technology.";
    $certification = "Java Certified";
?>

<div class="header">
    <div class="header-text">
        <h1><?php echo $name; ?></h1>
        <hr>
        <p><?php echo strtoupper($title); ?></p>
    </div>
</div>

<hr>

<div class="container">
    <div class="left">
        <div class="section">
            <h2>CONTACT</h2>
            <p><?php echo $phone; ?></p>
            <p><?php echo $email; ?></p>
            <p><?php echo $address; ?></p>
        </div>

        <div class="section">
            <h2>ABOUT ME</h2>
            <p><?php echo $about; ?></p>
        </div>

        <div class="section">
            <h2>REFERENCES</h2>
            <p>Available upon request.</p>
        </div>
    </div>

    <div class="right">
        <div class="section">
            <h2>EDUCATION</h2>
            <p><b><?php echo $college; ?></b><br>
            <?php echo $bsdegree; ?><br>2024 - ongoing</p>
            <p><b><?php echo $shs; ?></b><br>
            <?php echo $strand; ?><br>2022 - 2024</p>
        </div>

        <div class="section">
            <h2>CERTIFICATION</h2>
            <p><?php echo $certification; ?></p>
        </div>
    </div>
</div>
</body>
</html>
