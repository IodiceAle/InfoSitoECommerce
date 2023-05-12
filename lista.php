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
    <title>All Products</title>
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
    </script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!--Main Navigation-->
    <header>
        <!-- Jumbotron -->
        <div class="p-3 text-center bg-white border-bottom">
            <div class="container">
                <div class="row gy-3">
                    <!-- Left elements -->
                    <div class="col-lg-2 col-sm-4 col-4">
                        <a href="index.php" class="float-start">
                            <img src="#" alt="logo" height="35" />
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
        <div class="bg-primary mb-4">
            <div class="container py-4">
                <h3 id="blu" class="text-white mt-2"><?php
                                                        include("connection.php");
                                                        if (!isset($_GET["cat"]) && !isset($_GET["cerca"]) && !isset($_POST["filtro"]))
                                                            echo "All Products";
                                                        if (isset($_GET["cat"])) {
                                                            $sql = "SELECT * FROM commerce_categorie where id=" . $_GET["cat"] . "";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                $row = $result->fetch_assoc();
                                                                echo $row["tipo"];
                                                            }
                                                        }
                                                        if (isset($_GET["cerca"]) && $_GET["cerca"] != "") {
                                                            echo "Risultati ricerca per: " . $_GET["cerca"];
                                                        }
                                                        if (isset($_POST["filtro"]))
                                                            echo "Risultati filtrati";
                                                        ?></h3>
                <!-- Breadcrumb -->
                <nav class="d-flex mb-2">
                    <h6 class="mb-0">
                        <a href="index.php" id="blu" class="text-white-50">Home</a>
                        <span class="text-white-50 mx-2"> / </span>
                        <a id="blu" href="lista.php" <?php if (!isset($_GET["cat"]) && !isset($_GET["cerca"]) && !isset($_POST["filtro"])) echo 'class="text-white"';
                                                        else echo 'class="text-white-50"'; ?>>All Products</a>
                        <?php
                        include("connection.php");
                        if (isset($_GET["cat"])) {
                            $sql = "SELECT * FROM commerce_categorie where id=" . $_GET["cat"] . "";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<span class="text-white-50 mx-2"> / </span><u id="blu" class="text-white">' . $row["tipo"] . '</u>';
                            }
                        }
                        if (isset($_GET["cerca"])) {
                            echo '<span class="text-white-50 mx-2"> / </span><u id="blu" class="text-white">' . $_GET["cerca"] . '</u>';
                        }
                        if (isset($_POST["filtro"]))
                            echo '<span class="text-white-50 mx-2"> / </span><u id="blu" class="text-white">Filtro</u>';
                        ?>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
        </div>
        <!-- Heading -->
    </header>

    <!-- sidebar + content -->
    <section class="">
        <div class="container">
            <div class="row">
                <!-- sidebar -->

                <div class="col-lg-3">
                    <!-- Toggle button -->
                    <button class="btn btn-outline-secondary mb-3 w-100 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span>Show filter</span>
                    </button>
                    <form action="lista.php" method="post">
                        <!-- Collapsible wrapper -->
                        <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            Related items
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <?php
                                                include("connection.php");
                                                $sql = "SELECT * FROM commerce_categorie";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        if (isset($_POST['filtro'])) {
                                                            if (isset($_POST['cate'])) {
                                                                if (in_array($row["id"], $_POST['cate'])) {
                                                                    echo '<div class="form-check">
                                                <input class="form-check-input" checked type="checkbox" value="' . $row["id"] . '" name="cate[]" id="flexCheckDefault" /> ' . $row["tipo"] . '
                                            </div>';
                                                                } else
                                                                    echo '<div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="' . $row["id"] . '" name="cate[]" id="flexCheckDefault" /> ' . $row["tipo"] . '
                                            </div>';
                                                            } else
                                                                echo '<div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="' . $row["id"] . '" name="cate[]" id="flexCheckDefault" /> ' . $row["tipo"] . '
                                            </div>';
                                                        } else
                                                            echo '<div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="' . $row["id"] . '" name="cate[]" id="flexCheckDefault" /> ' . $row["tipo"] . '
                                            </div>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Price €
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="mb-0">
                                                        Min
                                                    </p>
                                                    <div class="form-outline">
                                                        <input type="number" name="min" id="typeNumber" placeholder="0 €" min="0" <?php if (isset($_POST["filtro"])) {
                                                                                                                                        if ($_POST["min"] != "") echo "value='" . $_POST["min"] . "'";
                                                                                                                                    } ?> class="form-control" />
                                                        <label class="form-label" for="typeNumber"></label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">
                                                        Max
                                                    </p>
                                                    <div class="form-outline">
                                                        <input type="number" name="max" id="typeNumber" placeholder="1,0000 €" max="1000" <?php if (isset($_POST["filtro"])) {
                                                                                                                                                if ($_POST["max"] != "") echo "value='" . $_POST["max"] . "'";
                                                                                                                                            } ?> class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                            Ratings
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                                        <div class="accordion-body">
                                            <!-- Default checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="5" name="star[]" <?php if (isset($_POST['filtro'])) {
                                                                                                                            if (isset($_POST['star']))
                                                                                                                                if (in_array("5", $_POST['star'])) echo "checked";
                                                                                                                        } ?> id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-warning"></i>
                                                </label>
                                            </div>
                                            <!-- Default checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="4" name="star[]" <?php if (isset($_POST['filtro'])) {
                                                                                                                            if (isset($_POST['star']))
                                                                                                                                if (in_array("4", $_POST['star'])) echo "checked";
                                                                                                                        } ?> id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i>
                                                    <i class="fas fa-star text-secondary"></i>
                                                </label>
                                            </div>
                                            <!-- Default checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="3" name="star[]" <?php if (isset($_POST['filtro'])) {
                                                                                                                            if (isset($_POST['star']))
                                                                                                                                if (in_array("3", $_POST['star'])) echo "checked";
                                                                                                                        } ?> id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i>
                                                    <i class="fas fa-star text-secondary"></i>
                                                </label>
                                            </div>
                                            <!-- Default checkbox -->
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="2" name="star[]" <?php if (isset($_POST['filtro'])) {
                                                                                                                            if (isset($_POST['star']))
                                                                                                                                if (in_array("2", $_POST['star'])) echo "checked";
                                                                                                                        } ?> id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i><i class="fas fa-star text-secondary"></i>
                                                    <i class="fas fa-star text-secondary"></i>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" name="star[]" <?php if (isset($_POST['filtro'])) {
                                                                                                                            if (isset($_POST['star']))
                                                                                                                                if (in_array("1", $_POST['star'])) echo "checked";
                                                                                                                        } ?> id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    <i class="fas fa-star text-warning"></i><i class="fas fa-star text-secondary"></i><i class="fas fa-star text-secondary"></i><i class="fas fa-star text-secondary"></i>
                                                    <i class="fas fa-star text-secondary"></i>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="filtro" class="btn btn-outline-primary mb-3 w-100">Apply</button>
                    </form>
                </div>
                <!-- sidebar -->
                <!-- content -->
                <div class="col-lg-9">
                    <?php
                    include("connection.php");
                    if (isset($_GET["cerca"]) && $_GET["cerca"] != "") {
                        echo '<header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">';
                        $sql = "SELECT COUNT(*) FROM commerce_prodotti where nome like '" . $_GET["cerca"] . "%'";

                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<strong class="d-block py-2">' . $row["COUNT(*)"] . ' Items found </strong>';
                        } else
                            echo '<strong class="d-block py-2">NO Items found </strong>';
                    }
                    ?>
                    <!-- <strong class="d-block py-2">32 Items found </strong> -->
                    </header>
                    <?php
                    include("connection.php");
                    $sql = "SELECT p.*, round(AVG(c.star),1) as avg_star
        FROM commerce_prodotti p JOIN commerce_comments c ON p.idP = c.idProd
        GROUP BY p.idP";
                    if (isset($_GET["cerca"])) {
                        if ($_GET["cerca"] != "")
                            $sql .= " HAVING nome like '" . $_GET["cerca"] . "%'";
                    }
                    if (isset($_GET["cat"]))
                        $sql .= " HAVING idCat= " . $_GET["cat"] . "";
                    if (!isset($_GET["cerca"]) && !isset($_GET["cat"]) && !isset($_POST["filtro"]))
                        $sql = "SELECT p.*, round(AVG(c.star),1) as avg_star
        FROM commerce_prodotti p JOIN commerce_comments c ON p.idP = c.idProd
        GROUP BY p.idP";

                    if (isset($_POST["filtro"]) && !isset($_POST["star"])) {
                        if (isset($_POST["cate"])) {
                            $categ = "";
                            foreach ($_POST['cate'] as $check)
                                $categ .= $check . ',';
                            $categ = rtrim($categ, ',');
                            $sql .= " HAVING idCat in ($categ)";
                        }
                        if ($_POST["min"] != "" && $_POST["max"] != "") {
                            if ($_POST["min"] < $_POST["max"])
                                $sql .= " AND prezzo>=" . $_POST["min"] . " AND prezzo<=" . $_POST["max"] . "";
                            else
                                $sql = "select * from commerce_categorie where tipo='errore'";
                        } else {
                            if ($_POST["min"] != "")
                                $sql .= " AND prezzo>=" . $_POST["min"] . "";
                            if ($_POST["max"] != "")
                                $sql .= " AND prezzo<=" . $_POST["max"] . "";
                        }
                    }
                    if (isset($_POST["filtro"]) && isset($_POST["star"])) {
                        $stel = "";
                        $cate = "";
                        foreach ($_POST['star'] as $st)
                            $cate .= $st . ',';
                        $stel = rtrim($cate, ',');
                        $stelle = explode(',', $stel);
                        $min = 0;
                        $max = 0;
                        if (sizeof($stelle) > 1) {
                            $min = min($stelle);
                            $max = min($stelle) + 1;
                        }
                        if (sizeof($stelle) == 1) {
                            //mettere in minimo l'unico valore e in massimo il +1 se non è 5 se è 5 
                            //metto minore= a 5 maggiore=5
                            $min = $stelle[0];
                            $max = $stelle[0];
                        }
                        $sql .= " HAVING avg_star >= " . $min . " AND avg_star <=" . $max . "";

                        if (isset($_POST["cate"])) {
                            $categ = "";
                            foreach ($_POST['cate'] as $check)
                                $categ .= $check . ',';
                            $categ = rtrim($categ, ',');
                            $sql .= " AND idCat in ($categ)";
                        }
                        if ($_POST["min"] != "" && $_POST["max"] != "") {
                            if ($_POST["min"] < $_POST["max"])
                                $sql .= " AND prezzo>=" . $_POST["min"] . " AND prezzo<=" . $_POST["max"] . "";
                            else
                                $sql = "select * from commerce_categorie where tipo='errore'";
                        } else {
                            if ($_POST["min"] != "")
                                $sql .= " AND prezzo>=" . $_POST["min"] . "";
                            if ($_POST["max"] != "")
                                $sql .= " AND prezzo<=" . $_POST["max"] . "";
                        }
                    }
                    //echo $sql;
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="row justify-content-center mb-3">
          <div class="col-md-12">
            <div class="card shadow-0 border rounded-3">
              <div class="card-body">
                <div class="row g-0">
                  <div class="col-xl-3 col-md-4 d-flex justify-content-center">
                    <div class="bg-image hover-zoom ripple rounded ripple-surface me-md-3 mb-3 mb-md-0">
                      <a id="blu" href="dettagli.php?id=' . $row["idP"] . '"><img src="' . $row["image"] . '" style="height: 200px;width: 200px;object-fit:scale-down;" /></a>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-5 col-sm-7">
                    <a  id="sottLin" href="dettagli.php?id=' . $row["idP"] . '"><h5>' . $row["nome"] . '</h5></a>
                    <div class="d-flex flex-row">
                    <div class="text-warning mb-1 me-2">';
                            for ($i = 0; $i < intval($row["avg_star"]); $i++) {
                                echo '<i class="fa fa-star"></i>';
                            }
                            echo '<span class="ms-1">  ' . $row["avg_star"] . '
                        </span>
                      </div>';
                            if ($row["quanti"] == 0)
                                echo '<span class="text-danger ms-2">NOT in stock</span>';
                            else
                                echo '<span class="text-success">IN stock</span><span class="text-muted ms-2">only ' . $row["quanti"] . ' left</span>';

                            echo '</div>

                    <a id="sottLin" href="dettagli.php?id=' . $row["idP"] . '"><p class="text mb-4 mb-md-0">
                      ' . $row["descrizione"] . '
                    </p></a>
                  </div>
                  <div class="col-xl-3 col-md-3 col-sm-5">
                    <div class="d-flex flex-row align-items-center mb-1">
                      <h4 class="mb-1 me-1">' . $row["prezzo"] . ' €</h4>
                    </div>
                    <div class="mt-4">
                      <a href="dettagli.php?id=' . $row["idP"] . '"><button class="btn btn-primary shadow-0" type="button">View Product</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>';
                        }
                    }
                    ?>
                    <!-- <hr /> -->

                    <!-- Pagination -->
                    <!-- <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="lista.php?nxt='.$cont.'" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="lista.php?nxt='.$cont.'">1</a></li>
                            <li class="page-item"><a class="page-link" href="lista.php?nxt='.$cont.'">2</a></li>
                            <a class="page-link" href="lista.php?nxt='.$cont.'" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                            </li>
                        </ul>
                    </nav> -->
                    <!-- Pagination -->
                </div>
            </div>
        </div>
    </section>
    <!-- sidebar + content -->

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