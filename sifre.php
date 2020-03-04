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
<td colspan="2" align="center">Şifre Yenileme</td>
 
</tr>
<td>Tc No Girin</td>
<td><input type="text" name="tc"></td>
</tr>
<tr>
<td>Şifre</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="sifreY" value="Yenile"></td>
</tr>
</table>
</form>
<?php

 if(isset($_POST["sifreY"])){ extract($_POST);
 

$baglan=mysqli_connect("localhost","root","","yuva"); 
mysqli_set_charset($baglan, "utf8");
if(empty($tc) || empty($sifre)){
			echo "Lütfen Boş Alan Bırakmayın";
				}
else {
$sorgu="select * from kullanici where Tc='$tc'"; 
$sonuc=mysqli_query($baglan,$sorgu);
if(mysqli_num_rows($sonuc)>0){
$liste=mysqli_fetch_array($sonuc);
$sonuc=mysqli_query($baglan,"UPDATE kullanici SET Sifre ='$sifre' WHERE kullanici.Tc='$tc'"); 
echo "Giris basarılı ";
header("location:anasayfa.php");

}

else{echo "Hatalı giriş";}
 }
}
?>


</body>
 
</html>