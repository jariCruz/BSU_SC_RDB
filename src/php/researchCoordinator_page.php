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
    <link rel="stylesheet" href="../css/researchCoordinator.css">


</head>
<body>

<!-- Header -->

<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">

    <div class="container-fluid">

        <div>
            <div id="header-font">
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

            <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>

            </li>


            <li class="nav-item">
            <a class="nav-link" href="#">About</a>

            </li>

            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>

            </li>

        </ul>
        </div>

    </div>
</nav>

<!-- Greetings -->
<div style="height: 80px;"
     id="greetings-bg"
     class="container-fluid
            pl-4 pt-3          
            border border-primary
                border-left-0
                border-right-0">

    
    <h4 id="greetings-font">Welcome!<br>Research Coordinator Webster~  (･◡ु‹ )</h4>
    

</div>

<!-- contains nav-tab and tab-content -->
<div class="container-fluid">
    <div class="pt-3">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item">
            <a class="nav-link active" href="#overview">Overview</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#researchStudy">Research Study</a>
            </li>
            
            <li class="nav-item dropdown">
            <a id="accountBtn" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Account</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#student" onclick="changeBtnTxt('accountBtn', 'Student')">Student</a>
                <a class="dropdown-item" href="#professor" onclick="changeBtnTxt('accountBtn', 'Professor')">Professor</a>
            </li>
            
        </ul>

    
        
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
        <div id="researchStudy" class="container tab-pane fade"><br>
            <h5>Research study</h5>
            <p>This is where research study can be viewed</p>

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
                <div class="col-sm-6">

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
                <div class="col-sm-6">

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
<div class="fixed-bottom bg-dark text-white">
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