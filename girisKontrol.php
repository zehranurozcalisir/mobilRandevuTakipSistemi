<?php 
include("baglanti.php");
session_start();
if($baglan){
if($_POST["email"]){
    $email=strip_tags(trim($_POST["email"]));
}else{
    echo "Email Gelmedi";
}
if($_POST["sifre"]){
    $sifre=strip_tags(trim($_POST["sifre"]));
}else{
    echo "Şifre gelmedi";
}
$adminSorgu=mysqli_query($baglan, "SELECT * FROM hocalar, kullanicigiris, unvanlar,aktiviteler WHERE hocalar.hocaId=aktiviteler.hocaId and hocalar.hocaId=kullanicigiris.hocaId And unvanlar.unvan_id=hocalar.unvanId and hocalar.adminEmail='".$email."'AND adminSifre='".$sifre."'");
$kullaniciSorgu=mysqli_query($baglan, "SELECT * FROM hocalar, kullanicigiris, unvanlar WHERE hocalar.hocaId=kullanicigiris.hocaId And unvanlar.unvan_id=hocalar.unvanId and kullanicigiris.eMail='".$email."' AND sifre='".$sifre."'");


    if(mysqli_num_rows($adminSorgu)>0)
    {
        $row=$adminSorgu->fetch_array(MYSQLI_ASSOC);
        $_SESSION['hocaId']=$row['hocaId'];
        $_SESSION['hocaIsim']=$row['hocaIsim'];
        $_SESSION['hocaSoyisim']=$row['hocaSoyisim'];
        $_SESSION['hocaImgUrl']=$row['hocaImgUrl'];
        $_SESSION['adminEmail']=$row['adminEmail'];
        $_SESSION['adminSifre']=$row['adminSifre'];
        $_SESSION['unvan_adi']=$row['unvan_adi'];
        $_SESSION['hocaImgUrl']=$row['hocaImgUrl'];
        $_SESSION['aciklama']=$row['aciklama'];
        
       
        header("Location:yonetimPaneli.php");
    }
    elseif(mysqli_num_rows($kullaniciSorgu)>0){
        $row=$kullaniciSorgu->fetch_array(MYSQLI_ASSOC);
        $_SESSION['hocaIsim']=$row['hocaIsim'];
        $_SESSION['hocaSoyisim']=$row['hocaSoyisim'];
        $_SESSION['hocaImgUrl']=$row['hocaImgUrl'];
        $_SESSION['adminEmail']=$row['adminEmail'];
        $_SESSION['adminSifre']=$row['adminSifre'];
        $_SESSION['unvan_adi']=$row['unvan_adi'];
        $_SESSION['hocaImgUrl']=$row['hocaImgUrl'];
       
        header("Location:anasayfa.php");
    }
    else{
        die( "kullanıcı adı ve sifre hatalı");
    }
}


else{
    die("baglanti saglanmadı");
}
?>