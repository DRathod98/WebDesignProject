<?php
session_start();

if(!isset($_SESSION["basket"]))
{
    $_SESSION["basket"] = [];
}

if(isset($_POST["name"]) && isset($_POST["value"]))
{
    $pid = $_POST["name"];
    $quantity = $_POST["value"];
    AddToCart($pid, $quantity);
}

if(isset($_GET["name"]))
{
echo GetFromBasket($_GET["name"]);
}

function AddToCart($pid, $quantity) {
    if(is_array($_SESSION['basket']) && array_key_exists($pid, $_SESSION['basket'])) {
        $_SESSION['basket'][$pid]['quantity'] = $quantity;
    } else {
         $_SESSION['basket'][$pid] = array(
             'product_id' => $pid,
             'quantity' => $quantity
         );
    }
 }

 function GetFromBasket($name)
 {
    if(is_array($_SESSION['basket']) && array_key_exists($name, $_SESSION['basket'])) {
        return $_SESSION['basket'][$name]['quantity'];
    }
    return 0;
 }
?>