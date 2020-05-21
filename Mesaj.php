<?php
ob_start();
?>
<!doctype html>
<html class="no-js">

	<head>
		<meta charset="utf-8"/>
		<title>Yuva-Bul</title>	 
<style>

.yazi{
  color: black;
  text-transform: uppercase;
  font-style: oblique;
  font-size:15px;
}


.box1{
  width: 300px;
  padding: 0px;
  top: 50%;
  left: 10%;
  background: ;
  text-align: left;
  position: relative;
  left: -400px;
  top: -20px;
}
.box1 h1{
  color: black;
  text-transform: uppercase;
  font-weight: 500;
}

.box1 input{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 10px 5px;
  width: 200px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
  position: relative;
  left: 50px;
  top: -20px;
}

.box1 input[type = "text"],.box1 input[type = "password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 10px 5px;
  width: 200px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
.box1 select[type = "text"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: left;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
.box1 select[type = "text"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box1 input[type = "file"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: left;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
}
.box1 input[type = "file"]:focus{
  width: 280px;
  border-color: #2ecc71;
}


.box1 input[type = "text"]:focus,.box1 input[type = "password"]:focus{
  width: 280px;
  border-color: #2ecc71;
}
.box1 input[type = "submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: left;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: black;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box1 input[type = "submit"]:hover{
  background: #2ecc71;
}

</style>

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" media="all" href="css/style.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
				
		<!-- JS -->
		<script src="js/jquery-1.7.1.min.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/tabs.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/jquery.columnizer.min.js"></script>
		
		<!-- Isotope -->
		<script src="js/jquery.isotope.min.js"></script>
		
		<!-- Lof slider -->
		<script src="js/jquery.easing.js"></script>
		<script src="js/lof-slider.js"></script>
		<link rel="stylesheet" href="css/lof-slider.css" media="all"  /> 
		<!-- ENDS slider -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  /> 
		<script src="js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<script  src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- JCarousel -->
		<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
		<link rel="stylesheet" media="screen" href="css/carousel.css" /> 
		<!-- ENDS JCarousel -->
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

		<!-- modernizr -->
		<script src="js/modernizr.js"></script>
		
		<!-- SKIN -->
		<link rel="stylesheet" media="all" href="css/skin.css"/>
		
		<!-- Less framework -->
		<link rel="stylesheet" media="all" href="css/lessframework.css"/>
		
		<!-- flexslider -->
		<link rel="stylesheet" href="css/flexslider.css" >
		<script src="js/jquery.flexslider.js"></script>

	</head>
	
	
	<body class="home">
	
		<!-- HEADER -->
		<header>
			<div class="wrapper cf">
				
				
				
				<!-- nav -->
				<ul id="nav" class="sf-menu">
					<li class="current-menu-item"><a href="anasayfa.php">Anasayfa</a></li>
					<li><a href="Ilan.php">İlan Ver</a></li>
					<li><a href="yuva.php">Yuva-Bulanlar</a></li>
                                        <li><a href="arama.php">Arama</a></li>
                                        <li><a href="Mesaj.php">Profil</a></li>
					<li><a href="#"></a></li>
				</ul>
				<div id="combo-holder"></div>
				<!-- ends nav -->
				
				
				<!-- SLIDER -->				
				<div id="home-slider" class="lof-slidecontent">
					
					<div class="preload"><div></div></div>
					
					<!-- slider content --> 
					<div class="main-slider-content" >
					<ul class="sliders-wrap-inner">
					
	                                  
					    <li>
					           <?php
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan   where Durum='0' and Onay='1'  order by llanId asc limit 0,6"); 

$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==3){ $sutun=0; echo '</tr><tr>'; }
        echo '<li>
	<a><img src="'.$satir['ResimYolu'].'.jpg" width="1000" height="400" border="0" /></a>
         <div class="slider-description">
         <h4>İlan Numarası:
	'.$satir['llanId'].'</h4>
        '."<a class='link' href='Detay.php?islem=sil&llanId=".$satir['llanId']."'>İlana Git</a>".'
	</div>
        </li>';
    $sutun++;
}
?>	                    
					         
                                                   
					    </li>				    

					    
					    
					  </ul>  	
					</div>
					<!-- ENDS slider content --> 
				           
					<!-- slider nav -->
					<div class="navigator-content">
					  <div class="navigator-wrapper">
					        <ul class="navigator-wrap-inner">
					         

                                                  
					           <?php
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan   where Durum='0' and Onay='1'  order by llanId asc limit 0,6"); 

$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==3){ $sutun=0; echo '</tr><tr>'; }
        echo '<li>
	<a><img src="'.$satir['ResimYolu'].'.jpg" width="200" height="80" border="0" /></a>
        </li>';
    $sutun++;
}
?>	
  


					        </ul>
					  </div>
					  <div class="button-next">Next</div>
					  <div  class="button-previous">Previous</div>
					  <!-- REMOVED TILL FIXED <div class="button-control"><span>STOP</span></div> -->
					</div> 
					<!-- slider nav -->
					
					
				          
				 </div> 
				<!-- ENDS SLIDER -->





			</div>
		</header>
		<!-- ENDS HEADER -->
		
		<!-- MAIN -->
		<div id="main">
			<div class="wrapper cf">
			
			
			
			
				
			<!-- featured -->
			<div class="home-featured">
				<ul id="filter-buttons">
					<li><a href="#" data-filter="*" class="selected">Profilim</a></li>
					
				
				</ul>
                
				<!-- Filter container -->
                
		
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
<div align="center">		
<form  class="box1" name="box1" method="post" action="">
	<table style="width:100%">
  <tr>
    				 
							      <label for="select2"></label>
<label for="select2"></label>
        <select  type="text" name="select2" id="select2">
        <?php
 
session_start();
ob_start();
 
echo "<option>".$_SESSION["kullanici"]."</option>";
         
         
         ?>   
         </select>
                                                            
                                                            <th> <input type="submit" name="basvurularim" id="basvurularim" value="Başvurularım"></th>
                                                         
						          
						      
	
  </tr>							        
	</table>					     
 </form>
<?php
 if(isset($_POST["MListeleme"])){extract($_POST);
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from mesajlar where AliciK like '%$select2'"); 

$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazi' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==1){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
	Gönderen Kullanıcı:
	'.$satir['GonderenK'].'
 <br>Telefon Numarası :
	'.$satir['Mesaj'].' 
<br>Mesajınız :
	'.$satir['Mesaj2'].' 
<br>İlan Numarası :
	'.$satir['ilanNo'].' 
<br>Daha Önce Evcil hayvan beslemiş mi :
	'.$satir['soru'].' <br>
'."<a href='mesaj.php?islem4=sil&id=".$satir['id']."'>Basvuruyu Reddet</a>".'----
'."<a href='mesaj.php?islem3=sil&id=".$satir['id']."'>Başvuruyu Onayla</a>".'----
'."<a href='soru.php?islem5=sil&id=".$satir['id']."'>Soru Sor</a>".'

<br>
<br>
       
</td>';
    $sutun++;
}
echo '</tr></table>';

}
 

if(isset($_GET["islem3"]))
	{
		$islem3=$_GET["islem3"];
		
		switch ($islem3)
		{
			
			case "sil":
			$id=$_GET['id'];
                        $baglan=mysqli_connect("localhost","root","","yuva");
			$sonuc2=mysqli_query($baglan,"UPDATE mesajlar SET onay ='Onaylandı' WHERE mesajlar.id='$id'"); 
                       
			break;
			
			
			
		}
}

if(isset($_GET["islem4"]))
	{
		$islem4=$_GET["islem4"];
		
		switch ($islem4)
		{
			
			case "sil":
			$id=$_GET['id']; 
                        $baglan=mysqli_connect("localhost","root","","yuva");
                        $sonuc=mysqli_query($baglan,"UPDATE mesajlar SET onay='Reddedildi' WHERE mesajlar.id='$id'");
			break;
			
			
			
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


if(isset($_POST["basvurularim"])){ extract($_POST);
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");

$sonuc=mysqli_query($baglan,"select * from mesajlar where  GonderenK like '%$ad'"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");

if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazi' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==1){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
	İlan Sahibi:
	'.$satir['AliciK'].'
<br>İlan Numarası :
	'.$satir['ilanNo'].' <BR>
Onay Durumu:
	'.$satir['onay'].' <BR>
'."<a href='ilanDetay2.php?islem7=sil&llanId=".$satir['ilanNo']."'>Başvuruyu Görüntüle</a>".' ---
	
<br>
<br>
<br>
       
</td>';
    $sutun++;
}
echo '</tr></table>';
}



if(isset($_POST["sorularim"])){ extract($_POST);
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");

$sonuc=mysqli_query($baglan,"select * from soru where  AliciK like '%$ad' "); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");

if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazi' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==1){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
	Soran Kişi:
	'.$satir['GonderenK'].'
<br>Sorunuz :
	'.$satir['soru'].' <BR>
'."<a href='cevap.php?islem=sil&llanId=".$satir['id']."'>Cevapla</a>".'

<br>
<br>
<br>
       
</td>';
    $sutun++;
}
echo '</tr></table>';
}


if(isset($_POST["cevaplar"])){ extract($_POST);
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");

$sonuc=mysqli_query($baglan,"select * from soru where  GonderenK like '%$ad'"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");

if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazi' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==1){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
Sorunuz :
	'.$satir['soru'].'  ? <BR>
Cevap :
	'.$satir['cevap'].' <BR>
	  Cevaplayan  Kişi:
	'.$satir['AliciK'].'



<br>
<br>

       
</td>';
    $sutun++;
}
echo '</tr></table>';
}



?>



						     
<?php
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan where Kad like '$ad' "); 

$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazilar' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==4){ $sutun=0; echo '</tr><tr>'; }
    echo '<td>
	 <a><img src="'.$satir['ResimYolu'].'.jpg" width="150" height="150" border="0" /></a><br>İlan Numarası:
	'.$satir['llanId'].'<br>Adı:
	'.$satir['Adi'].' <br>Türü:
	'.$satir['Cinsi'].' 
        <br>Cinsi :
        '.$satir['Turu'].'
<br>Yaşı:
	'.$satir['Yas'].'<br>
'."<a href='mesaj.php?islem2=sil&llanId=".$satir['llanId']."'>İlanı Pasif Yap</a>".' ---
'."<a href='mesaj.php?islem4=sil&llanId=".$satir['llanId']."'>İlanı Aktif Yap</a>".'<br>

'."<a href='ilanDetay.php?islem6=sil&llanId=".$satir['llanId']."'>İlana Gelen İstekler</a>".' ---
'."<a href='sahiplendir.php?islem5=sil&llanId=".$satir['llanId']."'>İlanı Sahiplendir</a>".'<br>

	
</td>';
    $sutun++;
}
echo '</tr></table>';


if(isset($_GET["islem2"]))
	{
		$islem2=$_GET["islem2"];
		
		switch ($islem2)
		{
			
			case "sil":
			 $id=$_GET['llanId'];
			 $sonuc=mysqli_query($baglan,"UPDATE ilan SET Onay ='0' WHERE ilan.llanId='$id'");
			echo "Yorum Onaylandı";
			header("location:mesaj.php");
			break;
			
			
			
		}
}


if(isset($_GET["islem4"]))
	{
		$islem4=$_GET["islem4"];
		
		switch ($islem4)
		{
			
			case "sil":
			 $id=$_GET['llanId'];
			 $sonuc=mysqli_query($baglan,"UPDATE ilan SET Onay ='1' WHERE ilan.llanId='$id'");
			echo "Yorum Onaylandı";
			header("location:mesaj.php");
			break;
			
			
			
		}
}




if(isset($_GET["islem5"]))
	{
		$islem5=$_GET["islem5"];
		
		switch ($islem5)
		{
			
			case "sil":
			 $id=$_GET['llanId'];
			 $sonuc=mysqli_query($baglan,"UPDATE ilan SET Durum ='0' WHERE ilan.llanId='$id'");
			echo "Yorum Onaylandı";
			header("location:mesaj.php");
			break;
			
			
			
		}
}





?>
</div>



		<!-- FOOTER -->
		<footer>
			<div class="wrapper cf">
			
				<!-- widgets -->
				<ul  class="widget-cols cf">
					<li class="first-col">
						
				            <div class="widget-block">
							<h4 align="center">En Trend 3 İlan</h4>
<?php
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from ilan   where hit>15 order by hit desc  limit 0,3"); 

$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'></h2>";
echo "<table class='yazilar' align='center' width='50%' border='5' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==3){ $sutun=0; echo '</tr><tr>'; }
        echo '<td>
	<a><img src="'.$satir['ResimYolu'].'.jpg" width="100" height="100" border="0" /></a><br>İlan Numarası:
	'.$satir['llanId'].'
<br>Adı:
	'.$satir['Adi'].' <br>Türü:
	'.$satir['Cinsi'].' 
        <br>Cinsi :
        '.$satir['Turu'].'
<br>Yaşı:
	'.$satir['Yas'].'
</td>';

      echo '<td>
	<a><img src="img/ekran.jpg" width="80" height="80" border="0" /></a>
           </td>';

    $sutun++;
}
echo '</tr></table>';
?>	 <?php
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
						</div> 
                       
                                         
				
						
						
						
                       
						
						
						
					</li>
					
					<li class="second-col">
						
						
						
					</li>
					
					<li class="third-col">
						
						
		         		
					</li>
					
					<li class="fourth-col">
						
						
		         		
					</li>	
				</ul>
				<!-- ENDS widgets -->	
				
				
				<!-- bottom -->
				<div class="footer-bottom">
					<div class="left"> <a href="#" >Yusuf Ergin</a></div>
						<ul id="social-bar" class="cf sb">
							<li><a href="http://www.facebook.com"  title="Become a fan" class="facebook">Facebbok</a></li>
							<li><a href="http://www.twitter.com" title="Follow my tweets" class="twitter"></a></li>
						</ul>
				</div>	
				<!-- ENDS bottom -->
			
			</div>
		</footer>
		<!-- ENDS FOOTER -->
		
	</body>
	
	
	
</html>