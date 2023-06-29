<?php
include("baglanti.php"); // Veritabanı bağlantısı
if($baglan){
    if($_POST["hocaIsim"]){
        $hocaIsim=strip_tags(trim($_POST["hocaIsim"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["hocaSoyisim"]){
        $hocaSoyisim=strip_tags(trim($_POST["hocaSoyisim"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["hocaeMail"]){
        $hocaeMail=strip_tags(trim($_POST["hocaeMail"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["adminSifre"]){
        $adminSifre=strip_tags(trim($_POST["adminSifre"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["kullaniciSifre"]){
        $kullaniciSifre=strip_tags(trim($_POST["kullaniciSifre"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["imgUrl"]){
        $imgUrl=strip_tags(trim($_POST["imgUrl"]));
    }else{
        echo "Email Gelmedi";
    }
    if($_POST["unvan"]){
        $unvan=strip_tags(trim($_POST["unvan"]));
    }else{
        echo "Email Gelmedi";
    }
   
        // Veritabanına veri ekleme

       
        $sql = "INSERT INTO hocalar (hocaIsim,hocaSoyisim,hocaImgUrl,adminEmail,adminSifre,unvanId) VALUES ('$hocaIsim', '$hocaSoyisim', '$imgUrl', '$hocaeMail','$adminSifre','$unvan')";
        $sqll = "INSERT INTO kullanicigiris (eMail,sifre) VALUES ('$hocaeMail', $kullaniciSifre')";

        if(mysqli_query($baglan, $sql)){
            echo "Randevu başarıyla kaydedildi.";
            header("Location:yonetimPaneli.php");
        } else{
            echo "Veritabanı hatası: " . mysqli_error($baglan);
        }
        if(mysqli_query($baglan, $sqll)){
            echo "Randevu başarıyla kaydedildi.";
            header("Location:yonetimPaneli.php");
        } else{
            echo "Veritabanı hatası: " . mysqli_error($baglan);
        }
    } else{
        echo "Lütfen tüm alanları doldurun.";
    }

mysqli_close($baglan);
?>
