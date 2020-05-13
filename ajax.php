<?php
         $baglan=mysqli_connect("localhost","root","","yuva"); 
         mysqli_set_charset($baglan, "utf8");
         $turler=$_POST["select"];
         $sorgu=mysqli_query($baglan,"Select * from cinsi where cinslerin='$turler'");
         while($Turi=mysqli_fetch_array($sorgu))
         {
         echo "<option value=".$Turi["cinsler"].">".$Turi["cinsler"]."</option>";
         }

         ?>   