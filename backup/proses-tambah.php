<?php

include '../topup/database.php';


if (isset($_POST['submit'])) {
    $nama_game     = $_POST['nama'];
    $foto_game     = $_FILES['image']['name'];


    if ($foto_game != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
        $x = explode('.', $foto_game);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['image']['tmp_name'];
        $nama_gambar_baru = '-' . $foto_game;
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'images/' . $nama_gambar_baru);

            $query = "INSERT INTO games (nama_game, foto_game) VALUES ('$nama_game', '$nama_gambar_baru')";
            $result = mysqli_query($conn, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($conn) .
                    " - " . mysqli_error($conn));
            } else {

                echo "<script>alert('Data berhasil ditambah.');window.location='daftar-games.php';</script>";
            }
        } else {

            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg, jpeg atau png.');window.location='tambah-game.php';</script>";
        }
    } else {
        $query = "INSERT INTO games (nama_game, foto_game) VALUES ('$nama_game', null)";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil ditambah.');window.location='daftar-games.php';</script>";
        }
    }
}
