<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration | BSU-SC Research DB</title>

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
    <link rel="stylesheet" href="../css/registration_student_style.css">

</head>
<body>

<!-- Form -->
    <div class="container">
        <h1 class="d-flex justify-content-center header-font">A student is registering...</h1>

        <form action="../index.php"
                class="border border-dark rounded-lg
                        p-4 mx-auto mb-3 form-width">


        <!-- Name -->    
        <div class="form-row">
            
            <!-- Forename field -->

            <div class="form-group col-sm-5 needs-validation">
                <label for="form_fname">Forename:</label>
                
                <input type="text"
                        class="form-control"
                        id="form_fname"
                        placeholder="Forename"
                        name="form_fname"
                        minlength="2"
                        maxlength="30"
                        required>                    


            </div>

            <!-- Middle initial field -->

            <div class="form-group col-sm-2 needs-validation">
                <label for="form_mi">M.I.:</label>
                <input type="text"
                        name="form_mi"
                        id="form_mi"
                        placeholder="M.I."
                        class="form-control"
                        maxlength="5">

            </div>

            <!-- Surname field -->

            <div class="form-group col-sm-5 needs-validation">

                <label for="form_sname">Surname:</label>
                <input type="text"
                        name="form_sname"
                        id="form_sname"
                        placeholder="Surname"
                        class="form-control"
                        maxlength="30"
                        minlength="1"
                        required>
            </div>

        </div>

        <!-- Identification card -->
            
        <div class="custom-file form-group needs-validation">
        <label for="form_file1">Identification card:</label>
                
            <!-- Front -->
            <input type="file"
                    name="form_file1"
                    id="form_file1"
                    class="custom-file-input"
                    required>
            <label for="form_file" class="custom-file-label front mt-4">Front</label>

            <!-- Script for adding the name of file to the label -->
            
            <script>
                $('#form_file1').on('change', function(e){
                    // Get file name
                    var fileName = e.target.files[0].name;

                    // Replace the "Choose file..." label
                    $(this).next('.front').html(fileName);
                })


            </script>                    
        </div>

            <!-- Back -->
            <div class="custom-file form-group needs-validation">
                
                <input type="file"
                        name="form_file"
                        id="form_file2"
                        class="custom-file-input"
                        required>
                <label for="form_file2" class="custom-file-label back mt-2">Back</label>

                <!-- Script for adding the name of file to the label -->
                
                <script>
                    $('#form_file2').on('change', function(e){
                        // Get file name
                        var fileName = e.target.files[0].name;

                        // Replace the "Choose file..." label
                        $(this).next('.back').html(fileName);
                    })


                </script>
            
            </div>

        <!-- Year level field -->

        <div class="row mt-3 ml-1">
            <div class="form-group mr-1 needs-validation">
                    <label for="form_year">Year level:</label>

                    <select name="form_year"
                            id="form_year"
                            class="form-control
                                    select-picker
                                    border-muted"
                            required>

                        <option value="">Choose year level</option>
                        <option value="1st year">1st year</option>
                        <option value="2nd year">2nd year</option>
                        <option value="3rd year">3rd year</option>
                        <option value="4th year">4th year</option>
                    </select>

            </div>


            <!-- Course field -->


            <div class="form-group needs-validation">
                    <label for="form_course">Course:</label>

                    <select name="form_course"
                            id="form_course"
                            class="form-control
                                    select-picker
                                    border-muted"
                            required>

                        <option value="">Choose course</option>
                        <option value="bsit">BSIT</option>
                        <option value="educ">EDUC</option>
                    </select>

            </div>

        </div>


        <!-- Address field -->

        <div class="form-group needs-validation">
            <label for="form_address">Address:</label>
            <input type="text"
                    name="form_address"
                    id="form_address"
                    placeholder="Address"
                    class="form-control"
                    maxlength="200"
                    minlength="8"
                    required>

        </div>


        <!-- Password field -->

        <div class="form-group needs-validation">
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

        <!-- Retype password field -->

        <div class="form-group needs-validation">
            <label for="form_repass">Retype password:</label>
            <input type="password"
                    name="form_repass"
                    id="form_repass"
                    placeholder="Retype password"
                    class="form-control"
                    maxlength="30"
                    minlength="8"
                    required>

        </div>
        
        <!-- Checkbox -->
        <div class="form-group">
            <input type="checkbox" required>
            <span>I accept the <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a>.</span>


        </div>

        <!-- Register btn -->
        <div>
            <button type="submit" class="btn btn-primary" onclick="validate()">Register</button>

        </div>

        <span class="d-flex justify-content-center mt-3">Already have an account?<a href="login.php">&MediumSpace;Login here.</a></span>
            
        <hr>
        <a class="d-flex justify-content-center my-n3 pt-1"
            href="registration_page_professor.php">Register as a professor</a>


    </form>
</div>

<!-- Form validation -->
<script src="../js/registration_student_script.js"></script>

</body>
</html>