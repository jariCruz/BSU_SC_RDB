
// Menu starts here...

// For showing tabs
$(document).ready(function(){

    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
    
});


// Menu ends here...
// For showing tabs
// Change dropdown text
function changeBtnTxt(id, txt){

    var btn = document.getElementById(id);

    btn.textContent = txt;

}