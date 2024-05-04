<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Four: PHP Multiplication Table</title>
    
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <nav>
        <a href="practiceone.html">Practice One</a>
        <a href="practicetwo.html">Practice Two</a>
        <a href="practicethree.html">Practice Three</a>
        <a href="practicefour.html">Practice Four (PHP)</a>
    </nav>
    <header>
        <h1>PHP Multiplication Table</h1>
    </header>
    
    <form method="get">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Generate Table</button>
    </form>

    <?php
    if(isset($_GET['number'])) {
        $number = $_GET['number'];
        echo "<h2>Multiplication Table up to $number</h2>";
        echo "<table>";
        // Table header
        echo "<tr><th>*</th>";
        for ($i = 1; $i <= $number; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";
        // Table body
        for ($i = 1; $i <= $number; $i++) {
            echo "<tr>";
            echo "<th>$i</th>";
            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>
</html>
