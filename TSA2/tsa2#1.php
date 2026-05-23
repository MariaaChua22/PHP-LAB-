<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title> Fruit Directory </title>
</head>

<body>

<?php
    $fruits = array(

        array(
            "Name" => "Avocado",
            "Image" => "images/avocado.jpg",
            "Description" => "A creamy green fruit.",
            "Facts" => "Avocados are rich in healthy fats."
        ),

        array(
            "no." => 2,
            "Name" => "Blueberry",
            "Image" => "images/blueberry.jpg",
            "Description" => "A small blue-purple fruit.",
            "Facts" => "Blueberries help improve brain function."
        ),

        array(
            "no." => 3,
            "Name" => "Coconut",
            "Image" => "images/coconut.jpg",
            "Description" => "A tropical fruit with hard shell.",
            "Facts" => "Coconut water helps hydrate the body."
        ),

        array(
            "no." => 4,
            "Name" => "Dragon Fruit",
            "Image" => "images/dragonfruit.jpg",
            "Description" => "An exotic fruit with vibrant color.",
            "Facts" => "Dragon fruit is high in antioxidants."
        ),

        array(
            "no." => 5,
            "Name" => "Guava",
            "Image" => "images/guava.jpg",
            "Description" => "A sweet fruit with edible seeds.",
            "Facts" => "Guava contains plenty of Vitamin C."
        ),

        array(
            "no." => 6,
            "Name" => "Lemon",
            "Image" => "images/lemon.jpg",
            "Description" => "A sour citrus fruit.",
            "Facts" => "Lemons are commonly used for detox drinks."
        ),

        array(
            "no." => 7,
            "Name" => "Papaya",
            "Image" => "images/papaya.jpg",
            "Description" => "A soft orange tropical fruit.",
            "Facts" => "Papaya contains enzymes that aid digestion."
        ),

        array(
            "no." => 8,
            "Name" => "Peach",
            "Image" => "images/peach.jpg",
            "Description" => "A juicy fruit with fuzzy skin.",
            "Facts" => "Peaches are low in calories and high in fiber."
        ),
 
        array(
            "no." => 9,
            "Name" => "Pear",
            "Image" => "images/pear.jpg",
            "Description" => "A sweet bell-shaped fruit.",
            "Facts" => "Pears help improve heart health."
        ),

        array(
            "no." => 10,
            "Name" => "Rambutan",
            "Image" => "images/rambutan.jpg",
            "Description" => "A hairy tropical fruit.",
            "Facts" => "Rambutan is rich in iron and Vitamin C."
        )

    );

    usort($fruits, function($a, $b) {
        return strcasecmp($a['Name'], $b['Name']);
    });

    echo "<table border='2'>";

    echo "<tr>
            <td colspan='5'><b>Fruit Directory</b></td>
          </tr>";

    echo "<tr>
            <th>No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Description</th>
            <th>Facts</th>
          </tr>";

    $i = 1;

    foreach($fruits as $row)
    {
        echo "<tr>";

        echo "<td>" . $i++ . "</td>";
        echo "<td>" . $row["Name"] . "</td>";
        echo "<td><img src='" . $row["Image"] . "' width='120'></td>";
        echo "<td>" . $row["Description"] . "</td>";
        echo "<td>" . $row["Facts"] . "</td>";

        echo "</tr>";
    }

    echo "</table>";
?>

</body>
</html>