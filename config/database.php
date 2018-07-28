<?php
// deklarasi parameter koneksi database
$server   = "127.0.0.1:49907";
$username = "azure";
$password = "6#vWHD_$";
$database = "iye_db";

// koneksi database
$mysqli = new mysqli($server, $username, $password, $database);

// cek koneksi
if ($mysqli->connect_error) {
    die('Koneksi Database Gagal : '.$mysqli->connect_error);
}
?>
//Database=localdb;Data Source=127.0.0.1:49907;User Id=azure;Password=6#vWHD_$
