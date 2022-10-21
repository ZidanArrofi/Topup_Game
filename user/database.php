<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "topup";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
