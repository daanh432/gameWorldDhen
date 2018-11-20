<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Game World - Front Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Game World</title>
</head>
<body>
<?php include("header.html"); ?>
<div class="wrapperDhen">
    <div id="bannerDhen">
        <div id="bannerImageDhen">
            <img src="images/banner.jpg">
        </div>
        <div id="bannerTextDhen">
            <h1>Welcome to Game World!</h1>
            <h2>The place to buy your best games!</h2>
        </div>
    </div>
    <?php
    include_once("./php/mysql.php");

    $sql = "SELECT id,categoryImage from categorys";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<div id='categoryButtonsContainerDhen'>";
        while ($row = $result->fetch_assoc()) {
            echo "<a href='games.php?categoryId=" . $row["id"] . "' style='background: rgba(255,255,255, 0.4) url(\"" . $row["categoryImage"] . "\") no-repeat; background-size:contain;' class='categoryButtonsDhen'></a>";
        }
        echo "</div>";
    }

    ?>
</div>
    <?php include("footer.html"); ?>
</body>
</html>
<?php
mysqli_close($conn); // Close the database connection