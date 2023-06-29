<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="deneme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-YJ/CfcyIoSGezlRj1H2vL/kXOZcqtJH8WYrCvzwm/VjnFyCfzt+8WbnttUXvllPd7eK6inAZUMV7RMu/gv4x4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="UTF-8">
    <style> h1{margin:0.4vw}
.anasayfaButtonn{
            margin-top:3%;
           
           
            
        }
        .anasayfaButtonn button{
            width:30vw;
            height:4vw;
            font-size: 100%;
            color: #274546;
            background-color: #efeee5;
            border-radius: 10px;
            border-style: none;
         
        }
        .anasayfaButton{
            margin-top:3%;
           
           
            
        }
        .anasayfaButton button{
            width:30vw;
            height:4vw;
            font-size: 100%;
            color: #274546;
            background-color: #efeee5;
            border-radius: 10px;
            border-style: none;
         
        }
      </style>
</head>
<body>
   
    <div class="kapsayici">
		<div class="randevubanner">
		<a href="index.php"><img src="YBS-Logo-png-e1598794278240.png" class="randevuOlusturLogo"></a>
		<h1 class="randevuH1">YÖNETİM BİLİŞİM SİSTEMLERİ</h1>
    </div>
        
        <div class="ortakapsayici">	<div class="solDiv">
        <img src="<?php echo $_SESSION['hocaImgUrl'] ?>" class="profil" id="profil">
            <H1> <?php echo $_SESSION['unvan_adi']?></H1>  
            <H1> <?php echo $_SESSION['hocaIsim']  ?></H1>   
			<H1> <?php echo $_SESSION['hocaSoyisim']  ?></H1>    
        </div>
        <div class="sagDiv">
            <div class="aciklamaSpan"> 
            <div class="anasayfaButton"> <a href="hocaRandevuOlustur.php"><button class="button"type="submit">Randevu Oluştur</button></a></div>
            <div class="anasayfaButton"><a href="takvimGoruntule.php"><button class="button"type="submit" >Randevu İstekleri</button></a></div>
            <div class="anasayfaButton"><a href="yoneticiPlan.php"><button class="button"type="submit" >Aktivite Ekle</button></div>
            <div class="anasayfaButtonn"><a href="randevularim.php"><button class="buttonn"type="submit" >Randevularım</button></div>
            <div class="anasayfaButtonn"><a href="hocaEkle.php"><button class="buttonn"type="submit" >Hoca Ekle</button></div>

            </div>
        </div></div>	
	</div>

</body>
</html>
