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

        $_SESSION["id"] = $row["id"];
        $_SESSION["username"] = $_POST["email"];
        $_SESSION["admin"] = $row["admin"];
        $stmt->close();
        $conn->close();
        header("location:index.php?username=$us");
    } else
        echo '<script type="text/javascript">alert("password o username non validi!");window.location.href = "sign.php";</script>';
}

if (isset($_POST["register"])) {
    if ($_POST["password"] == $_POST["Cpassword"]) {
        $stmt = $conn->prepare("SELECT * FROM commerce_login WHERE user = ?");
        $stmt->bind_param("s", $us);
        //select form database
        $us = $_POST["name"];

        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 0) {
            $stmt->close();
            $stmt = $conn->prepare("INSERT INTO  commerce_login (user,pass) VALUES (? , ?)");
            $stmt->bind_param("ss", $us, $pass);
            //select form database
            $us = $_POST["name"];
            $pass = md5($_POST["password"]);

            $stmt->execute();
            $stmt->close();
            echo '<script type="text/javascript">alert("registrazione effettuata con successo!");window.location.href = "sign.php";</script>';
        } else {
            echo "0 results";
            echo '<script type="text/javascript">alert("nome utente già registrato!");window.location.href = "reg.php";</script>';
        }
        $conn->close();
    } else
        echo '<script type="text/javascript">alert("password non uguali!");window.location.href = "reg.php";</script>';
}
