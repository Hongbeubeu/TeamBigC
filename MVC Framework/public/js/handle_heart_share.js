function changeIcon() {
    // lay id button
    var img = document.getElementById('icon_select_heart');
    var check = true;
    // Khi button được click thì hiện button
    img.onclick = function() {
        if (check) {
            img.src = "../assets/icons8-heart-64.png";
            check = false;
        } else {
            img.src = "../assets/heart.png";
            check = true;
        }
    }
}