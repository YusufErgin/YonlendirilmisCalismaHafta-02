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
<td colspan="2" align="center">Yolla
 

<label for="select"></label>
        <select name="select" id="select">
        <?php
         $add = $_SESSION["kullanici"];
         $baglan=mysqli_connect("localhost","root","","yuva"); 
         mysqli_set_charset($baglan, "utf8");
         $sorgu=mysqli_query($baglan,"Select * from soru where AliciK like '%$add'");
         while($Turi=mysqli_fetch_array($sorgu))
         {
         echo "<option>".$Turi["GonderenK"]."</option>";

         }
         ?>   
         </select></td></tr>
<td>Cevabınız</td>
<td><input type="text" name="cevap"></td>
</tr>
<td><input type="submit" name="Cevap" value="Cevapla"></td>
</tr>


						      



</table>
</form>

<?php


 if(isset($_POST["Cevap"])){ extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva"); 
mysqli_set_charset($baglan, "utf8");
 
if(empty($Cevap)){
				echo "Lütfen Boş Alan Bırakmayın";
				}
else{
   				
$id=$_GET['llanId'];
			$sonuc=mysqli_query($baglan,"UPDATE soru SET cevap ='$cevap' WHERE soru.id='$id'");
			echo "Yorum Onaylandı";
			header("location:mesaj.php");



 }

 }
?>
							<p>

 

  

</body>
 
</html>