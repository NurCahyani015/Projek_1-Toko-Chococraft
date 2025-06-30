<?php
// memanggil file koneksi.php
include 'koneksi.php';

// jika tidak ada variabel id maka akan di arahkan ke halaman index.php
if (!isset($_GET['id'])) {
	header("location:index.php");
	exit();
}




// proses menambahkan saran dari user ke database
if ($_GET['id'] == 'kontak') {

	$nama = $_POST['nama'];
	$telpon = $_POST['telpon'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];
	$query = "INSERT INTO pesan VALUES('','$nama','$telpon','$email','$pesan')";
	mysqli_query($connection, $query);

	echo '<script>alert("Terima Kasih telah memberikan kritik dan sarannya!");history.back();</script>';
}



// proses booking pesanan
 if ($_GET['id'] == 'booking') {

 	$nama = $_POST['nama'];
 	$alamat = $_POST['alamat'];
 	$telpon = $_POST['telpon'];
 	$jumlah = $_POST['jumlah'];


 	$id_coklat = $_POST['id_coklat'];
 	$nama_coklat = $_POST['nama_coklat'];
 	$harga = $_POST['harga'];
 	$stok = $_POST['stok'];
 	$gambar = $_POST['gambar'];

 	$total = $harga * $jumlah;
 	$konfirmasi_pembayaran = 'belum bayar';
 	$tgl_input = date('y-m-d');
 	$bukti = "";
 	$kode_booking = time();

 	session_start();
 	$user = $_SESSION['user']['id_login'];




 	$query = "INSERT INTO booking VALUES('', '$user','$kode_booking','$id_coklat','$nama','$alamat','$telpon','$jumlah','$total','$konfirmasi_pembayaran','$tgl_input','$bukti')";
 	 var_dump($query);
 	mysqli_query($connection, $query);
 	 var_dump($tes);

 	echo '<script>alert("Terima Kasih!Silahkan Melakukan Pembayaran!");window.location="bayar.php?id=' . time() . '";</script>';
 }


// proses menambahkan bukti pembayaran dari user ke database
if ($_GET['id'] == 'konfirmasi') {
	$dir = 'images/';
	$tmp_name = $_FILES['bukti']['tmp_name'];
	$temp = explode(".", $_FILES["bukti"]["name"]);
	$newfilename = round(microtime(true)) . '.' . end($temp);
	$target_path = $dir . basename($newfilename);
	$allowedImageType = array("image/gif",   "image/JPG",   "image/jpeg",   "image/pjpeg", "image/png",   "image/x-png");

	if ($_FILES['bukti']["error"] > 0) {
		echo '<script>alert("Error file");history.go(-1)</script>';
		exit();
	} elseif (round($_FILES['bukti']["size"] / 1024) > 4096) {
		echo '<script>alert("WARNING !!! Besar Gambar Tidak Boleh Lebih Dari 4 MB !");history.go(-1)</script>';
		exit();
	} else {
		if (move_uploaded_file($tmp_name, $target_path)) {
			$id_booking = $_POST['id_booking'];
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$no_telpon = $_POST['no_telpon'];
			$konfirmasi_pembayaran = "sedang di proses";



			$query = "UPDATE booking SET nama='$nama', alamat='$alamat',no_tlp=$no_telpon, konfirmasi_pembayaran = '$konfirmasi_pembayaran',bukti = '$newfilename' WHERE id_booking = '$id_booking'";
			$hasil = mysqli_query($connection, $query);
			session_start();
			foreach ($_SESSION["pesanan"] as $id_coklat => $jumlah) {
				$hasil = mysqli_query($connection, "SELECT * FROM coklat WHERE id_coklat='$id_coklat'");
				$isi = mysqli_fetch_assoc($hasil);
			$stok=$isi['stok1'];
			$hasil2 = mysqli_query($connection, "UPDATE coklat SET stok='$stok'WHERE id_coklat=$id_coklat");
				
				if ($stok == 0) {
					$hasil2 = mysqli_query($connection, "UPDATE coklat SET status='habis' WHERE id_coklat=$id_coklat");
				}
			}
			unset($_SESSION["pesanan"]);


			
			echo '<script>alert("sedang di proses");window.location="index.php";</script>';
		}
	}
		
}

// daftar user baru
if ($_GET['id'] == 'daftar') {
	$user = $_POST['user'];
	$email = $_POST['email'];
	$no_tlp = $_POST['no_tlp'];
	$alamat = $_POST['alamat'];
	$pass = mysqli_real_escape_string($connection, $_POST['pass']);
	$level = "pengguna";

	// enkripsi password
	$pass = password_hash($pass, PASSWORD_DEFAULT);

	// cek apakah username sudah ada atau belum
	$cek = "SELECT username FROM login WHERE username = '$user'";
	$akhir = mysqli_query($connection, $cek);
	if (mysqli_fetch_assoc($akhir)) {
		echo '<script>alert("username sudah ada!");history.back();</script>';
	} else {
		$query = "INSERT INTO login VALUES('','$user','$email','$no_tlp','$alamat','$pass','$level')";
		mysqli_query($connection, $query);
		if (mysqli_affected_rows($connection) > 0) {
			echo '<script>alert("berhasil registrasi");history.back();</script>';
		} else {
			echo '<script>alert("gagal registrasi");history.back();</script>';
		}
	}
}

// login
if ($_GET['id'] == 'login') {
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$query = "SELECT * FROM login WHERE username = '$user' OR email='$user'";
	$hasil = mysqli_query($connection, $query);
	$isi = mysqli_fetch_assoc($hasil);



	if (mysqli_num_rows($hasil) == 1) {

		if (password_verify($pass, $isi['password'])) {
			session_start();
			$_SESSION['user'] = $isi;
			if ($isi['level'] == 'admin') {
				echo '<script>alert("Login Sukses");window.location="admin/index.php";</script>';
			} else {
				echo '<script>alert("Login Sukses!");window.location="index.php";</script>';
			}
		} else {

			echo '<script>alert("username atau password salah!");window.location="index.php";</script>';
		}
	} else {
		echo '<script>alert("username atau password salah!");window.location="index.php";</script>';
	}
}

if ($_GET['id'] == 'rincian') {
	$status = $_POST['status'];
	$pesan = $_POST['pesan'];
	$kode_booking = $_POST['kode'];

	$query = "UPDATE booking SET status_barang='$status', pesan='$pesan' WHERE kode_booking = '$kode_booking'";
	$hasil = mysqli_query($connection, $query);

	echo "<script>alert('Berhasil Terkirim!');</script>";
	echo "<script>location= 'pesanan.php'</script>";

}


// menambahkan coklat ke keranjang
if ($_GET['aksi'] == 'keranjang') {
	session_start();
	//ambil id coklat
	$id_coklat = $_GET['id'];
	$jumlah = $_POST['jumlah'];
	$query = "SELECT * FROM coklat WHERE id_coklat='$id_coklat'";
	$hasil = mysqli_query($connection, $query);
	$isi = mysqli_fetch_assoc($hasil);

	if ($jumlah <= $isi['stok'] && $jumlah >= 1) {
		if (isset($_SESSION['pesanan'][$id_coklat])) {
			$_SESSION['pesanan'][$id_coklat] += $jumlah;
			$stok1=  $isi['stok'];
			
			$hasil2 = mysqli_query($connection, "UPDATE coklat SET  jumlah = '$stok1' WHERE id_coklat=$id_coklat");
		} else {
			$_SESSION['pesanan'][$id_coklat] = $jumlah;
			$stok1=  $isi['stok'];
			
			$hasil2 = mysqli_query($connection, "UPDATE coklat SET  jumlah = '$stok1' WHERE id_coklat=$id_coklat");
		}
		header("location:keranjang.php?pesan=sukses");
	}
	echo '<script>alert("Jumlah yang anda masukkan salah!");window.location="index.php";</script>';

	$stok = $isi['stok'] - $jumlah;
	$jumlah = $stok+ $jumlah;
	$hasil2 = mysqli_query($connection, "UPDATE coklat SET stok='$stok' WHERE id_coklat=$id_coklat");
	
}
if ($_GET['aksi'] == 'edit_keranjang') {
	session_start();
	//ambil id coklat
	$id_coklat = $_GET['id'];
	$jumlah = $_POST['jumlah'];
	$query = "SELECT * FROM coklat WHERE id_coklat='$id_coklat'";
	$hasil = mysqli_query($connection, $query);
	$isi = mysqli_fetch_assoc($hasil);
	
		if (isset($_SESSION['pesanan'][$id_coklat])) {
			$_SESSION['pesanan'][$id_coklat] += $jumlah;
			
			$stok = $isi['stok'] - $jumlah;
			$hasil2 = mysqli_query($connection, "UPDATE coklat SET stok='$stok'  WHERE id_coklat=$id_coklat");
		} else {
			$_SESSION['pesanan'][$id_coklat] = $jumlah;
			
			$stok = $isi['stok'] - $jumlah;
			$hasil2 = mysqli_query($connection, "UPDATE coklat SET stok='$stok' WHERE id_coklat=$id_coklat");
		}
		header("location:keranjang.php?pesan=sukses");
	
}

// hapus coklat di keranjang
if ($_GET['aksi'] == 'hapus_keranjang') {
	session_start();
	$id_coklat = $_GET['id'];
	$query = "SELECT * FROM coklat WHERE id_coklat='$id_coklat'";
	$hasil = mysqli_query($connection, $query);
	$isi = mysqli_fetch_assoc($hasil);
	$stok =$isi['jumlah'];

	$hasil2 = mysqli_query($connection, "UPDATE coklat SET stok='$stok' WHERE id_coklat=$id_coklat");
	unset($_SESSION['pesanan'][$id_coklat]);

	header("location:keranjang.php?pesan=hapus");


	
}

//checkout
if (isset($_POST['konfirm'])) {
	$tanggal = date("Y-m-d");

	// Menyimpan data ke tabel pemesanan
	$insert = mysqli_query($koneksi, "INSERT INTO pemesanan (tanggal_pesan, total_harga) VALUES ('$tanggal', '$totalbelanja')");

	// Mendapatkan ID barusan
	$id_terbaru = $koneksi->insert_id;

	// Menyimpan data ke tabel pemesanan produk
	foreach ($_SESSION["pesanan"] as $id_produk => $jumlah) {
		$insert = mysqli_query($koneksi, "INSERT INTO pemesanan_produk (id_user,id_pesan, id_produk, jumlah) 
		VALUES ('$idd', '$id_terbaru', '$id_produk', '$jumlah') ");
	}

	// Mengosongkan pesanan
	unset($_SESSION["pesanan"]);

	// Dialihkan ke halaman nota
	echo "<script>alert('Pemesanan Sukses!');</script>";
	echo "<script>location= 'menu_user.php'</script>";
}

if ($_GET['id'] == 'update_user') {
	$id_login = $_POST['id_login'];
	$user_baru = $_POST['username_baru'];
	$pass = $_POST['pass_baru'];
	$pass_baru = password_hash($pass, PASSWORD_DEFAULT);

	$query = "UPDATE login SET username='$user_baru', password='$pass_baru' WHERE id_login='$id_login'";
	mysqli_query($connection, $query);

	echo "<script>alert('Data berhasil di ubah!');</script>";
	echo "<script>location= 'profil.php'</script>";
}


