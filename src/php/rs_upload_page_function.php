<?php
  include "server.php";
  $target_dir = "../Research_Studies/";
  $target_file = $target_dir . basename($_FILES["form_file"]["name"]);
  $target_file = str_replace(' ', '_', $target_file);//replace spaces " " to _
  $uploadOk = 1;
  $title = $conn -> real_escape_string($_POST['form_title']);
  $abstract = $conn -> real_escape_string($_POST['form_abstract']);
  $author = $conn -> real_escape_string($_POST['form_author']);
  $file = $conn -> real_escape_string(str_replace(' ', '_', $_FILES['form_file']['name']));
  $year = $conn -> real_escape_string($_POST['form_year']);
  $course = $conn -> real_escape_string($_POST['form_course']);
  $keywords = $conn -> real_escape_string($_POST['form_keywords']);
  $adviser = $conn -> real_escape_string($_POST['form_adviser']);
  
  // Validations
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
  
    // Check file size
    if ($_FILES["form_file"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      move_uploaded_file($_FILES["form_file"]["tmp_name"], $target_file);
    }

    $sql = "INSERT INTO researchstudy_table (Title, Abstract, Author, File, Year, Course, Keywords, Adviser)
    VALUES ('$title', '$abstract', '$author', '$file', '$year', '$course', '$keywords', '$adviser')";

    if ($conn->query($sql) === TRUE) {
      echo "Title: " . $title . "<br>" .
      "Abstract: " . $abstract . "<br>" .
      "Author: " . $author . "<br>" .
      "File: " . $file . "<br>" .
      "Year: " . $year . "<br>" .
      "Course: " . $course . "<br>" .
      "Keywords: " . $keywords . "<br>" .
      "Adviser: " . $adviser . "<br>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>
