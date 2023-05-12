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
        if (isset($_COOKIE["cart"])) {
            // Delete cart cookie
            setcookie('cart', "", time() - 3600, "/");
        }
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

            $id = 0;
            $sql = "SELECT id from commerce_login where user='" . $us . "'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $id = $row["id"];
            }

            $sql = "INSERT into commerce_carrello (data,idUser) values ('" . date("Y-m-d") . "'," . $id . ")";
            $result = $conn->query($sql);

            if (isset($_COOKIE["cart"])) {
                $sql = "SELECT max(id) from commerce_carrello where idUser=" . $id . "";
                $maxId = 0;
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $maxId = $row["max(id)"];
                }

                // Retrieve cart items from cookie
                $cart = json_decode($_COOKIE['cart'], true);
                // Add cart items to user's cart in the database
                foreach ($cart as $item) {
                    $sql = "INSERT INTO commerce_contiene (idCart, idProd, quanto) VALUES (" . $maxId . ", " . $item["Pid"] . ", " . $item["quanto"] . ")";
                    $result = $conn->query($sql);
                }
                // Delete cart cookie
                setcookie('cart', "", time() - 3600, "/");
            }

            echo '<script type="text/javascript">alert("registrazione effettuata con successo!");window.location.href = "sign.php";</script>';
        } else {
            echo "0 results";
            echo '<script type="text/javascript">alert("nome utente già registrato!");window.location.href = "reg.php";</script>';
        }
        $conn->close();
    } else
        echo '<script type="text/javascript">alert("password non uguali!");window.location.href = "reg.php";</script>';
}
