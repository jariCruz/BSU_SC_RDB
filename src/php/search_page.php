<!DOCTYPE html>
<?php
include "server.php";

if (isset($_POST['search-button'])) {
  $search = $_POST['search-input'];
  $str = "";

  $sql = " SELECT * from test_search where test_fname LIKE '%$search%' OR test_lname LIKE '%$search%' ";
  $result = mysqli_query($conn, $sql);

  //end if (mysqli_num_rows($result) > 0)
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query | Research DB</title>

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
    <link rel="stylesheet" href="../css/custom.css">

</head>

<body>


<!-- navigator -->

<div class="sticky-top">
<nav class="navbar navbar-expand-md navbar-light bg-light">

<div class="container-fluid">

  <div>
    <div class="hf">
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
</div>

<!-- Search bar -->

<div class="container-fluid
                bg-muted
                border border-primary
                    border-left-0
                    border-right-0">
                    <form action="search_page.php" method="post">
                      <div class="input-group d-flex justify-content-center">

                          <div class="input-group-prepend py-sm-4 cSearch-width">
                              <button name="search-button" id="search-button" class="btn btn-outline-primary" type="submit">Search</button>
                              <input name="search-input" id="search-input" class="form-control"  type="text">
                              <button type="button" class="btn btn-default btn-sm">
                                  <span class="fa fa-remove"></span>
                              </button>
                          </div>

                      </div>
                    </form>
</div>


<!-- Main content -->
<div class="container-fluid">
    <div class="row">

        <!-- Filter -->
        <div class="col-sm-3 pt-3 pl-5 text-ash">

            <div class="cpb-1
                        border border-secondary
                          border-left-0
                          border-right-0
                          border-top-0">
              <span>9 Results</span>
            </div>

            <h6 class="mt-3">Filter:</h6>
            <input type="checkbox">
            <span>Title</span>

            <br>

            <input type="checkbox">
            <span>Author</span>

            <br>

            <input type="checkbox">
            <span>Abstract</span>

            <br>

            <input type="checkbox">
            <span>Content</span>


        </div>

      <!-- Content -->
        <div class="col-sm-6">

          <div class="container pt-3 pb-3">

            <div class="row">

            <!-- Sort -->

              <div class="col-sm-2 pt-1" style="height: 30px;">
                <p class="">Sort by</p>
              </div>

              <!-- Use the 'active class' to change the btn color -->
              <div class="btn-group text-dark">
                  <button class="btn btn-outline-dark active">Most relevant</button>

                  <button class="btn btn-outline-dark">Most reads</button>

                  <button class="btn btn-outline-dark">Most downloads</button>
              </div>

            </div>

          </div>

          <!-- Here is the whole research study
               This part includes the research study details
                  (titles, authors, abstract, view pdf, download file,
                  and statistics for reads and downloads)-->

          <?php if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
              echo '<div class="cards hBg
                            border border-left-0
                                   border-right-0
                                   border-secondary">

                <div class="card-body pt-3 pl-5">


                  <!-- Research studies information -->
                  <div class="row">
                    <div class="col-sm-10 pr-5">
                      <h4 class="cfont cs-2">Lorem Title</h4>

                      <a href="#" class="cLink">Author</a>
                      <p>'.$row["test_fname"].' '.$row["test_lname"].'</p>

                      <a href="#" class="fa fa-download cLink"> Download</a>

                      <a href="#" class="fa fa-file cLink"> View PDF</a>


                      <!-- Modal -->
                      <div class="modal fade" id="cModalContent" role="dialog">
                        <div class="modal-dialog modal-dialog-scrollable">

                          <!-- Modal header -->
                          <div class="modal-content">
                            <div class="modal-title">

                              <div class="modal-header">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-outline-dark fa fa-download"> Download</button>
                                  <button type="button" class="btn btn-outline-dark fa fa-file"> View PDF</button>
                                </div>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                            </div>

                            <!-- Modal details -->

                            <div class="modal-body">
                              <!-- Make the title color black -->
                              <!-- Make the hover color blue -->

                              <a href="#" class="cfont cs-2">Lorem Title</a>
                              <br>
                              <a href="#">Author</a>

                              <hr class="bg-muted">

                              <p class="text-uppercase">Abstract</p>

                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                  Numquam fugiat sunt in dolor nobis quos unde quo incidunt alias?
                                  Repellat quo quos ipsam minima a veniam, eveniet corporis porro aut.
                              </p>

                            </div>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-danger"
                                        data-dismiss="modal">Close</button>

                            </div>




                          </div>
                        </div>
                      </div>

                      <!-- Mini tab for short details
                      This <a> tag represent the button for the whole research study -->

                      <a href="#cModalContent" class="stretched-link"
                          data-toggle="modal" data-backdrop="static"></a>
                    </div>

                  <!-- Statistics -->

                  <div class="col-sm-2">
                    <div class=" pt-2 text-ash">
                      <p class="text-center smaller">5<br>Readers</p>

                    </div>

                    <div class="pt-2 text-ash">
                      <p class="text-center smaller">5<br>Downloads</p>
                    </div>


                  </div>

                </div> <!-- End of research studies information -->


                </div>



              </div>';
            }
          } else {
            echo "No Results Found";
          } ?>

          <!-- The whole research study details ends here -->


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

          <!-- div for Content -->
        </div>

      <!-- div for row -->
    </div>

    <!-- div for container -->
</div>


<!-- Footer -->

<footer class="border-top-2 mt-4 pb-4 bg-dark text-light">

  <div class="container">
    <div class="row">
      <div class="col-8 ft">
        <p style="margin-top: 3%">Copyright © 2020 Research DB. All rights reserved.<br>
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

      <div class="col-4" style="margin-top: 3%">
        <span>Follow us on:</span><br>

        <span class="fa fa-facebook-official sl"></span>
        <span class="fa fa-instagram sl px-3"></span>
        <span class="fa fa-twitter-square sl"></span>
      </div>

    </div>
  </div>

</footer>

<script src="../js/index.js">

</script>
</body>
</html>
