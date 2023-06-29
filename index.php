<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Yönetici Giriş</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="girisStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-YJ/CfcyIoSGezlRj1H2vL/kXOZcqtJH8WYrCvzwm/VjnFyCfzt+8WbnttUXvllPd7eK6inAZUMV7RMu/gv4x4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta charset="UTF-8">

</head>
<body>
   
    <div class="kapsayici">
		<div class="randevubanner">
		<img src="YBS-Logo-png-e1598794278240.png" class="randevuOlusturLogo">
		<h1 class="randevuH1">YÖNETİM BİLİŞİM SİSTEMLERİ</h1></div>
        
        <div class="ortakapsayici">	<div class="solDiv">
            YÖNETİCİ/KULLANICI GİRİŞ
        </div>
        <div class="sagDiv">
		<form action="girisKontrol.php" method="post">
            <div class="aciklamaSpan">  <div class="emailContainer">
				<div><label for="email"  >Email</label></div>
				<div><input class="email" type="input" id="email" name="email" placeholder="E-mail Giriniz"> </div>
			</div>
            <div class="sifreContainer">
				<div><label for="sifre"  >Şifre</label></div>
				<div><input class="sifre" type="password" id="sifre" name="sifre" placeholder="Şifre Giriniz"> </div>
			</div>
			
            <div class="anasayfaButton"><button class="button"type="submit" >Giriş yap</button></div>
</form>
            </div>
        </div></div>	
			
			
	</div>

</body>
</html>




