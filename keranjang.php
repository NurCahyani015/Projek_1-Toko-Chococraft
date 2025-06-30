<?php
include 'header.php';
include 'koneksi.php';

if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "sukses") {
        echo "<script>alert('pesanan telah ditambahkan');</script>";
    } else if ($_GET['pesan'] == "hapus") {
        echo "<script>alert('pesanan telah dihapus');</script>";
    }
}

if (empty($_SESSION['pesanan']) || !isset($_SESSION['pesanan'])) {
    echo "<script>alert('anda belum memesan, silahkan pesan terlebih dahulu');</script>";
    echo "<script>location='product.php';</script>";
}



?>

<div class="container">
    <h2>Keranjang</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Image</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">SubTotal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $nomor = 1;
            $idd = $_SESSION['user']['id_login'];
            $totalbelanja = 0;
            foreach ($_SESSION["pesanan"] as $id_coklat => $jumlah) {
                include('koneksi.php');
                // meampilkan produk yang dipesan
                $hasil = mysqli_query($connection, "SELECT * FROM coklat WHERE id_coklat='$id_coklat'");

                $isi = mysqli_fetch_assoc($hasil);
                // menjumlahkan subtotalnya
                $subharga = $isi['harga'] * $jumlah;


            ?>
                <tr>
                    <td><?= $nomor; ?></td>
                    <td><img src="images/<?= $isi['gambar']; ?>" width="100px"></td>
                    <td><?= $isi['nama_coklat']; ?></td>
                    <td>Rp. <?= number_format($isi['harga']); ?></td>
                    <td><?= $jumlah; ?> /Pcs</td>
                    <td><?= number_format($subharga); ?></td>
                    <td><a href="proses.php?id=<?= $isi['id_coklat']; ?>&aksi=hapus_keranjang" class="btn btn-danger">Hapus</a>
                    <a href="detail1.php?id=<?= $isi['id_coklat']; ?>" class="btn btn-danger">edit</a>
                </td>
                    <td></td>
                </tr>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="proses.php?id=<?= $isi['id_coklat']; ?>&aksi=edit_keranjang" enctype="multipart/form-data" method="post">
        <input type="hidden" name="id" value="<?php echo $isi['id_coklat'] ?>">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Edit Jumlah Pesanan</label>
            <input type="number" class="form-control" id="recipient-name" name="jumlah1">
            <button type="submit" class="btn btn-primary">Send message</button>
          </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
        
      </div>
    </div>
    </form>
            <?php $nomor++;
                $totalbelanja += $subharga;

            } ?>
            <tr>
                <th colspan="5">Total Belanja</th>
                <th colspan="2">Rp. <?php echo number_format($totalbelanja); ?></th>
            </tr>
        </tbody>
    </table>
</div>

<div class="ms-5">
    <form method="POST">
        <div class="tpesan">
            <a href="product.php" class="btn btn-primary btn-sm">Lihat Menu</a>
            <button class="btn btn-success btn-sm" name="konfirm">Konfirmasi Pesanan</button>
        </div>
    </form>
</div>
<!-- masukkan ke database booking -->
<?php
if (isset($_POST['konfirm'])) {

    $kode_booking = time();
    $tanggal = date("y-m-d");
    $hasil = mysqli_query($connection, "INSERT INTO booking VALUES ('','$idd','$kode_booking','','','','$totalbelanja','belum bayar','','$tanggal','','')");

    // Mendapatkan ID barusan
    $id_terbaru = $connection->insert_id;

    // Menyimpan data ke tabel pemesanan produk
    foreach ($_SESSION["pesanan"] as $id_coklat => $jumlah) {
        $hasil = mysqli_query($connection, "SELECT * FROM coklat WHERE id_coklat='$id_coklat'");
        $isi = mysqli_fetch_assoc($hasil);
        $gambar = $isi['gambar'];
        $nama_coklat = $isi['nama_coklat'];
        $harga = $isi['harga'];

        $sub = $harga * $jumlah;
        $stok = $isi['stok'];
        $hasil = mysqli_query($connection, "INSERT INTO keranjang VALUES ('', '$id_coklat','$kode_booking', '$idd', '$gambar','$nama_coklat','$harga','$jumlah','$sub') ");
        $hasil2 = mysqli_query($connection, "UPDATE coklat SET stok='$stok' WHERE id_coklat=$id_coklat");
        
        if ($stok == 0) {
            $hasil2 = mysqli_query($connection, "UPDATE coklat SET status='habis' WHERE id_coklat=$id_coklat");
        }
    }

    // Mengosongkan pesanan
    // unset($_SESSION["pesanan"]);

    // Dialihkan ke halaman nota
    echo "<script>alert('Pemesanan Sukses!');</script>";
    echo "<script>location= 'konfirmasi.php?id=$kode_booking'</script>";
}

?>
<br><br><br><br><br><br><br><br><br><br>
<?php
include 'footer.php';

?>