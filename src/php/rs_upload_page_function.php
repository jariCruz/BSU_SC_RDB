<?php
  include "server.php";
  $title = $conn -> real_escape_string($_POST['form_title']);
  $abstract = $conn -> real_escape_string($_POST['form_abstract']);
  $author = $conn -> real_escape_string($_POST['form_author']);
  $file = $conn -> real_escape_string($_POST['form_file']);
  $year = $conn -> real_escape_string($_POST['form_year']);
  $course = $conn -> real_escape_string($_POST['form_course']);
  $keywords = $conn -> real_escape_string($_POST['form_keywords']);
  $adviser = $conn -> real_escape_string($_POST['form_adviser']);

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
