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

<style>

/* Mark input boxes that gets an error on validation: */


/* insert icons for invalid */


/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
    
    </style>

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
                            onkeypress="cnotif('form_title', '10')"
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
                            onkeypress="cnotif('form_author', '5')"
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
                                    onchange="cnotif('form_year', '')"
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

                        <script>
                            $('.dropdown-menu').on('change', function(){
                                var sDept = $(this).find("option: selected").text();

                                $('#form-department').html(sDept);
                                $(this).next('.#form-department').html(sDept);

                            });
                        </script>
                        
                    </div>


                    <!-- Course field -->
                    
                    
                    <div class="form-group">
                            <label for="form_course">Course:</label>
                            
                            <select name="form_course"
                                    id="form_course"
                                    class="form-control
                                            select-picker
                                            border-muted"
                                    onchange="cnotif('form_course', '')"
                                    required>

                                <option value="">Choose course</option>
                                <option value="bsit">BSIT</option>
                                <option value="educ">EDUC</option>
                            </select>

                                    

                        <!-- Notification -->
                        <div class="valid-feedback">Valid~</div>
                        <div class="invalid-feedback">Choose course, please~</div>

                        <script>
                            $('.dropdown-menu').on('change', function(){
                                var sDept = $(this).find("option: selected").text();

                                $('#form-department').html(sDept);
                                $(this).next('.#form-department').html(sDept);

                            });
                        </script>
                        
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
                            onkeypress="cnotif('form_adviser', '5')"
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
                            onkeypress="cnotif('form_keywords', '5')"
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
                            onkeypress="cnotif('form_abstract', '10')"
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
                    <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
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

<!-- Script for form's validation -->

<script>
    // Individual notification
    function cnotif(n, min) {

        // Get the current element

        var cElement = document.getElementById(n);
        
        // Get the parent element
        var pn = cElement.parentElement;

        // Get the value
        var vElement = cElement.value;

        if (vElement.length >= min){

            pn.className += " was-validated";

        }

    }


    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form
        var x = document.getElementsByClassName("tab");

        x[n].style.display = "block";
        // ...and fix the prev/next buttons

        if (n == 0){
            document.getElementById("prevBtn").style.display = "none";
        
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }

        if (n == (x.length - 1)){

            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {

            
            document.getElementById("nextBtn").innerHTML = "Next";
        }

        // ...and run a function that will display the correct step indicator

        fixStepIndicator(n);

    }

    function nextPrev(n){
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");

        if (n == 1 && !validateForm()) return true;


        // Hide the current tab
        x[currentTab].style.display = "none";

        // Increase or decrease current tab by 1
        currentTab = currentTab + n;

        // If you have reached the end of the form
        if (currentTab >= x.length) {

            // the form gets submitted
            document.getElementById("rs_upload_form").submit();
            return false;
        }

        // Otherwise display the correct tab
        showTab(currentTab);


    }


    function validateForm(){

        var valid = true;
        var i = 0;
        var divTab = document.getElementsByClassName("tab");


        // Child nodes
        var cnInput = divTab[currentTab].getElementsByTagName("input");
        var cnSelect = divTab[currentTab].getElementsByTagName("select");
        var cnTextarea = divTab[currentTab].getElementsByTagName("textarea");


        // A loop that check every input field in the current tab
        for (i = 0; i < cnInput.length; i++){

            // if a field is empty...
            if (cnInput[i].value == "") {

                // adds an invalid class to the parent node
                cnInput[i].parentElement.className += " was-validated";

                // and set the current valid status to false
                valid = false;        

            }
        }

        // A loop that check every input field in the current tab
        for (i = 0; i < cnSelect.length; i++){
            
            // if a field is empty...
            if (cnSelect[i].selectedIndex == 0) {

                // adds an invalid class to the parent node
                cnSelect[i].parentElement.className += " was-validated";
            
                // and set the current valid status to false
                valid = false;
        

            }
        }

        // Check the abstract if empty

        if (cnTextarea.value == ''){

            cnTextarea.parentElement.className += " was-validated";
            valid = false;
        }

        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }

        return valid;
    }

    function fixStepIndicator(n){
        // Remove the "active" class on all steps

        var x = document.getElementsByClassName("step");

        for (var i = 0; i < x.length; i++){
            x[i].className = x[i].className.replace(" active", "");
        }

        // Add the current "active" class on the current step

        x[n].className += " active";
    }





</script>

    
</body>
</html>