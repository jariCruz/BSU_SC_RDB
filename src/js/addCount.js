    //add count for views
    function addView(RS_ID, url) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("viewCounts_" + RS_ID).innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "action.php?addViews=" + RS_ID, true);
      xmlhttp.send();
      window.open(url+'#toolbar=0','_blank', 'location=no');
    }

    //add count for downloads
    function addDownload(RS_ID, url) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("downloadCounts_" + RS_ID).innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "action.php?addDownloads=" + RS_ID, true);
      xmlhttp.send();
      window.open(url);
    }