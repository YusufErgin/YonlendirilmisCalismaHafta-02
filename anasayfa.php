<html>
<head>

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

     <div align="center">İlanlar</div></p>

<?php
session_start();
ob_start();
$ad=$_SESSION["kullanici"];
//$add=$_SESSION["kullaniciId"];

if(isset($_GET["islem"]))
	{
		$islem=$_GET["islem"];
		
		switch ($islem)
		{
 case "sil":
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan where Durum='0' and Onay='1' and Kad  not like '$ad' order by llanId asc limit 3,3"); 

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
<br>'."<a href='Detay.php?islem=sil&llanId=".$satir['llanId']."'>İlana Git</a>".'
	
</td>';
    $sutun++;
}
echo '</tr></table>';
break;
 }

}

else if (isset($_GET["islem3"]))
	{
		$islem3=$_GET["islem3"];
		
		switch ($islem3)
		{

                       case "sil": 
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan where Durum='0' and Onay='1' and Kad  not like '$ad'  order by llanId asc limit 0,3"); 

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
<br>'."<a href='Detay.php?islem=sil&llanId=".$satir['llanId']."'>İlana Git</a>".'
	
</td>';
    $sutun++;
}
echo '</tr></table>';
break;
	}

 
}

else{
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan where Durum='0' and Onay='1' and Kad  not like '$ad'  order by llanId asc limit 0,3"); 

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
<br>'."<a href='Detay.php?islem=sil&llanId=".$satir['llanId']."'>İlana Git</a>".'
	
</td>';
    $sutun++;
}
echo '</tr></table>';
}
?>
 
<div align="center">Sayfa<a href='anasayfa.php?islem3=sil'>1 -> </a> <a href='anasayfa.php?islem=sil'>2 -> </a></div></p>


 <?php
						 if(isset($_SESSION["kullanici"]))
                {
       
                   echo "<a href='cikis.php'>ÇIKIŞ </a>";
                    echo "</p>";

                }
                else
                { echo' <div class="widget-block">
							<h4></h4>
							<ul>
								<li class="cat-item"><a href="index.php" >Çıkış Yap</a></li>
								
							</ul>
						</div>';
				}
						
						
						
                       
						
						?>










</body>
</html>



