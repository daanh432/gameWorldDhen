<?php
session_start();

if (isset($_SESSION["basketDhen"]) && isset($_GET["gameId"])) {
    if (isset($_GET["amount"])) {
        $amount = round($_GET["amount"], 0);
        if (isset($_SESSION["basketDhen"][$_GET["gameId"]])) {
            if ($amount > 0 && $amount <= 10) {
                $_SESSION["basketDhen"][$_GET["gameId"]] = ["amount" => $amount];
            }
        }
    } else if (isset($_GET["delete"])) {
        unset($_SESSION["basketDhen"][$_GET["gameId"]]);
    }
}

header("Location: ../basket.php");