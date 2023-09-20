<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <title>E Canteen - Food n Drink</title>
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <img src="../img/logo-hijau.png" alt="" class="img-fluid mb-4" width="100">
            <div class="card">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <!-- Left Content (if needed) -->
						<img src="../img/member.jpg" class="img-container">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">Pendaftaran Kantin</h4>
                            <hr>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="namaKantin" placeholder="Nama Kantin">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Email address">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="nomorTelepon" placeholder="Nomor Telepon">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Setuju dengan syarat dan ketentuan.</label>
                            </div>
                            <a href="login.php" class="btn btn-block btn-primary mb-4">Proses Daftar</a>
                            <hr>
                            <p class="mb-0 text-muted">Sudah punya akun? <a href="auth-signup.html" class="f-w-400">Login</a></p>
                            <p class="mb-2 text-muted">Lupa password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required JS -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>

</html>
