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
							     
							      
							      <td><label for="select2"></label>
<label for="select2"></label>
        <select name="select2" id="select2">
        <?php
 
session_start();
ob_start();
 
echo "<option>".$_SESSION["kullanici"]."</option>";
         
         
         ?>   
         </select></td>
                                                              
						           </tr>
							    
							      
						        
						        </table>
<?php
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");

	if(isset($_GET["islem5"]))
	{
		$islem5=$_GET["islem5"];
		
		switch ($islem5)
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
<br>
	
</td>';
}
echo '</tr></table>';
			break;
		}

 
}

?>						     


<form method="POST" action="">
<table border="0" align="center">
<tr>
<td colspan="2" align="center">Sahiplendir
 

<label for="select"></label>
        <select name="select" id="select">
        <?php
         $add = $_SESSION["kullanici"];
         $baglan=mysqli_connect("localhost","root","","yuva"); 
         mysqli_set_charset($baglan, "utf8");
         $sorgu=mysqli_query($baglan,"Select * from mesajlar where AliciK like '%$add'");
         while($Turi=mysqli_fetch_array($sorgu))
         {
         echo "<option>".$Turi["GonderenK"]."</option>";

         }
         ?>   
         </select></td>
<td><input type="submit" name="sahiplendir" value="Sahiplendir"></td>
</tr>


						      



</table>
</form>

<?php


 if(isset($_POST["sahiplendir"])){ extract($_POST);

$id=$_GET['llanId'];
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"UPDATE ilan SET Durum='1' WHERE ilan.llanId='$id'");
$sonuc2=mysqli_query($baglan,"UPDATE ilan SET yeniSahip='$select' WHERE ilan.llanId='$id'");



 }


?>

							<p>

 

  

</body>
 
</html>