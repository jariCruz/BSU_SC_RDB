<?php
$servername = "localhost";
$username = "user";
$password = "password";
$db = "BSUSC_Research_Databank";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['q'])) {
  $token = $_GET['q'];
  $str = "";

  $sql = " SELECT * from test_search where test_fname LIKE '%$token%' OR test_lname LIKE '%$token%' ";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

      echo '<div class="list-group">' . $row["test_fname"] . " " . $row["test_lname"] . '</div>';
    }
  }
  //end if (mysqli_num_rows($result) > 0)
  else {
    echo "No Results Found";
  }
}//if(isset($_GET['q'])