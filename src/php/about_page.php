<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | BSU-SC Research DB</title>

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
    <link rel="stylesheet" href="../css/about_style.css">
    <link rel="stylesheet" href="../css/jumbotron_style.css">
    


</head>
<body>
  <!-- Header -->
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

              <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>

              </li>


              <li class="nav-item">
                <a class="nav-link active" href="about_page.php">About</a>

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

              <li class="nav-item">
                <a class="nav-link" href="login.php">Sign in</a>
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
            <button class="btn btn-outline-danger" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>

    <!-- modal -->
    </div>
  </div>

  <!-- About Us Header -->
  <div style="height: 80px;"
      class="container-fluid
              greetings-bg
              pl-4 pt-4 mb-5   
              border border-primary
                  border-left-0
                  border-right-0">

      
      <h4 id="greetings-size" class="header-font text-right">About Us~ ⑉ႣỏႣ⑉</h4>
      

  </div>

  <!-- Content -->
  <div class="container">
    <div class="ml-md-5 mr-md-5 mb-5 p-5 text-center">
      <h5 class="header-font subtitle-size-1">Our Goal</h5>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      <h5 class="header-font subtitle-size-1 pt-5">How we do things</h5>
      <p>Amet, expedita tempora repellat quis hic rem neque quae qui
        inventore enim eveniet aperiam modi tempore, rerum culpa quas voluptates,
        exercitationem corporis! Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Amet, expedita tempora repellat quis hic rem neque quae qui
        inventore enim eveniet aperiam modi tempore, rerum culpa quas voluptates,
        exercitationem corporis!</p>

        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>
        <li>Lorem ipsum</li>

    </div>
  </div>

   <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid
              bg-night text-white">
    <div class="container">

      <h2 class="header-font">Lorem lorem ipsum</h2>
      <p>Lorem ipsum dolor sit amet. Lorem ipsum lorem ipsum</p>
    </div>
  </div>

  <!-- Footer -->
  <footer class="p-3">

    <div class="container">
      <div class="row">
        <div class="col-8 p-3">
          <p>Copyright © 2020 Research DB. All rights reserved.<br>
            We use cookies to help provide and enhance our service and tailor content.<br>
            By continuing you, agree to our <a href="#">Cookies Settings</a>.</p><br>

          <div class="mt-n3">
            <a href="#">Copyright</a>
            <span class="px-3">|</span>

            <a href="#">Terms of Use</a>
            <span class="px-3">|</span>

            <a href="#">Privacy Policy</a>

          </div>
        </div>

        <div class="col-4 p-3">
          <span>Follow us on:</span><br>

          <span class="fa fa-facebook-official sl"></span>
          <span class="fa fa-instagram sl px-3"></span>
          <span class="fa fa-twitter-square sl"></span>
        </div>

      </div>
    </div>

  </footer>


    
</body>
</html>