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
    <link rel="stylesheet" href="..\styles\halaman-organik-seashell.css">
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
    <h1>Seashell Lamp</h1>
    <img src="../assets/images/organik-seashell.jpg">
    </div>
    <div class="isi-content2">
    <p>Membuat lampu gantung berbentuk kerang laut atau "seashell lamp" bisa menjadi proyek kerajinan tangan yang 
      kreatif dan menarik. Berikut adalah panduan umum tentang cara membuat lampu kerang laut sendiri:
      </br>
      </br>
      Bahan yang Anda Butuhkan:
      </br>
    </p>
      <ul>
        <li>- Kerang laut atau cangkang kerang sesuai ukuran yang Anda inginkan.</li>
        <li>- Lampu gantung atau soket lampu dengan kabel yang panjang.</li>
        <li>- Kawat tipis atau benang nilon.</li>
        <li>- pemotong atau gunting.</li>
        <li>- Cat semprot atau cat akrilik (opsional).</li>
        <li>- Alat pengikat seperti perekat panas atau lem (opsional).</li>
      </ul>
      </br>
      </br>
      <div class="step">
      <p>
      Langkah-langkah:
      <ul>
        <li>1. Persiapan Kerang Laut:</li>
        <li>&emsp;- Jika Anda ingin mengganti warna kerang laut, Anda dapat mencatnya dengan cat semprot atau cat akrilik.
          Pastikan untuk melakukannya di area yang cukup terventilasi dan biarkan kering sepenuhnya sesuai instruksi cat.</li>
        <li>&emsp;- Anda juga bisa memilih untuk meninggalkan kerang laut dalam bentuk alaminya jika sudah cukup menarik.</li>

        <li>2. Buat Lubang di Kerang Laut:</li>
        <li>&emsp;- Gunakan tang pemotong atau alat lain yang sesuai untuk membuat lubang kecil di bagian atas atau di sekitar
           tepi kerang laut. Lubang ini akan digunakan untuk menggantung lampu.</li>
        <li>&emsp;- Pastikan lubang cukup besar untuk memasukkan soket lampu atau kawat dengan mudah.</li>

        <li>3. Sisipkan Soket Lampu:</li>
        <li>&emsp;- Masukkan soket lampu atau kawat melalui lubang yang sudah dibuat di kerang laut.</li>
        <li>&emsp;- Pastikan soket lampu duduk dengan aman dan tidak mudah terlepas.</li>  

        <li>4. Pasang Lampu:</li>
        <li>&emsp;- Pasang bola lampu pada soket lampu sesuai dengan instruksi yang diberikan oleh produsen.</li>
        <li>&emsp;- Pastikan lampu terhubung dengan baik dan aman dalam kerang laut.</li>       
        
        <li>5. Menggantung Lampu:</li>
        <li>&emsp;- Gunakan kawat tipis atau benang nilon untuk menggantung lampu dari langit-langit atau tempat yang Anda inginkan.</li>
        <li>&emsp;- Pastikan lampu menggantung dengan aman dan sejajar dengan lantai.</li>

        <li>6. Sambungkan Kabel:</li>
        <li>&emsp;- Sambungkan kabel lampu ke sumber daya listrik dengan aman. Pastikan untuk mematikan listrik saat memasang atau menggantung lampu.</li>

        <li>7. Tes Lampu:</li>
        <li>&emsp;- Hidupkan listrik dan pastikan lampu berfungsi dengan baik.</li>

        <li>8. Selesai:</li>
        <li>&emsp;- Sekarang, lampu kerang laut Anda siap digunakan untuk menerangi ruangan Anda dengan sentuhan 
          alam yang indah.Pastikan Anda selalu berhati-hati saat mengoperasikan lampu listrik dan selalu patuhi panduan keselamatan.
           Selamat mencoba proyek kerajinan tangan Anda!</li>
      </ul>
      </br>
      </p>
      <div class="video-container">
        <iframe src="https://youtu.be/CByJsgrgb00?si=qM9ZzTVifGJeoR3N" frameborder="0" allowfullscreen></iframe>
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