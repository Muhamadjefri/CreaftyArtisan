<?php
include "../controller/koneksi.php";

$anony = "anony";

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $sql = "SELECT * FROM cratyartisan WHERE username = '$username'";
  $result = $conn->query($sql);

  if ($result) {
      $row = $result->fetch_assoc();
      $email = $row['email'];
      $namaToko = $row['namaToko'];
      $alamat = $row['alamat'];
      $deskripsi = $row['deskripsi'];
  }

}else{
  $username = 'Anony';
  $email = '';
  $namaToko = '';
  $deskripsi = '';
  $alamat = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\styles\profile.css">
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

    <div class="profile">
      <img src="../assets/images/sticker2.png" class="photo-profile">
      <div class="user-profile">
        <h2><?php echo $username; ?> </h2>
            </br>
    <table>
       <tr>
        <td><h4>Email</h4></td>
        <td>&ensp;:</td>
        <td><p><?php echo $email ?></h4></p>
      </tr>
      <tr>
        <td><h4>Nama Toko</h4></td>
        <td>&ensp;:</td>
        <td><p><?php echo $namaToko ?></h4></p>
      </tr>
      <tr>
        <td><h4>Alamat</h4></td>
        <td>&ensp;:</td>
        <td><p><?php echo $alamat ?></h4></p>
      </tr>
    </table>
      </div>
    </div>
      
    <div class="deskripsi-toko">  
       <h2>Deskripsi Toko</h2>
       <p> <?php echo $deskripsi ?></p>
    </div>
    </div>

    <div class="barang">
    <hr>
            </br>
    <hr>
    <h2>Daftar Barang</h2>
    <div class="daftar-produk">
        <div class="list-produk">
            <img src="../assets/images/stick.jpg">
  
            <h4>Tempat Pensil</h4>
            <h5>Rp 20.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
        </div>
  
        <div class="list-produk">
            <img src="../assets/images/scrapbook-flowers.jpg">
  
            <h4>Scarpbook Flower</h4>
            <h5>Rp 30.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
        </div>
  
        <div class="list-produk">
            <img src="../assets/images/scrapbook.jpg">
  
            <h4>Scrapbook Photo</h4>
            <h5>Rp 25.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
        </div>
  
        <div class="list-produk">
            <img src="../assets/images/gantungan_kunci_handmade.jpg">
  
            <h4>Gantungan Kunci</h4>
            <h5>Rp 10.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
        </div>

        <div class="list-produk">
            <img src="../assets/images/THEBATIK-TAS-KAIN-BATIK-SOUVENIR-SEMINAR-1B.jpg">
  
            <h4>Tas Batik</h4>
            <h5>Rp 50.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
        </div>

        <div class="list-produk">
            <img src="../assets/images/image2.jpg">
  
            <h4>Jam Dinding</h4>
            <h5>Rp 70.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a> 
        </div>

        <div class="list-produk">
            <img src="../assets/images/ikat-rambut.jpg">
  
            <h4>Ikat Rambut</h4>
            <h5>Rp 5.000,-</h5>
  
            <a class="tombol tombol-detail" href="#">Detail</a>   
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