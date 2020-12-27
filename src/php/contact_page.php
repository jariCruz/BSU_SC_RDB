<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | BSU-SC Research DB</title>

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
    <link rel="stylesheet" href="../css/contact_style.css">


</head>
<body>
  <!-- Header -->
  <div class="sticky-top">

    <nav class="navbar navbar-expand-md navbar-light bg-light">

      <div class="container-fluid">

        <div>
          <div class="header-font" id="header-size">
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
              <a class="nav-link" href="#">Home</a>

            </li>


            <li class="nav-item">
              <a class="nav-link" href="#">About</a>

            </li>

            <li class="nav-item active">
              <a class="nav-link" href="#">Contact</a>

            </li>

          </ul>
        </div>



      </div>
    </nav>
  </div>

  <!-- About Us Header -->
  <div style="height: 80px;"
      class="container-fluid
              greetings-bg
              pl-4 pt-4 mb-5   
              border border-primary
                  border-left-0
                  border-right-0">

      
      <h4 id="greetings-size" class="header-font text-right">Contact Us~ ⑉ႣỏႣ⑉</h4>
      

  </div>

  <!-- Content -->
  <div class="container-fluid row">
    <!-- First column -->
    <div class="col-md-4 ml-md-5 mr-md-5 mb-5 p-5">

        <h5 class="header-font subtitle-size-1">How to Find Us</h5>
        <p>If you have any questions, just fill out the contact form
            and we will answer you shortly. You can also visit us in
            our office.
        </p>

        <h6 id="subtitle-size-2" class="header-font mt-5 pt-5">Headquarter</h6>
        <p><strong>Address: </strong>University Heights, Brgy. Kaypian, City of San Jose del Monte, Bulacan, Philippines</p>
        <p><strong>Telephone: </strong>+63-8122-4545</p>
        <p><strong>Email: </strong>bsuscresearchdb@gmail.com</p>
    </div>

    <!-- Second column -->
    <div class="col-md-5 ml-md-5 p-5">
        <h5 class="header-font subtitle-size-1">Get in Touch</h5>
        <form action="#">
            <label class="mt-3" for="contact_us_name">Name:</label>
            <input type="text" class="form-control" id="contact_us_name"
                    placeholder="Name">

            <label class="mt-3" for="contact_us_email">Email:</label>
            <input type="email" class="form-control" id="contact_us_email"
                    placeholder="Email">

            <label class="mt-3" for="contact_us_message">Message:</label>
            <textarea name="contact_us_message"
                        class="form-control message-xy-limit"
                        id="contact_us_message"
                        cols="10" rows="10"                        
                        placeholder="Message..."></textarea>

            <button class="btn btn-outline-primary mt-3 float-right">Send request</button>
        </form>

    </div>
  </div>

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid
              bg-dark text-white
              mt-3 mb-n2">
    <div class="container">

      <h1 class="header-font">Lorem lorem ipsum</h1>
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