<?php
ob_start();
session_start();

// When a non-registered user adds items to the cart
if (!isset($_SESSION['id']) && isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
} else {
    $cart = array();
}

if (isset($_POST["add"])) {
    include("connection.php");
    if (isset($_SESSION['id'])) {
        $sql = "SELECT max(id) from commerce_carrello where idUser=" . $_SESSION["id"] . "";
        $maxId = 0;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $maxId = $row["max(id)"];
            $sql = "INSERT INTO commerce_contiene (idCart, idProd, quanto) VALUES (" . $maxId . "," . $_POST["proID"] . "," . $_POST["quantita"] . ")";
            echo $sql;
            $result = $conn->query($sql);
        }
    } else if (!isset($_SESSION["id"])) {
        $item = array(
            'Pid' => $_POST["proID"],
            'quanto' => $_POST["quantita"]
        );
        array_push($cart, $item);
        setcookie('cart', json_encode($cart), time() + 14 * 24 * 60 * 60, "/");
    }
    header("Location:lista.php");
}
