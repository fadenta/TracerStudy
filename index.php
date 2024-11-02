<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "koneksi.php";
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Query to check admin credentials
    $sqladmint = mysqli_query($con, "SELECT * FROM admint WHERE username='$user' AND password='$pass'");
    $row = mysqli_num_rows($sqladmint);

    // Query to check alumni credentials
    $sqlalum = mysqli_query($con, "SELECT * FROM alumni WHERE usern='$user' AND pass='$pass'");
    $row1 = mysqli_num_rows($sqlalum);

    if ($row > 0) {
        $radmint = mysqli_fetch_assoc($sqladmint);
        session_start();
        $_SESSION['username'] = $radmint['username'];
        $_SESSION['password'] = $radmint['password'];

        echo "<script language='JavaScript'>
            alert('Login Berhasil!');  // User-friendly alert
            document.location='admin';
            </script>";
    } else if ($row1 > 0) {
        $ralum = mysqli_fetch_assoc($sqlalum);
        session_start();
        $_SESSION['id_alumni'] = $ralum['id_alumni']; // Store alumni ID
        $_SESSION['nama'] = $ralum['nama']; // Store alumni name
        $_SESSION['jenis_klmin'] = $ralum['jenis_klmin']; // Store gender
        $_SESSION['tempat_lahir'] = $ralum['tempat_lahir']; // Store place of birth
        $_SESSION['tgl_lahir'] = $ralum['tgl_lahir']; // Store date of birth
        $_SESSION['alamat'] = $ralum['alamat']; // Store address
        $_SESSION['tgl_lulus'] = $ralum['tgl_lulus']; // Store graduation date
        $_SESSION['id_jrsn'] = $ralum['id_jrsn']; // Store major ID
        $_SESSION['no_tlp'] = $ralum['no_tlp']; // Store phone number
        $_SESSION['email'] = $ralum['email']; // Store email
        $_SESSION['usern'] = $ralum['usern']; // Store username

        echo "<script language='JavaScript'>
            alert('Login Berhasil!');  // User-friendly alert
            document.location='alumni';
            </script>";
    } else {
        echo "<script language='JavaScript'>
            alert('Username atau Password salah!');  // Error message for failed login
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Tracer Study - Login</title>
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/ruang-admin.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo/ucic.png">
</head>

<body class="bg-gradient-login">
    <!-- Login Content -->
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-8 col-md-8">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <img class="mb-1" src="assets/img/logo/ucic.jpg" alt="" width="150" height="150">
                                        <h4 class="mt-2 text-center">Tracer study UNUSIA</h4>
                                    </div>

                                    <form class="mt-4" action="" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Ingat Saya</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-block btn-primary" value="Login">
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <a class="font-weight-bold small">Info:</a>
                                            <a class="font-weight-bold small" href="#">alumniucic@gmail.com</a>
                                        </div>
                                    </form>

                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/ruang-admin.min.js"></script>
</body>
</html>
