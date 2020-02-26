<?php
session_start();
include("baglanti");

?>
<html>
<head>
<meta charset="utf-8">
<title>YuvaBul</title>
</head>

<body>
		<p>İlan Ver  </p>
	                        
	
							<form name="form1" method="post" action="">
							  <table width="294" height="132" border="5">
							    <tr>
							      <td width="91" height="37">Adı :
							        <label for="ad"></label></td>
							      <td width="174"><input type="text" name="ad" id="ad"></td>
						        </tr>
							     <tr>
							      <td width="91" height="37">Cinsi :
							        <label for="cinsi"></label></td>
							      <td width="174"><input type="text" name="cinsi" id="cinsi"></td>
						        </tr>

                                                              <tr>
							      <td width="91" height="37">Yaşı :
							        <label for="yas"></label></td>
							      <td width="174"><input type="text" name="yas" id="yas"></td>
						        </tr>
							     <tr>
							      <td width="91" height="37">Aşı Bilgileri :
							        <label for="AsiBilgisi"></label></td>
							      <td width="174"><input type="text" name="AsiBilgisi" id="AsiBilgisi"></td>
						        </tr>
							     <tr>
							      <td width="91" height="37">Resim :
							        <label for="resim"></label></td>
							      <td width="174"><input type="file" name="dosya" id="dosya"></td>
						        </tr>
							   

							   
							    <tr>
							      <td colspan="2" align="center"><input type="submit" name="ilan" id="ilan" value="İlan Ver "></td>
						        </tr>
						      </table>
						  </form>
                          
      
                    


                    <?php
					if(isset($_POST["ilan"])){ extract($_POST);
			  
			if(empty($ad) || empty($cinsi)|| empty($yas) || empty($AsiBilgisi)){
				echo "Lütfen Boş Alan Bırakmayın";
				}
					$dosyaadi=$_FILES["dosya"]["name"];
	                $boyut=$_FILES["dosya"]["size"];
	                $konum=$_FILES["dosya"]["tmp_name"];
	                $uzanti=explode('.',$dosyaadi);
	                $uzanti=end($uzanti);
	                if(($uzanti=="jpeg"||$uzanti=="jpg")&& ($boyut/1024)<=3072){
		            $resim="img/".$dosyaadi;
					}
				  $sorgu=mysql_query("insert into ilan(ad,cinsi,yas,asiBilgisi,resim,onay) values (".$ad.",".$cinsi.",".$yas.",".$AsiBilgisi.",".$resim.",'0')");
				  if($sorgu==1){
				   echo "İlan Olusturuldu Admin Onayı bekliyor";
				   header("location:anasayfa.php");
		                  }
		
				  else{echo "İlan Olusturulamadı";}
				  
				  
			  
			  
			  }
	  ?>

</body>
</html>