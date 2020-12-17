function openPopup() {
    let displayStatus = document.getElementById("notification").style.display;
    if (displayStatus === "") {
        document.getElementById("notification").style.display = "block";
    } else {
        document.getElementById("notification").style.display = "";
    }
}

var slideIndex = 1;

// Next/previous controls
function plusSlides(n, id) {
    showSlides(slideIndex += n, id);
}

// Thumbnail image controls
function currentSlide(n, id) {
    showSlides(slideIndex = n, id);
}

function showSlides(n, id) {
    var i;
    var slides = document.getElementsByClassName(`mySlides${id}`);
    var dots = document.getElementsByClassName(`dot${id}`);
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].setAttribute("style", "display: none !important");
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
//modal
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var input = document.getElementById("newfeed__status");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var buttonModal = document.getElementById("modal_button");
//console.log(buttonModal)
// When the user clicks the button, open the modal 
input.onclick = function () {
    modal.style.display = "block";
}
buttonModal.onclick = function () {
    modal.style.display = "none";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
//comment

function callAjaxComment(comment, post_id, user_id) {
    var xmlhttp = new XMLHttpRequest();
    var data = "comment=" + comment + "&postId=" + post_id + "&userId=" +user_id; 
    xmlhttp.open('POST', '/ajax-comment', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
}

function callAjaxLike(user_id, post_id) {
    var date = new Date();
    console.log("like:" +date.getTime());
    var xmlhttp = new XMLHttpRequest();
    var data = "userId=" + user_id + "&postId=" + post_id;
    xmlhttp.open('POST', '/ajax-like', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
}

function callAjaxUnLike(user_id, post_id) {
    var date = new Date();
    console.log("unlike:" +date.getTime());
    var xmlhttp = new XMLHttpRequest();
    var data = "userId=" + user_id + "&postId=" + post_id;
    xmlhttp.open('POST', '/ajax-unlike', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(data);
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
}

//todo send request with time out 4s
function addComment(event, user_id, post_id) {
    if (event.code === "Enter") {
        const div = document.createElement('div');
        const commentInput = document.getElementById(`comment_input__${post_id}`);
        if (commentInput.value == '')
            return;
        callAjaxComment(commentInput.value, post_id, user_id);
        const picturePath = document.getElementById('user_picture').getAttribute('src');
        const name = document.getElementById('user_name').innerHTML;
        //console.log(picturePath, name);
        div.className = `newfeed__comment-main`;
        div.innerHTML = `
  <div class="newfeed__identify identify" src="#">
      <img class="avatar icon_small" src=${picturePath} />
  </div>
  <div class=newfeed__comment-content>
    <span class="newfeed__comment-name" style="display: inline;">${name}</span>
      </br>
      <span class="newfeed__comment-text">${commentInput.value}</span>
  </div>
  `;
        commentInput.value = '';
        document.getElementById(`comment-container__${post_id}`).appendChild(div);
    }

}

function test() {
    console.log("test");
}

//todo send request with time out 4s
function changeIcon(img, user_id, post_id) {
    var countLikeId = 'count_like_of_post_' + post_id;
    var likeCount = document.getElementById(countLikeId);
    // kiem tra xem dang la tim do hay tim trang de doi nguoc lai
    if (img.src.match("/public/assets/heart.png")) {
        img.src = "/public/assets/icons8-heart-64.png";
        likeCount.innerHTML = parseInt(likeCount.innerHTML) + 1;
        console.log(likeCount.innerHTML);
        callAjaxLike(user_id, post_id);
    } else {
        img.src = "/public/assets/heart.png";
        likeCount.innerHTML = (parseInt(likeCount.innerHTML)<=0)?0:(parseInt(likeCount.innerHTML) - 1);
        callAjaxUnLike(user_id, post_id);
    }
}

// setInterval(function () { 
//     callAjaxLike(); 
//     callAjaxUnLike()
// }, 3000);