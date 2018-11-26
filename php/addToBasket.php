<?php

session_start();

if (isset($_GET["gameId"]) && isset($_GET["returnUrl"])) {
    if (isset($_SESSION["basket"])) {
        if (isset($_SESSION["basket"][$_GET["gameId"]])) {
            $_SESSION["basket"][$_GET["gameId"]] = ["amount" => $_SESSION["basket"][$_GET["gameId"]]["amount"] + 1];
        } else {
            $_SESSION["basket"][$_GET["gameId"]] = ["amount" => 1];
        }
    } else {
        $_SESSION["basket"] = [];
        $_SESSION["basket"][$_GET["gameId"]] = ["amount" => 1];
    }
}

header("Location: ../basket.php");