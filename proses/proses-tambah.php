<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../topup/database.php';

// membuat variabel untuk menampung data dari form
if (isset($_POST['submit'])) {
    $nama_game     = $_POST['nama'];
    $foto_game     = $_FILES['image']['name'];


    //cek dulu jika ada gambar produk jalankan coding ini
    if ($foto_game != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $foto_game); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['image']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $foto_game; //menggabungkan angka acak dengan nama file sebenarnya
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'images/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
            // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
            $query = "INSERT INTO games (nama_game, foto_game) VALUES ('$nama_game', '$nama_gambar_baru')";
            $result = mysqli_query($conn, $query);
            // periska query apakah ada error
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($conn) .
                    " - " . mysqli_error($conn));
            } else {
                //tampil alert dan akan redirect ke halaman daftra-games.php
                //silahkan ganti index.php sesuai halaman yang akan dituju
                echo "<script>alert('Data berhasil ditambah.');window.location='daftar-games.php';</script>";
            }
        } else {
            //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
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
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
            echo "<script>alert('Data berhasil ditambah.');window.location='daftar-games.php';</script>";
        }
    }
}
