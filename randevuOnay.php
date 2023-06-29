<?php
include ("baglanti.php");
session_start();

if(isset($_POST["randevuId"])) {
    $randevuId = $_POST["randevuId"];
    $sql = "UPDATE randevular SET onay=2 WHERE randevuId=$randevuId";
    if ($baglan->query($sql) === TRUE) {
        echo "Randevu başarıyla onaylandı";
        header("Location:takvimGoruntule.php");
    } else {
        echo "Hata: " . $sql . "<br>" . $baglan->error;
    }
}
$baglan->close();
?>
