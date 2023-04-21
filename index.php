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
    <link rel="stylesheet" href="style.css">
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
                            <img src="#" alt="ciao" height="35" />
                        </a>
                    </div>
                    <!-- Left elements -->

                    <!-- Center elements -->
                    <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                        <div class="d-flex float-end">
                            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-user-alt m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">Sign in</p>
                            </a>
                            <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-shopping-cart m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">My cart</p>
                            </a>
                        </div>
                    </div>
                    <!-- Center elements -->

                    <!-- Right elements -->
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="input-group float-center">
                            <div class="form-outline">
                                <input type="search" placeholder="Search" id="form1" class="form-control" />
                            </div>
                            <button type="button" class="btn btn-primary shadow-0">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Right elements -->
                </div>
            </div>
        </div>
        <!-- Jumbotron -->

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <!-- Container wrapper -->
            <div class="container justify-content-center justify-content-md-between">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hot offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gift boxes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Menu name</a>
                        </li>
                        <!-- Navbar dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                Others
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
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
                            <!-- base per il ciclo con il select per le categorie -->
                            <a class="nav-link active py-2 ps-3 my-0" aria-current="page" href="#">Electronics</a>
                            <a class="nav-link my-0 py-2 ps-3 bg-white" href="#">Clothes and wear</a>
                        </nav>
                    </div>
                    <div class="col-lg-9">
                        <div class="card-banner h-auto p-5 bg-primary rounded-5" style="height: 350px;">
                            <div>
                                <h2 class="text-white">
                                    Great products with <br />
                                    best deals
                                </h2>
                                <p class="text-white">No matter how far along you are in your sophistication as an amateur astronomer, there is always one.</p>
                                <a href="#" class="btn btn-light shadow-0 text-primary"> View more </a>
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
                <h3>TITOLO</h3>
            </header>
            <!-- base per il ciclo con select per i prodotti -->
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="#" class="img-wrap">
                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/12.webp" class="card-img-top" style="aspect-ratio: 1 / 1">
                    </a>
                    <div class="card-body p-0 pt-3">
                        <h5 class="card-title">$29.95</h5>
                        <p class="card-text mb-0">GoPro action camera 4K</p>
                        <p class="text-muted">
                            Model: X-200
                        </p>
                        <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Products -->

    <!-- Feature -->
    <section class="">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row mb-3 mb-sm-4 g-3 g-sm-4">
                        <div class="col-6 d-flex">
                            <div class="card w-100 bg-primary" style="min-height: 200px;">
                                <div class="card-body">
                                    <h5 class="text-white">Gaming toolset</h5>
                                    <p class="text-white-50">Technology for cyber sport</p>
                                    <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex">
                            <div class="card w-100 bg-primary" style="min-height: 200px;">
                                <div class="card-body">
                                    <h5 class="text-white">Quality sound</h5>
                                    <p class="text-white-50">All you need for music</p>
                                    <a class="btn btn-outline-light btn-sm" href="#">Learn more</a>
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