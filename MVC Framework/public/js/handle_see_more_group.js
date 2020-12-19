function seeMoreGroup() {
    var moreText = document.getElementById("newfeed__identify_identity_hide");
    var btnText = document.getElementById("see_more");

    if (moreText.style.display === "none") {
        btnText.innerHTML = "See less";
        moreText.style.display = "inline";
    } else {
        btnText.innerHTML = "See more";
        moreText.style.display = "none";
    }
}