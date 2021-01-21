<?php
    require "header.php";
    include "server.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Research | BSU-SC Research DB</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">

    <!-- Other resources -->
    <link rel="stylesheet" href="../css/research_coordinator_style.css">
    <link rel="stylesheet" href="../css/jumbotron_style.css">


</head>
<body>

<!-- Header -->

<nav class="navbar navbar-expand-md navbar-light bg-light">

    <div class="container-fluid">

    <div>
        <div class="header-font">
        <a class="navbar-brand" href="#">Research DB</a>
        </div>

        <div class="mt-n3">
        <span class="navbar-text">Bulacan State University - Sarmiento Campus</span>
        </div>
    </div>

    <button class="navbar-toggler" type="button"
            data-toggle="collapse" data-target="#collapseNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapseNavbar">
        <ul class="navbar-nav ml-auto">

        <li class="nav-item">
            <a class="nav-link" href="../index.php">Home</a>

        </li>


        <li class="nav-item">
            <a class="nav-link" href="about_page.php">About</a>

        </li>

        <li class="nav-item">
            <a class="nav-link" href="contact_page.php">Contact</a>

        </li>

        <!-- Dropdown for Logged-in -->
        <!--
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop"
                data-toggle="dropdown">Webster~</a>

            <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item">Settings & privacy</a>
            <a href="#" class="dropdown-item">Help Guides</a>
            <a href="#" class="dropdown-item">Support Centre</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">Sign out</a>
            </div>
        </li>
        -->

        <!-- buttons for Log in and sign up -->

            <?php if (!isset($_SESSION['user_id'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal"
                  data-target="#signIn_mc">Sign in</a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal"
                  data-target="#create_mc">Create account</a>
              </li>
            <?php }else {?>
                <li class="nav-item">
                  <form id="logout" action="logout.php" method="post">
                  <a class="nav-link" href="javascript:;" onclick="document.getElementById('logout').submit();">Logout</a>
                  <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]) ?>" />
                  </form>
                </li>
            <?php } ?>
        
        
        </ul>
    </div>


    </div>
    </nav>
    </div>


    <!-- Modal for sign in -->
    <div class="modal fade" id="signIn_mc">
        <div class="modal-dialog">
            <div class="modal-content">
                    
                <!-- modal header -->
                <div class="modal-header">
                    <h5 class="modal-title header-font">Someone is logging in...</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- modal body -->
                <div class="modal-body">

                    <form action="login_function.php" method="post"
                            class="needs-validation
                                    p-4 mx-auto mb-3">
                        
                        
                        <!-- Forename field -->

                        <div class="form-group">
                            <label for="form_fname">Username:</label>
                            
                            <input type="text"
                                    class="form-control"
                                    id="form_uname"
                                    placeholder="Username"
                                    name="form_uname"
                                    minlength="2"
                                    maxlength="30"
                                    required>                

                        </div>

                        <!-- Password field -->


                        <div class="form-group mt-2">
                            <label for="form_pass">Passsword:</label>
                            <input type="password"
                                    name="form_pass"
                                    id="form_pass"
                                    placeholder="Password"
                                    class="form-control"
                                    maxlength="30"
                                    minlength="8"
                                    required>

                        </div>
                      <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']) ?>" />

                        
                        <!-- Checkbox -->
                        
                        
                        <div class="row">
                            <div class="form-group col">
                                <input type="checkbox">
                                <span>Remember me</span>
                            </div>

                            <!-- Register btn -->
                            <div class="col d-flex justify-content-end">
                                <button name="login-submit" id="login-submit" type="submit" class="btn btn-primary">Login</button>
                            </div>
                        
                        </div>
                        
                        <span class="d-flex justify-content-center mt-3">Don't have an account yet?&MediumSpace;
                            <a data-dismiss="modal" href="#" data-toggle="modal" data-target="#create_mc">Register here.</a>
                        </span>

                        <!-- just a freakin horizontal line -->            
                        <hr class="bg-dark mt-4">

                        <span class="d-flex justify-content-center">
                            <a href="#">Forgot password?</a>
                        </span>

                    </form>
                </div>

                <!-- Form validation -->
                <script>

                    (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                    // Get the forms we want to add validation styles to
                    var forms = document.getElementsByClassName('needs-validation');
                    // Loop over them and prevent submission
                    var validation = Array.prototype.filter.call(forms, function(form) {

                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                        
                        event.preventDefault();
                        event.stopPropagation();
                        }   
                        form.classList.add('was-validated');
                    }, false);
                    });
                    }, false);
                    })();
                </script>

        
                </div>

                <!-- modal footer -->
                <div class="modal-footer">
                </div>

            </div>
        </div>

    <!-- modal -->
    </div>

    <!-- Modal for creating an account -->
    <div class="modal fade" id="create_mc">
        <div class="modal-dialog">
            <div class="modal-content">
                
                <!-- modal header -->
                <div class="modal-header">
                    <h5 class="modal-title header-font">Create an account...</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- modal body -->
                <div class="modal-body">
                    <div class="row">
                    <div class="col-6 mt-n3 mb-n3 modal-hover modal-height
                                d-flex align-items-center justify-content-center">

                            <a href="registration_page_student.php"
                                class="stretched-link">I am a student</a>
                    </div>

                    <div class="col-6 mt-n3 mb-n3 modal-hover modal-height
                                d-flex align-items-center justify-content-center">
                        
                        <a href="registration_page_professor.php"
                            class="stretched-link">I am a professor</a>
                    </div>
                    </div>
                </div>

                <!-- modal footer -->
                <div class="modal-footer">
                    <button class="btn btn-outline-danger"
                            data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>

    <!-- modal -->
    </div>
</div>

<!-- Greetings -->
<div style="height: 80px;"
     id="greetings-bg"
     class="container-fluid
            pl-4 pt-3          
            border border-primary
                border-left-0
                border-right-0">

    
    <h4 class="header-font">Welcome!<br>Research Coordinator Webster~  (･◡ु‹ )</h4>
    

</div>

<!-- contains nav-tab and tab-content -->
<div class="container-fluid">
    <div class="pt-3">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
            <a class="nav-link active" href="#overview">Overview</a>
            </li>

            <li class="nav-item dropdown">
            <a id="research" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Research Study</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#researchUpload_mc" data-toggle="modal" data-backdrop="static" onclick="changeBtnTxt('research', 'Add Research Study')">Add Research Study</a>
                <a class="dropdown-item" href="#researchStudy" onclick="changeBtnTxt('research', 'View Research Study')">View Research Study</a>
            </li>

            <li class="nav-item dropdown">
                <a id="accountBtn" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Account</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#student" onclick="changeBtnTxt('accountBtn', 'Student')">Student</a>
                    <a class="dropdown-item" href="#professor" onclick="changeBtnTxt('accountBtn', 'Professor')">Professor</a>
                </div>
            </li>
        </ul>

        <!-- Modal -->
        <div class="modal fade" id="researchUpload_mc" role="dialog">
            <div class="modal-dialog modal-dialog-scrollable">

                <!-- Modal header -->
                <div class="modal-content">
                    <div class="modal-title">

                    <div class="modal-header">
                        <div class="modal-title header-font">Coordinator is uploading thesis...</div>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    </div>

                    <!-- Modal details -->

                    <div class="modal-body">
                    <!-- Make the title color black -->
                    <!-- Make the hover color blue -->

                    <div class="cfont cs-2"><?php echo $row['Title'] ?></div><!-- research title -->
                    <br>


                    <form id="rs_upload_form" action="rs_upload_page_function.php" method="post"
                            class="needs-validation mx-auto mb-3"
                            enctype="multipart/form-data">


                        <!-- Note -->

                        <p class="text-danger">Note: Once the information have been uploaded, it cannot be edited again.
                            Please be sure to check the information you provided before you upload, thank you.
                        </p>


                        <!-- Title field -->

                        <div class="form-group">
                            <label for="form_title">Title:</label>

                            <input type="text"
                                    class="form-control"
                                    id="form_title"
                                    placeholder="Title"
                                    name="form_title"
                                    minlength="10"
                                    maxlength="100"
                                    onkeypress="validateInput('form_title', '10')"
                                    required>

                        </div>


                        <!-- Author field -->

                        <div class="form-group">
                            <label for="form_author">Author:</label>
                            <input type="text"
                                    name="form_author"
                                    id="form_author"
                                    placeholder="Author"
                                    class="form-control"
                                    minlength="5"
                                    maxlength="100"
                                    onkeypress="validateInput('form_author', '5')"
                                    required>

                        </div>


                        <!-- Year level field -->

                        <div class="row mt-3 ml-1">
                            <div class="form-group mr-1">
                                <label for="form_year">Year level:</label>

                                <select name="form_year"
                                        id="form_year"
                                        class="form-control
                                                select-picker
                                                border-muted"
                                        onchange="validateInput('form_year', '')"
                                        required>

                                    <option value="">Choose year level</option>
                                    <option value="1st year">1st year</option>
                                    <option value="2nd year">2nd year</option>
                                    <option value="3rd year">3rd year</option>
                                    <option value="4th year">4th year</option>
                                </select>


                        </div>


                        <!-- Course field -->


                        <div class="form-group">
                                <label for="form_course">Course:</label>

                                <select name="form_course"
                                        id="form_course"
                                        class="form-control
                                                select-picker
                                                border-muted"
                                        onchange="validateInput('form_course', '')"
                                        required>

                                    <option value="">Choose course</option>
                                    <option value="bsit">BSIT</option>
                                    <option value="educ">EDUC</option>
                                </select>

                        </div>


                        <!-- Adviser field -->


                        <div class="form-group">

                            <label for="form_adviser">Adviser:</label>
                            <input type="text"
                                    name="form_adviser"
                                    id="form_adviser"
                                    placeholder="Adviser"
                                    class="form-control"
                                    maxlength="60"
                                    minlength="5"
                                    onkeypress="validateInput('form_adviser', '5')"
                                    required>

                        </div>
                    

                        <div class="form-group">

                            <label for="form_keywords">Keywords:</label><br>
                            <input type="text"
                                    name="form_keywords"
                                    id="form_keywords"
                                    class="form-control p-n4"
                                    style="border: #ff6666"
                                    maxlength="60"
                                    minlength="5"
                                    placeholder="Keywords"
                                    onkeypress="validateInput('form_keywords', '5')"
                                    data-role="tagsinput"
                                    required>

                        </div>

                        <!-- File -->

                        <div class="custom-file form-group">
                            <label for="form_file">File:</label>

                            <input type="file"
                                    name="form_file"
                                    id="form_file"
                                    class="custom-file-input form-control"
                                    accept="application/pdf"
                                    required>
                            <label for="form_file" class="custom-file-label cmt-1">Choose file...</label>

                            <!-- Script for adding the name of file to the label -->

                            <script>
                                $('#form_file').on('change', function(e){
                                    // Get file name
                                    var fileName = e.target.files[0].name;

                                    // Replace the "Choose file..." label
                                    $(this).next('.custom-file-label').html(fileName);

                                })


                            </script>
                        </div>


                        <!-- Abstract field -->

                        <div class="form-group mt-3">
                            <label for="form_abstract">Abstract:</label>
                            <textarea name="form_abstract"
                                    id="form_abstract"
                                    placeholder="Abstract"
                                    class="form-control min-height max-height"
                                    onkeypress="validateInput('form_abstract', '10')"
                                    rows="5"
                                    minlength="10"
                                    maxlength="500"
                                    required
                                    style="width: 28rem;"></textarea>
                        </div>
                        


                    </form>

                    </div>

                    <div class="modal-footer">

                        <button type="submit"
                                class="btn btn-outline-primary"
                                data-dismiss="modal">Submit</button>

                    </div>



                <!-- modal header -->
                </div>

            <!-- modal dialog -->
            </div>

        <!-- modal -->
        </div>

        
    <!-- padding -->   
    </div>


    <!-- tab panes tab content -->
    <div class="tab-content">

        <!-- Overview tab -->
        <div id="overview" class="container tab-pane fade active show"><br>
            <h5>Overview</h5>
            <p>This is the overview of the research coordinator's page</p>
        
        </div> 

        <!-- Research study tab -->
        <div id="researchStudy" class="container-fluid tab-pane fade"><br>
            <div class="container-fluid
                    bg-muted
                    border border-primary
                        border-left-0
                        border-right-0">
                <form action="search_page.php" method="get" autocomplete="off">
                <div class="input-group d-flex justify-content-center">

                    <div class="input-group-prepend py-sm-4 cSearch-width">
                    <form action="#">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                        <input type="hidden" name="page" value="<?php echo 1 ?>">
                        <input required id="search-input" name="query" class="form-control" type="text">
                        <button type="reset" class="btn btn-default btn-sm fa fa-remove">
                    </form>
                    </div>

                </div>
                </form>
            </div>

            <?php
            //if (isset($_POST['search-button'])) {
            //$files = scandir('../Research_Studies/');
            //this sql naman ay para ipakita ang nilalaman ng nakalimit
            $sql = " SELECT * from researchstudy_table 
                        where Title LIKE '%$search%' OR Keywords LIKE '%$search%' LIMIT $start, $limit ";
            //this sql is for getting the number of results
            $sql_count = " SELECT * from researchstudy_table 
                        where Title LIKE '%$search%' OR Keywords LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $count_result = mysqli_query($conn, $sql_count);
            $number_pages = ceil(mysqli_num_rows($count_result) / $limit);
            ?>
            <!-- Main content -->
            <div class="container-fluid">
                <div class="row">

                <!-- first column -->
                <div class="col-sm-3 pl-2 pt-4">

                    <p><?php if (mysqli_num_rows($count_result) > 0) {
                        echo mysqli_num_rows($count_result);
                        } else {
                        echo '0';
                        } ?> Results</p><!-- results count -->
                    <hr>

                    <?php
                    if (mysqli_num_rows($count_result) === 0) {
                    echo '';
                    } else {
                    echo '<!-- Filter Department -->
                        <label>Filter Department:</label>
            
                        <br>
                        <div class="ml-3">
                            <input type="checkbox" id="title">
                            <label for="#title">Title</label>
            
                            <br>
            
                            <input type="checkbox" id="keyword">
                            <label for="#keyword">Keyword</label>
            
                            <br>
            
                            <input type="checkbox" id="abstract">
                            <label for="#abstract">Abstract</label>
            
                            <br>
                            
                            <input type="checkbox" id="content">
                            <label for="#content">Content</label>
                        </div>';
                    }

                    ?>

                    <!-- first column -->
                </div>

                <!-- Content -->
                <div class="col-sm-7">

                    <div class="d-flex align-items-center justify-content-center pt-2">


                    <!-- Use the 'active class' to change the btn color -->
                    <?php if (mysqli_num_rows($count_result) > 0) { ?>
                        <div class="btn-group text-dark">

                        <button class="btn btn-outline-dark active">Most relevant</button>

                        <button class="btn btn-outline-dark">Most reads</button>

                        <button class="btn btn-outline-dark">Most downloads</button>
                        </div>
                    <?php } else {
                        echo '';
                    } ?>

                    </div>
                    <hr>

                    <!-- Here is the whole research study
                        This part includes the research study details
                            (titles, authors, abstract, view pdf, download file,
                            and statistics for reads and downloads)-->

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="cards hBg mt-n3
                            border border-left-0
                                    border-right-0
                                    border-top-0
                                    border-semilightblue">

                        <div class="card-body pl-5">


                            <!-- Research studies information -->
                            <div class="row">
                            <div class="col-sm-10 pr-5">
                                <h4 class="cfont cs-2"><?php echo $row["Title"] ?></h4><!-- Research title -->

                                <a href="#" class="cLink">Author</a>
                                <p><?php echo $row["Author"] ?></p><!-- Author name -->
                                <a id="view_href_<?php echo $row['RS_ID'] ?>" type="button" 
                                onclick="addDownload(<?php echo $row['RS_ID'] ?>,'download.php?file=<?php echo $row['File'] ?>')" 
                                class="fa fa-download cLink"> Download</a>
                                <!-- There's an error "Ln 312, Col 54"-->
                                <!-- href="../Research_Studies/</?php// echo $row['File'] ?>" -->
                                <a id="download_href_<?php echo $row['RS_ID'] ?>" type="button" 
                                onclick="addView(<?php echo $row['RS_ID'] ?>,'../Research_Studies/<?php echo $row['File'] ?>')" 
                                class="fa fa-file cLink"> View PDF</a><!-- View button -->


                                <!-- Modal -->
                                <div class="modal fade" id="cModalContent" role="dialog">
                                <div class="modal-dialog modal-dialog-scrollable">

                                    <!-- Modal header -->
                                    <div class="modal-content">
                                    <div class="modal-title">

                                        <div class="modal-header">
                                        <div class="btn-group">
                                            <!-- Download PDF -->
                                            <button type="button" 
                                            onclick="addDownload(<?php echo $row['RS_ID'] ?>,'download.php?file=<?php echo $row['File'] ?>')"
                                            class="btn btn-outline-dark fa fa-download"> Download</button><!-- Download button -->
                                            
                                            <!-- View PDF -->
                                            <button type="submit" 
                                            onclick="addView(<?php echo $row['RS_ID'] ?>,'../Research_Studies/<?php echo $row['File'] ?>')"
                                            class="btn btn-outline-dark fa fa-file"> View PDF</button><!-- View button -->
                                            
                                        </div>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                    </div>

                                    <!-- Modal details -->

                                    <div class="modal-body">
                                        <!-- Make the title color black -->
                                        <!-- Make the hover color blue -->

                                        <div class="cfont cs-2"><?php echo $row['Title'] ?></div><!-- research title -->
                                        <br>
                                        <div><?php echo $row['Author'] ?></div><!-- author name -->

                                        <hr class="bg-muted">

                                        <p class="text-uppercase">Abstract</p>

                                        <p><?php echo $row['Abstract'] ?></p><!-- research abstract -->

                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>

                                    </div>




                                    </div>
                                </div>
                                </div>

                                <!-- Mini tab for short details
                                This <a> tag represent the button for the whole research study -->

                                <a href="#cModalContent" class="stretched-link" data-toggle="modal" data-backdrop="static"></a>
                            </div>

                            <!-- Statistics -->

                            <div class="col-sm-2">
                                <div class=" pt-2 text-ash">
                                <p id="viewCounts_<?php echo $row['RS_ID'] ?>" class="text-center smaller"><?php if ($row['Views'] === 0) {
                                                                                                                echo '0';
                                                                                                            } else {
                                                                                                                echo $row['Views'];
                                                                                                            } ?><br>Readers</p><!-- count of views -->

                                </div>

                                <div class="pt-2 text-ash">
                                <p id="downloadCounts_<?php echo $row['RS_ID'] ?>" class="text-center smaller"><?php if ($row['Downloads'] === 0) {
                                                                                                                    echo '0';
                                                                                                                } else {
                                                                                                                    echo $row['Downloads'];
                                                                                                                } ?><br>Downloads</p><!-- count of downloads -->
                                </div>


                            </div>

                            </div> <!-- End of research studies information -->


                        </div>



                        </div>
                    <?php
                    }
                    } else {
                    echo "No Results Found";
                    } ?>

                    <!-- The whole research study details ends here -->


                    <!-- Pagination -->
                    <?php

                    ?>

                    <div class="container mt-3">
                    <ul class="pagination justify-content-center">
                        <?php if ($page > 1) { ?>
                        <li class="page-item"><a class="page-link" href="search_page.php?page=<?php echo ($page - 1) ?>&query=<?php echo $search ?>">Previous</a></li>
                        <?php } ?>
                        <?php for ($i = 1; $i < $number_pages; $i++) { ?>
                        <li class="page-item active"><a class="page-link" href="search_page.php?page=<?php echo $i ?>&query=<?php echo $search ?>"><?php echo $i ?></a></li>
                        <?php } ?>
                        <?php if ($i > $page) { ?>
                        <li class="page-item"><a class="page-link" href="search_page.php?page=<?php echo ($page + 1) ?>&query=<?php echo $search ?>">Next</a></li>
                        <?php } ?>
                    </ul>

                    </div>

                    <!-- div for Content -->
                </div>

                <!-- div for row -->
                </div>

                <!-- div for container -->
            </div>

        </div>

        <!-- Student tab -->
        <div id="student" class="container-fluid tab-pane fade"><br>
            
            <div class="row">

                <!-- first column -->
                <div class="col-sm-3">

                    <p>5 Results</p>
                    <hr>

                    <!-- Account Status -->

                    <label>Account Status:</label>
                    <div class="dropdown dropright ml-3">
                        <button class="btn btn-outline-secondary dropdown-toggle 
                                        mw-btn-150p"
                                id="studentAccountStatus"
                                data-toggle="dropdown">Select</button>
                                
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('studentAccountStatus', 'Pending')">Pending</a>

                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('studentAccountStatus', 'Verified')">Verified</a>

                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('studentAccountStatus', 'Denied')">Denied</a>

                        </div>


                    </div>


                    <br>

                    <!-- Sort name -->
                    
                    <label class="mt-5 mb-5">Sort Name:</label>


                    <div class="dropdown dropright
                                sf-margin-left">
                        <button class="btn btn-outline-secondary dropdown-toggle
                                        mw-btn-150p"
                                id="studentSort"
                                data-toggle="dropdown">Select</button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('studentSort', 'Ascending')">Ascending</a>

                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('studentSort', 'Descending')">Descending</a>

                        </div>

                    </div>

                    <br>

                    <!-- Filter Department -->
                    <label>Filter Course:</label>

                    <input type="checkbox" id="bsit">
                    <label for="#bsit">BSIT</label>

                    <input type="checkbox" id="educ">
                    <label for="#educ">EDUC</label>



                <!-- first column -->
                </div>

                <!-- second column -->
                <div class="col-sm-7">

                    <p>Student Pending...</p>
                    <hr>
                    
                    <!-- student account starts here -->
                    <div class="row" id="border-bg">
                        <div class="col-sm-8">


                            <p>Name: MgWayre, Webster</p>
                            <p>CYS: BSIT 4A1</p>
                            <p>Address: Lorem ipsumn dolor sit amet.</p>


                        </div>

                        <div class="col-sm-4">
                            <!-- Display this for pending section -->

                            <button class="btn btn-danger w-btn-acc">Deny</button>
                            <button class="btn btn-primary w-btn-acc">Verify</button>


                            <!-- display this for verified section -->
                            <!--
                                <div class="alert alert-info">
                                    <strong>Verified!</strong>
                                </div>
                            -->
                            <!-- Display this for denied section -->
                            <!--

                                <div class="alert alert-danger">
                                    <strong>Denied!</strong>
                                </div>

                            -->
                            <!-- ********************************* -->
                            <!--  Remove the two <br> tags below   -->
                            <!-- when pending section isn't in use -->
                            <!-- ********************************* -->

                            <br>
                            <br>

                            <a href="#"
                                data-target="#identification_card"
                                data-toggle="modal">See identification card <span class="fa fa-id-card"></span></a>

                            <!-- modal -->      
                            <div class="modal fade" id="identification_card">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- modal header -->
                                        <div class="modal-header">
                                                <button class="close fa fa-close" data-dismiss="modal"></button>
                                        </div>

                                        <div id="id_content" class="carousel slide">

                                            <!-- indicators -->
                                            <ul class="carousel-indicators">
                                                <li data-target="id_content" data-slide-to="0" class="active"></li>
                                                <li data-target="id_content" data-slide-to="1"></li>
                                            </ul>

                                            <!-- slideshow -->
                                            <div class="carousel-inner">

                                                <div class="carousel-item active">
                                                    <img src="../img/sample.png" alt="identification card front" width="500" height="500">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="../img/sample.png" alt="identification card back" width="500" height="500">
                                                </div>


                                            </div>

                                            <!-- left and right controls -->
                                            <a class="carousel-control-prev" href="#id_content" data-slide="prev">
                                                <span class="fa fa-chevron-left" style="color: #000000"></span>
                                            </a>

                                            <a class="carousel-control-next" href="#id_content" data-slide="next">
                                                <span class="fa fa-chevron-right" style="color: #000000"></span>
                                            </a>

                                        </div>

                                        <!-- footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Pagination -->

                        <div class="container mt-3">

                            <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>

                            </ul>

                        </div>


                    <!-- student account ends here -->
                    </div>
                    

                <!-- second column -->
                </div>

                

            <!-- row -->
            </div>

        <!-- student tab -->
        </div>

        <!-- Professor tab -->
        <div id="professor" class="container-fluid tab-pane fade"><br>
            
            <div class="row">

                <!-- first column -->
                <div class="col-sm-3">

                    <p>5 Results</p>
                    <hr>

                    <!-- Account Status -->

                    <label>Account Status:</label>
                    <div class="dropdown dropright ml-3">
                        <button class="btn btn-outline-secondary dropdown-toggle 
                                        mw-btn-150p"
                                id="professorAccountStatus"
                                data-toggle="dropdown">Select</button>
                        
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('professorAccountStatus', 'Pending')">Pending</a>

                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('professorAccountStatus', 'Verified')">Verified</a>

                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('professorAccountStatus', 'Denied')">Denied</a>

                        </div>


                    </div>


                    <br>

                    <!-- Sort name -->
                    
                    <label class="mt-5 mb-5">Sort Name:</label>


                    <div class="dropdown dropright
                                sf-margin-left">
                        <button class="btn btn-outline-secondary dropdown-toggle
                                        mw-btn-150p"
                                id="professorSort"
                                data-toggle="dropdown">Select</button>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('professorSort', 'Ascending')">Ascending</a>

                            <a class="dropdown-item" href="#"
                                onclick="changeBtnTxt('professorSort', 'Descending')">Descending</a>

                        </div>

                    </div>

                    <br>

                    <!-- Filter Department -->
                    <label>Filter Department:</label>

                    <input type="checkbox" id="bsit">
                    <label for="#bsit">BSIT</label>

                    <input type="checkbox" id="educ">
                    <label for="#educ">EDUC</label>



                <!-- first column -->
                </div>

                <!-- second column -->
                <div class="col-sm-7">

                    <p>Professor Pending...</p>
                    <hr>
                    
                    <!-- professor account starts here -->
                    <div class="row" id="border-bg">
                        <div class="col-sm-8">


                            <p>Name: MgWayre, Webster</p>
                            <p>CYS: BSIT 4A1</p>
                            <p>Address: Lorem ipsumn dolor sit amet.</p>


                        </div>

                        <div class="col-sm-4">
                            <!-- Display this for pending section -->

                            <button class="btn btn-danger w-btn-acc">Deny</button>
                            <button class="btn btn-primary w-btn-acc">Verify</button>


                            <!-- display this for verified section -->
                            <!--
                                <div class="alert alert-info">
                                    <strong>Verified!</strong>
                                </div>
                            -->
                            <!-- Display this for denied section -->
                            <!--

                                <div class="alert alert-danger">
                                    <strong>Denied!</strong>
                                </div>

                            -->
                            <!-- ********************************* -->
                            <!--  Remove the two <br> tags below   -->
                            <!-- when pending section isn't in use -->
                            <!-- ********************************* -->

                            <br>
                            <br>

                            <a href="#"
                                data-target="#identification_card"
                                data-toggle="modal">See identification card <span class="fa fa-id-card"></span></a>

                            <!-- modal -->      
                            <div class="modal fade" id="identification_card">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- modal header -->
                                        <div class="modal-header">
                                                <button class="close fa fa-close" data-dismiss="modal"></button>
                                        </div>

                                        <div id="id_content" class="carousel slide">

                                            <!-- indicators -->
                                            <ul class="carousel-indicators">
                                                <li data-target="id_content" data-slide-to="0" class="active"></li>
                                                <li data-target="id_content" data-slide-to="1"></li>
                                            </ul>

                                            <!-- slideshow -->
                                            <div class="carousel-inner">

                                                <div class="carousel-item active">
                                                    <img src="../img/sample.png" alt="identification card front" width="500" height="500">
                                                </div>

                                                <div class="carousel-item">
                                                    <img src="../img/sample.png" alt="identification card back" width="500" height="500">
                                                </div>


                                            </div>

                                            <!-- left and right controls -->
                                            <a class="carousel-control-prev" href="#id_content" data-slide="prev">
                                                <span class="fa fa-chevron-left" style="color: #000000"></span>
                                            </a>

                                            <a class="carousel-control-next" href="#id_content" data-slide="next">
                                                <span class="fa fa-chevron-right" style="color: #000000"></span>
                                            </a>

                                        </div>

                                        <!-- footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Pagination -->

                        <div class="container mt-3">

                            <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>

                            </ul>

                        </div>

                        

                    <!-- professor account ends here -->
                    </div>
                    

                <!-- second column -->
                </div>

                

            <!-- row -->
            </div>

        <!-- Professor tab -->
        </div>


    <!-- tab panes tab content -->
    </div>

<!-- contains nav-tab and tab-content -->
</div>


<!-- Footer -->
<div id="mt-20rem">
    <footer class="border-top-2 p-3">

        <div class="container">
        <div class="row">
            <div class="col-8 ft">
            <p >Copyright © 2020 Research DB. All rights reserved.<br>
                We use cookies to help provide and enhance our service and tailor content.<br>
                By continuing you, agree to our <a href="#">Cookies Settings</a>.</p><br>

            <div class="mt-n4">
                <a href="#">Copyright</a>
                <span class="px-3">|</span>

                <a href="#">Terms of Use</a>
                <span class="px-3">|</span>

                <a href="#">Privacy Policy</a>

            </div>
            </div>

            <div class="col-4">
            <span>Follow us on:</span><br>

            <span class="fa fa-facebook-official sl"></span>
            <span class="fa fa-instagram sl px-3"></span>
            <span class="fa fa-twitter-square sl"></span>
            </div>

        </div>
        </div>

    </footer>
</div>

<script src="../js/researchCoordinator_script.js"></script>

</body>
</html>