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

     <div align="center">İlan Detay</div></p>

<?php
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");

	if(isset($_GET["islem"]))
	{
		$islem=$_GET["islem"];
		
		switch ($islem)
		{

                       case "sil":  
                        $id=$_GET['llanId'];
                        $baglan=mysqli_connect("localhost","root","","yuva");
$sonuc2=mysqli_query($baglan,"UPDATE ilan SET hit =hit+1 WHERE ilan.llanId='$id'"); 
$sonuc=mysqli_query($baglan,"select * from ilan where llanId='$id'"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
echo "<h2 align='center'></h2>";
echo "<table class='yazilar' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
$satir=mysqli_fetch_array($sonuc);
{
    echo '<td>
	  <a><img src="'.$satir['ResimYolu'].'.jpg" width="250" height="250" border="0" /></a><br>Adı:
	'.$satir['Adi'].' <br>Türü:
	'.$satir['Cinsi'].' 
        <br>Cinsi :
        '.$satir['Turu'].'
<br>Yaşı:
	'.$satir['Yas'].'
<br>İlan Sahibi:
	'.$satir['Kad'].'
<br>'."<a href='sahiplen.php?islem2=sil&llanId=".$satir['llanId']."'>Sahiplen</a>".'
	
</td>';
}
echo '</tr></table>';
			break;
		}

 
}

        




?>
 

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



