<html>  

<head>  

    <title>Multiplication Table</title>  

    <style>  

        body {  

            font-family: Arial;  

            background-color: #c5b9cd;  

        }  

  

        h2 {  

            text-align: center;  

            color: #000000;  

        }  

  

        table {  

            margin: auto;  

        }  

  

        td {  

            width: 40px;  

            height: 40px;  

            text-align: center;  

            border: 1px solid black;  

            font-weight: bold; 

        }  

    </style>  

</head>  

  

<body>  

    <h2>Multiplication Table</h2>  

  

    <table>  

        <?php  

        for ($row = 0; $row <= 10; $row++) {  

            echo "<tr>";  

  

            for ($column = 0; $column <= 10; $column++) {  

                $answer = $row * $column;  

  

                if (($row + $column) % 2 == 0) {  

                    $color = "#dec2cb";  

                } else {  

                    $color = "#abb1cf";  

                }  

  

                echo "<td style='background-color:$color;'>$answer</td>";  

            }  

  

            echo "</tr>";  

        }  

        ?>  
    </table> 
</body>  
</html> 

 