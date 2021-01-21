// Get all input by class name "needs-validation"
var parentElement = document.getElementsByClassName("needs-validation");

var inputs = document.getElementsByTagName("input");

var selects = document.getElementsByTagName("select");

function validate() {
    console.log('validate function');

    for (var i = 0; i < inputs.length; i++) {

        var inputsAttribute = inputs[i].getAttribute("placeholder");
        var val = inputs[i].value;
        
        // Condition for other fields
        if (inputsAttribute != "M.I.") {

            inputs[i].parentElement.className += " was-validated";
        }
        
        // Condition if middle initial is not empty
        if (inputsAttribute == "M.I." && inputs[i].value != "") {

            inputs[i].parentElement.className += " was-validated";
        }
        //validate retype password
        if (inputs[i].value !== "" && inputs[i].value !== null) {
            inputs[i].parentElement.className += " was-validated";
            
        }

    }

    // Loop for select tags
    for (i = 0; i < selects.length; i++) {
        // if a field is empty...
        if (selects[i].selectedIndex == 0) {
        // adds an invalid class to the parent node
        selects[i].parentElement.className += " was-validated";

        }
    }
}

function submitVal() {
    var pass = document.getElementById("form_pass").value;
    var r_pass = document.getElementById("form_repass").value;
    console.log('submitVal function');
    
    if (pass.length > 0 && r_pass.length > 0) {
        if (pass != r_pass) {
            swal({
                title: "Registration Failed!",
                text: "Password and retype password is not the same!",
                icon: "error",
                button: true,
              });
        }
        else {
            swal({
                title: "Registration Success!",
                text: "Click OK to return in Homepage",
                icon: "success",
                button: true,
              })
              .then((ok)=>{
                  if (ok) {
                    document.getElementById("register_form").submit();
                  }else {
                      false;
                  }
              });
        }
    }
}
