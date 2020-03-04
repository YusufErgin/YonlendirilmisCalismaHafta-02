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

    </ul>

  </nav>

</header>



							<form name="form4" method="post" action="">
							  <table width="294" height="132" border="0" align="center">
							    <tr>
							      <td width="91" height="37">Cinsi Ara</td>
							      <td width="174"><input type="text" name="ara" id="ara"></td>
						        </tr>
							    <tr>
							      <td colspan="2" align="center"><input type="submit" name="arama" id="arama" value="Ara"></td>
						        </tr>
						      </table>
						  </form>
							<p>

<?php
 if(isset($_POST["arama"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan where Cinsi like '%$ara'"); 

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
	<a><img src="'.$satir['ResimYolu'].'.jpg" width="250" height="250" border="0" /></a><br>Adı:
	'.$satir['Adi'].' <br>Cinsi:
	'.$satir['Cinsi'].' 
<br>Yaşı:
	'.$satir['Yas'].'
</td>';
    $sutun++;
}
echo '</tr></table>';
}
?>
 
</body>
 
</html>