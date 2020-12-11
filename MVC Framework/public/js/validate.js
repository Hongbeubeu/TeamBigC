function validateLogin() {
    var email = document.getElementsByName("email")[0].value;
    var password = document.getElementsByName("password")[0].value;
    let reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email == "" || password == "") {
        alert("Please, Fill all");
        return false;
    }
    else {
        if (reg.test(email) === false) {
            alert("Email is Not Correct");
            return false;
        }
        else {
            //alert("Email is Correct");
            return true;
        }
    }

}

function validateRegister() {
    var email = document.forms["myForm"]["email"].value;
    var password = document.forms["myForm"]["password"].value;
    var confirmpassword = document.forms["myForm"]["confirmpassword"].value;
    var displayname = document.forms["myForm"]["displayname"].value;
    if (email == "" || password == "" || confirmpassword == "" || displayname == "") {
        alert("Please, Fill all");
        return false;
    }
    else {
        let reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (reg.test(x) === false) {
            alert("Email is Not Correct");
            return false;
        }
        else {
            alert("Email is Correct");

        }
    }
}