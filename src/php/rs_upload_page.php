<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Thesis | BSU-SC Research DB</title>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Font link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- For tagsinput -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>



    <!-- Other resources -->
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/rs_upload.css">





</head>
<body>

<!-- Form -->
    <div class="container">
        <h1 class="d-flex justify-content-center">Coordinator is uploading thesis...</h1>

        <form id="rs_upload_form" action="#" novalidate
                class="needs-validation
                        border border-dark rounded-lg
                        p-4 mx-auto mb-3 w-75 reg-form-custom-width">


            <!-- Note tab -->
            <div class="tab">

                <p class="text-danger cts-1 m-3">Note: Once the information have been uploaded, it cannot be edited again.
                    Please be sure to check the information you provided before you upload, thank you.
                </p>

            </div>

            <!-- This tab include:
                    Title, author, year, course, and adviser
            -->

            <div class="tab">
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

                    <!-- Notification -->
                    <div class="valid-feedback">Valid~</div>
                    <div class="invalid-feedback">Note: Minimum length 10 and maximum 100~</div>



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


                    <!-- Notification -->

                    <div class="valid-feedback">Valid~</div>
                    <div class="invalid-feedback">Note: Minimum length 5 and maximum 100~</div>



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



                        <!-- Notification -->
                        <div class="valid-feedback">Valid~</div>
                        <div class="invalid-feedback">Choose year level, please~</div>



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



                        <!-- Notification -->
                        <div class="valid-feedback">Valid~</div>
                        <div class="invalid-feedback">Choose course, please~</div>

                    </div>

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

                    <!-- Notification -->

                    <div class="valid-feedback">Valid~</div>
                    <div class="invalid-feedback">Note: Minimum length 5 and maximum 60~</div>

                </div>
            </div>

            <!-- This tab include:
                    Keywords, file, and abstract
            -->

            <div class="tab">
            <!-- Keywords field -->
            <!-- edit the border when not valid -->


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

                    <!-- Notification -->

                    <div class="valid-feedback">Valid~</div>
                    <div class="invalid-feedback">Note: Minimum length 5 and maximum 60~</div>

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

                    <!-- Notification -->
                    <div class="valid-feedback">Valid~</div>
                    <div class="invalid-feedback">Fill in this part, please~</div>

                </div>


                <!-- Abstract field -->

                <div class="form-group mt-4">
                    <label for="form_abstract">Abstract:</label>
                    <textarea name="form_abstract"
                            id="form_abstract"
                            placeholder="Abstract"
                            class="form-control min-height max-height"
                            onkeypress="validateInput('form_abstract', '10')"
                            rows="5"
                            minlength="10"
                            maxlength="500"
                            required></textarea>

                    <!-- Notification -->

                    <div class="valid-feedback">Valid~</div>
                    <div class="invalid-feedback">Fill in this part, please~</div>

                </div>

            </div>


            <!-- Previous and next btn -->
            <div style="overflow: auto;">
                <div style="float: right">

                    <button class="btn btn-secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1); submitValues()">Next</button>
                </div>
            </div>

            <!-- Circles that indicates the steps of the form -->

            <div style="text-align: center; margin-top: 40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>

            </div>


        </form>
    </div>
    <div id="showResults">

    </div>

<!-- Script for form's validation -->

<script src="../js/rs_upload_page.js"></script>


</body>
</html>
