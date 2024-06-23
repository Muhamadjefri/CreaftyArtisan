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
    <link rel="stylesheet" href="..\styles\halaman-organik.css">
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
  <div class="first">
    <div class="content">
    <h1>Organik</h1>
    <button class="btn-list">
    <div class="content-list">
    <div class="image">
    <img src="../assets/images/organik-seashell.jpg">
    </div>
      <div class="list">
      <h3>Seashell Lamp</h3> 
        <p> Hasil kerajinan dari cangkang kerang merupakan kerajinan yang unik dan disukai banyak orang. 
        Cangkang kerang memiliki ukuran kecil dan memiliki pipih yang dapat dibuat untuk pelapis tempat 
        seperti lampu.</p>
        </br>
        <a href="..\model\halaman_organik_seashell.php">Selengkapnya...</a>
      </div>
    </div>
    </button>

    <button class="btn-list">
    <div class="content-list">
    <div class="image">
    <img src="../assets/images/organik-tempattisu.jpg">
    </div>
      <div class="list">
      <h3>Tempat Tisu Jerami</h3> 
        <p> Jerami yang terdapat pada batang padi banyak didapat didaerah persawahan. Meskipun jerami ini dipakai
           sebagai makan ternak, tapi juga bisa digunakan sebagai bahan dasar kerajinan limbah organik yang memiliki 
           keunikan serta artistik tersendiri.</p>
        </br>
        <a href="">Selengkapnya...</a>
      </div>
    </div>
    </button>

    <button class="btn-list">
    <div class="content-list">
    <div class="image">
    <img src="../assets/images/organik-mangkokbatokkelapa.jpg">
    </div>
      <div class="list">
      <h3>Mangkok Batok Kelapa</h3> 
        <p> Mangkok berbentuk oval yang terbuat dari limbah batok kelapa yang sudah tidak digunakan lagi, 
          menjadi sebuah kerajinan yang bernilai ekonomis dan memiliki estetika yang tinggi.</p>
        </br>
        <a href="">Selengkapnya...</a>
      </div>
    </div>
    </button>
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