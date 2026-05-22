<html>
<head>
    <link rel="stylesheet" href="tfa3-2.css">
    <title> Array List Operations </title>
</head>
<body> 
    <h1> Array List Operations </h1>
     <?php
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        
        $sum = array_sum($numbers);
        $product = array_product($numbers);
        $difference = $numbers[0];
        $quotient = $numbers[0];    

        for ($i = 1; $i < count($numbers); $i++) {
            $difference -= $numbers[$i];
            $quotient /= $numbers[$i];
        }
        
        echo "<table border='2'>";
        echo "<tr>";
        echo "<td colspan='2'><b>Array List: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</b></td>";
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

    ?>
</body>
</html>