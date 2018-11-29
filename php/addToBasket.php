<?php

session_start();

if (isset($_GET["gameId"])) {
    if (isset($_SESSION["basketDhen"])) {
        if (isset($_SESSION["basketDhen"][$_GET["gameId"]])) {
            $_SESSION["basketDhen"][$_GET["gameId"]] = ["amount" => $_SESSION["basketDhen"][$_GET["gameId"]]["amount"] + 1];
        } else {
            $_SESSION["basketDhen"][$_GET["gameId"]] = ["amount" => 1];
        }
    } else {
        $_SESSION["basketDhen"] = [];
        $_SESSION["basketDhen"][$_GET["gameId"]] = ["amount" => 1];
    }
}

header("Location: ../basket.php");
die();