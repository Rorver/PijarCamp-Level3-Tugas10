<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "pijarcamp";

$koneksi = mysqli_connect($server, $user, $password, $nama_database);

if( !$koneksi ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>