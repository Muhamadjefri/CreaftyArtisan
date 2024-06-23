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
    <link rel="stylesheet" href="..\styles\halaman-anorganik.css">
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
    <h1>Anorganik</h1>
    <button class="btn-list">
    <div class="content-list">
    <div class="image">
    <img src="../assets/images/anorganik-potbungabotol.jpg">
    </div>
      <div class="list">
      <h3>Pot Bunga Dari Botol Plastik</h3> 
        <p> Limbah botol air mineral bagi kebanyakan orang di anggap sebagai sampah yang kurang bermanfaat. Botol plastik 
          bekas bisa kita jadikan sebagai suvenir yang cantik dan berkualitas. Di samping untuk menjaga kebersihan lingkungan,
           pemanfaatan limbah botol plastik dapat memberikan penghasilan tambahan. Berikut contoh kerajinan dari limbah botol 
           mineral.</p>
        </br>
        <a href="..\model\halaman_organik_potbungaplastik.php">Selengkapnya...</a>
      </div>
    </div>
    </button>

    <button class="btn-list">
    <div class="content-list">
    <div class="image">
    <img src="../assets/images/anorganik-kursibankaret.jpg">
    </div>
      <div class="list">
      <h3>Kursi Dari Ban Karet</h3> 
        <p> Limbah karet ban semakin hari semakin banyak dengan bertambahnya kendaraan bermotor, apabila hanya dibuang dan 
          dibakar tentunya akan mengotori lingkungan. Limbah karet ban dapat dimanfaatkan untuk produk kerajinan yang unik dan
           indah. Produk kerajinan dari limbah ban bekas dapat dibuat menjadi kursi, meja dan beberapa furnitur lainnya.</p>
        </br>
        <a href="">Selengkapnya...</a>
      </div>
    </div>
    </button>

    <button class="btn-list">
    <div class="content-list">
    <div class="image">
    <img src="../assets/images/anorganik-lampusendokplastik.jpg">\
    </div>
      <div class="list">
      <h3>Lampu Hias Dari Sendok Plastik</h3> 
        <p> Sendok plastik dapat dibuat dan dimanfaatkan menjadi lampu hias. Seperti pada digambar modelnya berbentuk seperti 
          buah nanas. Dari kerajinan ini dapat berfungsi mempercantik suatu ruangan.</p>
        </br>
        <a href="">Selengkapnya...</a>
      </div>
    </div>
    </button>

    <button class="btn-list">
    <div class="content-list">
    <div class="image">
    <img src="../assets/images/anorganik-broskainperca.jpg">
    </div>
      <div class="list">
      <h3>Bros Dari Kain Perca</h3> 
        <p> Kain perca memang dapat dijahit kembali atau dapat dimanfaatkan untuk kerajinan tangan dengan berbagai bentuk 
          dan fungsi, misalnya bros. Untuk membuatnya pun cukup mudah, Anda hanya perlu menyiapkan benang, peniti, jarum, dan 
          kancing. Bros dari kain perca siap dipasang di baju dan dapat mempermanis penampilan Anda.</p>
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