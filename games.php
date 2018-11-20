<!DOCTYPE html>
<?php
$categoryName = "All games";
$categoryColor = "red";
include_once('./php/mysql.php');
if (isset($_GET["categoryId"])) {
    $categoryIdDhen = mysqli_real_escape_string($conn, $_GET["categoryId"]);
}

function PrintCategoryBanner($categoryIdDhen)
{
    global $conn; // Use the global variable conn
    global $categoryColor;// Use global variable for the color
    $sql = "SELECT * from categorys WHERE id='$categoryIdDhen'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $categoryColor = $row["categoryColor"];
            return "<h1 style='color:" . $row["categoryColor"] . "'>" . $row["categoryName"] . "</h1>";
        }
    }
}

function PrintGameItem($row, $color)
{
    echo "<div class='gameItemsDhen'>";
    echo "<img src='" . $row["gamePicture"] . "'>";
    echo "<div class='gamePricesDhen'><p>&euro;" . $row["gamePrice"] . "</p></div>";
    echo "<div class='gameNamesDhen'><p>" . $row["gameName"] . "</p></div>";
    echo "<button class='gameOrderButtonsDhen' style='background:$color;'>Order</button>";
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
        echo "<div id='categoryNameBannerDhen'>";
        echo PrintCategoryBanner($categoryIdDhen);
        echo "</div>";
        $sql = "SELECT * from games WHERE categoryId = '$categoryIdDhen'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<div id='gameListDhen'>";
            while ($row = $result->fetch_assoc()) {
                PrintGameItem($row, $categoryColor); // Run the function to print every row to the viewport
            }
            echo "<div class='clearfix'></div>";
            echo "</div>";
        } else {
            header('HTTP/1.1 404 Not Found');
            echo "<div class='gameCategoryIncorrectDhen'>";
            echo "<p>Game category: " . $_GET["categoryId"] . " doesn't contain any games!</p>";
            echo "</dev>";
        }
    } else {
        $sql = "SELECT * from games";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<div id='gameListDhen'>";
            while ($row = $result->fetch_assoc()) {
                PrintGameItem($row, $categoryColor); // Run the function to print every row to the viewport
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