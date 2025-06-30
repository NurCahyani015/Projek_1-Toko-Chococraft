<?php
// memanggil file header.php
include 'header.php';
?>


<!-- kontak kami -->
<section class="contact_section layout_padding">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-lg-4 offset-md-1 offset-lg-2">
        <div class="form_container">
          <div class="heading_container">
          <h2 style="font-family:arial">Kritik Dan Saran</h2>
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
              <button name="submit" type="submit">
                Kirim
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-5  px-0">
        <div class="map_container">
          <br>
          <div class="col">
    <h3 class="text-end">WhatsApp</h3>
    <h6 class="text-end" style="color:black">+6282346958216</h6>
</div>
<br>
    <div class="col">
    <h3 class="text-end">Instagram</h3>
    <h6 class="text-end" style="color:black">@Aktivis_muda</h6>
</div><br>
    <div class="col">
    <h3 class="text-end">Alamat</h3>
    <h6 class="text-end" style="color:black">Mannuruki 2</h6>
    </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- akhir dari kontak kami -->

<!-- <div class="container">
  <div class="row">
    <div class="col">
    <h3 class="text-start">WhatsApp</h3>
    <h6 class="text-start" style="color:black">+62 852-5560-3631</h6>
</div>
    <div class="col">
    <h3 class="text-center">Instagram</h3>
    <h6 class="text-center" style="color:black">@coeklatsulteng_chococraft</h6>
</div>
    <div class="col">
    <h3 class="text-end">Alamat</h3>
    <h6 class="text-end" style="color:black">Perum Dosen Untad, Jl. Tekukur No.10, Kec.Mantikulore, Kota Palu, Sulawesi Tengah 94111.</h6>
    </div>
          </div>
          </div>
</div>
</div> -->

<?php
// memanggil file footer.php
include 'footer.php';
?>