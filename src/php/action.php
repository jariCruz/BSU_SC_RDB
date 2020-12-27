<?php
include "server.php";
//live search
if (isset($_GET['q'])) {
  $search = $_GET['q'];// q is from search(this.value)
  $str = "";

  $sql = " SELECT * from researchstudy_table where Title LIKE '%$search%' OR Keywords LIKE '%$search%' ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

      $str.='<a class="list-group" href="php/search_page.php">'. $row["Title"] .'</a>';
    }
    echo $str;
  }
  //end if (mysqli_num_rows($result) > 0)
  else {
    $str="No Results Found";
    echo $str;
  }
}//end of live search
