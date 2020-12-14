function addComment(str) {
  if (str.length == 0) {
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var newElement = document.getElementById('cmt_form');
        
        newElement.innerHTML = this.responseText;
        var parent = document.getElementById('cmt_form');
        parent.appendChild(newElement);
      }
    }
    xmlhttp.open("GET", "/ajax-data/" + str, true);
    xmlhttp.send();
  }
}