<html>
<head>
<title>Yuva-Bul</title>
</head>
<body background="img/arka.png">
<header>
<title>Yuva-Bul</title>
  

  <nav>

    <ul class="navigation fright">

      <a href="anasayfa.php" title="Anasayfa">Anasayfa</a>


      <a href="Ilan.php" title="İlanlar">İlan Ver</a>

      <a href="yuva.php" title="Bize Ulaşın">Yuva-Bulanlar</a>
      <a href="Arama.php" title="Bize Ulaşın">Arama Yap</a>
 <a href="Mesaj.php" title="Bize Ulaşın">Mesajlarım</a>
    </ul>

  </nav>

</header>

<form method="POST" action="">
<table border="0" align="center">
<tr>
<td colspan="2" align="center">İlan Ver</td>
 
</tr>
<td>Kullanıcı Adı</td>
<td><input type="text" name="Kad"></td>
</tr>
<tr>
<td>Adi</td>
<td><input type="text" name="ad"></td>
</tr>
<tr>
<td>Türü</td>
<td><label for="select"></label>
        <select name="select" id="select">
        <?php
         $baglan=mysqli_connect("localhost","root","","yuva"); 
         mysqli_set_charset($baglan, "utf8");
         $sorgu=mysqli_query($baglan,"Select * from turler");
         while($Turi=mysqli_fetch_array($sorgu))
         {
         echo "<option>".$Turi["Tur"]."</option>";

         }
         ?>   
         </select></td>
</tr>

<td>Cinsi</td>
<td><input type="text" name="cins"></td>
</tr>

<tr>
<td>Yaşı</td>
<td><input type="text" name="yas"></td>
</tr>
<tr>
<td>Aşı Bilgisi</td>
<td><input type="text" name="AsiBilgisi"></td>
</tr>
 <tr>
							      <td width="91" height="37">Resim :
							        <label for="resim"></label></td>
							      <td width="174"><input type="file" name="dosya" id="dosya"></td>
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
 
if(empty($Kad) || empty($ad)|| empty($select)|| empty($yas)|| empty($AsiBilgisi)|| empty($dosya) || empty ($cins)){
				echo "Lütfen Boş Alan Bırakmayın";
				}
else{
   
	
		
	

		$resim="img/".$dosya;
		
			
		
$sqlekle="INSERT INTO ilan(Kad,Adi,Cinsi,Yas,AsiBilgisi,ResimYolu,YorumNo,KullaniciNo,Onay,Turu) 
VALUES ('$Kad','$ad','$select','$yas','$AsiBilgisi','$resim','1','1','0','$cins')";
$sonuc=mysqli_query($baglan,$sqlekle);
if($sonuc==1){echo "Kayıt basarılı ";
 $_SESSION["kullanici"]=$sonuc["Kad"];
 header("location:anasayfa.php");

}

else{echo "Kayıt Basarısız";}

 }

 }
?>

</body>
 
</html>