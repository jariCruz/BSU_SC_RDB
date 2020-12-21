<?php
   $conn=mysqli_connect("localhost", "root", "");
   mysqli_select_db($conn, "BSUSC_Research_Databank");

    if ($conn) {
 	echo "";
     }
    else{
 	die ("Connection failed because " .mysqli_connect_error());
 }
