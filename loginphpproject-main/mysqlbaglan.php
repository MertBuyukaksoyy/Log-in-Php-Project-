<?php
$server = 'sql107.epizy.com';
$user = 'epiz_32015894';
$password = 'TtIT0qJWLa';
$database = 'epiz_32015894_sifreligiris';
$baglanti = mysqli_connect($server,$user,$password,$database);
if (!$baglanti) {
echo "MySQL sunucu ile baglanti kurulamadi! </br>";
echo "HATA: " . mysqli_connect_error();
exit;
}
?>