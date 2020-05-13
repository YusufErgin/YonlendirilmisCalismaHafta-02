<?php
session_start();
$ad=$_SESSION["kullanici"];
$baglan=mysqli_connect("localhost","root","","yuva");
$sonuc=mysqli_query($baglan,"select * from yorum"); 
$satirr=mysqli_num_rows($sonuc);
mysqli_set_charset($baglan, "utf8");
if($satirr<=0) { echo "<h>  </h>"; return; }
$sutun=0;
while($satir=mysqli_fetch_array($sonuc))
{
if($sutun==1){ $sutun=0; echo '</tr><tr>'; }
     $sonuc=mysqli_query($baglan,"UPDATE yorum SET resim1='img/like3.png' WHERE AliciK not like'%$ad'");
     $sonuc=mysqli_query($baglan,"UPDATE yorum SET resim2='img/like1.png' WHERE AliciK2 not like'%$ad'");
    $sutun++;
}
session_destroy();




header("location:index.php");

?>