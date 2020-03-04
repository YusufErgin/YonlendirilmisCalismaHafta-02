<html>
<head>
<title>Yuva-Bul</title>
</head>
<body background="img/arka.png">

<title>Yuva-Bul</title>
  

 


<form method="POST" action="">
<table border="0" align="center">
<tr>
<td colspan="2" align="center">ADMİN GİRİŞ</td>
 
</tr>
<td>Ad</td>
<td><input type="text" name="ad"></td>
</tr>
<tr>
<td>Şifre</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="admin" value="Giriş Yap"></td>
</tr>
</table>
</form>

<?php

 if(isset($_POST["admin"])){ extract($_POST);
 

$baglan=mysqli_connect("localhost","root","","yuva"); 
mysqli_set_charset($baglan, "utf8");
if(empty($ad) || empty($sifre)){
			echo "Lütfen Boş Alan Bırakmayın";
				}
else {
$sorgu="select * from admin where AdminAdi='$ad' and Sifre='$sifre'"; 
$sonuc=mysqli_query($baglan,$sorgu);
if(mysqli_num_rows($sonuc)>0){
$liste=mysqli_fetch_array($sonuc);
echo "Giris basarılı ";
$_SESSION["kullanici"]=$liste["AdminAdi"];
header("location:adminGiris.php");

}

else{echo "Hatalı giriş";}
 }
}
?>
 
</body>
 
</html>