function openPopup() {
    let displayStatus =  document.getElementById("notification").style.display;
    if (displayStatus ===""){
     document.getElementById("notification").style.display = "block";
    }
    else {
     document.getElementById("notification").style.display = "";
    }
}
function openModalBox() {
    // lấy phần Modal
    var modal = document.getElementById('myModal');

    // Lấy phần button mở Modal
    var btn = document.getElementById("myBtn");

    // Lấy phần span đóng Modal
    var span = document.getElementsByClassName("close")[0];
    // Khi button được click thi mở Modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // Khi span được click thì đóng Modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // // Khi click ngoài Modal thì đóng Modal
    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // }
}

function updateProfile(){
    var display_name = document.getElementsByName("display_name")[0].value;
    var gender = document.getElementsByName('my-input')[0].checked? "male" : "female";
    var birthday= document.getElementsByName("birthday")[0].value;
    var education = document.getElementsByName("education")[0].value;
    var about = document.getElementsByName("description")[0].value;
    alert(display_name+gender+birthday+education+about);
    if (display_name || gender || birthday || education || about){
        //alert("Please, Fill all");
        return false;
    } else{
        return true;
    }
    
}