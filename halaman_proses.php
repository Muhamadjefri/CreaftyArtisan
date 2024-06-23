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
    <link rel="stylesheet" href="..\styles\pembelians.css">
    <link rel="stylesheet" href="..\styles\proses.css">
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
              <div class="produk-keranjang" style="margin-left:217px;">
                
              <form action="invoice.php" method="GET">
                <div class="input-text">
                    <label for="nama"><b>Nama </b></label><br>
                    <input type="text" id="nama" name="nama" >
                </div>
                <div class="input-text">
                    <label for="telepon"><b>No. Tlfn</b></label><br>
                    <input type="number" id="telepon" name="telepon" >
                </div>
                    <br>
                    <br>
                    <br>
                <div class="alamat">

                    <label for="address"><b>Alamat </b></label><br>
                    <textarea id="address" name="address" rows="8"></textarea>
                </div>
                    <br>
                    <br>
                    
                <div class="input-text">
                    <label for="pembayaran"><b>Pembayaran </b></label><br />
                    <select class="pembayaran "id="pembayaran" name="pembayaran">
                        <option value="">Pilih Pembayaran</option>
                        <option value="1">Transfer</option>
                        <option value="2">E-Wallet</option>
                     </select>

                <div class="transfer">
                    <div class="metode">
                        <input type="radio" id="option1" name="options">
                        <label for="option1">BCA</label>
                    </div>

                    <div class="metode">
                        <input type="radio" id="option2" name="options">
                        <label for="option2">BRI</label>
                    </div>

                    <div class="metode">
                        <input type="radio" id="option3" name="options">
                        <label for="option3">BNI</label>
                    </div>
                </div>

                <div class="dompet-digital">
                    <div class="metode">
                        <input type="radio" id="option4" name="options">
                        <label for="option4">OVO</label>
                    </div>

                    <div class="metode">
                        <input type="radio" id="option5" name="options">
                        <label for="option5">GoPay</label>
                    </div>

                    <div class="metode">
                        <input type="radio" id="option6" name="options">
                        <label for="option6">DANA</label>
                    </div>
                </div>

                <script>

                document.getElementById("pembayaran").addEventListener("change", function() {
                var transferDiv = document.querySelector(".transfer");
                    if (this.value === "1") { 
                    transferDiv.classList.add("show"); 
                    } else {
                    transferDiv.classList.remove("show"); 
                    }

                var transferDiv = document.querySelector(".dompet-digital");
                    if (this.value === "2") { 
                    transferDiv.classList.add("show"); 
                    } else {
                    transferDiv.classList.remove("show"); 
                    }
                });

                </script>
                </div>
                
                <div class="input-text">   
                    <button class="tombol-proses" style="margin-top:18px;" type="submit" value="Submit">Submit</button>
                </div>
                </form>

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