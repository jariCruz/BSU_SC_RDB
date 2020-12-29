// Get all input by class name "needs-validation"
var parentElement = document.getElementsByClassName("needs-validation");

var inputs = document.getElementsByTagName("input");

var selects = document.getElementsByTagName("select");

function validate() {

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