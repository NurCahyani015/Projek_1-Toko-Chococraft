<?php
// memanggil file header.php
include 'header.php';

// memanggil file koneksi.php
include 'koneksi.php';
?>
 
 <!-- form untuk menampilkan data detail booking -->
 <div class="container">
    <div class="row">
        <div class="col-sm-4">
            <form action="proses.php?id=rincian" method="post">
            <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="barang telah di terima">barang telah di terima</option>
                        <option value="barang ingin di kembalikan">barang ingin di kembalikan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <input type="text" class="form-control" id="pesan" placeholder="Masukkan Pesan" name="pesan">
                </div>
                <button type="submit" class="btn btn-primary float-right">
                            kirim
                </button>
                <input type="text" value="<?= $_GET['kode']; ?>" name="kode" hidden>
            </form>             
        </div>
    </div>
</div>
<?php
// memanggil file footer.php
include 'footer.php';
?>