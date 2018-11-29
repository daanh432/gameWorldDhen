<!DOCTYPE html>
<?php
//Default variables
include_once('./php/mysql.php');
if (isset($_GET["categoryId"])) {
    $categoryIdDhen = mysqli_real_escape_string($conn, $_GET["categoryId"]);
}

function PrintCategoryHeader($categoryColor, $categoryTextColor, $categoryName){
    echo "<div id='categoryNameBannerDhen' style='background:$categoryColor'>";
    echo "<h1 style='color:$categoryTextColor;'>$categoryName</h1>";
    echo "</div>";
}

function PrintGameItem($row)
{
    $categoryColor = $row["categoryColor"];
    $categoryTextColor = $row["categoryTextColor"];
    echo "<div class='gameItemsDhen'>";
    echo "<img src='" . $row["gamePicture"] . "'>";
    echo "<div class='gamePricesDhen' style='background:$categoryColor; color:$categoryTextColor'><p>&euro;" . $row["gamePrice"] . "</p></div>";
    echo "<div class='gameNamesDhen'><p>" . $row["gameName"] . "</p></div>";
    echo "<a class='gameOrderButtonsDhen' href='php/addToBasket.php?gameId=" . $row["gameId"] . "' style='color:$categoryTextColor; background:$categoryColor;'>Order</a>";
    echo "</div>";
}

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
    if (isset($_GET["categoryId"])) {

        $sql = "SELECT * from categorys WHERE id='$categoryIdDhen'";
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

        $sql = "SELECT * from games JOIN categorys WHERE categorys.id = categoryId AND categoryId = '$categoryIdDhen' ORDER BY gamePrice DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
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
        $sql = "SELECT * from games JOIN categorys WHERE categorys.id = categoryId ORDER BY categoryId ASC, gamePrice DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<div id='gameListDhen'>";
            while ($row = $result->fetch_assoc()) {
                PrintGameItem($row); // Run the function to print every row to the viewport
            }
            echo "<div class='clearfix'></div>";
            echo "</div>";
        }
    }


    ?>
</div>
<?php include("footer.html"); ?>
</body>
</html>

<?php
mysqli_close($conn); // Close the database connection