
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ADMİN</title>
        <link href="css/stil.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
    <h1>
    ADMİN Sayfasına Hoşgeldiniz</h1>
    

                                                         <form name="form4" method="post" action="">
							  <table width="294" height="132" border="0" align="center">
							    <tr>
							      <td>İlanları Listele</td>
							      <td colspan="2" align="center"><input type="submit" name="liste" id="liste" value="Listele"></td>
						           </tr>
						
						      </table>
						  </form>

                                           <form name="form4" method="post" action="">
							  <table width="294" height="132" border="0" align="center">
							    <tr>
							      <td>Kullanıcıları Listele</td>
							      <td colspan="2" align="center"><input type="submit" name="liste2" id="liste2" value="Listele"></td>
						           </tr>
						
						      </table>
						  </form>


                                              <form name="form4" method="post" action="">
							  <table width="294" height="132" border="0" align="center">
							    <tr>
							      <td>Mesajlarımı Göster</td>
							      <td colspan="2" align="center"><input type="submit" name="liste3" id="liste3" value="Listele"></td>
						           </tr>
						
						      </table>
						  </form>


<form name="form5" method="post" action="">
							  <table width="294" height="132" border="0" align="center">
							    <tr>
							      <td>Yorumları Listele</td>
							      <td colspan="2" align="center"><input type="submit" name="liste4" id="liste4" value="Listele"></td>
						           </tr>
						
						      </table>
						  </form>



<?php
 if(isset($_POST["liste3"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from mesajlar where AliciK like 'Admin'"); 

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
	'.$satir['GonderenK'].' <br>Mesajınız :
	'.$satir['Mesaj'].' 
       
</td>';
    $sutun++;
}
echo '</tr></table>';
}
?>



    <?php
 if(isset($_POST["liste"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan"); 

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
	'.$satir['llanId'].'
<br>Adı:
	'.$satir['Adi'].' <br>Cinsi:
	'.$satir['Cinsi'].' 
<br>Onay Durumu:
	'.$satir['Onay'].'
'."<a href='adminGiris.php?islem=sil&llanId=".$satir['llanId']."'>Onayla</a>".'
'."<a href='adminGiris.php?islem2=sil&llanId=".$satir['llanId']."'>İlanı Sil</a>".'
'."<a href='adminGiris.php?islem3=sil&llanId=".$satir['llanId']."'>Yuva-Bulanlara Taşı</a>".'
</td>';
    $sutun++;
}
echo '</tr>
</table>';




		if(isset($_GET["islem"]))
	{
		$islem=$_GET["islem"];
		
		switch ($islem)
		{

                        case "sil":  
                        $id=$_GET['llanId'];
                        $sonuc=mysqli_query($baglan,"UPDATE ilan SET Onay ='1' WHERE ilan.llanId='$id'");   
		        echo "Yorum Onaylandı";
			header("location:adminGiris.php");
			break;
		}
}

if(isset($_GET["islem2"]))
	{
		$islem2=$_GET["islem2"];
		
		switch ($islem2)
		{
			
			case "sil":
			 $id=$_GET['llanId'];
			 $sonuc=mysqli_query($baglan,"delete from ilan where ilan.llanId='$id'");
			echo "Yorum Onaylandı";
			header("location:adminGiris.php");
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
			header("location:adminGiris.php");
			break;
			
			
			
		}
}


}
?>


 <?php
 if(isset($_POST["liste2"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from kullanici"); 

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
	<br>Kullanici Adı:
	'.$satir['Kad'].' <br>EMail Adresi:
	'.$satir['Email'].' 
<br>Yaşı:
	'.$satir['Yas'].'
'."<a href='adminGiris.php?islem2=sil&KullaniciId=".$satir['KullaniciId']."'>Kullanıcıyı Sil</a>".'
</td>';
    $sutun++;
}
echo '</tr>
</table>';

if(isset($_GET["islem2"]))
	{
		$islem2=$_GET["islem2"];
		
		switch ($islem2)
		{
			
			case "sil":
			 $id=$_GET['KullaniciId'];
			 $sonuc=mysqli_query($baglan,"delete from kullanici where kullanici.KullaniciId='$id'");
			echo "Yorum Onaylandı";
			header("location:adminGiris.php");
			break;
			
			
			
		}
}

}
?>


<?php
 if(isset($_POST["liste4"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from yorum where Durum='0'"); 

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
	
<br>Yorum Yapan Kullanıcı:
	'.$satir['GonderenK'].' <br>Yorumu:
	'.$satir['Yorum'].' <br>
Yorum Yapılan İlan : '.$satir['ilanId'].' <br>
'."<a href='adminGiris.php?islem=sil&llanId=".$satir['YorumId']."'>Yorumu Onayla</a>".' ---
'."<a href='adminGiris.php?islem2=sil&llanId=".$satir['YorumId']."'>Yorumu Kaldır</a>".'

</td>';
    $sutun++;
}
echo '</tr>
</table>';




		if(isset($_GET["islem"]))
	{
		$islem=$_GET["islem"];
		
		switch ($islem)
		{

                        case "sil":  
                        $id=$_GET['llanId'];
                        $sonuc=mysqli_query($baglan,"UPDATE yorum SET Durum ='1' WHERE yorum.YorumId='$id'");   
		        echo "Yorum Onaylandı";
			header("location:adminGiris.php");
			break;
		}
}

if(isset($_GET["islem2"]))
	{
		$islem2=$_GET["islem2"];
		
		switch ($islem2)
		{
			
			case "sil":
			 $id=$_GET['llanId'];
			 $sonuc=mysqli_query($baglan,"delete from yorum where yorum.YorumId='$id'");
			echo "Yorum Onaylandı";
			header("location:adminGiris.php");
			break;
			
			
			
		}
}




}
?>




<h1><a href="admin.php">ÇIKIŞ </a></h1>
</body>
</html>


		


