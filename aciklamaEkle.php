<?php
session_start();
include("baglanti.php"); // Veritabanı bağlantısı
if($baglan){
    if($_POST["aciklama"]){
        $aciklama=strip_tags(trim($_POST["aciklama"]));
    }else{
        echo "Açıklama Gelmedi";
    }
    if($_POST["video"]){
        $video=strip_tags(trim($_POST["video"]));
    }else{
        echo "Video Gelmedi";
    }
    
        // Veritabanına veri ekleme
        $sql = "INSERT INTO aktiviteler (aciklama,videoUrl,hocaİd) VALUES ('$aciklama', '$videoUrl', '$_SESSION[hocaId]')";
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
