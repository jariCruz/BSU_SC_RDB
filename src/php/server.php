<?php
   $conn=mysqli_connect("localhost", "root", "");
   mysqli_select_db($conn, "bsusc_research_databank");

    if ($conn) {
 	echo "";
     }
    else{
 	die ("Connection failed because " .mysqli_connect_error());
 }
