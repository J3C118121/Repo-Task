<?php
$host   = "localhost";
$user   = "root";
$psw    = "";
$db_name = "pabweb1";
$koneksi = mysqli_connect($host, $user, $psw, $db_name);

//cek jika koneksi ke mysql gagal, maka akan tampil pesan berikut
if (mysqli_connect_errno()) {
    echo "Gagal melakukan koneksi ke MySQL: " . mysqli_connect_error();
}
