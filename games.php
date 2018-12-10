<!DOCTYPE html>
<?php
//Default variables
include_once('./php/mysql.php');
if (isset($_GET["categoryId"])) {
    $categoryIdDhen = mysqli_real_escape_string($conn, $_GET["categoryId"]);
}

function PrintCategoryHeader($categoryColor, $categoryTextColor, $categoryName)
{
    echo "<div id='categoryNameBannerDhen' style='background:$categoryColor'>";
    echo "<h1 style='color:$categoryTextColor;'>$categoryName</h1>";
    echo "</div>";
}

function PrintGameItem($row)
{
    $gameId = $row["gameId"];
    $categoryColor = $row["categoryColor"];
    $categoryTextColor = $row["categoryTextColor"];
    echo "<div class='gameItemsDhen'>";
    echo "<a href='product.php?productId=" . $row["gameId"] . "'><img src='" . $row["gamePicture"] . "'></a>";
    echo "<div class='gamePricesDhen' style='background:$categoryColor; color:$categoryTextColor'><p>&euro;" . $row["gamePrice"] . "</p></div>";
    echo "<div class='gameNamesDhen'><a href='product.php?productId=" . $row["gameId"] . "'>" . $row["gameName"] . "</a></div>";
//    echo "<a class='gameOrderButtonsDhen' href='php/addToBasket.php?gameId=" . $row["gameId"] . "' style='color:$categoryTextColor; background:$categoryColor;'>Order</a>";
    echo "<input class='hiddenInputDhen' type='checkbox' id='checkbox$gameId' name='$gameId' value='AddToBasket'>";
    echo "<button type='button' onclick=\"addToBasket(this, '" . $row["gameId"] . "')\" class='gameOrderButtonsDhen' style='color:$categoryTextColor; background:$categoryColor;'>Order</button>";
    echo "</div>";
}

?>

<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Game World - Store Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/addToBasket.js"></script>
    <title>Game World - Store</title>
</head>
<body>
<?php include("header.php"); ?>
<div class="wrapperDhen">
    <form action="php/addToBasket.php" method="post">
        <?php
        if (isset($_GET["categoryId"])) {

            $sql = "SELECT * from categorys WHERE categoryId='$categoryIdDhen'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $categoryColor = $row["categoryColor"];
                    $categoryTextColor = $row["categoryTextColor"];
                    $categoryName = $row["categoryName"];
                    PrintCategoryHeader($categoryColor, $categoryTextColor, $categoryName);
                }
            }

            $sql = "SELECT * from games NATURAL JOIN categorys WHERE categoryId = '$categoryIdDhen' ORDER BY gamePrice DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo "<div id='orderButtonContainerDhen'>";
                echo "<input class='multiOrderButtonDhen' type='submit' value='Order All'>";
                echo "<p>Selected items: <span id='amountSelectedDisplayDhen'>0</span></p>";
                echo "</div>";
                echo "<div id='gameListDhen'>";
                while ($row = $result->fetch_assoc()) {
                    PrintGameItem($row); // Run the function to print every row to the viewport
                }
                echo "<div class='clearfix'></div>";
                echo "</div>";
            } else {
                echo "<div class='gameCategoryIncorrectDhen'>";
                echo "<p>Game category: " . $_GET["categoryId"] . " doesn't contain any games!</p>";
                echo "</div>";
            }
        } else {
            $sql = "SELECT * from games NATURAL JOIN categorys ORDER BY categoryId ASC, gamePrice DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo "<div id='orderButtonContainerDhen'>";
                echo "<input class='multiOrderButtonDhen' type='submit' value='Order All'>";
                echo "<p>Selected items: <span id='amountSelectedDisplayDhen'>0</span></p>";
                echo "</div>";
                echo "<div id='gameListDhen'>";
                while ($row = $result->fetch_assoc()) {
                    PrintGameItem($row); // Run the function to print every row to the viewport
                }
                echo "<div class='clearfix'></div>";
                echo "</div>";
            }
        }


        ?>
    </form>
</div>
<?php include("footer.html"); ?>
</body>
</html>

<?php
mysqli_close($conn); // Close the database connection