<?php
include '../topup/database.php';

$id = $_POST['id'];
$nama_game   = $_POST['nama_game'];
$foto_game = $_FILES['foto_game']['name'];
if ($foto_game != "") {
    $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
    $x = explode('.', $foto_game);
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto_game']['tmp_name'];
    $nama_gambar_baru =  '-' . $foto_game;
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        move_uploaded_file($file_tmp, 'images/' . $nama_gambar_baru);

        $query  = "UPDATE games SET nama_game = '$nama_game',  foto_game = '$nama_gambar_baru'";
        $query .= "WHERE game_id = '$id'";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='daftar-games.php';</script>";
        }
    } else {
        echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah-game.php';</script>";
    }
} else {
    $query  = "UPDATE games SET nama_game = '$nama_game'";
    $query .= "WHERE game_id = '$id'";
    $result = mysqli_query($conn, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data berhasil diubah.');window.location='daftar-games.php';</script>";
    }
}
