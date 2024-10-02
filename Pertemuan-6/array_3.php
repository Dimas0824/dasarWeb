<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <table style="width:100%">
        <tr>
            <th>Title</th>
            <th>Rating</th>
        </tr>
        <?php
        $movies = array(
            array("The Avengers", 2012, 8.1),
            array("Guardians of the Galaxy", 2014, 8.1),
            array("Iron Man", 2008, 7.9),
        );

        foreach ($movies as $movie) {
            echo "<tr>";
            echo "<td>" . $movie[0] . "</td>";
            echo "<td>" . $movie[2] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>