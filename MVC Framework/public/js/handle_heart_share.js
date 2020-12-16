function changeIcon() {
    // lay id button
    var img = document.getElementById('icon_select_heart');

    // kiem tra xem dang la tim do hay tim trang de doi nguoc lai
    if (img.src.match("/public/assets/heart.png")) {
        img.src = "/public/assets/icons8-heart-64.png";
    } else {
        console.log("else clm");
        img.src = "/public/assets/heart.png";
    }
}