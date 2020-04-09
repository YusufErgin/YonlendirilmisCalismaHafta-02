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

	
                        $id=$_GET['llanId'];
                        $baglan=mysqli_connect("localhost","root","","yuva");
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
	
</td>';
}
echo '</tr></table>';
			

      

?>
 </form>
                                                         
                                                          <form name="form5" method="post" action="">
							  <table width="350" height="0" border="0" align="center">
							    <tr>
							      <td width="200" height="0">Kullanıcı Adınız : </td>
							      
<td width="100" height="10">
        <?php
 
session_start();
ob_start();
 $select2=$_SESSION["kullanici"];
echo $_SESSION["kullanici"];    
         ?>   
         </td>
						           </tr>
							    <tr>
							      <td width="100" height="10">İlan Sahibi </td>
							      <td width="100">
        
        <select name="Kad" id="Kad">
        <?php
         $id=$_GET['llanId'];
         $baglan=mysqli_connect("localhost","root","","yuva"); 
         mysqli_set_charset($baglan, "utf8");
         $sorgu=mysqli_query($baglan,"Select * from ilan where llanId='$id'");
         while($Kad=mysqli_fetch_array($sorgu))
         {
         echo "<option>".$Kad["Kad"]."</option>";
        
         }

         ?>   
     </select> </td>


						           </tr>


<tr>
							      <td width="100" height="10">İlan No </td>
							      <td width="100">
        
        <?php
         $id=$_GET['llanId'];
         echo $id=$_GET['llanId'];
         ?>   
        </td>


			
			           </tr>
                          <tr>
                       <td>Daha Önce Evcil Hayvan Besledim</td>
                         </tr> 
                         <td> <input type="radio" name="soru" value="Evet" />Evet</td>
                         <td> <input type="radio" name="soru" value="Hayir" />Hayır</td>
                              
                         <?php
 if(empty($_GET['soru'])){
   //echo "lütfen bir alan seçiniz";
   }
  else if(isset($_GET['soru'])){
   $soru = $_GET['ders'];
   echo $soru;
}
?>

                            
                                                            <tr>
							      <td width="100" height="10">Kendinizi Tanıtın </td>
							       <td><textarea name="yorum" id="yorum"></textarea></td>
						           </tr>





</tr>



							     <td colspan="2" align="center"><input type="submit" name="Sahiplen" id="Sahiplen" value="Sahiplen"></td> 
						        
						        </table>
						      </form>

<?php
 if(isset($_POST["Sahiplen"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva"); 
mysqli_set_charset($baglan, "utf8");
 
if(empty($yorum)){
				echo "Lütfen Boş Alan Bırakmayın";
				}
else{
   
	
$sqlekle="INSERT INTO mesajlar(Mesaj,GonderenK,AliciK,Mesaj2,ilanNo,onay,soru) 
VALUES ('$yorum','$select2','$Kad','Sahiplenmek istiyorum','$id','0','$soru')";
$sonuc=mysqli_query($baglan,$sqlekle);
if($sonuc==1){echo "Kayıt basarılı ";
 //$_SESSION["kullanici"]=$sonuc["Kad"];
 header("location:anasayfa.php");

}

else{echo "Kayıt Basarısız";}

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



