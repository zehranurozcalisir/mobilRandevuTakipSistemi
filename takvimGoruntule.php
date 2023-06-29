<?php session_start();
include ("baglanti.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="takvimGoruntule.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-YJ/CfcyIoSGezlRj1H2vL/kXOZcqtJH8WYrCvzwm/VjnFyCfzt+8WbnttUXvllPd7eK6inAZUMV7RMu/gv4x4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>.ok{
        width: 20px;
        height: 20px;
    }.false{
        width: 20px;
        height: 20px;
    }
    .buttonn{
            margin-bottom: 0.5vw;
			width:10vw;
            height:2vw;
            font-size: 1vw;
            color: #274546;
            background-color: #efeee5;
            border-radius:1vw;
            border-style: none;
        }
    /*<td> <img src="ok.png" class="ok" ><img src="false.png" class="ok" >*/
    </style>
</head>
<body>
   
    <div class="kapsayici">
		<div class="randevubanner">
		<img src="YBS-Logo-png-e1598794278240.png" class="randevuOlusturLogo">
		<h1 class="randevuH1">YÖNETİM BİLİŞİM SİSTEMLERİ</h1>
    </div>
        
        <div class="ortakapsayici">	<div class="solDiv">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&bgcolor=%23ffffff&ctz=Europe%2FIstanbul&showNav=0&showTitle=0&showTz=0&showCalendars=0&src=emVocmFudXJvemNhbGlzaXIuMTUwQGdtYWlsLmNvbQ&src=dHIudHVya2lzaCNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23039BE5&color=%237986CB" style="border:solid 1px #777" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="sagDiv">
            <div class="aciklamaSpan"> <a href="yonetimPaneli.php"><button class="buttonn"type="submit" >Yönetim Paneli</button></a>
                <table id="personel">
                    <tr>
                    <th>Ad-Soyad</th>
                    <th>Telefon Numarası</th>
                    <th>E-Mail</th>
                    <th>Açıklama</th>
                    <th>Tarih</th>
                    <th>Onayla</th>
                    <th>Sil</th>
                    </tr>
                    <tbody>
<?php
$sqll = "SELECT randevular.isimSoyisim,randevular.telefonNumarasi,randevular.eMail,randevular.aciklama,randevular.tarih,randevular.randevuId
            FROM randevular
            WHERE randevular.hocaId=$_SESSION[hocaId] and randevular.onay=0" ;
$result = $baglan->query($sqll);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $a=$row["randevuId"];
        echo "<tr>";
        echo "<td>" . $row["isimSoyisim"] . "</td>";
        echo "<td>" . $row["telefonNumarasi"] . "</td>";
        echo "<td>" . $row["eMail"] . "</td>";
        echo "<td>" . $row["aciklama"] . "</td>";
        echo "<td>" . $row["tarih"] . "</td>";
        echo '<td class="td-team">';
        echo '<form action="randevuSil.php" method="post">';
echo '<input type="hidden" name="randevuId" value="' . $a . '">';
echo '<input type="submit" name="sil" value="Sil">';
echo '</form>';

        echo '</td>';
        echo '<td class="td-team">';

        echo '<form action="randevuOnay.php" method="post">';
        echo '<input type="hidden" name="randevuId" value="'.$a.'">';
        echo '<input type="submit" name="onayla" value="Onayla">';
        echo '</form>';
         
        
        echo '</td>';
        
        echo "</tr>";
    }
} else {
    echo "Randevu İsteği Bulunmuyor";
}
$baglan->close();
?>
</tbody>
                    
                    </table>
            </div>
        </div></div>	
	</div>

</body>
</html>
