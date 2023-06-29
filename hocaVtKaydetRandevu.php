<?php
include("baglanti.php"); // Veritabanı bağlantısı
if($baglan){
    if($_POST["isimSoyisim"]){
        $isimSoyisim=strip_tags(trim($_POST["isimSoyisim"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["telefonNumarasi"]){
        $telefonNumarasi=strip_tags(trim($_POST["telefonNumarasi"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["email"]){
        $email=strip_tags(trim($_POST["email"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["aciklama"]){
        $aciklama=strip_tags(trim($_POST["aciklama"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["tarih"]){
        $tarih=strip_tags(trim($_POST["tarih"]));
    }else{
        echo "Email Gelmedi";
    }if($_POST["hoca"]){
        $hoca=strip_tags(trim($_POST["hoca"]));
    }else{
        echo "Email Gelmedi";
    }
        // Veritabanına veri ekleme
        $sql = "INSERT INTO randevular (isimSoyisim,telefonNumarasi,eMail,aciklama,tarih,hocaİd,onay) VALUES ('$isimSoyisim', '$telefonNumarasi', '$email', '$aciklama','$tarih','$hoca','0')";
        if(mysqli_query($baglan, $sql)){
            echo "Randevu başarıyla kaydedildi.";
            header("Location:yonetimPaneli.php");
        } else{
            header("Location:hocaRandevuOlustur.php");
        }
    } else{
        echo "Lütfen tüm alanları doldurun.";
    }

mysqli_close($baglan);
?>
