<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeday Shop | top up</title>
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
                        <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
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
                            <div class="card" style="width: 20rem;">
                                <div class="card-body">
                                    <h3 class="card-title mb-2">Game Top Up</h3>
                                    <p class="mb-2">_________________________________________</p>
                                    <p class="card-text"><b>PERHATIAN:</b> <br>
                                        <br> Beli Item Game hanya dalam hitungan detik! Cukup masukkan User ID Kamu, pilih jenis item yang Kamu inginkan, pilih jumlah item yang kamu inginkan, selesaikan pembayaran, dan Diamond tersebut akan langsung masuk ke akun Kamu.
                                        <br><br>Kamu bisa langsung top up item game hari ini dengan mudah di Jeday Shop!<br><br><b>Perhatian!</b> Harga sudah termasuk PPN
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5 ps-4 text-dark">
                                <h5 class="mb-1 fw-bold">Top Up</h5>
                                <p class="mb-3 text-muted">Isi data dibawah ini</p>
                                <form action="proses-topup.php" method="POST">

                                    <div class="mb-3">
                                        <input type="number" name="user_id" class="form-input" placeholder="User ID" aria-label="user_id">
                                    </div>

                                    <div class="row mb-3">
                                        <select name="jenis_game" class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Game</option>
                                            <option value="Mobile Legends">Mobile Legends</option>
                                            <option value="Free Fire">Free Fire</option>
                                            <option value="PUBG Mobile">PUBG Mobile</option>
                                            <option value="COD Mobile">COD Mobile</option>
                                            <option value="Genshin Impact">Genshin Impact</option>
                                            <option value="Valorant">Valorant</option>
                                            <option value="Apex Legend">Apex Legend</option>
                                            <option value="Arena of Valor">Arena of Valor</option>
                                            <option value="PES Mobile">PES Mobile</option>
                                        </select>
                                    </div>

                                    <div class="row mb-3">
                                        <select name="jenis_item" class="form-select" aria-label="Default select example">
                                            <option selected>Jenis Item</option>
                                            <option value="Diamond">Diamond</option>
                                            <option value="UC">UC</option>
                                            <option value="Point">Point</option>
                                            <option value="Koin / Gold">Koin / Gold</option>
                                            <option value="Crystal">Crystal</option>
                                            <option value="Voucher">Voucher</option>
                                        </select>
                                    </div>

                                    <div class="row mb-3">
                                        <select name="jumlah_item" class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Jumlah Item</option>
                                            <option value="10 Item Game Rp.8500">10 Item Game Rp.8500</option>
                                            <option value="25 Item Game Rp.20.000">25 Item Game Rp.20.000</option>
                                            <option value="55 Item Game Rp.52.000">55 Item Game Rp.52.000</option>
                                            <option value="125 Item Game Rp.115.000">125 Item Game Rp.115.000</option>
                                            <option value="250 Item Game Rp.225.000">250 Item Game Rp.225.000</option>
                                            <option value="350 Item Game Rp.325.000">350 Item Game Rp.325.000</option>
                                            <option value="550 Item Game Rp.525.000">550 Item Game Rp.525.000</option>
                                            <option value="1150 Item Game Rp.1.015.000">1150 Item Game Rp.1.015.000</option>
                                        </select>
                                    </div>

                                    <div class="row mb-3">
                                        <select name="pembayaran" class="form-select" aria-label="Default select example">
                                            <option selected>Pilih Metode Pembayaran</option>
                                            <option value="E-Wallet">E-Wallet</option>
                                            <option value="M-Banking">M-Banking</option>
                                            <option value="Mini Market">Mini Market</option>
                                            <option value="Pulsa">Pulsa</option>
                                        </select>
                                    </div>

                                    <div class=" mb-3">
                                        <input type="number" name="nomor_hp" placeholder="Masukan No Telepon" value="" class="form-input" id="nomor_hp" required>
                                    </div>

                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" name="submit" class="btn btn-warning py-2">Beli Sekarang</button>
                                </a>
                            </div>
                            </form>
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