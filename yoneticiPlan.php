
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Yönetici Plan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="yoneticiPlan.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-YJ/CfcyIoSGezlRj1H2vL/kXOZcqtJH8WYrCvzwm/VjnFyCfzt+8WbnttUXvllPd7eK6inAZUMV7RMu/gv4x4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta charset="UTF-8">
<style>.ortakapsayici .solDiv img{
                
				width: 10vw;
				border-radius: 50%;
			}
			.ortakapsayici .solDiv h1{
				justify-content:center ;
				text-align: center;
				font-size: 3vw;
				margin:0.4vw
			}
			.aciklama{
				margin-top:2vw;}
			button{
				margin-top:5vw;
			}
			.videoContainer input{
				margin-top:2vw;
			}.buttonn{
            margin-left: 12vw;
            margin-top: 0.5vw;
			width:10vw;
            height:2vw;
            font-size: 1vw;
            color: #274546;
            background-color: #efeee5;
            border-radius:1vw;
            border-style: none;
        }
			</style>
</head>
<body>
   
    <div class="kapsayici">
		<div class="randevubanner">
		<img src="YBS-Logo-png-e1598794278240.png" class="randevuOlusturLogo">
		<h1 class="randevuH1">YÖNETİM BİLİŞİM SİSTEMLERİ</h1></div>
        
        <div class="ortakapsayici">	<div class="solDiv">
		<img src="<?php echo $_SESSION['hocaImgUrl'] ?>" class="profil" id="profil">

<H1> <?php echo $_SESSION['unvan_adi']?></H1>  
<H1> <?php echo $_SESSION['hocaIsim']  ?></H1>   
<H1> <?php echo $_SESSION['hocaSoyisim']  ?></H1>    
        </div>
        <div class="sagDiv">
		<form  action="aciklamaEkle.php" method="post">

            <div class="aciklamaSpan"> <div class="aciklamaContainer">
				<div><label for="aciklama"  >Açıklama</label></div>
				<div><textarea class="aciklama" type="text" id="aciklama" name="aciklama" placeholder="Açıklama giriniz"> </textarea></div>
			</div>
            
			
            <div class="anasayfaButton"><button class="button"type="submit" >Açıklama Ekle</button></div>
		</form><a href="yonetimPaneli.php"><button class="buttonn"type="submit" >Yönetim Paneli</button></a>
            </div>
        </div></div>	
			
			
	</div>

</body>
</html>




<!-- <div class="nameContainer">
	<div class="aciklamaContainer">
		<div><label for="aciklama"  >Açıklama</label></div>
		<div><textarea class="aciklama" type="text" id="aciklama" name="aciklama" placeholder="Açıklama giriniz"> </textarea></div>
	</div>
	<div class="saatContainer">
		<div><label for="saat"  >Saat Aralığı</label></div>
		<div><input class="saat" type="input" id="saat" name="saat" placeholder="Dönülecek Saat Aralığı"> </div>
	</div>
	<div class="videoContainer">
		<div><label for="video"  >Video Yükle</label></div>
		<div><input class="video" type="file" id="video" name="video" > </div>
	</div>
	<div class="randevuButtonContainer">
		<div><button class="randevuButton" type="submit" id="randevuButton" name="randevuButton" > Aktivite Ekle </button>
		</div>
	</div>
</div> -->