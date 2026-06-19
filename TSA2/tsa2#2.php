<html>
<head>
    <link rel = "stylesheet" href="tsa2-2.css">
    <title> Volume of Shapes </title>

</head>

<body>

<?php

function cube($side) {
    return pow($side, 3);
}

function rectangularPrism($length, $width, $height) {
    return $length * $width * $height;
}

function cylinder($radius, $height) {
    return pi() * pow($radius, 2) * $height;
}

function cone($radius, $height) {
    return (1/3) * pi() * pow($radius, 2) * $height;
}

function sphere($radius) {
    return (4/3) * pi() * pow($radius, 3);
}

echo "<table border='2'>";
echo "<tr>
        <th colspan='3'><h1><b>Volume of Shapes</h1></th>
      </tr>";

echo "<tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
      </tr>";

echo "<tr>
        <td>s = 5</td>
        <td>V = s<sup>3</sup></td>
        <td>" . cube(5) . "</td>
      </tr>";

echo "<tr>
        <td>l = 5, w = 4, h = 3</td>
        <td>V = lwh</td>
        <td>" . rectangularPrism(5,4,3) . "</td>
      </tr>";

echo "<tr>
        <td>r = 4, h = 6</td>
        <td>V = πr<sup>2</sup>h</td>
        <td>" . round(cylinder(4,6), 2) . "</td>
      </tr>";

echo "<tr>
        <td>r = 3, h = 5</td>
        <td>V = 1/3πr<sup>2</sup>h</td>
        <td>" . round(cone(3,5), 2) . "</td>
      </tr>";

echo "<tr>
        <td>r = 4</td>
        <td>V = 4/3πr<sup>3</sup></td>
        <td>" . round(sphere(4), 2) . "</td>
      </tr>";

echo "</table>";

?>

</body>
</html>