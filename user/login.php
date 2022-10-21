<?php
include 'database.php';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == '12345') {
        header("Location: daftar-games.php");
    }
    if (isset($_POST['submit'])) {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        $cek = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $user . "' AND password = '" . MD5($pass) . "'");

        if ($cek->num_rows > 0) {
            $d = mysqli_fetch_object($cek);
            $_SESSION['status_login'] = true;
            $_SESSION['admin_g'] = $d;
            $_SESSION['id'] = $d->id;
            echo "<script>window.location='dashboard.php'</script>";
        } else {
            echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeday Shop | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/login.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <main class="form-signin">
                    <h1 class="h3 mt-5 mb-5 fw-normal text-center"> Login </h1>
                    <form action="" method="POST">
                        <div class="form-floating">
                            <input type="username" name="username" class="form-control " id="username" placeholder="Username" autofocus="" required>
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        <a href="dashboard.php">
                            <button class="w-100 btn btn-lg btn-warning" name="submit" type="submit">Login</button>
                        </a>
                    </form>

                    <small class="mt-3 d-block">don't have an account?<a href="register.php"> Sign Up Now!</a></small>
                </main>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>