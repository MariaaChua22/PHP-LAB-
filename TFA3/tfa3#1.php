<html>
<head>
    <link rel="stylesheet" href="tfa3-1.css">
    <title> Array: Sorting and Looping Through Array Elements </title>
</head>
<body>
    <?php
        $person = array(
            array(
                "no." => 1,
                "Name" => "Giyu Tomioka", 
                "Image" => "images/giyu.jpg",
                "Age" => 19, 
                "Birthday" => "Februrary 8",
                "Contact number" => "09234567895"
            ),

            array(
                "no." => 2,
                "Name" => "Sanemi Shinazugawa",
                "Image" => "images/sanemi.jpg",
                "Age" => 21, 
                "Birthday" => "November 29th",
                "Contact number" => "09345678902"
            ),

            array(
                "no." => 3,
                "Name" => "Shinobu Kocho", 
                "Image" => "images/shinobu.jpg",
                "Age" => 18, 
                "Birthday" => "Februrary 24th",
                "Contact number" => "09121212124"
            ),

            array(
                "no." => 4,
                "Name" => "Misturi Kanroji", 
                "Image" => "images/mitsuri.jpg",
                "Age" => 19, 
                "Birthday" => "June 1st",
                "Contact number" => "09585858585"
            ),

            array(
                "no." => 5,
                "Name" => "Obanai Iguro", 
                "Image" => "images/obanai.jpg",
                "Age" => 21, 
                "Birthday" => "September 15th",
                "Contact number" => "09452635485"
            ),

            array(
                "no." => 6,
                "Name" => "Gyomei Himejima", 
                "Image" => "images/gyomei.jpg",
                "Age" => 27, 
                "Birthday" => "August 23rd",
                "Contact number" => "09564578122"
            ),

            array(
                "no." => 7,
                "Name" => "Muichiro Tokito", 
                "Image" => "images/muichiro.jpg",
                "Age" => 14, 
                "Birthday" => "August 8th",
                "Contact number" => "09845651454"
            ),
            array(
                "no." => 8,
                "Name" => "Kyojuro Rengoku", 
                "Image" => "images/kyojuro.jpg",
                "Age" => 20, 
                "Birthday" => "May 10th",
                "Contact number" => "09714586497"
            ),

            array(
                "no." => 9,
                "Name" => "Kanae Kocho", 
                "Image" => "images/kanae.jpg",
                "Age" => 21, 
                "Birthday" => "June 1st",
                "Contact number" => "09457621345"
            ),

            array
            (
                "no." => 10,
                "Name" => "Tanjirou Kamado", 
                "Image" => "images/tanjirou.jpg",
                "Age" => 16, 
                "Birthday" => "July 14th",
                "Contact number" => "09614589313"
            )
            

        );
        usort($person, function($a, $b) { 
        return strcasecmp($a['Name'], $b['Name']); });

        echo "<table border='2'>";
        echo "<tr>
            <th>no.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Contact number</th>
            </tr>";

        $i = 1; 
        foreach ($person as $row) {
            echo "<tr>";
            echo "<td>" . $i++ . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td><img src='" . $row["Image"] . "' width='100'></td>";
            echo "<td>" . $row["Age"] . "</td>";
            echo "<td>" . $row["Birthday"] . "</td>";
            echo "<td>" . $row["Contact number"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
