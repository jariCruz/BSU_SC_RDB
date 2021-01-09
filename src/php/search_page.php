<!DOCTYPE html>
<?php
include "server.php";
//paginationsht
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}
//limit kung ilan gusto mo i display
$limit = 5;
//saan mag sisimula ung i display mo
$start = ($page - 1) * $limit;


if (isset($_GET['query'])) {
  $search = $_GET['query'];
} else {
  $search = '';
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search | BSU-SC Research DB</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- jQuery UI library -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Font link -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">

  <!-- Other resources -->
  <link rel="stylesheet" href="../css/search_style.css">

</head>

<body>


  <!-- navigator -->

  <div class="sticky-top">

    <nav class="navbar navbar-expand-md navbar-light bg-light">

      <div class="container-fluid">

        <div>
          <div class="header-font">
            <a class="navbar-brand" href="../index.php">Research DB</a>
          </div>

          <div class="mt-n3">
            <span class="navbar-text">Bulacan State University - Sarmiento Campus</span>
          </div>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapseNavbar">
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

            <li class="nav-item">
              <a class="nav-link" href="login.php">Sign in</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Create account</a>
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

              <a href="registration_page_student.php" class="stretched-link">I am a student</a>
            </div>

            <div class="col-6 mt-n3 mb-n3 modal-hover modal-height
                          d-flex align-items-center justify-content-center">

              <a href="registration_page_professor.php" class="stretched-link">I am a professor</a>
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
  <!-- Search bar -->

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
      <div class="col-sm-3 pl-4 pt-4">

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
      <div class="col-sm-6">

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
                    <!-- href="../Research_Studies/<?php// echo $row['File'] ?>" -->
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


  <!-- Footer -->

  <footer class="border-top-2 pb-4 bg-dark text-light mt-bottom">

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

  <!-- Autocomplete -->
  <script>
    $(function() {
      $("#search-input").autocomplete({
        source: "action.php",
        select: function(event, ui) {
          console.log(ui.item.value);
          location.href = "search_page.php?page=1&query=" + ui.item.value;
        }
      });
    });

    //add count for views
    function addView(RS_ID, url) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("viewCounts_" + RS_ID).innerHTML = this.responseText;
        }
      };
      //console.log(url);
      xmlhttp.open("GET", "action.php?addViews=" + RS_ID, true);
      xmlhttp.send();
      window.open(url+'#toolbar=0','_blank', 'location=no');
    }
    //add count for downloads
    function addDownload(RS_ID, url) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("downloadCounts_" + RS_ID).innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "action.php?addDownloads=" + RS_ID, true);
      xmlhttp.send();
      window.open(url);
    }
  </script>
</body>

</html>