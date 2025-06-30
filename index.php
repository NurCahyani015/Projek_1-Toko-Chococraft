<?php
// memanggil file koneksi.php
include 'koneksi.php';

// memanggil file header.php
include 'header.php';

?>
<!-- gambar yang bergerak pada halaman utama -->
<section class="slider_section ">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="detail_box">
              <h1 style="font-family:arial">Chococraft Milk 60% varian Mete</h1>

              </div>
            </div>
            <div class="col-md-4 ml-auto">
              <div class="img-box">
                <img src="images/produk1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="container">
          <div class="row">
            <div class="col-md-5 mt-1">
              <div class="detail_box">
              <h1 style="font-family:arial">Chococraft Milk 60% varian Cheese</h1>
              </div>
            </div>
            <div class="col-md-4 ml-auto">
              <div class="img-box">
                <img src="images/produk2.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-item ">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="detail_box">
              <h1 style="font-family:arial">Chococraft Milk 60% varian Coffee</h1>

              </div>
            </div>
            <div class="col-md-4 ml-auto">
              <div class="img-box">
                <img src="images/produk3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="detail_box">
              <h1 style="font-family:arial">Bar Original Milk 60% 40gr</h1>

              </div>
            </div>
            <div class="col-md-4 ml-auto">
              <div class="img-box">
                <img src="images/produk4.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="detail_box">
              <h1 style="font-family:arial">Bar Dark 90% 40gr</h1>

              </div>
            </div>
            <div class="col-md-4 ml-auto">
              <div class="img-box">
                <img src="images/produk5.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="detail_box">
              <h1 style="font-family:arial">Bar Dark 80% 40gr</h1>

              </div>
            </div>
            <div class="col-md-4 ml-auto">
              <div class="img-box">
                <img src="images/produk6.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  
  <div class="carousel_btn-box">
    <!-- tombol arah panah kiri pada gambar bergerak -->
    <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
      <i class="fa fa-arrow-left" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
    </a>
    <!-- tombol arah panah kanan pada gambar bergerak -->
    <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
      <i class="fa fa-arrow-right" aria-hidden="true"></i>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<!-- akhir dari gambar yang bergerak pada halaman utama -->
</div>


<!-- tentang toko -->
<section class="about_section layout_padding ">
  <div class="container  ">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
          <h2 style="font-family:arial">Tentang Toko Kami</h2>
          </div>
          <p style="font-family:arial; font-size:18px">
            Kami dengan bangga mempersembahkan kepada Anda koleksi Kerupuk yang lezat dan berkualitas tinggi. Di sini, kami menghormati seni pembuatan kerupuk dengan menggunakan bahan-bahan pilihan terbaik dan proses produksi yang cermat untuk menciptakan rasa yang luar biasa.</p>
            <h4 style="font-family:arial"><b>Keunggulan :</b></h4>
            <p style="font-family:arial; font-size:18px">
            Karena diolah dari biji kakao fermentasi yang berkualitas sehingga menghasilkan rasa dan aroma yang kuat. Selain itu penggunaan100% lemak kakao yang membuat kerupuk ini memiliki banyak manfaat untuk kesehatan salah satunya mengurangi resiko penyakit jantung dan bisa di buktikan oleh banyak riset yang sudah dilakukan</p>
          </div>
      </div>
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- akhir dari tentang toko -->




<!-- produk coklat -->
<?php
$query = "SELECT * FROM coklat ORDER BY id_coklat DESC";
$hasil = mysqli_query($connection, $query);
?>
<section class="chocolate_section ">
  <div class="container">
    <div class="heading_container">
    <h2 style="font-family:arial">Produk Toko Kami</h2>
      <p style="font-family:arial">
        Diolah dari Biji Kakao pilihan yang di fermentasikan menghasilkan produk berkualitas tinggi dengan cita rasa lezat!
      </p>
    </div>
  </div>
  <div class="container">
    <div class="chocolate_container">
      <?php
      foreach ($hasil as $isi) {
      ?>
        <div class="box">
          <div class="img-box">
            <img src="images/<?= $isi['gambar']; ?>">
          </div>
          <div class="detail-box">
            <h6>
              <?= $isi['nama_coklat'] ?>
            </h6>
            <h6>Sisa
              <?= $isi['stok'] ?> / Pcs
            </h6>
            <h5>Rp.
              <?= number_format($isi['harga']) ?>
            </h5>

            <?php if ($isi['status'] == 'tersedia') { ?>
              <a href="detail.php?id_coklat=<?= $isi['id_coklat'] ?>" class="btn btn-info">
                Beli
              </a>
              <?php }else { ?>
                <input type="button" class="btn btn-info text-light" value="Beli" disabled>
              <?php }?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>
<!-- akhir dari produk coklat -->


<!-- kritik dan saran  -->
<section class="contact_section layout_padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
        <div class="form_container">
          <div class="heading_container">
            <h2 style="font-family:arial">
              Kritik Dan Saran
            </h2>
          </div>
          <form action="proses.php?id=kontak" method="post">
            <div>
              <input type="text" placeholder="Full Name" name="nama" />
            </div>
            <div>
              <input type="text" placeholder="Phone number" name="telpon" />
            </div>
            <div>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" name="pesan" />
            </div>
            <div class="d-flex ">
              <button name="submit" type="submit">Kirim
              </button>
            </div>
          </form>
        </div>
      </div>
      
      <!-- <div class="col-md-6  px-0">
        <div class="map_container">
          <div class="map">
            <div id="googleMap"></div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!-- akhir dari kontak kami -->
</div>


<!-- memanggil file footer.php -->
<?php
include 'footer.php';
?>