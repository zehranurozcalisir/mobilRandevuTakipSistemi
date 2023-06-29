
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="anasayfaStyle.css">
    <style>.aciklamaSpan .spanAciklama span{
            border-bottom: #efeee5;
           border-bottom-style:solid ;
           border-bottom-width:0.2vw;
         
           font-size:3vw;
           
    
        }</style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-YJ/CfcyIoSGezlRj1H2vL/kXOZcqtJH8WYrCvzwm/VjnFyCfzt+8WbnttUXvllPd7eK6inAZUMV7RMu/gv4x4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta charset="UTF-8">
<style> h1{margin:0.4vw}</style>
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
        <?php include("baglanti.php");
                $aktiviteSorgu=mysqli_query($baglan,"SELECT aktiviteler.aciklama FROM aktiviteler ORDER BY aktiviteler.aktiviteId DESC LIMIT 1"); 
                $aktiviteAciklama = mysqli_fetch_row($aktiviteSorgu);  ?>
                
            <div class="aciklamaSpan"> <div class="spanBaslik"><span>Tahmini Geliş Saati:</span></div>
            <div class="spanAciklama" ><span><?php echo $aktiviteAciklama[0] ?></span></div>
            
            <div class="anasayfaButton"><a href="randevuOlustur.php"><button class="button"type="submit" >Randevu Oluştur</button></a></div>
            </div>
        </div></div>	
	</div>

</body>
</html>
