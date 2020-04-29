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
                                                              <td colspan="2" align="center"><input type="submit" name="MListeleme" id="MListeleme" value="İstekleri Görüntüle">
                                                              <input type="submit" name="basvurularim" id="basvurularim" value="Başvurularım">
                                                               <input type="submit" name="sorularim" id="sorularim" value="Gelen Soru">
<input type="submit" name="cevaplar" id="cevaplar" value="Gelen Cevaplar"></td></td>
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
if($sutun==3){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
	Gönderen Kullanıcı:
	'.$satir['GonderenK'].'
 <br>Telefon Numarası :
	'.$satir['Mesaj'].' 
<br>Mesajınız :
	'.$satir['Mesaj2'].' 
<br>İlan Numarası :
	'.$satir['ilanNo'].' 
<br>Daha Önce Evcil hayvan beslemiş mi :
	'.$satir['soru'].' <br>
'."<a href='mesaj.php?islem4=sil&id=".$satir['id']."'>Basvuruyu Reddet</a>".'
'."<a href='mesaj.php?islem3=sil&id=".$satir['id']."'>Başvuruyu Onayla</a>".'
'."<a href='soru.php?islem5=sil&id=".$satir['id']."'>Soru Sor</a>".'

<br>
<br>
       
</td>';
    $sutun++;
}
echo '</tr></table>';

}
 

if(isset($_GET["islem3"]))
	{
		$islem3=$_GET["islem3"];
		
		switch ($islem3)
		{
			
			case "sil":
			$id=$_GET['id'];
                        $baglan=mysqli_connect("localhost","root","","yuva");
			$sonuc2=mysqli_query($baglan,"UPDATE mesajlar SET onay ='Onaylandı' WHERE mesajlar.id='$id'"); 
                       
			break;
			
			
			
		}
}

if(isset($_GET["islem4"]))
	{
		$islem4=$_GET["islem4"];
		
		switch ($islem4)
		{
			
			case "sil":
			$id=$_GET['id']; 
                        $baglan=mysqli_connect("localhost","root","","yuva");
                        $sonuc=mysqli_query($baglan,"UPDATE mesajlar SET onay='Reddedildi' WHERE mesajlar.id='$id'");
			break;
			
			
			
		}
}

if(isset($_GET["islem5"]))
	{
		$islem5=$_GET["islem5"];
		
		switch ($islem5)
		{
			
			case "sil":
			$id=$_GET['id']; 
                        $baglan=mysqli_connect("localhost","root","","yuva");
                        $sonuc=mysqli_query($baglan,"UPDATE mesajlar SET onay='SorunuzVar' WHERE mesajlar.id='$id'");
			break;
			
			
		}
}


if(isset($_POST["basvurularim"])){ extract($_POST);
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");

$sonuc=mysqli_query($baglan,"select * from mesajlar where  GonderenK like '%$ad'"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");

if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazilar' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==3){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
	İlan Sahibi:
	'.$satir['AliciK'].'
<br>İlan Numarası :
	'.$satir['ilanNo'].' <BR>
Onay Durumu:
	'.$satir['onay'].' <BR>
	
<br>
<br>
<br>
       
</td>';
    $sutun++;
}
echo '</tr></table>';
}



if(isset($_POST["sorularim"])){ extract($_POST);
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");

$sonuc=mysqli_query($baglan,"select * from soru where  AliciK like '%$ad'"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");

if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazilar' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==3){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
	Soran Kişi:
	'.$satir['GonderenK'].'
<br>Sorunuz :
	'.$satir['soru'].' <BR>
'."<a href='cevap.php?islem=sil&llanId=".$satir['id']."'>Cevapla</a>".'

<br>
<br>
<br>
       
</td>';
    $sutun++;
}
echo '</tr></table>';
}


if(isset($_POST["cevaplar"])){ extract($_POST);
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");

$sonuc=mysqli_query($baglan,"select * from soru where  GonderenK like '%$ad'"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");

if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazilar' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==3){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
	  Cevaplayan  Kişi:
	'.$satir['AliciK'].'
<br>Sorunuz :
	'.$satir['soru'].' <BR>
<br>Cevap :
	'.$satir['cevap'].' <BR>

<br>
<br>
<br>
       
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
if($sutun==4){ $sutun=0; echo '</tr><tr>'; }
    echo '<td>
	 <a><img src="'.$satir['ResimYolu'].'.jpg" width="150" height="150" border="0" /></a><br>İlan Numarası:
	'.$satir['llanId'].'<br>Adı:
	'.$satir['Adi'].' <br>Türü:
	'.$satir['Cinsi'].' 
        <br>Cinsi :
        '.$satir['Turu'].'
<br>Yaşı:
	'.$satir['Yas'].'<br>
'."<a href='mesaj.php?islem2=sil&llanId=".$satir['llanId']."'>İlanı Pasif Yap</a>".'
'."<a href='mesaj.php?islem4=sil&llanId=".$satir['llanId']."'>İlanı Aktif Yap</a>".'<br>
'."<a href='sahiplendir.php?islem5=sil&llanId=".$satir['llanId']."'>İlanı Sahiplendir</a>".'<br>

	
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
			 $sonuc=mysqli_query($baglan,"UPDATE ilan SET Onay ='0' WHERE ilan.llanId='$id'");
			echo "Yorum Onaylandı";
			header("location:mesaj.php");
			break;
			
			
			
		}
}


if(isset($_GET["islem4"]))
	{
		$islem4=$_GET["islem4"];
		
		switch ($islem4)
		{
			
			case "sil":
			 $id=$_GET['llanId'];
			 $sonuc=mysqli_query($baglan,"UPDATE ilan SET Onay ='1' WHERE ilan.llanId='$id'");
			echo "Yorum Onaylandı";
			header("location:mesaj.php");
			break;
			
			
			
		}
}




if(isset($_GET["islem5"]))
	{
		$islem5=$_GET["islem5"];
		
		switch ($islem5)
		{
			
			case "sil":
			 $id=$_GET['llanId'];
			 $sonuc=mysqli_query($baglan,"UPDATE ilan SET Durum ='0' WHERE ilan.llanId='$id'");
			echo "Yorum Onaylandı";
			header("location:mesaj.php");
			break;
			
			
			
		}
}


?>
 

 

  

</body>
 
</html>