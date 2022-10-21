<?php
include '../topup/database.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeday Shop | rekap penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }

        h1 {
            text-transform: uppercase;
            color: #212429;
        }

        table {
            border: solid 1px #DDEEEE;
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            margin: 10px auto 10px auto;
        }

        table thead th {
            background-color: #DDEFEF;
            border: solid 1px #DDEEEE;
            color: #336B6B;
            padding: 10px;
            text-align: center;
            text-shadow: 1px 1px 1px #fff;
            text-decoration: none;
        }

        table tbody td {
            border: solid 1px #DDEEEE;
            text-align: center;
            color: #333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
        }

        a {
            background-color: #212429;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
        }
    </style>
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
                        <a class="nav-link text-white" href="daftar-games.php">Daftar Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Rekap Penjualan</a>
                    </li>
                </ul>
            </div>
            <a href="logout.php" class="nav-link text-white"><i class="bi bi-box-arrow-in-right"></i> Logout</a>
        </div>
    </nav>

    <center>
        <h1 class="mt-3 mb-3">Rekap Penjualan</h1>
        <center>
            <br />
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Game</th>
                        <th>ID User</th>
                        <th>Jenis Item</th>
                        <th>Jumlah Item</th>
                        <th>Metode Pembayaran</th>
                        <th>Nomor Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM item ORDER BY id DESC";
                    $result = mysqli_query($conn, $query);
                    //mengecek apakah ada error ketika menjalankan query
                    if (!$result) {
                        die("Query Error: " . mysqli_errno($conn) .
                            " - " . mysqli_error($conn));
                    }

                    $no = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['jenis_game']; ?></td>
                            <td><?php echo $row['user_id']; ?></td>
                            <td><?php echo $row['jenis_item']; ?></td>
                            <td><?php echo $row['jumlah_item']; ?></td>
                            <td><?php echo $row['pembayaran']; ?></td>
                            <td><?php echo $row['nomor_hp']; ?></td>
                        </tr>

                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
            </div>
            </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>