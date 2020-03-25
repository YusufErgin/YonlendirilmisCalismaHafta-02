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
<td colspan="2" align="center"> Kullanıcı Giriş</td>
 
</tr>
<td>Kullanıcı Adı</td>
<td><input type="text" name="ad"></td>
</tr>
<tr>
<td>Şifre</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="uye" value="Giriş Yap"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="sifreY" value="Şifremi Unuttum"></td>
</tr>
</table>
</form>

<?php
if(isset($_POST["uye"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva"); 
mysqli_set_charset($baglan, "utf8");
if(empty($ad) || empty($sifre)){
			echo "Lütfen Boş Alan Bırakmayın";
				}
else {
$sorgu="select * from kullanici where Kad='$ad' and Sifre='$sifre'"; 
$sonuc=mysqli_query($baglan,$sorgu);
if(mysqli_num_rows($sonuc)>0){
$liste=mysqli_fetch_array($sonuc);
echo "Giris basarılı ";
$_SESSION["kullanici"]=$liste['Kad'];
header("location:anasayfa.php");

}

else{echo "Hatalı giriş";}
 }
}

?>

<?php
if(isset($_POST["sifreY"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva"); 
mysqli_set_charset($baglan, "utf8");


header("location:sifre.php");




}

?>


 
</body>
 
</html>