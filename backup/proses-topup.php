<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../topup/database.php';

// membuat variabel untuk menampung data dari form
if (isset($_POST['submit'])) {
    $jenis_game       = $_POST['jenis_game'];
    $user_id          = $_POST['user_id'];
    $jenis_item       = $_POST['jenis_item'];
    $jumlah_item      = $_POST['jumlah_item'];
    $pembayaran       = $_POST['pembayaran'];
    $nomor_hp         = $_POST['nomor_hp'];



    if (isset($_POST['submit'])) {
        $query = "INSERT INTO item (jenis_game, user_id, jenis_item, jumlah_item, pembayaran, nomor_hp) VALUES ('$jenis_game', '$user_id', 
   '$jenis_item', '$jumlah_item', '$pembayaran', '$nomor_hp')";
        $result = mysqli_query($conn, $query);
        // periska query apakah ada error
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($conn) .
                " - " . mysqli_error($conn));
        } else {
            echo "<script>alert('Yeayy! Pembelian berhasil. item game akan segera masuk.');window.location='dashboard.php';</script>";
        }
    }
}
