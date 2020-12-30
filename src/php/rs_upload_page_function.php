<?php
  include "server.php";

  $title = $conn -> real_escape_string($_POST['form_title']);
  $abstract = $conn -> real_escape_string($_POST['form_abstract']);
  $author = $conn -> real_escape_string($_POST['form_author']);
  $year = $conn -> real_escape_string($_POST['form_year']);
  $course = $conn -> real_escape_string($_POST['form_course']);
  $keywords = $conn -> real_escape_string($_POST['form_keywords']);
  $adviser = $conn -> real_escape_string($_POST['form_adviser']);

  $target_dir = "../Research_Studies/";
  $file_ext = strtolower(pathinfo($_FILES['form_file']['name'], PATHINFO_EXTENSION));
  $file = $title.'.'.$file_ext;
  $file = str_replace(' ', '_', $file);//replace spaces " " to _
  $uploadOk = 1;
  
  // Validations
    // Check if file already exists
    if (file_exists($file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
  
    // Check file size
    if ($_FILES["form_file"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    $sql = "INSERT INTO researchstudy_table (Title, Abstract, Author, File, Year, Course, Keywords, Adviser)
    VALUES ('$title', '$abstract', '$author', '$file', '$year', '$course', '$keywords', '$adviser')";

    if ($conn->query($sql) === TRUE && $uploadOk === 1) {
      move_uploaded_file($_FILES["form_file"]["tmp_name"], $target_dir.$file);
      header("Location: researchCoordinator_page.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
