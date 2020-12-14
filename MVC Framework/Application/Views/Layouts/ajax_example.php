<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var newElement = document.createElement('p');
        console.log(this.responseText);
        newElement.innerHTML = this.responseText;
        var parent = document.getElementById('txtHint');
        parent.appendChild(newElement);
      }
    }
    xmlhttp.open("GET", "/ajax-data/"+str, true);
    xmlhttp.send();
  }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>

  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" >
  <button name="submit" onclick="showHint(document.getElementById('fname').value)"> Send </button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<p>Suggestions: <span id="txtHint"></span></p>

</body>
</html>