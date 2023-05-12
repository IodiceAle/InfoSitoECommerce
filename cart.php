<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.css">
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function logout_user() {
            if (confirm('Are You Sure?')) {
                window.location.href = 'logout.php';
            }
        }

        function delete_itm(totId, caId, pId, quan) {
            if (confirm('Are You Sure?')) {
                window.location.href = 'remItm.php?idR=' + uid + '?proId=' + pId;
            }
        }
    </script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <header>
        <!-- Jumbotron -->
        <div class="p-3 text-center bg-white border-bottom">
            <div class="container">
                <div class="row gy-3">
                    <!-- Left elements -->
                    <div class="col-lg-2 col-sm-4 col-4">
                        <a href="index.php" class="float-start">
                            <img src="" alt="logo" height="35" />
                        </a>
                    </div>
                    <!-- Left elements -->

                    <!-- Center elements -->
                    <div class="order-lg-last col-lg-4 col-sm-8 col-8">
                        <div class="d-flex float-end">
                            <?php
                            if (!isset($_SESSION["id"]))
                                echo '<a href="sign.php" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center"> <i class="fas fa-user-alt m-1 me-md-2"></i>
                                        <p class="d-none d-md-block mb-0">Sign in</p>
                                    </a>';
                            else
                                echo '<div class="dropdown-flex float-end">
                                    <button class="btn border rounded py-1 px-3 nav-link d-flex align-items-center dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user-alt m-1 me-md-2"></i>
                                    <p class="d-none d-md-block mb-0">' . $_SESSION["username"] . '</p>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="user.php">Profilo</a></li>
                                    <li><a class="dropdown-item" href="javascript: logout_user()">Logout</a></li>
                                    </ul>
                                </div>';
                            ?>
                            <a href="cart.php" class="border rounded py-1 px-3 nav-link d-flex align-items-center"> <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">My cart</p>
                                <?php
                                if (isset($_SESSION['id'])) {
                                    include("connection.php");
                                    $sql = "SELECT count(*) as num_items from commerce_contiene where idCart=(SELECT max(id) from commerce_carrello where idUser=" . $_SESSION['id'] . ")";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $num_items = $row['num_items'];
                                        if ($num_items > 0) {
                                            echo '<span class="badge bg-primary ms-2">' . $num_items . '</span>';
                                        }
                                    }
                                } else if (isset($_COOKIE['cart'])) {
                                    $cart = json_decode($_COOKIE['cart'], true);
                                    $num_items = count($cart);
                                    if ($num_items > 0) {
                                        echo '<span class="badge bg-primary ms-2">' . $num_items . '</span>';
                                    }
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                    <!-- Center elements -->

                    <!-- Right elements -->
                    <div class="col-lg-6 col-md-12 col-12">
                        <form action="lista.php" method="get">
                            <div class="input-group float-center">

                                <div class="form-outline" style="width: 80%;">
                                    <input type="search" placeholder="Search" <?php
                                                                                if (isset($_GET["cerca"]))
                                                                                    echo "value='" . $_GET["cerca"] . "'"
                                                                                ?>name="cerca" class="form-control" />
                                </div>
                                <button type="submit" style="width: 15%;" class="btn btn-primary shadow-0">
                                    <i class="fas fa-search"></i>
                                </button>

                            </div>
                        </form>
                    </div>
                    <!-- Right elements -->
                </div>
            </div>
        </div>
        <!-- Jumbotron -->

        <!-- Heading -->
        <div class="bg-primary">
            <div class="container py-4">
                <!-- Breadcrumb -->
                <nav class="d-flex">
                    <h6 class="mb-0">
                        <a id="blu" href="index.php" class="text-white-50">Home</a>
                        <span class="text-white-50 mx-2"> / </span>
                        <a class="text-white"><u>Shopping Cart</u></a>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
        </div>
        <!-- Heading -->
    </header>

    <!-- cart + summary -->
    <section class="bg-light my-5">
        <div class="container">
            <div class="row">
                <!-- cart -->
                <div class="col-lg-9">
                    <div class="card border shadow-0">
                        <div class="m-4">
                            <h4 class="card-title mb-4">Your shopping cart</h4>

                            <?php
                            if (isset($_SESSION["id"])) {
                                include("connection.php");
                                $sql = "SELECT * from ((commerce_contiene cont join commerce_carrello car on cont.idCart=car.id) join commerce_prodotti pr on cont.idProd=pr.idP) 
join commerce_login lo on car.idUser=lo.id where lo.id=" . $_SESSION["id"] . " AND car.id=(select max(id) from commerce_carrello where idUser=" . $_SESSION["id"] . ")";

                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<div class="row gy-3">
                                <div class="col-lg-5">
                                    <div class="me-lg-5">
                                        <div class="d-flex">
                                            <a href="dettagli.php?id=' . $row["idP"] . '"><img src="' . $row["image"] . '" class="border rounded me-3" style="width: 96px; height: 96px; object-fit: scale-down;" /></a>
                                            <div class="">
                                                <a id="sottLin" href="dettagli.php?id=' . $row["idP"] . '" class="nav-link">' . $row["nome"] . '</a>
                                                <a id="sottLin" href="dettagli.php?id=' . $row["idP"] . '"><p class="text-muted">' . $row["descrizione"] . '</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                                    <div class="">
                                        <text class="h6">';
                                        $totp = intval($row["quanto"]) * floatval($row["prezzo"]);
                                        echo $totp . ' €</text> </br>
                                        <small class="text-muted text-nowrap"> ' . $row["prezzo"] . ' € / per item </small>
                                    </div>
                                </div>
                                <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                    <div class="float-md-end">
                                        <a href="javascript: delete_itm(' . $row['idTot'] . ', ' . $row['idCart'] . ',' . $row['quanto'] . ')">Remove</a>
                                    </div>
                                </div>
                            </div>';
                                    }
                                } else
                                    echo 'No Product in Cart yet.';
                            }




                            if (isset($_COOKIE["cart"])) {
                                $cart_items = json_decode($_COOKIE['cart'], true);
                                if (!empty($cart)) {
                                    foreach ($cart as $item) {
                                        include("connection.php");
                                        $sql = "SELECT * from commerce_prodotti where idP=" . $item["Pid"] . "";

                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<div class="row gy-3">
                                    <div class="col-lg-5">
                                        <div class="me-lg-5">
                                            <div class="d-flex">
                                                <a href="dettagli.php?id=' . $item["Pid"] . '"><img src="' . $row["image"] . '" class="border rounded me-3" style="width: 96px; height: 96px; object-fit: scale-down;" /></a>
                                                <div class="">
                                                    <a id="sottLin" href="dettagli.php?id=' . $item["Pid"] . '" class="nav-link">' . $row["nome"] . '</a>
                                                    <a id="sottLin" href="dettagli.php?id=' . $item["Pid"] . '"><p class="text-muted">' . $row["descrizione"] . '</p></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-6 d-flex flex-row flex-lg-column flex-xl-row text-nowrap">
                                        <div class="">
                                            <text class="h6">';
                                                $totp = intval($item["quanto"]) * floatval($row["prezzo"]);
                                                echo $totp . ' €</text> <br />
                                            <small class="text-muted text-nowrap"> ' . $row["prezzo"] . ' € / per item </small>
                                        </div>
                                    </div>
                                    <div class="col-lg col-sm-6 d-flex justify-content-sm-center justify-content-md-start justify-content-lg-center justify-content-xl-end mb-2">
                                        <div class="float-md-end">
                                            <a href="javascript: delete_itm(' . $item['Pid'] . ')"> Remove</a>
                                        </div>
                                    </div>
                                </div>';
                                            }
                                        }
                                    }
                                } else {
                                    echo 'No Product in Cart yet.';
                                }
                            }
                            ?>

                        </div>

                        <div class="border-top pt-4 mx-4 mb-4">
                            <h5 class="card-title mb-3">Shipping info</h5>
                            <div class="row mb-3">
                                <div class="col-lg-4 mb-3">
                                    <!-- Default checked radio -->
                                    <div class="form-check h-100 border rounded-3">
                                        <div class="p-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Express delivery <br />
                                                <small class="text-muted">3-4 days via Fedex </small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <!-- Default radio -->
                                    <div class="form-check h-100 border rounded-3">
                                        <div class="p-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Post office <br />
                                                <small class="text-muted">20-30 days via post </small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 mb-3">
                                    <!-- Default radio -->
                                    <div class="form-check h-100 border rounded-3">
                                        <div class="p-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                Self pick-up <br />
                                                <small class="text-muted">Come to our shop </small>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- cart -->
                <!-- summary -->
                <?php
                if (isset($_SESSION["id"])) {
                    include("connection.php");
                    $sql = "SELECT * from ((commerce_contiene cont join commerce_carrello car on cont.idCart=car.id) join commerce_prodotti pr on cont.idProd=pr.idP) 
join commerce_login lo on car.idUser=lo.id where lo.id=" . $_SESSION["id"] . " AND car.id=(select max(id) from commerce_carrello where idUser=" . $_SESSION["id"] . ")";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo
                            '<div class="col-lg-3">
                    <!-- <div class="card mb-3 border shadow-0">
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label class="form-label">Have coupon?</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control border" name="" placeholder="Coupon code" />
                                        <button class="btn btn-light border">Apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> -->
                    <div class="card shadow-0 border">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Total price:</p>
                                <p class="mb-2">';
                            $totp += intval($row["quanto"]) * floatval($row["prezzo"]);
                            echo $totp . ' €</p>
                            </div>
                            <!-- <div class="d-flex justify-content-between">
                                <p class="mb-2">Discount:</p>
                                <p class="mb-2 text-success">-$60.00</p>
                            </div> -->
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">TAX:</p>
                                <p class="mb-2">19.00 €</p>
                            </div>
                            <hr />
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Total price:</p>
                                <p class="mb-2 fw-bold">';
                            $totp += 19;
                            echo $totp . ' €</p>
                            </div>

                            <div class="mt-3">
                                <a href="compra.php?cartId=" class="btn btn-success w-100 shadow-0 mb-2"> Make Purchase </a>
                                <a href="index.php" class="btn btn-light w-100 border mt-2"> Back to shop </a>
                            </div>
                        </div>
                    </div>
                </div>';
                        }
                    }
                }

                ?>
                <!-- summary -->
            </div>
        </div>
    </section>
    <!-- cart + summary -->

    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted bg-primary mt-3">

        <div class="">
            <div class="container">
                <div class="d-flex justify-content-between py-4 border-top">
                    <!--- payment --->
                    <div>
                        <i class="fab fa-lg fa-cc-visa text-white"></i>
                        <i class="fab fa-lg fa-cc-amex text-white"></i>
                        <i class="fab fa-lg fa-cc-mastercard text-white"></i>
                        <i class="fab fa-lg fa-cc-paypal text-white"></i>
                    </div>
                    <!--- payment --->

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer -->
</body>

</html>