<?php 
    include "server.php";

        $fname = $conn -> real_escape_string($_POST['form_fname']);
        $sname = $conn -> real_escape_string($_POST['form_sname']);
        $mi = $conn -> real_escape_string($_POST['form_mi']);
        $fullname = $sname.' '.$fname.' '.$mi.' ';
        $yr_level = $conn -> real_escape_string($_POST['form_year']);
        $course = $conn -> real_escape_string($_POST['form_course']);
        $address = $conn -> real_escape_string($_POST['form_address']);
        $username = $conn -> real_escape_string($_POST['form_uname']);
        $password = $conn -> real_escape_string($_POST['form_pass']);
        $r_password = $conn -> real_escape_string($_POST['form_repass']);
        $enc_password = md5($password);
        $enc_r_password = md5($r_password);

        $target_dir = "../Student_ID/";
        $new_dir = str_replace(' ', '_', $fullname.'/');//folder named by the student that was registered
        //$id_front_name = $_FILES['form_file1']['name'];
        //$id_back_name = $_FILES['form_file2']['name'];
        $id_front_ext = strtolower(pathinfo($_FILES['form_file1']['name'], PATHINFO_EXTENSION));
        $id_back_ext = strtolower(pathinfo($_FILES['form_file2']['name'], PATHINFO_EXTENSION));
        $id_front_new_name = str_replace(' ', '_', $fullname.'front_id'.'.'.$id_front_ext);
        $id_back_new_name = str_replace(' ', '_', $fullname.'back_id'.'.'.$id_back_ext);

        $uploadOk = 1;//flag sht
        // Check if image file is a actual image or fake image
        $check1 = getimagesize($_FILES["form_file1"]["tmp_name"]);
        $check2 = getimagesize($_FILES["form_file2"]["tmp_name"]);
        if ($check1 !== false && $check2 !== false) {
            echo 'both image';
            echo '<br>';
        }else {
            echo 'both or either one not image'.'<br>';
            $uploadOk = 0;
        }
        // Check if file already exists
        if (file_exists($id_front_new_name && file_exists($id_back_new_name))) {
            echo "Sorry, file already exists.".'<br>';
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["form_file1"]["size"] > 10000000 && $_FILES["form_file2"]["size"] > 10000000) {
            echo "Sorry, your file is too large.".'<br>';
            $uploadOk = 0;
        }

        echo "UploadOk =$uploadOk".'<br>';
        echo 'New name of image1 '.$id_front_new_name.'<br>';
        echo 'New name of image2 '.$id_back_new_name.'<br>';



            $sql = "INSERT INTO student_table (student_name, student_username, student_password, student_retype_password, student_year_level,
            student_course, student_address, student_id_front, student_id_back)
            VALUES ('$fullname', '$username', '$enc_password', '$enc_r_password', '$yr_level', '$course', '$address', 
            '$id_front_new_name', '$id_back_new_name')";

            if ($conn->query($sql) === TRUE && $uploadOk === 1) {
                mkdir($target_dir.$new_dir);
                $new_dir_inside = $target_dir.$new_dir;
                move_uploaded_file($_FILES['form_file1']['tmp_name'], $new_dir_inside.$id_front_new_name);
                move_uploaded_file($_FILES['form_file2']['tmp_name'], $new_dir_inside.$id_back_new_name);
                header("Location: ../index.php");
            }else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }    
            echo $new_dir_inside;
?>