<?php
include "server.php";
//live search
if (isset($_POST['submit-search'])) {
  $token = $_GET['q'];// q is from search(this.value)
  $str = "";

  $sql = " SELECT * from test_search where test_fname LIKE '%$token%' OR test_lname LIKE '%$token%' ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

      echo '<a class="list-group" href="php/search_page.php">' . $row["test_fname"] . " " . $row["test_lname"] . '</a>';
    }
  }
  //end if (mysqli_num_rows($result) > 0)
  else {
    echo "No Results Found";
  }
}//end of live search
