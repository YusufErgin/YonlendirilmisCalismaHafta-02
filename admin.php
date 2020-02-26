<?php
ob_start();
session_start();
include ("../../../../xampp/htdocs/admin/hafta_01/YonlendirilmisCalismaHafta-01/baglanti");


if(empty($_SESSION["admin"]))
{
    header("Location:index.php");

}
?>
<html>
<head>
<meta charset="utf-8">
<title>Admin</title>
</head>

<body>
	<table width="483" height="28" border="10" align="center">
    <tr>
      <td align="center">Tüm Kullanıcıları Listele</td>
      <td align="center"><input type="submit" name="klistele" id="klistele" value="Kullanıcı Listele" /></td>
    </tr>
  </table>
	<p>&nbsp;</p>
	<table width="483" border="10" align="center">
    <tr>
      <td width="273" align="center">Kullanıcların İlanlarını  Lİstele</td>
      <td width="194" align="center"><input type="submit" name="ylistele" id="ylistele" value="İlanları Listele" /></td>
    </tr>
</table>
<p>&nbsp;</p>
  <p>
    <?php
if(isset($_POST["klistele"]))
{ 
$taban="select * from uye";
$sonuc=mysql_query($taban);

echo "<table border='10' align='center'>";
			echo "<tr>";
			echo "<th>İşlem </th>";
			echo "<th> Ad </th>";
			echo "<th> Soyad </th>";
			echo "<th>KullanıcıAdı </th>";
			echo "<th> Şifresi </th>";
			echo "</tr>";
		
		while ($listele=mysql_fetch_array($sonuc))
		{
			echo "<tr>";
				echo '<td> '."<a href='giris.php?islem=sil&id=".$listele ["id"]."'>Sil</a>".'</td>';
				echo '<td> '.$listele ["ad"] .'</td>';
				echo '<td> '.$listele ["soyad"] .'</td>';	
			    echo '<td> '.$listele ["kad"] .'</td>';
				echo '<td> '.$listele ["sifre"] .'</td>';		
				echo "</tr>";
		}
			echo "</table>";
	
}
?>
	 <?php
if(isset($_POST["ylistele"]))
{ 
$taban="select * from ilan";
$sonuc=mysql_query($taban);

echo "<table border='10' align='center'>";
			echo "<tr>";
			echo "<th>İşlem </th>";
			echo "<th>İlan</th>";
			echo"<th> Onay </th>";
			echo "</tr>";
		
		while ($listele=mysql_fetch_array($sonuc))
		{
			echo "<tr>";
				echo '<td> '."<a href='ilan.php?islem2=sil&id=".$listele ["id"]."'>Sil</a>".'</td>';
				echo '<td> '."<a href='ilan.php?islem3=sil&id=".$listele ["id"]."'>Onayla</a>".'</td>';
				echo "</tr>";
		}
			echo "</table>";
	
}
	  
	 if(isset($_GET["islem2"]))
	
		$islem2=$_GET["islem2"];
		
		switch ($islem2)
		{
			
			case "sil":
			$id=$_GET["id"];
			mysql_query("delete from ilan where id=$id");
			echo "ilan silindi.";
			header("location:ilan.php");
			break;
			
			
		}
		if(isset($_GET["islem3"]))
	
		$islem3=$_GET["islem3"];
		
		switch ($islem3)
		{
			
			case "sil":
			$id=$_GET["id"];
			mysql_query("UPDATE  `veri`.`ilan` SET  `onay` =  '1' WHERE  `ilan`.`id` =$id");
			echo "ilan Onaylandı";
			header("location:ilan.php");
			break;
			
			
			
		}
	  
	  
?>  
	  
</body>
</html>