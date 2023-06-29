<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Yönetici Giriş</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="stylee.css">
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
        }.aciklamaSpan{
            text-align: left;
            
            color: #efeee5;
            text-align: center;
            
          padding-top: 5vw;
            
        }
        </style>
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
		<form  action="hocaVtKaydet.php" method="post">
            <div class="aciklamaSpan">  <div class="saatContainerr">
				<div><label for="hocaIsim"  >Hoca İsim </label></div>
				<div><input class="hocaIsim" type="input" id="hocaIsim" name="hocaIsim" placeholder="Hoca İsim Giriniz"> </div>
			</div>
            
            <div class="saatContainerr">
				<div><label for="hocaSoyisim"  >Hoca Soyisim</label></div>
				<div><input class="hocaSoyisim" type="input" id="hocaSoyisim" name="hocaSoyisim" placeholder="Hoca Soyiİsim Giriniz"> </div>
			</div>
			<div class="saatContainer">
				<div><label for="hocaeMail"  >Hoca E-mail</label></div>
				<div><input class="hocaeMail" type="input" id="hocaeMail" name="hocaeMail" placeholder="Hoca İsim Giriniz"> </div>
			</div>
			<div class="saatContainer">
				<div><label for="adminSifre"  >Admin Şifre</label></div>
				<div><input class="adminSifre" type="input" id="adminSifre" name="adminSifre" placeholder="Admin Şifre Giriniz"> </div>
			</div>
           
			<div><div class="saatContainerr">
				<div><label for="imgUrl"  >İmg-URL</label></div>
				<div><input class="imgUrl" type="input" id="imgUrl" name="imgUrl" placeholder="İmg Url Giriniz"> </div>
			</div>
			<div class="saatContainerr">
				<div><label for="unvan"  >Unvan</label></div>
				<div><select name="unvan" class="hoca"   id="unvan">
					<option value="1">Doç.Dr.</option>
                    <option value="2">Prof.Dr.</option>
                    <option value="3">Yar.Doç.Dr.</option>
                    <option value="4">Ogr.Gor.</option>
                    <option value="5">Dr.</option>
                    <option value="6">Ar.Gor.</option>
                    <option value="7">Dr.Ogr. Üyesi</option>

					   </select></div>
			</div></div>   </div>
            
            <div class="anasayfaButton"><button class="button"type="submit" >Hoca Ekle</button></div>
</form><a href="yonetimPaneli.php"><button class="buttonn"type="submit" >Yönetim Paneli</button></a>
            </div>
        </div></div>	
			
			
	</div>

</body>
</html>




