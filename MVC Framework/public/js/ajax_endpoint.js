function addCommentsss(str) {
  if (str.length == 0) {
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        var commentElement = document.getElementById('cmt_form');
        var newCommentElement = commentElement.cloneNode(true);
        console.log(newCommentElement);
        //newElement.innerHTML = this.responseText;
        var parent = document.getElementById('cmt_form');
        parent.appendChild(newCommentElement);
      }
    }
    xmlhttp.open("GET", "/ajax-data/" + str, true);
    xmlhttp.send();
  }
}