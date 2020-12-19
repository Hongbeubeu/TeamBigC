<!DOCTYPE html>
<html>
<head>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>

  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" >
  <button name="submit" onclick="addComment(document.getElementById('fname').value)"> Send </button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p>Suggestions: <span id="txtHint"></span></p>

</body>
<script src="/public/js/ajax_endpoint.js"></script>
</html>