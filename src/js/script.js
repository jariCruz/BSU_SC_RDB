//Search onkeyup response
function search(str) {
  if (str.length==0) {
    document.getElementById("results").innerHTML="";
    document.getElementById("results").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("results").innerHTML=this.responseText;
      document.getElementById("results").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","php/action.php?q="+str,true);
  xmlhttp.send();
}