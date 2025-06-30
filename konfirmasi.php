<?php
// memanggil file koneksi.php
include 'koneksi.php';

// memanggil file header.php
include 'header.php';

// jika user belum login maka akan menampilkan alert harap login
if (empty($_SESSION['user'])) {
    echo '<script>alert("Harap login !");window.location="index.php"</script>';
}

// variabel dengan nilai berdasarkan id yang di kirim
$kode_booking = $_GET['id'];

// query untuk mengambil semua data pada tabel booking berdasarkan dari variabel kode_booking
$query = "SELECT * FROM booking WHERE kode_booking = '$kode_booking'";
// perintah untuk menjalankan query diatas
$hasil = mysqli_query($connection, $query);

// mengubah data yang telah diambil dari database menjadi array asosiatif
// dan disimpan pada variabel $isi
$isi = mysqli_fetch_assoc($hasil);




?>

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <!-- menampilkan informasi tentang nomor rekening toko coklat -->
                <div class="card-body" style="height: 310px; background-color: lightgray;">
                    <center>
                        <h3>Pembayaran Dapat Melalui :</h3>
                        <hr />
                        <p> BNI 21374129 A/N Chococraft </p>
                    </center>

                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">

                    <!-- form untuk menginput bukti transfer/pembayaran -->
                    <form id="myForm" method="post" action="proses.php?id=konfirmasi" enctype="multipart/form-data">
                        <table class="table">
                            <!-- menampilkan total pembayaran dari tabel booking -->
                            <tr>
                                <td>
                                    <h4>Total yg Harus di Bayar </h4>
                                </td>
                                <td>
                                    <h4> :</h4>
                                </td>
                                <td>
                                    <h4>Rp. <?php echo number_format(
                                                $isi['total_harga']
                                            ); ?></h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" required class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text" name="alamat" required class="form-control" placeholder="Alamat">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label for="">No Telpon</label>
                                        <input type="number" name="no_telpon" required class="form-control" placeholder="No Telpon">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Masukkan Bukti Pembayaran</td>
                                <td>:</td>
                                <td><input type="file" name="bukti" required accept="image/*"></td>

                            </tr>
                        </table>
                        <input type="hidden" name="id_booking" value="<?= $isi['id_booking']; ?>">
                        <button type="submit" class="btn btn-primary float-right">Kirim</button>
                    </form>
                    <script>

                        
        // Set waktu timeout dalam milidetik (contoh: 5 menit)
        const waktuTimeout = 60000; // 5 * 60 * 1000

        // Fungsi untuk mengatur waktu timeout
        function setFormTimeout() {
            setTimeout(function() {
                alert("Waktu pengisian form telah habis. Anda akan kembali ke halaman sebelumnya.");
                window.location.href ="batalkonfirmasi.php"; // Mengarahkan kembali ke halaman sebelumnya
            }, waktuTimeout);
        }

        // Panggil fungsi setFormTimeout saat halaman dimuat
        window.onload = setFormTimeout;

        // Fungsi untuk validasi form

    </script>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
// memanggil file footer.php
include 'footer.php';
?>