<?php

session_start();


if (!isset($_SESSION["basketDhen"])) {
    $_SESSION["basketDhen"] = [];
}

if (isset($_GET["amount"]) && isset($_GET["gameId"]) && is_numeric($_GET["gameId"]) && is_numeric($_GET["amount"])) {
    $amount = round($_GET["amount"], 0);
    $gameId = $_GET["gameId"];
    if ($amount >= 1 && $amount <= 10) {
        if (isset($_SESSION["basketDhen"][$gameId])) {
            $amount = $_SESSION["basketDhen"][$gameId]["amount"] + $amount;
            if ($amount >= 1 && $amount <= 10) {
                $_SESSION["basketDhen"][$gameId] = ["amount" => $amount];
            }
        } else {
            $_SESSION["basketDhen"][$gameId] = ["amount" => $amount];
        }
    }
} else {
    foreach ($_POST as $key => $value) {
        if ($value == "AddToBasket") {
            if (isset($_SESSION["basketDhen"][$key])) {
                $amount = $_SESSION["basketDhen"][$key]["amount"] + 1;
                if ($amount >= 1 && $amount <= 10) {
                    $_SESSION["basketDhen"][$key] = ["amount" => $amount];
                }
            } else {
                $_SESSION["basketDhen"][$key] = ["amount" => 1];
            }
        }
    }
}


header("Location: ../basket.php");
die();