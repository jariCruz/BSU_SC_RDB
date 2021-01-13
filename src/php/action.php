<?php
session_start();
include "server.php";
if (isset($_GET['term'])) {
  $search = $_GET['term'];
  $json = array();

  $sql = " SELECT * from researchstudy_table where Title LIKE '%$search%' OR Keywords LIKE '%$search%' ORDER BY Title ASC";
  $result = $conn->query($sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {

      array_push($json, $row['Title']);
    }
  } else {
    array_push($json, "No results found");
  }
  echo json_encode($json);
}

  //search_page.php functions
  //add count for number of readers
  if (isset($_GET['addViews'])) {
    $id = $_GET['addViews'];
    //get current views count
    $sql_select = "SELECT Views FROM researchstudy_table WHERE RS_ID ='$id'";
    $execute_select = $conn->query($sql_select);
    $row = mysqli_fetch_assoc($execute_select);
    $views = $row['Views']; //current views

    $sql_update = "UPDATE researchstudy_table SET Views=('$views' + 1) WHERE RS_ID='$id'";

    if ($conn->query($sql_update) === TRUE) {
      echo $views + 1;
      echo "<br>";
      echo "Readers";
    } else {
      echo "Error updating record: " . $conn->error;
    }
  }

  //add count for number of downloads
  if (isset($_GET['addDownloads'])) {
    $id = $_GET['addDownloads'];
    //get current views count
    $sql_select = "SELECT Downloads FROM researchstudy_table WHERE RS_ID ='$id'";
    $execute_select = $conn->query($sql_select);
    $row = mysqli_fetch_assoc($execute_select);
    $downloads = $row['Downloads']; //current views

    $sql_update = "UPDATE researchstudy_table SET Downloads=('$downloads' + 1) WHERE RS_ID='$id'";

    if ($conn->query($sql_update) === TRUE) {
      echo $downloads + 1;
      echo "<br>";
      echo "Downloads";
    } else {
      echo "Error updating record: " . $conn->error;
    }
}
