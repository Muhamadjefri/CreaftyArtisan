<?php 
  include "../controller/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/login-signup.css">
    <title>Sign in & Sign up</title>
</head>

<body>
    <div class="wrapper">
        <div class="form-container sign-up">
            <form method="post">
                <h2>Registrasi <br> Creafty Artisan</h2>
                <div class="form-group">
                    <input type="text" name="username" required>
                    <label for="">username</label>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-group">
                    <input type="email" name="email" required>
                    <label for="">email</label>
                    <i class="fas fa-at"></i>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required>
                    <label for="">confirm password</label>
                    <i class="fas fa-lock"></i>
                </div>
                <button type="submit" class="btn" value="prosess" name="prosess">Daftar</button>
                <div class="link">
                    <p>Sudah punya akun?<a href="#" class="signin-link"> Masuk</a>
                    <a href="..\model\index.php" class="home-link">/ Halaman Utama</a></p>
                </div>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="post">
                <h2>Masuk <br> Creafty Artisan</h2>
                <div class="form-group">
                    <input type="text" name="username" required>
                    <i class="fas fa-user"></i>
                    <label for="">username</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required>
                    <i class="fas fa-lock"></i>
                    <label for="">password</label>
                </div>
                <div class="forgot-pass">
                    <a href="#">Lupa password?</a>
                </div>
                <button type="submit" class="btn" type="submit" value="proses" name="proses">Masuk</button>
                <div class="link">
                    <p>Belum punya akun?<a href="#" class="signup-link"> Daftar</a>
                    <a href="..\model\index.php" class="home-link">/ Halaman Utama</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>

</html>

<?php 
  $host = "localhost";
  $user = "root";
  $password = "";
  $dbname = "test";
  
  // Buat koneksi
  $conn = mysqli_connect($host, $user, $password, $dbname);
  
  if(isset($_POST['prosess'])){
    echo '<script>';
    echo 'alert("Selamat anda sudah terdaftar")';
    echo '</script>';
    echo '<script>window.location.href = "../model/login-signnup.php";</script>';
  mysqli_query($conn,"insert into cratyartisan set 
  email = '$_POST[email]',
  password = '$_POST[password]',
  username = '$_POST[username]'");
  }

  if(isset($_POST['proses'])){
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Periksa apakah pengguna ada di database
    $query = mysqli_query($conn,"SELECT * FROM cratyartisan WHERE username = '$username' AND password = '$password'");

    if ($query == 1) {
        // Login berhasil
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        echo '<script>window.location.href = "../model/index.php";</script>';
    }else {
        echo '<script>';
        echo 'alert("Gagal Login! username atau password salah.")';
        echo '</script>';
        echo '<script>window.location.href = "../model/login-signnup.php";</script>';
    }
  }
?>
