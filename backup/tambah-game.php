<?php
include '../topup/database.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeday Shop | tambah game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="../css/adm.css" rel="stylesheet" type="text/css">
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Jeday Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Halo Admin!</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="daftar-game.php">Daftar Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Rekap Penjualan</a>
                    </li>
                </ul>
            </div>
            <a href="logout.php" class="nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> Logout</a>
        </div>
    </nav>

    <form action="proses-tambah.php" method="post" enctype="multipart/form-data">
        <div class="section">
            <div class="container">
                <h1 Align="center"> Tambah Game</h1>
                <div class="box">
                    <input type="text" name="nama" placeholder="Nama Game" class="form-control" id="username" required>
                    <div class="input-group mb-3">
                        <input name="image" type="file" class="form-control mt-3" id="inputGroupFile02">
                        <label class="input-group-text mt-3" for="inputGroupFile02">Upload</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>