<?php 
$sunucu="localhost";
$vt_ismi="mobilrandevu";
$vt_kullanici="root";
$vt_sifre="";
$baglan=mysqli_connect($sunucu,$vt_kullanici,$vt_sifre,$vt_ismi);
if($baglan){
mysqli_query($baglan,"SET CHARACTER SET 'utf8'");
mysqli_query($baglan,"SET NAME 'utf8'");
}


?>