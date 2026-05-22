<html>
<head>
    <link rel="stylesheet" href="tfa3-3.css">
    <title> Functions: Functions with Parameters </title>
</head>
<body> 
     <?php
        my_f(2, 22, 25);
        function my_f($a, $b, $c) {
            $sum = $a + $b + $c;
            $difference = $a - $b - $c;        
            $product = $a * $b * $c;
            $quotient = $a / $b / $c;
        
        echo "<table border='2'>";
        echo "<tr>";
        echo "<td colspan='2'><b>My Parameters values: $a, $b, $c </b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Addition: </td>"; 
        echo "<td>" . $sum . "</td>";
        echo "</tr>";


        echo "<tr>";
        echo "<td>Subtraction: </td>"; 
        echo "<td>" . $difference . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Multiplication: </td>"; 
        echo "<td>" . $product . "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Division: </td>"; 
        echo "<td>" . $quotient . "</td>";
        echo "</tr>";
        echo "</table>";
        }
    ?>
</body>
</html>