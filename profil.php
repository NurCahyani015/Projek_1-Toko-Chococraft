<?php
// memanggil file header.php
include 'header.php';

// memanggil file koneksi.php
include 'koneksi.php';
$login = $_SESSION['user']['id_login'];
$query = "SELECT * FROM login WHERE id_login='$login'";
$hasil = mysqli_query($connection, $query);
$isi = mysqli_fetch_assoc($hasil);
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Alamat</th>
      </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>
    <?php foreach ($hasil as $isi) { ?>
      <tr>
      
        <td><?= $isi['username']; ?></td>
        <td><?= $isi['email']; ?></td>
        <td><?= $isi['no_tlp']; ?></td>
        <td><?= $isi['alamat']; ?></td>
        
      </tr>
    <?php $no++;
    } ?>
  </tbody>
</table>
<br><br><br><br>
<form method="post" action="proses.php?id=update_user">
    <table class="table">
        <tr>
            <td>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username_baru" required class="form-control" placeholder="Username Baru">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="form-group">
                    <label for="">Password Baru</label>
                    <input type="password" name="pass_baru" required class="form-control" placeholder="Password baru">
                </div>
            </td>
        </tr>
    </table>
    <input type="hidden" name="id_login" value="<?= $isi['id_login']; ?>">
    <button type="submit" class="btn btn-primary float-right">Save</button>
</form>
<br><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>