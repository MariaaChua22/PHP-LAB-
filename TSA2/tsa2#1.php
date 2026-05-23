<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title> Fruit Directory </title>
</head>

<body>

<h1>Fruit Directory</h1>

<?php

$fruits = array(

    array(
        "no." => 1,
        "Name" => "Apple",
        "Image" => "images/apple.jpg",
        "Description" => "A sweet and crunchy fruit.",
        "Facts" => "Apples are rich in fiber and Vitamin C."
    ),

    array(
        "no." => 2,
        "Name" => "Banana",
        "Image" => "images/banana.jpg",
        "Description" => "A soft and sweet yellow fruit.",
        "Facts" => "Bananas are rich in potassium."
    ),

    array(
        "no." => 3,
        "Name" => "Cherry",
        "Image" => "images/cherry.jpg",
        "Description" => "A small red juicy fruit.",
        "Facts" => "Cherries contain antioxidants."
    ),

    array(
        "no." => 4,
        "Name" => "Grapes",
        "Image" => "images/grapes.jpg",
        "Description" => "A small round fruit that grows in bunches.",
        "Facts" => "Grapes can be used to make wine."
    ),

    array(
        "no." => 5,
        "Name" => "Kiwi",
        "Image" => "images/kiwi.jpg",
        "Description" => "A green fruit with tiny black seeds.",
        "Facts" => "Kiwi contains more Vitamin C than oranges."
    ),

    array(
        "no." => 6,
        "Name" => "Mango",
        "Image" => "images/mango.jpg",
        "Description" => "A juicy tropical fruit.",
        "Facts" => "Mango is known as the national fruit of the Philippines."
    ),

    array(
        "no." => 7,
        "Name" => "Orange",
        "Image" => "images/orange.jpg",
        "Description" => "A citrus fruit rich in juice.",
        "Facts" => "Oranges are high in Vitamin C."
    ),

    array(
        "no." => 8,
        "Name" => "Pineapple",
        "Image" => "images/pineapple.jpg",
        "Description" => "A tropical fruit with rough skin.",
        "Facts" => "Pineapple helps improve digestion."
    ),

    array(
        "no." => 9,
        "Name" => "Strawberry",
        "Image" => "images/strawberry.jpg",
        "Description" => "A heart-shaped red fruit.",
        "Facts" => "Strawberries are rich in antioxidants."
    ),

    array(
        "no." => 10,
        "Name" => "Watermelon",
        "Image" => "images/watermelon.jpg",
        "Description" => "A large fruit filled with water.",
        "Facts" => "Watermelon helps keep the body hydrated."
    )

);

usort($fruits, function($a, $b) {
    return strcasecmp($a['Name'], $b['Name']);
});

echo "<table border='2'>";

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