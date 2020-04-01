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
 <a href="Mesaj.php" title="Bize Ulaşın">Profilim</a>

    </ul>

  </nav>

</header>





							<form name="form4" method="post" action="">
							  <table width="300" height="300" border="0" align="center">
							    <tr>
							     
							      <td width="100" height="100">Kullanıcı Adınız </td>
							      <td><label for="select2"></label>
<label for="select2"></label>
        <select name="select2" id="select2">
        <?php
 
session_start();
ob_start();
 
echo "<option>".$_SESSION["kullanici"]."</option>";
         
         
         ?>   
         </select></td>
                                                              <td colspan="2" align="center"><input type="submit" name="MListeleme" id="MListeleme" value="Mesajlarımı Listele"></td>
						           </tr>
							    
							      
						        
						        </table>
<?php
 if(isset($_POST["MListeleme"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from mesajlar where AliciK like '%$select2'"); 

$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazilar' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==1){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
	Gönderen Kullanıcı:
	'.$satir['GonderenK'].' <br>Telefon Numarası :
	'.$satir['Mesaj'].' 
<br>Mesajınız :
	'.$satir['Mesaj2'].' 
<br>İlan Numarası :
	'.$satir['ilanNo'].' 
       
</td>';
    $sutun++;
}
echo '</tr></table>';

}
?>



						     
<?php
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan where Kad like '$ad' "); 

$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazilar' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==2){ $sutun=0; echo '</tr><tr>'; }
    echo '<td>
	 <a><img src="'.$satir['ResimYolu'].'.jpg" width="250" height="250" border="0" /></a><br>İlan Numarası:
	'.$satir['llanId'].'<br>Adı:
	'.$satir['Adi'].' <br>Türü:
	'.$satir['Cinsi'].' 
        <br>Cinsi :
        '.$satir['Turu'].'
<br>Yaşı:
	'.$satir['Yas'].'
'."<a href='mesaj.php?islem2=sil&llanId=".$satir['llanId']."'>İlanı Sil</a>".'
'."<a href='mesaj.php?islem3=sil&llanId=".$satir['llanId']."'>İlanımı Onayla</a>".'
	
</td>';
    $sutun++;
}
echo '</tr></table>';


if(isset($_GET["islem2"]))
	{
		$islem2=$_GET["islem2"];
		
		switch ($islem2)
		{
			
			case "sil":
			 $id=$_GET['llanId'];
			 $sonuc=mysqli_query($baglan,"delete from ilan where ilan.llanId='$id'");
			echo "Yorum Onaylandı";
			header("location:mesaj.php");
			break;
			
			
			
		}
}

if(isset($_GET["islem3"]))
	{
		$islem3=$_GET["islem3"];
		
		switch ($islem3)
		{
			
			case "sil":
			 $id=$_GET['llanId'];
			 $sonuc=mysqli_query($baglan,"UPDATE ilan SET Durum ='1' WHERE ilan.llanId='$id'");
			echo "Yorum Onaylandı";
			header("location:mesaj.php");
			break;
			
			
			
		}
}


?>
 


							<p>

 

  

</body>
 
</html>