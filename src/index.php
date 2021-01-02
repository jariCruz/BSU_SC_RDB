<?php
include "php/server.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BSU-SC Research DB</title>

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
  <link rel="stylesheet" href="css/index_style.css">
  <!-- I really dunno wuts happening here but let it be for now -->
  <link rel="stylesheet" href="css/contact_style.css">

</head>

<body>


  <!-- navigator, modal, body -->
  <div class="bg" style="padding-bottom: 25%;">
    <div class="sticky-top">


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

              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>

              </li>


              <li class="nav-item">
                <a class="nav-link" href="php/about_page.php">About</a>

              </li>

              <li class="nav-item">
                <a class="nav-link" href="php/contact_page.php">Contact</a>

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

              <li class="nav-item">
                <a class="nav-link" href="php/login.php">Sign in</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal"
                    data-target="#myModal">Create account</a>
              </li>
              
              
            </ul>
          </div>


        </div>
      </nav>
    </div>

  

    <!-- Modal for creating an account -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <!-- modal header -->
          <div class="modal-header">
            <h5 class="modal-title">Create an account</h5>
            <button class="close" data-dismiss="modal">&times;</button>
          </div>

          <!-- modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col-6 mt-n3 mb-n3 modal-hover modal-height
                          d-flex align-items-center justify-content-center">

                    <a href="php/registration_page_student.php"
                        class="stretched-link">I am a student</a>
              </div>

              <div class="col-6 mt-n3 mb-n3 modal-hover modal-height
                          d-flex align-items-center justify-content-center">
                
                  <a href="php/registration_page_professor.php"
                      class="stretched-link">I am a professor</a>
              </div>
            </div>
          </div>

          <!-- modal footer -->
          <div class="modal-footer">
            <button class="btn btn-outline-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>

    <!-- modal -->
    </div>

    <!-- body -->

    <div class="container-fluid">
      <div class="display-5" style="margin-top: 13%; margin-left: 8%">
        <h1 class="header-font">Welcome to RSDB</h1>
        <p style="font-size:larger">Search the knowledge hidden within</p>

        <!-- Search form -->
        <form action="php/search_page.php" method="get">
          <div class="input-group mb-3 mt-4" style="width: 50%;">
          <!-- Search button -->
            <div class="input-group-prepend">
              <button class="btn btn-outline-primary"
                        type="submit">Search</button>
            </div>
              <!-- Search input -->
              <input type="hidden" name="page" value="1">
              <input type="text" class="form-control" onkeyup="search()" id="search-input" name="query" autocomplete="off"
                      style="background-color: transparent;" placeholder="Search for articles..." required>
          </div>
        </form>
        <div id="results"><!-- Search results --></div>


        <!-- Most search keywords -->

        <div class="container-fluid">
          <div class="row">

            <div>
              <h6>Popular Search:</h6>
            </div>


            <div class="ml-2">
              <a href="#">Fiction</a>
            </div>

            <span class="ml-2 mr-2">|</span>

            <div>
              <a href="#">Renai Circulation</a>
            </div>

            <span class="ml-2 mr-2">|</span>

            <div>
              <a href="#">Chika Dance</a>
            </div>
            </ul>



          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid
                jumbotron-bg-black text-white">
    <div class="container">

      <h2 class="header-font">Lorem lorem ipsum</h2>
      <p>Lorem ipsum dolor sit amet. Lorem ipsum lorem ipsum</p>
    </div>
  </div>


  <!-- Footer -->

  <footer class="border-top-2 pb-4">

    <div class="container">
      <div class="row">
        <div class="col-8 ft">
          <p style="margin-top: -1%">Copyright © 2020 Research DB. All rights reserved.<br>
            We use cookies to help provide and enhance our service and tailor content.<br>
            By continuing you, agree to our <a href="#">Cookies Settings</a>.</p><br>

          <div style="margin-top: -4%;">
            <a href="#">Copyright</a>
            <span class="px-3">|</span>

            <a href="#">Terms of Use</a>
            <span class="px-3">|</span>

            <a href="#">Privacy Policy</a>

          </div>
        </div>

        <div class="col-4" style="margin-top: -1%">
          <span>Follow us on:</span><br>

          <span class="fa fa-facebook-official sl"></span>
          <span class="fa fa-instagram sl px-3"></span>
          <span class="fa fa-twitter-square sl"></span>
        </div>

      </div>
    </div>

  </footer>


  <script src="js/index.js"></script>
</body>

</html>
