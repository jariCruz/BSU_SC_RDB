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

//show the current tab
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
  // This function will display the specified tab of the form
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ...and fix the prev/next buttons
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ...and run a function that will display the correct step indicator
  fixStepIndicator(n);
}
//end of the current tab

//nextPrev button function
function nextPrev(n) {
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
//end of previous and next tab buttons

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
function fixStepIndicator(n) {
  // Remove the "active" class on all steps
  var x = document.getElementsByClassName("step");
  for (var i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  // Add the current "active" class on the current step
  x[n].className += " active";
}
