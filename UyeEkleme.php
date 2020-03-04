<html>
<head>
<title>Yuva-Bul</title>
</head>
<body background="img/arka.png">
<header>
<title>Yuva-Bul</title>
  

  <nav>

    <ul class="navigation fright">

      <a href="index.php" title="Anasayfa">Anasayfa</a>

      <a href="UyeGiris.php" title="İlanlar">İlan Ver</a>

      <a href="UyeGiris.php" title="Bize Ulaşın">Yuva-Bulanlar</a>
       
    </ul>

  </nav>

</header>


<form method="POST" action="">
<table border="0" align="center">
<tr>
<td colspan="2" align="center"> Üye Ol</td>
 
</tr>
<td>Kulanıcı Adı</td>
<td><input type="text" name="ad"></td>
</tr>
<tr>
<td>E-Mail</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Şifre</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>
<td>Adres</td>
<td><input type="text" name="adres"></td>
</tr>
<tr>
<td>Yaşınız</td>
<td><input type="text" name="yas"></td>
</tr>
<tr>
<td>Telefon Numarası</td>
<td><input type="text" name="gsm"></td>
</tr>
<tr>
<td>Aile Sayisi</td>
<td><input type="text" name="Asayisi"></td>
</tr>
<tr>
<td>Cinsiyet</td>
<td><input type="text" name="cinsiyet"></td>
</tr>
<tr>
<td>TC</td>
<td><input type="text" name="tc"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="uye" value="Kaydet"></td>
</tr>
</table>
</form>

<?php

 if(isset($_POST["uye"])){ extract($_POST);

$baglan=mysqli_connect("localhost","root","","yuva"); 
mysqli_set_charset($baglan, "utf8");
 
if(empty($ad) || empty($email)|| empty($sifre)|| empty($adres)|| empty($yas)|| empty($gsm)|| empty($Asayisi)|| empty($cinsiyet) || empty($tc)){
				echo "Lütfen Boş Alan Bırakmayın";
				}
else{
$sqlekle="INSERT INTO kullanici(Kad,Email,Sifre,Adres,Yas,TelefonNumarasi,AileSayisi,Cinsiyet,Tc) 
VALUES ('$ad','$email','$sifre','$adres','$yas','$gsm','$Asayisi','$cinsiyet','$tc')";
$sonuc=mysqli_query($baglan,$sqlekle);
if($sonuc==1){echo "Kayıt basarılı ";
 $_SESSION["kullanici"]=$sonuc["ad"];
 header("location:cikis.php");
}
else{echo "Kayıt Basarısız";}

 }

 }
  
?>

</body>
 
</html>