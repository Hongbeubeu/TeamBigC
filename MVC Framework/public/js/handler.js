function openPopup() {
    let displayStatus =  document.getElementById("notification").style.display;
    if (displayStatus ===""){
     document.getElementById("notification").style.display = "block";
    }
    else {
     document.getElementById("notification").style.display = "";
    }
   }