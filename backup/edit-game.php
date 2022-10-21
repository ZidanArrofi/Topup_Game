<?php
// memanggil file koneksi.php untuk membuat koneksi
include '../topup/database.php';

// mengecek url 
if (isset($_GET['id'])) {
    // ambil nilai id dari url 
    $id = ($_GET["id"]);

    $query = "SELECT * FROM games WHERE game_id='$id'";
    $result = mysqli_query($conn, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
    // apabila data tidak ada pada database maka akan dijalankan perintah ini
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='daftar-games.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='daftar-games.php';</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jeday Shop | edit game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Jeday Shop | edit game</title>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }

        h1 {
            text-transform: uppercase;
            color: #212429;
        }

        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }

        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background: #f8f8f8;
            border: 2px solid #ccc;
            outline-color: #212429;
        }

        div {
            width: 100%;
            height: auto;
        }

        .base {
            width: 600px;
            height: auto;
            padding: 30px;
            margin-left: auto;
            margin-right: auto;
            background: white;
        }
    </style>
</head>

<body>
    <center>
        <h1 class="mt-5">Edit Produk <?php echo $data['nama_game']; ?></h1>
        <center>
            <form method="POST" action="proses-edit.php" enctype="multipart/form-data">
                <section class="base">
                    <!-- menampung nilai id produk yang akan di edit -->
                    <input name="id" value="<?php echo $data['game_id']; ?>" hidden />
                    <div class="box">
                        <div>
                            <label class="mb-3">Nama Game</label>
                            <input type="text" name="nama_game" value="<?php echo $data['nama_game']; ?>" autofocus="" required="" />
                        </div>
                        <div>
                            <div>
                                <label class="mb-3">Foto Game</label>
                                <img src="images/<?php echo $data['foto_game']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
                                <div class="input-group mb-3">
                                    <input name="foto_game" type="file" class="form-control mt-3" id="inputGroupFile02">
                                    <label class="input-group-text mt-3" for="inputGroupFile02">Upload</label>
                                </div>
                                <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
                            </div>
                        </div>
                </section>
            </form>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>