function showListGroup() {
    // lay id button
    var btn = document.getElementById('group');
    var name = document.getElementsByClassName('name');
    var avt = document.getElementsByClassName('icon_medium');
    var education = document.getElementsByClassName('education');
    var button_profile = document.getElementsByClassName('button_profile');
    var add_friend = document.getElementsByClassName('name_button');
    var icon_add_friend = document.getElementsByClassName('name_img');
    // Khi button được click thì đổi sang list group
    btn.onclick = function() {
        for (var i = 0; i < name.length; i++) {
            avt[i].src = "../images/background.jpg";
            name[i].innerHTML = "Donate giúp người dân miền Trung";

            education[i].innerHTML = "100K members";
            button_profile[i].innerHTML = "Visit Group";

            add_friend[i].innerHTML = "Join Group";
            icon_add_friend[i].src = "../images/group_man.png";
        }
    }

}

function showListPeople() {
    // lay id button
    var btn2 = document.getElementById('people');
    var name = document.getElementsByClassName('name');
    var avt = document.getElementsByClassName('icon_medium');
    var education = document.getElementsByClassName('education');
    var button_profile = document.getElementsByClassName('button_profile');
    var add_friend = document.getElementsByClassName('name_button');
    var icon_add_friend = document.getElementsByClassName('name_img');
    // Khi button được click thì đổi sang list people
    btn2.onclick = function() {
        for (var i = 0; i < name.length; i++) {
            avt[i].src = "../assets/avatar.jpg";
            name[i].innerHTML = "Tuan Le Minh";

            education[i].innerHTML = "Trường đại học Bách Khoa";
            button_profile[i].innerHTML = "VISIT PROFILE";

            add_friend[i].innerHTML = "Add Friend";
            icon_add_friend[i].src = "../images/icons8-user-32.png";
        }
    }
}