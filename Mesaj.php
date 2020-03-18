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
 <a href="Mesaj.php" title="Bize Ulaşın">Mesajlarım</a>

    </ul>

  </nav>

</header>



							<form name="form4" method="post" action="">
							  <table width="300" height="300" border="0" align="center">
							    <tr>
							      <td width="100" height="100">Kullanıcı Adınızı Girin </td>
							      <td width="100"><input type="text" name="Kad" id="Kad"></td>
                                                              <td colspan="2" align="center"><input type="submit" name="MListeleme" id="MListeleme" value="Mesajlarımı Listele"></td>
						           </tr>
							    
							      
						        
						        </table>
						      </form>
                                                         
                                                          <form name="form5" method="post" action="">
							  <table width="100" height="100" border="0" align="center">
							    <tr>
							      <td width="100" height="100">Kullanıcı Adınızı Girin </td>
							      <td width="100"><input type="text" name="Kad" id="Kad"></td>
						           </tr>
							    <tr>
							      <td width="100" height="100">Mesajı Göndermek İstediginiz Kullanıcı Adını Girin </td>
							      <td width="100"><input type="text" name="AKad" id="AKad"></td>
						           </tr>
                                                            <tr>
							      <td width="100" height="100">Mesajınız</td>
							       <td><textarea name="yorum" id="yorum"></textarea></td>
						           </tr>

							     <td colspan="2" align="center"><input type="submit" name="MYolla" id="MYolla" value="Mesajımı Yolla"></td> 
						        
						        </table>
						      </form>



							<p>
<?php
 if(isset($_POST["MYolla"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva"); 
mysqli_set_charset($baglan, "utf8");
 
if(empty($Kad) || empty($AKad)|| empty($yorum)){
				echo "Lütfen Boş Alan Bırakmayın";
				}
else{
   
	
$sqlekle="INSERT INTO mesajlar(Mesaj,GonderenK,AliciK) 
VALUES ('$yorum','$Kad','$AKad')";
$sonuc=mysqli_query($baglan,$sqlekle);
if($sonuc==1){echo "Kayıt basarılı ";
 $_SESSION["kullanici"]=$sonuc["Kad"];
 header("location:Mesaj.php");

}

else{echo "Kayıt Basarısız";}

 }

 }
?>
 
<?php
 if(isset($_POST["MListeleme"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from mesajlar where AliciK like '%$Kad'"); 

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
  

</body>
 
</html>