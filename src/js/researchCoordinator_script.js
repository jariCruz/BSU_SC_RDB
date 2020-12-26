
// Menu starts here...

// For showing tabs
$(document).ready(function(){

    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    
});


// Global variable
// Get the dropdown-menu
var menu = document.getElementById("menu");
// Get the a tags
var link = menu.getElementsByTagName("a");


// Get button
var btn = document.getElementById("btn");
// add and remove dropdown-active class from dropdown btn
var btnActive = btn.classList.contains("dropdown-active");
    

// Fix dropdown classes add border
function fixDropdown(currentLink){

    // Removes active class in the dropdown menu
    for (var i = 0; i < link.length; i++){   

        if (link[i].innerText != currentLink){

        link[i].className = link[i].className.replace(" active", "");
        

        }// if


    }// loop


    // Note: Do not make btnActive global
    // for it needs to refresh every clicks

    // add and remove dropdown-active class from dropdown btn
    var btnActive = btn.classList.contains("dropdown-active");

    // Adds dropdown-active class in btn

    if (btnActive == false){
        
        btn.className += " dropdown-active";
    }


    btn.innerHTML = currentLink + " <span class='fa fa-caret-down'></span>";
        

}// end of functi+on



// Remove classes from dropdown
function removeActive() {

    // Removes active class from a tags inside the dropdown btn

    for (var i = 0; i < link.length; i++){

        link[i].className = link[i].className.replace(" active", "");
    }


    // Note: Do not make btnActive global
    // for it needs to refresh every clicks

    // add and remove dropdown-active class from dropdown btn
    var btnActive = btn.classList.contains("dropdown-active");

    // Removes dropdown-active class from btn

    if (btnActive == true){

        btn.className = btn.className.replace(" dropdown-active", "");
    }

}


// Menu ends here...
// For showing tabs
// Change dropdown text
function changeBtnTxt(id, txt){

    var btn = document.getElementById(id);

    btn.textContent = txt;

}