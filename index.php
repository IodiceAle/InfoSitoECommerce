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
    <title>Home</title>
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
                            <img src="image/logo.png" alt="logo" height="35" />
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
                        <?php
                        // if (isset($_SESSION["id"]))
                        //     echo '<div class="dropdown-flex float-end">
                        //             <button class="btn border rounded py-1 px-3 nav-link d-flex align-items-center dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        //             <i class="fas fa-user-alt m-1 me-md-2"></i>
                        //             <p class="d-none d-md-block mb-0">' . $_SESSION["username"] . '</p>
                        //             </button>
                        //             <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        //             <li><a class="dropdown-item" href="user.php">Profilo</a></li>
                        //             <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        //             </ul>
                        //         </div>';
                        ?>
                    </div>
                    <!-- Center elements -->

                    <!-- Right elements -->
                    <div class="col-lg-6 col-md-12 col-12">
                        <form action="lista.php" method="get">
                            <div class="input-group float-center">

                                <div class="form-outline" style="width: 80%;">
                                    <input type="search" placeholder="Search" name="cerca" class="form-control" />
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

        <!-- Navbar -->
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <!-- Container wrapper -->
            <div class="container justify-content-center justify-content-md-between">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a id="blu" class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="blu" class="nav-link" href="lista.php">All Products</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                All Categories
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                include("connection.php");
                                $sql = "SELECT * FROM commerce_categorie";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc())
                                        echo '<li><a class="dropdown-item" href="lista.php?cat=' . $row["id"] . '">' . $row["tipo"] . '</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a id="blu" class="nav-link" href="cart.php">Shopping Cart</a>
                        </li>
                    </ul>
                    <!-- Left links -->
                </div>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>

    <!--  intro  -->
    <section class="mt-3">
        <div class="container">
            <main class="card p-3 shadow-2-strong">
                <div class="row">
                    <div class="col-lg-3">
                        <nav class="nav flex-column nav-pills mb-md-2">
                            <!-- il ciclo con il select per le categorie -->
                            <?php
                            include("connection.php");

                            echo '<a id="blu" class="nav-link active py-2 ps-3 my-0" aria-current="page" href="lista.php">Homepage</a>';
                            $sql = "SELECT * FROM commerce_categorie";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '<a class="nav-link my-0 py-2 ps-3 bg-white" href="lista.php?cat=' . $row["id"] . '">' . $row["tipo"] . '</a>';
                                }
                                echo '<a class="nav-link my-0 py-2 ps-3 bg-white" href="lista.php">All</a>';
                            }
                            ?>
                        </nav>
                    </div>
                    <div id="blu" class="col-lg-9">
                        <div class="card-banner h-auto p-5 bg-primary rounded-5" style="height: 350px;">
                            <div>
                                <h2 id="blu" class="text-white">
                                    Great products with <br />
                                    best deals
                                </h2>
                                <p id="blu" class="text-white">No matter how far along you are in your sophistication as an amateur astronomer, there is always one.</p>
                                <a href="lista.php" class="btn btn-outline-light"> View more </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>
    <!-- intro -->

    <!-- Products -->
    <section>
        <div class="container my-5">
            <header class="mb-4">
                <h3>Random Products</h3>
            </header>
            <?php
            include("connection.php");

            $sql = "SELECT max(idP) FROM commerce_prodotti";
            $result = $conn->query($sql);
            // output data of each row
            $row = $result->fetch_assoc();
            $max = $row["max(idP)"];
            if ($max >= 8) {
                $lim = rand(1, ($max - 7));
                $sql = "SELECT p.*, cat.*, round(AVG(c.star),1) as avg_star FROM (commerce_prodotti p left JOIN commerce_comments c ON p.idP = c.idProd) left join commerce_categorie as cat on p.idP=cat.id where p.idP>=$lim group by p.idP limit 8";
            } else
                $sql = "SELECT p.*, cat.*, round(AVG(c.star),1) as avg_star FROM (commerce_prodotti p left JOIN commerce_comments c ON p.idP = c.idProd) left join commerce_categorie as cat on p.idP=cat.id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo '<div class="row">';
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="dettagli.php?id=' . $row["idP"] . '" class="img-wrap">
                            <img src="' . $row["image"] .
                        '" alt="non ce" class="card-img-top" style="aspect-ratio: 1 / 1;object-fit: scale-down;">
                        </a>
                        <div class="card-body p-0 pt-3">
                            
                                <a id="sottLin" href="dettagli.php?id=' . $row["idP"] . '"><h4 style="text-decoration: none;" class="card-text mb-0">' . $row["nome"] . '</h4></a>
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
                        echo '<span class="text-success">IN stock</span><span class="text-muted ms-2">only ' . $row["quanti"] . ' left</span>';

                    echo '</div>
                                <a style="text-decoration: none;color: black;" href="dettagli.php?id=' . $row["idP"] . '"><p class="text-muted">
                                    ' . $row["descrizione"] . '
                                </p></a>
                                <h5 class="card-title">' . $row["prezzo"] . ' €</h5>

                            <!-- <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button class="btn btn-primary shadow-0 me-1" type="button">Add to cart</button>
                                </div>
                            </div> -->
                        </div>
                </div>';
                }
                echo '</div>';
            }
            ?>
    </section>
    <!-- Products -->

    <!-- Feature -->
    <section>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row mb-3 mb-sm-4 g-3 g-sm-4">
                        <div class="col-6 d-flex">
                            <div class="card w-100 bg-primary" style="min-height: 200px;">
                                <div class="card-body">
                                    <h5 id="blu" class="text-white">Gaming toolset</h5>
                                    <p id="blu" class="text-white-50">Technology for cyber sport</p>
                                    <a class="btn btn-outline-light btn-sm" href="lista.php?cat=6">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex">
                            <div class="card w-100 bg-primary" style="min-height: 200px;">
                                <div class="card-body">
                                    <h5 id="blu" class="text-white">Quality sound</h5>
                                    <p id="blu" class="text-white-50">All you need for music</p>
                                    <a class="btn btn-outline-light btn-sm" href="lista.php?cat=2">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature -->

    <section>
        <div class="container">
            <div class="px-4 pt-3 border">
                <div class="row pt-1">
                    <div class="col-lg-3 col-md-6 mb-3 d-flex">
                        <div class="d-flex align-items-center">
                            <div class="badge badge-warning p-2 rounded-4 me-3">
                                <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
                            </div>
                            <span class="info">
                                <h6 class="title">Reasonable prices</h6>
                                <p class="mb-0">Have you ever finally just</p>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 d-flex">
                        <div class="d-flex align-items-center">
                            <div class="badge badge-warning p-2 rounded-4 me-3">
                                <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
                            </div>
                            <span class="info">
                                <h6 class="title">Worldwide shipping</h6>
                                <p class="mb-0">Have you ever finally just</p>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 d-flex">
                        <div class="d-flex align-items-center">
                            <div class="badge badge-warning p-2 rounded-4 me-3">
                                <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
                            </div>
                            <span class="info">
                                <h6 class="title">Best ratings</h6>
                                <p class="mb-0">Have you ever finally just</p>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 d-flex">
                        <div class="d-flex align-items-center">
                            <div class="badge badge-warning p-2 rounded-4 me-3">
                                <i class="fas fa-phone fa-2x fa-fw text-primary floating"></i>
                            </div>
                            <span class="info">
                                <h6 class="title">Help center</h6>
                                <p class="mb-0">Have you ever finally just</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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