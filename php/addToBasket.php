<?php

session_start();

$amountVal = 1;

if (isset($_GET["amount"])) {
    $amountVal = $_GET["amount"];
}

if (isset($_GET["gameId"])) {
    if (isset($_SESSION["basketDhen"])) {
        // IF session exists check if game is in it if yes then add another copy of same game
        if (isset($_SESSION["basketDhen"][$_GET["gameId"]]) && !isset($_GET["amount"])) {
            $_SESSION["basketDhen"][$_GET["gameId"]] = ["amount" => $_SESSION["basketDhen"][$_GET["gameId"]]["amount"] + 1];
        } else {
            $_SESSION["basketDhen"][$_GET["gameId"]] = ["amount" => $amountVal];
        }
    } else {
        // If session doesnt exist yet create it and add the game to it
        $_SESSION["basketDhen"] = [];
        $_SESSION["basketDhen"][$_GET["gameId"]] = ["amount" => $amountVal];
    }
}

header("Location: ../basket.php");
die();