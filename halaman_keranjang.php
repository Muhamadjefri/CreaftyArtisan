<?php
session_start();
$anony = "anony";

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

}else {
     echo '<script>';
     echo 'alert("Halaman bisa diakses apabila sudah memiliki akun!!")';
     echo '</script>';
     echo '<script>window.location.href = "../model/login-signnup.php";</script>';
      exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\pembelian.css">
    <link rel="stylesheet" href="..\styles\keranjang.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Crafty Artisan</title>
</head>

<body>
<header>
        <nav class="navbar">
        <div class="logo">
        <div class="nav-left">
            <strong>Crafty Artisan</strong>
        </div>
        </div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="..\model\index.php" class="bar">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="..\model\chat_forum.php" class="bar">Forum</a>
                </li>
                <li class="nav-item">
                    <a href="..\model\pembelian.php" class="bar">Pembelian</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="bar">Kontak</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar-btn"></span>
                <span class="bar-btn"></span>
                <span class="bar-btn"></span>
            </div>

            <script>
              const hamburger = document.querySelector(".hamburger");
              const navMenu = document.querySelector(".nav-menu");

              hamburger.addEventListener("click", mobileMenu);

              function mobileMenu() {
              hamburger.classList.toggle("active");
              navMenu.classList.toggle("active");
              }

            </script>
            
            <div class="nav-right">
            <div class="dropdown">
                <button class="dropdown-button">Akun</button>
                <div class="dropdown-content">
                    <div class="user"><?php echo $username; ?> </div>
                    <a class="bar"href="..\model\profile.php">Profile</a>
                    <a class="bar"href="..\controller\logout.php">Logout</a>
            </div>
            </div>
            </div>
        </nav>

        </header>

  <content>
    <div class="content">
            <div class="daftar-produk">

            <div class="scrollable-content">

              <div class="produk-keranjang">
                <img src="../assets/images/stick.jpg">
                <div class="detail-produk">
                    <h4>Tempat Pensil Stik Es Krim</h4>
                    <h5>Rp 20.000,-</h5>
                    <div class="">
                    <button onclick="kurangiNilai('jumlah1')">&nbsp; - &nbsp;</button>
                    <input type="text" id="jumlah1" name="jumlah1" value="1">
                    <button onclick="tambahNilai('jumlah1')">&nbsp; + &nbsp;</button>
                    </div>
                </div>
              </div>

              <div class="produk-keranjang">
                <img src="../assets/images/gantungan_kunci_handmade.jpg">
                <div class="detail-produk">
                    <h4>Gantungan Kunci</h4>
                    <h5>Rp 10.000,-</h5>
                    <div class="">
                    <button onclick="kurangiNilai('jumlah2')">&nbsp; - &nbsp;</button>
                    <input type="text" id="jumlah2" name="jumlah2" value="1">
                    <button onclick="tambahNilai('jumlah2')">&nbsp; + &nbsp;</button>
                    </div>
                </div>
              </div>

              <div class="produk-keranjang">
                <img src="../assets/images/scrapbook-flowers.jpg">
                <div class="detail-produk">
                    <h4>Scarpbook Flower</h4>
                    <h5>Rp 30.000,-</h5>
                    <div class="">
                    <button onclick="kurangiNilai('jumlah3')">&nbsp; - &nbsp;</button>
                    <input type="text" id="jumlah3" name="jumlah3" value="1">
                    <button onclick="tambahNilai('jumlah3')">&nbsp; + &nbsp;</button>
                    </div>
                </div>
              </div>
            </div>

              <div class="total-belanja">
                    <div class="text">
                        <h3>TOTAL BELANJA</h3>
                        <br>
                        Total Harga: <span id="totalHarga"> 0 </span>
                    </div>  
                  <div class="btn-proses">
                    <a class="tombol2 tombol-proses" href="halaman_proses.php">PROSES</a>
                    <a class="tombol2 tombol-proses" href="#">HAPUS KERANJANG</a>
                  </div>
              </div>
            </div>

            <script>
               function kurangiNilai(inputId) {
                var inputElement = document.getElementById(inputId);
                var nilai = parseInt(inputElement.value);
                if (nilai > 1) {
                    nilai--;
                    inputElement.value = nilai;
                    updateTotalHarga();
                  }
                }

              function tambahNilai(inputId) {
                var inputElement = document.getElementById(inputId);
                var nilai = parseInt(inputElement.value);
                nilai++;
                inputElement.value = nilai;
                updateTotalHarga();
              }

              var hargaGantunganKunci = 10000;
              var hargaScrapbookFlowers = 30000;
              var hargaTempatPensil = 20000;

              function updateTotalHarga() {
              var totalHargaElement = document.getElementById('totalHarga');
              var totalHarga = (hargaGantunganKunci * parseInt(document.getElementById('jumlah1').value)) +
                         (hargaScrapbookFlowers * parseInt(document.getElementById('jumlah2').value)) +
                         (hargaTempatPensil * parseInt(document.getElementById('jumlah3').value));
              totalHargaElement.textContent = totalHarga;
              }

              updateTotalHarga();
            </script>

    </div>
</content>

<footer>
        <div class="ending">

            <div class="box">
                <div class="box-about">
                    <h1>Crafty Artisan</h1>
                    <p>Kerajinan Tangan adalah kegiatan menciptakan suatu produk atau barang yang
                         dilakukan oleh tangan dan memiliki fungsi pakai atau keindahan sehingga memiliki nilai jual.</p>
                </div>
            </div>

            <div class="box">
                <div class="box-explore">
                <h2>Tentang Kami</h2>
                <li><a href="#" class="bar">Forum</a></li>
                <li><a href="#" class="bar">Pembelian</a></li>
                <li><a href="#" class="bar">Galeri</a></li>
                </div>
            </div>
            <div class="box">
                <div class="banner">
                <div class="networks">
                    <div id="facebook" class="networks-outer">
                      <a href="#">
                        <i class="fa fa-facebook"> </i>
                      </a>
                    </div>
                  </div>
                  <div class="networks">
                    <div id="instagram" class="networks-outer">
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </div>
                  </div>
                  <div class="networks">
                    <div id="whatsapp" class="networks-outer">
                      <a href="#">
                        <i class="fa fa-whatsapp"></i>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </footer>
</body>
</html>