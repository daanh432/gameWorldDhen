<?php
include_once('./php/mysql.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Game World - Checkout Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Game World - Checkout</title>
</head>
<body>
<?php include("header.php"); ?>
<div class="wrapperDhen">
    <?php

    if (isset($_SESSION["basketDhen"])) {
        $basketKeys = array_keys($_SESSION["basketDhen"]);
        $sql = "SELECT * from games WHERE gameId in (" . implode(",", $basketKeys) . ")";
        $totalSum = 0.00;
        $result = $conn->query($sql);
        echo "<table class='gameItemsCheckoutDhen'>";
        echo "<th>Image</th><th>Name</th><th>Description</th><th></th><th>Price</th>";
        if (is_object($result)) {
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $gameId = $row["gameId"];
                    $gameAmount = $_SESSION["basketDhen"][$row["gameId"]]["amount"];
                    $price = round($row["gamePrice"] * $gameAmount,2);
                    echo "<tr>";
                    echo "<td><img alt='Product Primary Picture' src='" . $row["gamePicture"] . "'></td>";
                    echo "<td><p>" . $row["gameName"] . "</p></td>";
                    echo "<td><p>" . $row["gameDescription"] . "</p></td>";
                    echo "<td><form method='GET' action='php/changeBasket.php'>";
                    echo "<input type='text' class='hiddenInputDhen' name='gameId' value='$gameId'>";
                    echo "<input type='number' onchange='this.form.submit()' class='gameAmountCheckoutDhen' name='amount' step='1' min='1' max='10' value='$gameAmount'>";
                    echo "<a class='gameRemoveCheckoutDhen' href='php/changeBasket.php?gameId=$gameId&delete=1'>X</a>";
                    echo "</form></td>";
                    echo "<td><p>&euro;" . number_format($price,2) . "</p></td>";
                    echo "</tr>";
                    $totalSum = $totalSum +  $price;
                }
            }
        }
        echo "<tr><td></td><td></td><td></td><td><p>Total: &euro;" . number_format($totalSum,2) . "</p></td><td><button id='goToCheckoutDhen'>Go to checkout</button></td></tr>";
        echo "</table>";

    } else {
        echo "<div class='gameCategoryIncorrectDhen'>";
        echo "<p>It looks like you don't have any games in your basket! Add some on <a href='games.php'>this</a> page</p>";
        echo "</div>";
    }

    ?>
</div>
<?php include("footer.html"); ?>
</body>
</html>