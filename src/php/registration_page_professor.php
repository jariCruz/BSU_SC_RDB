<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Professor Registration | BSU-SC Research DB</title>

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

<!-- Form -->
    <div class="container">
        <h1 class="d-flex justify-content-center">A professor is registering...</h1>

        <form action="../index.php" novalidate
                class="needs-validation
                        border border-dark rounded-lg
                        p-4 mx-auto mb-3 reg-form-custom-width">


            
            <div class="form-row">
               
                <!-- Forename field -->

                <div class="form-group col-sm-5">
                    <label for="form_fname">Forename:</label>
                    
                    <input type="text"
                            class="form-control"
                            id="form_fname"
                            placeholder="Forename"
                            name="form_fname"
                            minlength="2"
                            maxlength="30"
                            required>

                    <!-- Notification -->
                    <div class="valid-feedback">Valid~</div>
                    <div class="invalid-feedback">Fill in this part, please~</div>
                    


                </div>

                <!-- Middle initial field -->

                <div class="form-group col-sm-2">
                    <label for="form_mi">M.I.:</label>
                    <input type="text"
                            name="form_mi"
                            id="form_mi"
                            placeholder="M.I."
                            class="form-control"
                            maxlength="5">

                    <!-- Notification -->
                    <!-- Recode how not to display when empty
                    <div class="valid-feedback">Valid~</div>
                    -->
                
                </div>

                <!-- Surname field -->


                <div class="form-group col-sm-5">

                    <label for="form_sname">Surname:</label>
                    <input type="text"
                            name="form_sname"
                            id="form_sname"
                            placeholder="Surname"
                            class="form-control"
                            maxlength="30"
                            minlength="1"
                            required>

                    <!-- Notification -->

                    <div class="valid-feedback">Valid~</div>
                    <div class="invalid-feedback">Fill in this part, please~</div>

                </div>

            </div>

            <!-- Department field -->
            

            <div class="form-group">
                    <label for="form_department">Department:</label>
                    
                    <select name="form_department"
                            id="form_department"
                            class="form-control
                                    select-picker
                                    border-muted"
                            required>

                        <option value="0" required>Choose department</option>
                        <option value="BIT Department" required>BIT Department</option>
                        <option value="EDUC Department" required>EDUC Department</option>
                    </select>

                            

                <!-- Notification -->
                <div class="valid-feedback">Valid~</div>
                <div class="invalid-feedback">Fill in this part, please~</div>

                <script>
                    $('.dropdown-menu').on('change', function(){
                        var sDept = $(this).find("option: selected").text();

                        $('#form-department').html(sDept);
                        $(this).next('.#form-department').html(sDept);

                    });
                </script>
                
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

                <!-- Notification -->

                <div class="valid-feedback">Valid~</div>
                <div class="invalid-feedback">Fill in this part, please~</div>

            </div>

            <!-- Retype password field -->

            <div class="form-group">
                <label for="form_repass">Retype password:</label>
                <input type="password"
                        name="form_repass"
                        id="form_repass"
                        placeholder="Retype password"
                        class="form-control"
                        maxlength="30"
                        minlength="8"
                        required>

                <!-- Notification -->

                <div class="valid-feedback">Valid~</div>
                <div class="invalid-feedback">Fill in this part, please~</div>

            </div>
            
            <!-- Checkbox -->
            <div class="form-group">
                <input type="checkbox" required>
                <span>I accept the <a href="#">Terms of Service</a> & <a href="#">Privacy Policy</a>.</span>

                <!-- Notificaiton -->

                <div class="invalid-feedback">Make sure to tick the checkbox, please~</div>

            </div>

            <!-- Register btn -->
            <div>
                <button type="submit" class="btn btn-primary">Register</button>

            </div>

            <div class="d-flex justify-content-center mt-3">
                <span>Already have an account? <a href="login.php">Login here.</a></span>
            </div>
            
    
        </form>
    </div>

<!-- Disable form submissions if there are invalid fields -->
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


    
</body>
</html>