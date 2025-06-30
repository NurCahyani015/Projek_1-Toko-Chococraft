<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "toko_chococraft";

// perintah untuk mengkoneksikan dengan database
$connection = mysqli_connect($servername, $username, $password, $database);
// var_dump($connection);

// jika tidak gagal terkoneksi dengan database maka muncul pesan error
if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}












?>