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

  var i = 0;
  // Child nodes
  var tag_Input = getElementsByTagName("input");//current input field
  var tag_Select = getElementsByTagName("select");//current select field
  var tag_Textarea = getElementsByTagName("textarea");//current textarea field



  // A loop that check every input field

  for (i; i < tag_Input.length; i++) {

    var inputLen = tag_Input[i].getAttribute("minlength");
    var tag_InputLen = tag_Input[i].value.length;

    // if a field is empty...
    if (tag_InputLen < inputLen) {

      // adds an invalid class to the parent node
      tag_Input[i].parentElement.className += " was-validated";
      // and set the current valid status to false
      valid = false;
    }

  }
  //end loop for input field

  // A loop that check every select field
  for (i = 0; i < tag_Select.length; i++) {
    // if a field is empty...
    if (tag_Select[i].selectedIndex == 0) {
      // adds an invalid class to the parent node
      tag_Select[i].parentElement.className += " was-validated";
      // and set the current valid status to false
      valid = false;
    }
  }
  //end loop for select field

  // A loop that check every textarea field
  for (i = 0; i < tag_Textarea.length; i++) {

    var textareaLen = tag_Textarea[i].getAttribute("minlength");
    var tag_TextareaLen = tag_Textarea[i].value.length;
    // if a field is empty...
    if (tag_TextareaLen < textareaLen) {
      // adds an invalid class to the parent node
      tag_Textarea[i].parentElement.className += " was-validated";
      // and set the current valid status to false
      valid = false;
    }
  }
  //end loop for textarea field

}