<?php
session_start();
$anony = "anony";

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

}else {
  $username = 'Anony';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\halaman-organik-potbungaplastiks.css">
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
    <div class="isi-content1">
    <h1>Pot Bunga Dari Botol Plastik</h1>
    <img src="../assets/images/anorganik-potbungabotol.jpg">
    </div>
    <div class="isi-content2">
    <p>Bahan dan Peralatan yang Dibutuhkan:
      </br>
    </p>
      <ul>
        <li>- Botol plastik bekas.</li>
        <li>- Pisau.</li>
        <li>- Hiasan untuk mata.</li>
        <li>- Pupuk/tanah untuk menanam.</li>
        <li>- Tanaman.</li>
      </ul>
      </br>
      </br>
      <div class="step">
      <p>
      Langkah-langkah:
      <ul>
        <li>1. Siapkan bahan dan peralatan yang dibutuhkan.</li>
        <li>2. Setelah semua sudah terkumpul, langkah selanjutnya adalah memotong botol plastik dengan pisau.</li>
        <li>3. Ukurannya dikira-kira saja atau lihat pada gambar.</li>
        <li>4. Beri sedikit hiasan sesuai keinginan. Jika ingin sesuai contohnya, tempelkan saja tutup
           botolnya sebagai mulut dan tambahkan mata boneka, lalu tempel.</li>
        <li>5. Jangan lupa untuk melubangi bagian bawah botol agar air tidak mengendap di dalam botol.</li>
        <li>6. Masukkan botol pupuk dan tanah ke dalam botol.</li>
        <li>7. Masukkan bibit tanaman yang ingin ditanam.</li>
      </ul>
      </br>
      </p>
      <div class="video-container">
        <iframe src="https://youtu.be/jBvEWB8Uwn8?si=3uU-mr5PG2QFCGQ0" frameborder="0" allowfullscreen></iframe>
      </div>
      </div>
      </div>
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