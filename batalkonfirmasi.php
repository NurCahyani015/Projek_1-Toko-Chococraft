
<?php
session_start();
include 'koneksi.php';

$idd = $_SESSION['user']['id_login'];
foreach ($_SESSION["pesanan"] as $id_coklat => $jumlah) {
    include('koneksi.php');
    // meampilkan produk yang dipesan
    $hasil = mysqli_query($connection, "SELECT * FROM coklat WHERE id_coklat='$id_coklat'");

    $isi = mysqli_fetch_assoc($hasil);
    // menjumlahkan subtotalnya
    $stok =$isi['jumlah'];
    $query= mysqli_query($connection, "UPDATE coklat SET stok='$stok' WHERE id_coklat='$id_coklat'");
    unset($_SESSION['pesanan'][$id_coklat]);

    if ($query) {
        echo '<script>alert("Gagal, Baranng akan dibatalkan");
        document.location.href="Index.php";
        </script>';
    }else{
        echo '<script>alert("gagal");
        document.location.href="Index.php";
        </script>';
    }
}
?>
   