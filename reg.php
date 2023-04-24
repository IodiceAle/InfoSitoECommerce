<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-in</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/all.css">
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card rounded-3 border-0 shadow-lg">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <img src="images/logo.png" alt="logo" height="50">
                        </div>
                        <h3 class="text-center mb-4">Registration</h3>
                        <form action="chkLogReg.php" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Username</label>
                                <input type="text" placeholder="Username" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" placeholder="Email" class="form-control" name="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" placeholder="Password" class="form-control" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="Cpassword" class="form-label">Confirm Password</label>
                                <input type="password" placeholder="Same Password" class="form-control" name="Cpassword" required>
                            </div>
                            <div class="d-grid gap-2 mb-3">
                                <button type="submit" name="register" class="btn btn-primary btn-lg">Sign up</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer py-3 border-0 bg-white">
                        <div class="text-center">
                            Already have an account? <a href="sign.php">Log in here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>