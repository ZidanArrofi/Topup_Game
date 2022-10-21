<?php
include '../topup/database.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Jeday Shop | dashboard</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cover.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Jeday Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2 ms-5" type="search" placeholder="Cari Game" aria-label="Search">
                    <button class="btn btn-outline-success me-5" type="submit">Search</button>
                </form>
            </div>
            <a href="logout.php" class="nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> Logout</a>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="container">
            <h2 class="text-center mt-3 mb-5">Daftar Game</h2>
        </div>

        <div class="row">
            <?php $ambil = $conn->query("SELECT * FROM games LIMIT 10"); ?>
            <?php while ($g = $ambil->fetch_assoc()) { ?>


                <div class="col-lg-2 mr-3 ml-3 mb-5 hovered-card">
                    <div class=" card" style="width: 15rem;">
                        <img src="images/<?php echo $g['foto_game']; ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title  text-center mb-4"><?php echo $g['nama_game']; ?></h5>
                            <div class="d-grid gap-2 d-md-flex mb-3 justify-content-md-center">
                                <a href="topup.php">
                                    <button class="btn btn-warning" type="button">Top Up</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>


        <footer>
            <div class="mb-3 text-muted">
                <center>

                    <h6>@2022 Jeday Shop</h6>
                </center>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>