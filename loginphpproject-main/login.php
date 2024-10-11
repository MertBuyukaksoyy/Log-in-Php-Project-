<?php
    session_start();
    require('mysqlbaglan.php');
    if (isset($_POST['email']) and isset($_POST['password'])){
        extract($_POST);
        $password = hash('sha256', $password);
        $sql = "SELECT * FROM `kullanicilar` WHERE ";
        $sql= $sql . "email='$email' and sifre='$password'";
        $cevap = mysqli_query($baglanti, $sql);
         if(!$cevap ){
            echo 'Hata:' . mysqli_error($baglanti);
    }
    $say = mysqli_num_rows($cevap);
    if ($say == 1){
        $_SESSION['email'] = $email;
    }
    else{
        $mesaj = "<h1> Hatalı mail veya şifre girdiniz.</h1>";
    }
    }
    if (isset($_SESSION['username'])){
        header("Location: uyesayfasi.php");
    }
    else{
        header("Location: register.php");
    }
    ?>