<?php
ob_start();
session_start();
if (!isset($_SESSION['id']) || !isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

include("connection.php");
if (isset($_POST["addR"])) {
    $stmt = $conn->prepare("INSERT INTO  commerce_comments (text,star,idUser,idProd) VALUES (? , ?,?,?)");
    $stmt->bind_param("ssss", $txt, $str, $uId, $idP);
    //select form database
    $txt = $_POST["commento"];
    $str = $_POST["rate"];
    $uId = $_SESSION["id"];
    $idP = $_POST["proID"];

    $stmt->execute();
    $stmt->close();

    echo '<script type="text/javascript">alert("Commento Aggiunto Successo!");window.location.href = "dettagli.php?id=' . $_POST["proID"] . '";</script>';
} else
    echo '<script type="text/javascript">alert("ERRORE!");window.location.href = "dettagli.php?id=' . $_POST["proID"] . '";</script>';
