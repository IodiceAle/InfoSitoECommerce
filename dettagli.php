<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
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
                                    </a>
                                    <a href="sign.php" class="border rounded py-1 px-3 nav-link d-flex align-items-center"> <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">My cart</p>
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
                                </div>
                                <a href="cart.php" class="border rounded py-1 px-3 nav-link d-flex align-items-center"> <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">My cart</p>
                            </a>';
                            ?>
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
                        <a href="index.php" class="text-white-50">Home</a>
                        <span class="text-white-50 mx-2"> / </span>
                        <?php
                        include("connection.php");
                        if (isset($_GET["id"])) {
                            $sql = "SELECT * FROM commerce_categorie c join commerce_prodotti p on c.id=p.idCat where p.idP=" . $_GET["id"] . "";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<a href="lista.php?cat=' . $row["id"] . '" class="text-white-50">' . $row["tipo"] . '</a><span class="text-white-50 mx-2"> / </span>
                        <a class="text-white"><u>' . $row["nome"] . '</u></a>';
                            }
                        }
                        ?>
                    </h6>
                </nav>
                <!-- Breadcrumb -->
            </div>
        </div>
        <!-- Heading -->
    </header>

    <!-- content -->
    <section class="py-5">
        <div class="container">
            <form action="" method="post">
                <div class="row gx-5">
                    <?php
                    if (isset($_GET["id"])) {
                        $sql = "SELECT p.*, cat.*, ROUND(AVG(c.star), 1) AS avg_star 
FROM commerce_prodotti p 
LEFT JOIN commerce_comments c ON p.idP = c.idProd 
LEFT JOIN commerce_categorie cat ON p.idCat = cat.id 
WHERE p.idP =" . $_GET["id"] . "";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            echo '<aside class="col-lg-6">
                    <div class="border rounded-4 mb-3 d-flex justify-content-center">
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="' . $row["image"] . '">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="' . $row["image"] . '" />
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="' . $row["image"] . '" class="item-thumb">
                            <img style="object-fit:scale-down;" width="60" height="60" class="rounded-2" src="' . $row["image"] . '" />
                        </a>
                    </div>
                    <!-- thumbs-wrap.// -->
                    <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            ' . $row["nome"] . '
                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">';
                            for ($i = 0; $i < intval($row["avg_star"]); $i++) {
                                echo '<i class="fa fa-star"></i>';
                            }
                            echo '<span class="ms-1">  ' . $row["avg_star"] .
                                '</span>
                            </div>';
                            if ($row["quanti"] == 0)
                                echo '<span class="text-danger ms-2">NOT in stock</span>';
                            else
                                echo '<span class="text-success ms-2">IN stock</span>';
                            echo '</div>

                        <div class="mb-3">
                            <span class="h5">' . $row["prezzo"] . ' €</span>
                            <span class="text-muted">/per item</span>
                        </div>
<label class="mb-2"><b>Descrizione :</b></label>
                        <p>
                            ' . $row["descrizione"] . '
                        </p>

                        <div class="row">
                            <dt class="col-3">Categoria :</dt>
                            <dd class="col-9">' . $row["tipo"] . '</dd>
                        </div>

                        <hr />

                        <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                <label class="mb-2"><b>Quantità :</b></label>
                                <select name="quantita" class="form-select border border-secondary" style="height: 35px;">';
                            if ($row["quanti"] > 0) {
                                for ($i = 1; $i <= $row["quanti"]; $i++) {
                                    echo "<option>" . $i . "</option>";
                                }
                            } else
                                echo "<option>0</option>";

                            echo
                            '</select>
                            </div>
                            <!-- col.// -->
                        </div>
                        <input type="hidden" name="proID" value="' . $row["idP"] . '">
                        <button type="submit"';
                            if ($row["quanti"] == 0)
                                echo "disabled";
                            echo ' name="add" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </button>
                    </div>
                </main>';
                        }
                    }
                    ?>
                </div>
            </form>
        </div>
    </section>
    <!-- content -->
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