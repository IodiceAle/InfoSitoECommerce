<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <a href="#" target="_blank" class="float-start">
                            <img src="immagine" height="35" />
                        </a>
                    </div>
                    <!-- Left elements -->

                    <!-- Center elements -->
                    <div class="order-lg-last col-lg-5 col-sm-8 col-8">
                        <div class="d-flex float-end">
                            <a href="#" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-user-alt m-1 me-md-2"></i>
                                <p class="d-none d-md-block mb-0">Sign in</p>
                            </a>
                            <a href="#" class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-shopping-cart m-1 me-md-2"></i>
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
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <!-- Container wrapper -->
            <div class="container justify-content-center justify-content-md-between">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-dark" aria-current="page" href="#">Home</a>
                        </li>
                        <div class="vr"></div>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Hot offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Gift boxes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Menu item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#">Menu name</a>
                        </li>
                        <!-- Navbar dropdown -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Others
                            </a> -->
                        <!-- Dropdown menu -->
                        <!-- <ul class="dropdown-menu">
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
                        </li> -->
                    </ul>
                    <!-- Left links -->
                </div>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
        <!-- Jumbotron -->
        <!--   <div class="bg-primary text-white py-5">
    <div class="container py-5">
      <h1>
        Best products & <br />
        brands in our store
      </h1>
      <p>
        Trendy Products, Factory Prices, Excellent Service
      </p>
      <button type="button" class="btn btn-outline-light">
        Learn more
      </button>
      <button type="button" class="btn btn-light shadow-0 text-primary pt-2 border border-white">
        <span class="pt-1">Purchase now</span>
      </button>
    </div>
  </div> -->
        <!-- Jumbotron -->
    </header>
    <!-- Products -->
    <section>
        <div class="container my-5">
            <header class="mb-4">
                <h3>Products</h3>
            </header>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/1.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
                            <p class="card-text">$790.50</p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-magnifying-glass fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/2.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Canon camera 20x zoom, Black color EOS 2000</h5>
                            <p class="card-text">$320.00</p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                <!--               <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a> -->
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-magnifying-glass fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/3.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Xiaomi Redmi 8 Original Global Version 4GB</h5>
                            <p class="card-text">$120.00</p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                <!--               <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a> -->
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-magnifying-glass fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/4.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Apple iPhone 12 Pro 6.1" RAM 6GB 512GB Unlocked</h5>
                            <p class="card-text">$120.00</p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                <!--               <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a> -->
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-magnifying-glass fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/5.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Apple Watch Series 1 Sport Case 38mm Black</h5>
                            <p class="card-text">$790.50</p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                <!--               <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a> -->
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-magnifying-glass fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/6.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">T-shirts with multiple colors, for men and lady</h5>
                            <p class="card-text">$120.00</p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                <!--               <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a> -->
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-magnifying-glass fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/7.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Gaming Headset 32db Blackbuilt in mic</h5>
                            <p class="card-text">$99.50</p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                <!--               <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a> -->
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-magnifying-glass fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                    <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/8.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">T-shirts with multiple colors, for men and lady</h5>
                            <p class="card-text">$120.00</p>
                            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                <!--               <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a> -->
                                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-magnifying-glass fa-lg text-secondary px-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products -->

    <!-- Feature -->
    <section class="mt-5" style="background-color: #f5f5f5;">
        <div class="container text-dark pt-3">
            <header class="pt-4 pb-3">
                <h3>Why choose us</h3>
            </header>

            <div class="row mb-4">
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-camera-retro fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Reasonable prices</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Best quality</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Worldwide shipping</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-users fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Customer satisfaction</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Happy customers</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
                <div class="col-lg-4 col-md-6">
                    <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                            <i class="fas fa-box fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                            <h6 class="title">Thousand items</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmor</p>
                        </figcaption>
                    </figure>
                    <!-- itemside // -->
                </div>
                <!-- col // -->
            </div>
        </div>
        <!-- container end.// -->
    </section>
    <!-- Feature -->

    <!-- Blog -->
    <!-- <section class="mt-5 mb-4">
  <div class="container text-dark">
    <header class="mb-4">
      <h3>Blog posts</h3>
    </header>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <article>
          <a href="#" class="img-fluid">
            <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/1.webp" style="object-fit: cover;" height="160" />
          </a>
          <div class="mt-2 text-muted small d-block mb-1">
            <span>
              <i class="fa fa-calendar-alt fa-sm"></i>
              23.12.2022
            </span>
            <a href="#"><h6 class="text-dark">How to promote brands</h6></a>
            <p>When you enter into any new area of science, you almost reach</p>
          </div>
        </article>
      </div>
     col.// -->
    <!--       <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <article>
          <a href="#" class="img-fluid">
            <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/2.webp" style="object-fit: cover;" height="160" />
          </a>
          <div class="mt-2 text-muted small d-block mb-1">
            <span>
              <i class="fa fa-calendar-alt fa-sm"></i>
              13.12.2022
            </span>
            <a href="#"><h6 class="text-dark">How we handle shipping</h6></a>
            <p>When you enter into any new area of science, you almost reach</p>
          </div>
        </article>
      </div> -->
    <!-- col.// -->
    <!--       <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <article>
          <a href="#" class="img-fluid">
            <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/3.webp" style="object-fit: cover;" height="160" />
          </a>
          <div class="mt-2 text-muted small d-block mb-1">
            <span>
              <i class="fa fa-calendar-alt fa-sm"></i>
              25.11.2022
            </span>
            <a href="#"><h6 class="text-dark">How to promote brands</h6></a>
            <p>When you enter into any new area of science, you almost reach</p>
          </div>
        </article>
      </div> -->
    <!-- col.// -->
    <!--       <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <article>
          <a href="#" class="img-fluid">
            <img class="rounded w-100" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/posts/4.webp" style="object-fit: cover;" height="160" />
          </a>
          <div class="mt-2 text-muted small d-block mb-1">
            <span>
              <i class="fa fa-calendar-alt fa-sm"></i>
              03.09.2022
            </span>
            <a href="#"><h6 class="text-dark">Success story of sellers</h6></a>
            <p>When you enter into any new area of science, you almost reach</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</section> -->
    <!-- Blog -->

    <!-- Footer -->
    <!-- <footer class="text-center text-lg-start text-muted mt-3" style="background-color: #f5f5f5;"> -->
    <!-- Section: Links  -->
    <!--   <section class=""> -->
    <!--     <div class="container text-center text-md-start pt-4 pb-4"> -->
    <!-- Grid row -->
    <!--       <div class="row mt-3"> -->
    <!-- Grid column -->
    <!--         <div class="col-12 col-lg-3 col-sm-12 mb-2"> -->
    <!-- Content -->
    <!--           <a href="https://mdbootstrap.com/" target="_blank" class="">
            <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
          </a>
          <p class="mt-2 text-dark">
            © 2023 Copyright: MDBootstrap.com
          </p>
        </div> -->
    <!-- Grid column -->

    <!-- Grid column -->
    <!--         <div class="col-6 col-sm-4 col-lg-2"> -->
    <!-- Links -->
    <!--           <h6 class="text-uppercase text-dark fw-bold mb-2">
            Store
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" href="#">About us</a></li>
            <li><a class="text-muted" href="#">Find store</a></li>
            <li><a class="text-muted" href="#">Categories</a></li>
            <li><a class="text-muted" href="#">Blogs</a></li>
          </ul>
        </div> -->
    <!-- Grid column -->

    <!-- Grid column -->
    <!--         <div class="col-6 col-sm-4 col-lg-2"> -->
    <!-- Links -->
    <!--           <h6 class="text-uppercase text-dark fw-bold mb-2">
            Information
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" href="#">Help center</a></li>
            <li><a class="text-muted" href="#">Money refund</a></li>
            <li><a class="text-muted" href="#">Shipping info</a></li>
            <li><a class="text-muted" href="#">Refunds</a></li>
          </ul>
        </div> -->
    <!-- Grid column -->

    <!-- Grid column -->
    <!--         <div class="col-6 col-sm-4 col-lg-2"> -->
    <!-- Links -->
    <!--           <h6 class="text-uppercase text-dark fw-bold mb-2">
            Support
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" href="#">Help center</a></li>
            <li><a class="text-muted" href="#">Documents</a></li>
            <li><a class="text-muted" href="#">Account restore</a></li>
            <li><a class="text-muted" href="#">My orders</a></li>
          </ul>
        </div> -->
    <!-- Grid column -->

    <!-- Grid column -->
    <!--         <div class="col-12 col-sm-12 col-lg-3"> -->
    <!-- Links -->
    <!--           <h6 class="text-uppercase text-dark fw-bold mb-2">Newsletter</h6>
          <p class="text-muted">Stay in touch with latest updates about our products and offers</p>
          <div class="input-group mb-3">
            <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
            <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
              Join
            </button>
          </div>
        </div> -->
    <!-- Grid column -->
    <!--       </div> -->
    <!-- Grid row -->
    <!--     </div>
  </section> -->
    <!-- Section: Links  -->

    <div class="">
        <div class="container">
            <div class="d-flex justify-content-between py-4 border-top">
                <!--- payment --->
                <div>
                    <i class="fab fa-lg fa-cc-visa text-dark"></i>
                    <i class="fab fa-lg fa-cc-amex text-dark"></i>
                    <i class="fab fa-lg fa-cc-mastercard text-dark"></i>
                    <i class="fab fa-lg fa-cc-paypal text-dark"></i>
                </div>
                <!--- payment --->

                <!--- language selector --->
                <!--         <div class="dropdown dropup">
          <a class="dropdown-toggle text-dark" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0 me-1"></i>English </a>

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
            <li>
              <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
            </li>
          </ul>
        </div> -->
                <!--- language selector --->
            </div>
        </div>
    </div>
    <!-- </footer> -->
    <!-- Footer -->
</body>

</html>