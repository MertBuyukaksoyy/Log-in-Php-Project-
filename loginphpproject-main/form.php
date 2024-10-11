<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
    <div class="container">
    <a href="index.php">
    <button style="background:#0A6EFF; color:white; border-style:none; border-radius:5px; padding:10px;" class="navbar-brand  text-white " rel="tooltip" data-placement="bottom" target="_blank" >
        ANA SAYFA
      </button>
      </a>  
      <a href="randevu.php">
        <button style="background:#0A6EFF; color:white; border-style:none; border-radius:5px; padding:10px;" class="navbar-brand  text-white " rel="tooltip" data-placement="bottom" target="_blank" >
        Randevu Al
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
            <a style="background:#0A6EFF; color:white;padding:10px;"  class="btn btn-secodary bg-gradient-secondary mb-0 me-1 mt-5 mt-md-3" href="register.php">Kayıt Ol</a>
          </li>
          </div>
      </div>
    </div>
  </nav>
  <div class="login">
        <form class="rounded p-4 p-sm-3" action ="login.php" method="POST" class="needs-validation">
        <div class="form-group was-validated">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" required><br />
    </div>
    <div class="form-group was-validated"
        <label class="form-label" for="password">Şifre</label>
        <input class="form-control" type="password" name="password" required><br />   
        <div class="mt-3">
        <a href="login.php">
            <button class="btn btn-primary" type="button" aria-haspopup="true" aria-expanded="false">
              Giriş Yap
              </button>
              </a>  
              <form action ="logout.php" method="POST">
            <a href="logout.php">
            <button style="background:#0A6EFF; color:white; border-style:none; border-radius:5px; padding:6px;" class="navbar-brand  text-white " rel="tooltip" target="_blank" >
            Çıkış Yap
            </button>
        </a>  
        </form>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                </ul>
          </div>
</body>
</html>
<!doctype html>

<?php


?>