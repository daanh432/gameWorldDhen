<!DOCTYPE html>
<?php
//Default variables
include_once('./php/mysql.php');
?>

<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Game World - Store Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Game World - Store</title>
</head>
<body>
<?php include("header.html"); ?>
<div class="wrapperDhen">
    <?php
    if (isset($_GET["productId"])) {
        $productIdDhen = mysqli_real_escape_string($conn, $_GET["productId"]);
        $sql = "SELECT * from games JOIN categorys WHERE categorys.id = games.categoryId AND games.gameId = '$productIdDhen'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<div id='productInfoDhen'>";
            while ($row = $result->fetch_assoc()) {
                $categoryColor = $row["categoryColor"];
                $categoryTextColor = $row["categoryTextColor"];
                $gameId = $row["gameId"];
                $gameName = $row["gameName"];
                $gameDescription = $row["gameDescription"];
                $gamePicture = $row["gamePicture"];
                $gamePicture2 = $row["gamePicture2"];
                $gamePicture3 = $row["gamePicture3"];
                ?>


                <div id="productExampleImagesDhen">
                    <img id="productInfoSecondaryPictureDhen" src="<?php echo $gamePicture2; ?>">
                    <img id="productInfoTertiaryPictureDhen" src="<?php echo $gamePicture3; ?>">
                    <div class='clearfix'></div>
                </div>

                <div id="productInfoDetailsDhen">
                    <img id="productInfoMainPictureDhen" src="<?php echo $gamePicture; ?>">
                    <h1 style='color:<?php echo $categoryColor; ?>'><?php echo $gameName; ?></h1>
                    <p><?php echo $gameDescription; ?></p>
                    <div id="productInfoOrderDhen">
                        <form action="php/addToBasket.php" method="GET">
                            <input type="text" class="hiddenInputDhen" name="gameId" value="<?php echo $gameId; ?>">
                            <input type="number" name="amount" step="1" min="1" max="10" value="1">
                            <input type="submit">
                        </form>
                    </div>
                </div>

                <?php
            }
            echo "<div class='clearfix'></div>";
            echo "</div>";
        } else {
            echo "<div class='gameCategoryIncorrectDhen'>";
            echo "<p>Product id: " . $_GET["productId"] . " doesn't exist!</p>";
            echo "</div>";
        }
    } else {
        echo "<div class='gameCategoryIncorrectDhen'>";
        echo "<p>Please specify a product id!</p>";
        echo "</div>";
    }


    ?>
</div>
<?php include("footer.html"); ?>
</body>
</html>

<?php
mysqli_close($conn); // Close the database connection