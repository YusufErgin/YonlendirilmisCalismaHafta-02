<?php
ob_start();
?>
<!doctype html>
<html class="no-js">

	<head>

		<meta charset="utf-8"/>
		<title>Yuva-Bul</title>
		 

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
					
					
				
				</ul>
                
				<!-- Filter container -->
                
		
			
			</div><!-- ENDS WRAPPER -->
		</div>
		<!-- ENDS MAIN -->
<div align="center">		
<div align="center"><h2 align="center">İlan Detayı</h2></div></p>

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
<br>'."<a href='yorum.php?islem3=sil&llanId=".$satir['llanId']."'>Yorum Yap</a>".'

	
</td>';
}
echo '</tr></table>';
	break;
		}

 
}		

?>




 <?php
session_start();
$select2=$_SESSION["kullanici"];
$id=$_GET['llanId'];
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from yorum where ilanId='$id'"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
//echo "Yorumlar";
if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
echo "<h2 align='center'>Yorumlar</h2>";
echo "<table class='yazilar' align='center' width='50%' border='0' cellspacing='0' cellpadding='0'><tr>
<td colspan=''> </td></tr>";
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==1){ $sutun=0; echo '</tr><tr>'; }
    echo '<td>
         '."<a> <img src='img/kad.jpg' width='60' height='50' border='0'/></a>".'  
         '.$satir['GonderenK'].'   :   
         '.$satir['Yorum'].' 
'.$satir['begeni'].'         
'."<a href='Detay.php?islem10=sil&yorum=".$satir['YorumId']."'>  <img src='".$satir['resim1']."' width='30' height='25' border='0' />    </a>".' 
       '.$satir['notbegeni'].'
       '."<a href='Detay.php?islem11=sil&yorum=".$satir['YorumId']."'>  <img src='".$satir['resim2']."' width='30' height='25' border='0' />        </a>".'  
	<br>
<br>
         </td>';
    $sutun++;
}
echo '</tr></table>';


if(isset($_GET["islem10"]))
	{
		$islem10=$_GET["islem10"];
		
		switch ($islem10)
		{
                        
                        case "sil":
			$id=$_GET['yorum'];
		        $sonuc=mysqli_query($baglan,"UPDATE yorum SET begeni =begeni+1 WHERE yorum.YorumId='$id' and AliciK not like '%$select2'");
                        $sonuc2=mysqli_query($baglan,"UPDATE yorum SET AliciK='$select2' WHERE yorum.YorumId='$id'");
                        $sonuc4=mysqli_query($baglan,"UPDATE yorum SET notbegeni =notbegeni-1 WHERE yorum.YorumId='$id' and AliciK2  like '%$select2'");
                        $sonuc5=mysqli_query($baglan,"UPDATE yorum SET AliciK2='' WHERE yorum.YorumId='$id'");
                        $sonuc5=mysqli_query($baglan,"UPDATE yorum SET resim1='img/like4.png' WHERE yorum.YorumId='$id'");
                        $sonuc5=mysqli_query($baglan,"UPDATE yorum SET resim2='img/like1.png' WHERE yorum.YorumId='$id'");
                        header("location:anasayfa.php");   
			break; 
                       
		}
}

if(isset($_GET["islem11"]))
	{
		$islem11=$_GET["islem11"];
		
		switch ($islem11)
		{
			
			case "sil":
			$id=$_GET['yorum'];
		        $sonuc=mysqli_query($baglan,"UPDATE yorum SET notbegeni =notbegeni+1 WHERE yorum.YorumId='$id' and AliciK2  not like '%$select2'");
                        $sonuc3=mysqli_query($baglan,"UPDATE yorum SET AliciK2='$select2' WHERE yorum.YorumId='$id'");
                        $sonuc4=mysqli_query($baglan,"UPDATE yorum SET begeni =begeni-1 WHERE yorum.YorumId='$id' and AliciK  like '%$select2'");
                        $sonuc5=mysqli_query($baglan,"UPDATE yorum SET AliciK='' WHERE yorum.YorumId='$id'");
                        $sonuc6=mysqli_query($baglan,"UPDATE yorum SET resim1='img/like3.png' WHERE yorum.YorumId='$id'");
                        $sonuc7=mysqli_query($baglan,"UPDATE yorum SET resim2='img/like2.png' WHERE yorum.YorumId='$id'");
                        header("location:anasayfa.php");   
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