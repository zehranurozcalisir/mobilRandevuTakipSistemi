<?php
include ("baglanti.php");
session_start();

if(isset($_POST["randevuId"])) {
    $randevuId = $_POST["randevuId"];
    $sql = "DELETE FROM randevular WHERE randevuId=$randevuId";
    if ($baglan->query($sql) === TRUE) {
        echo "Randevu başarıyla silindi";
        header("Location:takvimGoruntule.php");
    } else {
        echo "Hata: " . $sql . "<br>" . $baglan->error;
    }
}
$baglan->close();
?>
