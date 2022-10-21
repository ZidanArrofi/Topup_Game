<?php

include '../topup/database.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
           VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: login.php");
                echo "<script>alert('Registrasi Berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Terjadi kesalahan!')</script>";
            }
        } else {
            echo "<script>alert('Email Sudah Terdaftar, Harap Ulangi')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai!')</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeday Shop | Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../css/register.css" rel="stylesheet" type="text/css">


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="#">Jeday Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-9">

                <div class="shadow">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="bg-register h-100"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5 ps-4 text-dark">
                                <h5 class="mb-1 fw-bold">Sign Up</h5>
                                <p class="mb-4 text-muted">Isi data dibawah ini</p>
                                <form action="register.php" method="POST">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" id="username" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="email" required>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" value="<?php echo $_POST['password']; ?>" class="form-control" id="password" required>
                                        </div>
                                        <div class="col">
                                            <label for="cpassword" class="form-label">Konfirmasi Password</label>
                                            <input type="cpassword" name="cpassword" value="<?php echo $_POST['password']; ?>" class="form-control" id="cpassword" required>
                                        </div>
                                    </div>
                                    <div class="d-grid">
                                        <a href="login.php">
                                            <button type="submit" name="submit" class="btn btn-warning py-2">Sign Up</button>
                                        </a>
                                    </div>
                                </form>

                                <small class="mt-3 d-block text-center">Already have an account?<a href="login.php"> Login</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>