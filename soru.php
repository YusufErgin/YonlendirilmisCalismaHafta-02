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
					     


<form method="POST" action="">
<table border="0" align="center">
<tr>
<td colspan="2" align="center">Soru Sor
 

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
         </select></td></tr>
<td>Sorunuz</td>
<td><input type="text" name="soru"></td>
</tr>
<td><input type="submit" name="Sor" value="Sor"></td>
</tr>


						      



</table>
</form>

<?php


 if(isset($_POST["Sor"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva"); 
mysqli_set_charset($baglan, "utf8");
 
if(empty($soru)){
				echo "Lütfen Boş Alan Bırakmayın";
				}
else{
   				
$sqlekle="INSERT INTO soru(GonderenK,AliciK,soru,cevap) 
VALUES ('$select2','$select','$soru','')";
$sonuc=mysqli_query($baglan,$sqlekle);
if($sonuc==1){echo "Kayıt basarılı ";
 //$_SESSION["kullanici"]=$sonuc["Kad"];
 header("location:anasayfa.php");

}

else{echo "Kayıt Basarısız";}

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
?>
							<p>

 

  

</body>
 
</html>