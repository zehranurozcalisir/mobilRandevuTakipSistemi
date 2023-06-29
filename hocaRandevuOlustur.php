<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Yönetici Giriş</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-YJ/CfcyIoSGezlRj1H2vL/kXOZcqtJH8WYrCvzwm/VjnFyCfzt+8WbnttUXvllPd7eK6inAZUMV7RMu/gv4x4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta charset="UTF-8">
<style> h1{margin:0.4vw}
.buttonn{
            margin-left: 12vw;
            margin-top: 0.5vw;
			width:10vw;
            height:2vw;
            font-size: 1vw;
            color: #274546;
            background-color: #efeee5;
            border-radius:1vw;
            border-style: none;
        }</style>
</head>
<body>
   
    <div class="kapsayici">
		<div class="randevubanner">
		<a href="yonetimPaneli.php"><img src="YBS-Logo-png-e1598794278240.png" class="randevuOlusturLogo"></a>
		<h1 class="randevuH1">YÖNETİM BİLİŞİM SİSTEMLERİ</h1></div>
		
        
        <div class="ortakapsayici">	<div class="solDiv">
		<img src="<?php echo $_SESSION['hocaImgUrl'] ?>" class="profil" id="profil">

			<H1> <?php echo $_SESSION['unvan_adi']?></H1>  
            <H1> <?php echo $_SESSION['hocaIsim']  ?></H1>   
			<H1> <?php echo $_SESSION['hocaSoyisim']  ?></H1>    
		  </div>
        <div class="sagDiv">
		<form  action="hocaVtKaydetRandevu.php" method="post">
            <div class="aciklamaSpan">  <div class="saatContainer">
				<div><label for="isimSoyisim"  >Adınız Soyadınız</label></div>
				<div><input class="isimSoyisim" type="input" id="isimSoyisim" name="isimSoyisim" placeholder="Ad-Soyad"> </div>
			</div>
            <div class="saatContainer">
				<div><label for="telefonNumarasi"  >Telefon Numarası</label></div>
				<div><input class="telefonNumarasi" type="input" id="telefonNumarasi" name="telefonNumarasi" placeholder="Telefon Numaranızı Giriniz"> </div>
			</div>
			<div class="saatContainer">
				<div><label for="email"  >E-Mail</label></div>
				<div><input class="email" type="input" id="email" name="email" placeholder="E-Mail Giriniz"> </div>
			</div>
			<div class="saatContainer">
				<div><label for="aciklama"  >Açıklama</label></div>
				<div><input class="aciklama" type="input" id="aciklama" name="aciklama" placeholder="Açıklama Giriniz"> </div>
			</div>
			<div><div class="saatContainerr">
				<div><label for="tarih"  >Tarih</label></div>
				<div><input class="tarih" type="date" id="tarih" name="tarih" placeholder="Tarih Seçiniz"> </div>
			</div>
			<div class="saatContainerr">
				<div><label for="hoca"  >Hoca Seçiniz</label></div>
				<div><select name="hoca" class="hoca"   id="hoca">
					<option value="1">Vahap Tecim</option>
					   </select></div>
			</div></div>   </div>
            <div class="anasayfaButton"><button class="button"type="submit" >Randevu Oluştur</button></div>
</form><a href="yonetimPaneli.php"><button class="buttonn"type="submit" >Yönetim Paneli</button></a>
            </div>
        </div></div>	
			
			
	</div>

</body>
</html>




