<html>
    <head>
        <link rel="stylesheet" href="tfa4-2.css">
        <title> String Functions </title>
    </head>
    <body>
        <?php
            $names = array("giyu", "gyeomei", "sanemi", "obanai", "muichiro", "mitsuri", "shinobu", "kyojuro", "tengen", "genya");

            echo "<table border='2'>";
            echo "<tr><th colspan='6'><b>List of names : giyu, gyeomei, sanemi, obanai, muichiro, mitsuri, shinobu, kyojuro, tengen, genya</b></th></tr>";
            echo "<tr>
                <th>Name</th>
                <th>Number of Characters</th>
                <th>Uppercase First</th>
                <th>Replace Vowels with @</th>
                <th>Check Position of 'a'</th>
                <th>Reverse name</th>
                </tr>";

        
            foreach ($names as $row) {
                $characters = strlen($row);
                $uppercaseWords = ucwords($row);
                $replaceVowels = str_replace(array('a', 'e', 'i', 'o', 'u'), '@', $row);
                $positionOfA = strpos($row, 'a');
                $reverseName = strrev($row);

                echo "<tr>";
                echo "<td>" . $row . "</td>";
                echo "<td>" . $characters . "</td>";
                echo "<td>" . $uppercaseWords . "</td>";
                echo "<td>" . $replaceVowels . "</td>";
                echo "<td>" . ($positionOfA !== false ? $positionOfA : "-") . "</td>";
                echo "<td>" . $reverseName . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        ?>
    </body>
</html>