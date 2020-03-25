<html>
<head>

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

    <div align="center">İlanlar</div></p>



<?php
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan where Durum='0' and Onay='1'"); 

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
	'.$satir['Adi'].' <br>Türü:
	'.$satir['Cinsi'].' 
        <br>Cinsi :
        '.$satir['Turu'].'
<br>Yaşı:
	'.$satir['Yas'].'
</td>';
    $sutun++;
}
echo '</tr></table>';
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
								<li class="cat-item"><a href="UyeEkleme.php" >Üye ol</a></li>
								<li class="cat-item"><a href="UyeGiris.php" >Giriş Yap</a></li>
								
							</ul>
						</div>';
				}
						
						
						
                       
						
						?>
<!-- bottom -->
				<div class="footer-bottom">
					<div class="left"> <a href="#" >Yusuf Ergin</a></div>
				</div>	
				<!-- ENDS bottom -->

</body>
</html>
