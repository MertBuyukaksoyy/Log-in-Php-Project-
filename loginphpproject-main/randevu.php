<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent">
    <div class="container">
    <a href="index.php">
      <button style="background:#2dc126; color:white;"  class="navbar-brand  text-white " rel="tooltip"  data-placement="bottom" target="_blank" href="index.php">
        ANA SAYFA
      </button>
      </a>  
      <a href="https://github.com/MertBuyukaksoy">
        <button style="background:#2dc126; color:white;" class="navbar-brand  text-white " rel="tooltip" data-placement="bottom" target="_blank">
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
            <a style="background:#0A6EFF; color:white;"  class="btn btn-secodary bg-gradient-secondary mb-0 me-1 mt-5 mt-md-3" href="register.php">Kayıt Ol</a>
          </li>
          <div class="mt-3">
          <a href="login.php">
            <button class="btn btn-primary" type="button" aria-haspopup="true" aria-expanded="false" href="login.php">
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
  <br><br><br><br>
  <div class="randevu">
        <h3 class="text-center">RANDEVU AL</h3>
        <form class="rounded p-4 p-sm-3" method="POST" class="needs-validation" action ="randevu.php">
        <input type="radio" id="doktor1" name="randevu_sec"  value="doktor">
        <label for="d1">Diş Hekimi Mert Büyükaksoy</label><br>
        <input type="radio" id="doktor2" name="randevu_sec"  value="doktor">
        <label for="d2">Diş Hekimi Oğuz Er</label><br>
        <input type="radio" id="doktor3" name="randevu_sec"   value="doktor">
        <label for="d3">Diş Hekimi Mahmut Yılmaz</label><br>
        <label for="tarih">Tarih Seçiniz</label><br>
        <input type="date" id="start" name="randevu-tarih"
        value="2022-06-23"
        min="2022-06-30" max="2023-12-29">
    </div>
    <a >

        <button type="button" onclick="myFunction()" class="btn btn-primary"  aria-haspopup="true" aria-expanded="false" href="login.php">
            Randevu Al
            </button>
            </a> 
            <script>
                function myFunction() {
                     alert("Randevu Alındı!");
                    }
</script>
    <style>
body {
    background: url('https://www.dentalparklinik.com/wp-content/uploads/elementor/thumbs/disci-randevu-pld7n13ttvdrxmuhz4mc3opvryx1sx3iwhklvctono.jpg') no-repeat center center fixed;
    background-size: cover;
    }

</style> 
    
</body>
</html>