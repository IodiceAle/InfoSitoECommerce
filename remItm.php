<?php
ob_start();
session_start();

// When a non-registered user adds items to the cart
if (!isset($_SESSION['id']) && isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
} else {
    $cart = array();
}

include("connection.php");
if (isset($_SESSION['id'])) {
    $sql = "SELECT max(id) from commerce_carrello where idUser=" . $_SESSION["id"] . "";
    $maxId = 0;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $maxId = $row["max(id)"];
        $sql = "DELETE FROM commerce_contiene WHERE idCart=" . $maxId . " AND idProd=" . $_GET["idPro"] . " AND idTot=" . $_GET["idR"] . "";
        echo $sql;
        $result = $conn->query($sql);
    }
}
if (!isset($_SESSION["id"])) {
    $pid = $_GET["idPro"];
    $quanto = $_GET["quanto"];
    foreach ($cart as $key => $item) {
        if ($item['Pid'] == $pid && $item['quanto'] == $quanto) {
            unset($cart[$key]);
            break; // stop searching after the first match is found
        }
    }
    setcookie('cart', json_encode($cart), time() + 14 * 24 * 60 * 60, "/");
}
header("Location:cart.php");
