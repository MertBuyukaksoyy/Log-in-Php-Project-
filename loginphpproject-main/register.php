<?php
    include "mysqlbaglan.php";
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password-tekrar'])){
        extract($_POST);
        $password = hash('sha256', $password);
        
        $sql="INSERT INTO `kullanicilar` (eposta,sifre)";
    $sql = $sql . "VALUES ('$password','$email')";
    $cevap = mysqli_query($baglanti, $sql);
    if ($password !== $password-tekrar){
        $mesaj = "<h1>Şifreler aynı değil</h1>";
        exit();
    }
    if ($cevap){
    $mesaj = "<h1>Kullanıcı oluşturuldu.</h1>";
    }
    else{
    $mesaj = "<h1>Kullanıcı oluşturulamadı!</h1>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
    <div class="container">
    <a href="index.php">
      <button style="background:#0A6EFF; color:white; border-style:none; border-radius:5px; padding:10px;"  class="navbar-brand  text-white " rel="tooltip"  data-placement="bottom" target="_blank" href="index.php">
        ANA SAYFA
      </button>
      </a>  
      <a href="https://github.com/MertBuyukaksoy">
        <button style="background:#ff9900; color:white; border-style:none; border-radius:5px; padding:10px;" class="navbar-brand  text-white " rel="tooltip" data-placement="bottom" target="_blank">
        Github
        </button>
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
        </span>
      </button>
      <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">
            <a style="background:#0A6EFF; color:white; padding:6px; "  class="btn btn-secodary bg-gradient-secondary mb-0 me-1 mt-5 mt-md-3" href="register.php">Kayıt Ol</a>
          </li>
          <div class="mt-3">
          <a href="login.php">
            <button class="btn btn-primary border-style:none; border-radius:5px;" type="button" aria-haspopup="true" aria-expanded="false" href="login.php">
              Giriş Yap
              </button>
              </a> 
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              </ul>
          </div>
        </ul>
      </div>
    </div>
  </nav>


    </form>
    <div class="register">
        <h3 class="text-center">KAYIT OL</h3>
        <form class="rounded p-4 p-sm-3" action ="register.php" method="POST" class="needs-validation">
        <div class="form-group was-validated">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" required><br />
    </div>
    <div class="form-group was-validated"
        <label class="form-label" for="password">Şifre</label>
        <input class="form-control" type="password" name="password" required><br />
        <label class="form-label" for="password">Şifreyi tekrar giriniz</label>
        <input class="form-control" type="password" name="password-tekrar" required><br />
        <input style="background:#2dc126; color:white" type="submit" value="Kayıt Ol"/><br />
        <br>
        <a href="index.php">
        <button style="background:#2dc126; color:white; border-style:none;" class="navbar-brand  text-white " rel="tooltip" target="_blank" >
        Kullanıcı Girişi
      </button>
      </a>  
    </div>
    </form>
    </div>
    
</body>
</html>