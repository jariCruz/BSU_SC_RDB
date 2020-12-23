<?php
  include "server.php";
  if (isset($_POST['q'])) {
      $rs_title = $_POST['form_title'];
      $rs_author = $_POST['form_author'];
      $rs_file = $_POST['form_file'];
      $rs_year_level = $_POST['form_year'];
      $rs_course = $_POST['form_course'];
      $rs_advised = $_POST['form_adviser'];
      $rs_abstract = $_POST['form_abstract'];
      $rs_keywords = $_POST['form_keywords'];

      $sql = "INSERT INTO `researchstudy_table`(`Title`, `Abstract`, `Author`, `File`, `Year`, `Course`, `Keywords`, `Adviser`)
       VALUES ('$rs_title', '$rs_abstract', '$rs_author', '$rs_file', '$rs_year_level', '$rs_course', '$rs_keywords', '$rs_adviser')";

      if ($conn->query($sql) === TRUE) {
          header("Location: rs_upload_page.php?addedsuccessfully!");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
  }
?>
