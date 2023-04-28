<?php
ob_start();
session_start();
include("connection.php");
if (isset($_POST["login"])) {
    // prepare and bind
    $stmt = $conn->prepare("SELECT * FROM commerce_login WHERE user = ? AND pass = ?");
    $stmt->bind_param("ss", $us, $pass);
    //select form database
    $us = $_POST["email"];
    $pass = md5($_POST["password"]);

    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION["id"] = $row["idUser"];
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["admin"] = $row["admin"];
        $stmt->close();
        $conn->close();
        header("location:index.php?username=$us");
    } else {
        header("location:login.php?msg=password o username non validi!");
    }
}
if (isset($_POST["register"])) {
    echo "weeelaaaa";
}
