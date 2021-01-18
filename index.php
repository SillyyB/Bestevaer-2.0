<?php include ("berekeningen.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET["ship"])){
        $name = $_GET["ship"];
        $ship = GetShip($_GET["ship"]);
        echo "<h1>$name</h1>";
        echo "<p>GTW = {$ship['GT']}</p>";
    }
    ?>
</body>
</html>