<?php
ob_start();
session_start();
if (!isset($_SESSION['id']) || !isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

include("connection.php");
if (isset($_GET["id"])) {
    $sql = "DELETE FROM commerce_comments WHERE idCom=" . $_GET["idR"] . "";
    $result = $conn->query($sql);
    $conn->close();
    echo '<script type="text/javascript">alert("Eliminazione Successo!");window.location.href = "dettagli.php?id=' . $_GET["proId"] . '";</script>';
} else
    echo '<script type="text/javascript">alert("ERRORE!");window.location.href = "dettagli.php?id=' . $_GET["proId"] . '";</script>';
