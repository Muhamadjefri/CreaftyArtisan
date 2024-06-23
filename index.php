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
    <link rel="stylesheet" href="..\styles\in.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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
    <div class="about">
      <div class="first">
        <div class="about-into">
            <h1>Pemanfaatan limbah yang menghasilkan kerajinan tangan yang berkualitas</h1>
            <p>CraftyArtisan adalah sebuah platform daring yang dirancang khusus untuk menjadi pusat informasi dan inspirasi bagi para penggemar kerajinan tangan. 
                Di sini, penggemar kerajinan tangan, pengrajin berpengalaman, dan individu yang ingin menjelajahi potensi kreativitas mereka dalam dunia kerajinan tangan dapat menemukan berbagai layanan yang memenuhi beragam kebutuhan mereka. Dengan fitur unggulan berupa "Galeri Inspirasi," CraftyArtisan menyajikan kumpulan proyek kerajinan tangan yang kreatif dan menginspirasi dari pengrajin di seluruh dunia,
                memberikan pemahaman mendalam tentang berbagai teknik dan gaya kerajinan.</p>
        </div>
      </div>

        <div class="second">
        <div class="image-1">
        <div class="about-img1">
            <img src="../assets/images/hero-banner-1.jpg" alt="">
        </div>
        <div class="about-img2">
            <img src="../assets/images/hero-banner-2.jpg" alt="">
        </div>
        </div>
        </div>
    </div>

        <div class="heading">
            <h1>Jenis Limbah</h1>
        <div class="intro-product">
        <div class="first">
            <div class="product-img">
                <img src="../assets/images/collection-1.jpg" alt="">
                <h4>Organik</h4>
                <a href="..\model\halaman_organik.php">
                <button  class="button button1">Selangkapnya</button>
                </a>
            </div>
        </div>
        <div class="second">
            <div class="product-img">
                <img src="../assets/images/collection-2.jpg" alt="">
                <h4>Anorganik</h4>
                <a href="..\model\halaman_anorganik.php">
                <button  class="button button1">Selangkapnya</button>
                </a>
            </div>
        </div>
        </div>
        </div>

    <div class="features">
      <div class="first">
        <div class="feature-banner">
            <img src="../assets/images/feature-banner.jpg" alt="">
        </div>
      </div>
      <div class="second">
        <div class="feature-content">
            <h2>Tujuan Pemanfaatan Limbah Untuk Kerajinan Tangan</h2>
            <div class="features-points">
                <div class="points">
                    <img src="../assets/images/feature-icon-1.svg" alt="">
                    <div class="subpoints">
                        <p>Menciptakan sebuah pelatihan keterampilan dalam menciptakan benda atau karya, yang berbasis estetis, artistik, ekosistem dan teknologis.</p>

                    </div>
                </div>
                <div class="points">
                    <img src="../assets/images/feature-icon-2.svg" alt="">
                    <div class="subpoints">
                        <p>Meningkatkan semangat daya cipta setiap orang dalam membuat sebuah karya.</p>

                    </div>
                </div>
                <div class="points">
                    <img src="../assets/images/feature-icon-3.svg" alt="">
                    <div class="subpoints">
                        <p>Dapat memanfaatkan media atau bahan yang bahkan sudah tidak terpakai. sehingga dapat tercipta sebuah karya yang memiliki nilai jual.</p>

                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    
    <div class="blog">
        <div class="blog-header">
            <h1>Galeri</h1>
        </div>

        <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 4</div>
              <img src="../assets/images/blog-1.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 4</div>
              <img src="../assets/images/blog-2.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 4</div>
              <img src="../assets/images/blog-3.jpg" style="width:100%">       
            </div>
  
            <div class="mySlides fade">
              <div class="numbertext">4 / 4</div>
              <img src="../assets/images/blog-4.jpg" style="width:100%">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            
            <a href="..\model\upload_foto.php">
            <button class="btn-tambahfoto">Tambah Foto</button>
            </a>

            </div>
            <br>
            
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
              <span class="dot" onclick="currentSlide(4)"></span> 
            </div>
            
            <script>
            let slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
            </script>
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
    </footer>
</body>
</html>