<?php
session_start();

if (isset($_SESSION["basketDhen"]) && isset($_GET["gameId"])) {
    if (isset($_GET["amount"])) {
        if (isset($_SESSION["basketDhen"][$_GET["gameId"]])) {
            if ($_GET["amount"] > 0 && $_GET["amount"] <= 10) {
                $_SESSION["basketDhen"][$_GET["gameId"]] = ["amount" => $_GET["amount"]];
            }
        }
    } else if (isset($_GET["delete"])) {
        unset($_SESSION["basketDhen"][$_GET["gameId"]]);
    }
}

header("Location: ../basket.php");