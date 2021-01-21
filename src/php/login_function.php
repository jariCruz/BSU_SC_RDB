<?php
include "server.php";

if (isset($_POST['login-submit'])) {
    $username = $_POST['form_uname'];//username from login form
    $password = $_POST['form_pass'];//password from login form
    $location = $_POST['redirect'];//link to redirect

    //student login info
    $sql1 = "SELECT student_id, student_username, student_password FROM student_table WHERE student_username = '$username'";
    $result1 = $conn->query($sql1);
    //professor login info
    $sql2 = "SELECT professor_id, professor_username, professor_password FROM professor_table WHERE professor_username = '$username'";
    $result2 = $conn->query($sql2);
    //admin login info
    $sql3 = "SELECT admin_id, admin_username, admin_password FROM admin_table WHERE admin_username = '$username'";
    $result3 = $conn->query($sql3);


    $row1 = $result1->fetch_assoc();
    $row2 = $result2->fetch_assoc();
    $row3 = $result3->fetch_assoc();
    if ($username === $row1['student_username'] && md5($password) === $row1['student_password']) {
        session_start();
        $_SESSION['user_id'] = $row1['student_id'];
        $_SESSION['user'] = "Student";
        header("Location: $location");

    } 
    elseif ($username === $row2['professor_username'] && md5($password) === $row2['professor_password']) {
        session_start();
        $_SESSION['user_id'] = $row2['professor_id'];
        $_SESSION['user'] = "Professor";
        header("Location: $location");
    } 
    elseif ($username === $row3['admin_username'] && md5($password) === $row3['admin_password']) {
        session_start();
        $_SESSION['user_id'] = $row3['admin_id'];
        $_SESSION['user'] = "Admin";
        header("Location:../php/research_coordinator_page.php");
    }else {
        header("Location: ../index.php?Error");
    }
}