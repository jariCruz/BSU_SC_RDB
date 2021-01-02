<?php
include "server.php";
  $search = $_GET['term'];
  $json=array();

  $sql = " SELECT * from researchstudy_table where Title LIKE '%$search%' OR Keywords LIKE '%$search%' ORDER BY Title ASC";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

        array_push($json, $row['Title']);
    }
  }
  else {
      array_push($json, "No results found");
  }
  echo json_encode($json);
