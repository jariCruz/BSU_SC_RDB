//This file contains scripts fo rs_upload_page.php
// Individual notification
function validateInput(n, min) {//min is for the length that is accepted
  // Get the current element
  var inputValue = document.getElementById(n);
  //var len = document.getElementById(min);
  // Get the parent element
  var pn = inputValue.parentElement;
  // Get the value
  var vElement = inputValue.value;
  //validate the length
  if (vElement.length >= (min - 1)) {
    pn.className += " was-validated";
  }
}
// end of individual notification


// validate if all fields have met required values
function validateForm() {
  var valid = true;
  var i = 0;
  var divTab = document.getElementsByClassName("tab");
  // Child nodes
  var cnInput = divTab[currentTab].getElementsByTagName("input");//current tab input field
  var cnSelect = divTab[currentTab].getElementsByTagName("select");//current tab select field
  var cnTextarea = divTab[currentTab].getElementsByTagName("textarea");//current tab textarea field



  // A loop that check every input field in the current tab

  for (i; i < cnInput.length; i++) {

    var inputLen = cnInput[i].getAttribute("minlength");
    var cnInputLen = cnInput[i].value.length;

    // if a field is empty...
    if (cnInputLen < inputLen) {

      // adds an invalid class to the parent node
      cnInput[i].parentElement.className += " was-validated";
      // and set the current valid status to false
      valid = false;
    }

  }
  //end loop for input field

  // A loop that check every select field in the current tab
  for (i = 0; i < cnSelect.length; i++) {
    // if a field is empty...
    if (cnSelect[i].selectedIndex == 0) {
      // adds an invalid class to the parent node
      cnSelect[i].parentElement.className += " was-validated";
      // and set the current valid status to false
      valid = false;
    }
  }
  //end loop for select field

  // A loop that check every textarea field in the current tab
  for (i = 0; i < cnTextarea.length; i++) {

    var textareaLen = cnTextarea[i].getAttribute("minlength");
    var cnTextareaLen = cnTextarea[i].value.length;
    // if a field is empty...
    if (cnTextareaLen < textareaLen) {
      // adds an invalid class to the parent node
      cnTextarea[i].parentElement.className += " was-validated";
      // and set the current valid status to false
      valid = false;
    }
  }
  //end loop for textarea field

  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid;
}