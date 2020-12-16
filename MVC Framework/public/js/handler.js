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
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
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
console.log(buttonModal)
    // When the user clicks the button, open the modal 
input.onclick = function() {
    modal.style.display = "block";
}
buttonModal.onclick = function() {
        modal.style.display = "none";
    }
    // When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //comment

function callAjax() {

    return true;
}

function addComment(event, id) {
    if (event.code === "Enter") {
        const div = document.createElement('div');
        const commentInput = document.getElementById(`comment_input__${id}`);
        const picturePath = document.getElementById('user_picture').getAttribute('src');
        const name = document.getElementById('user_name').innerHTML;
        console.log(picturePath, name);
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
        document.getElementById(`comment-container__${id}`).appendChild(div);
        //call ajax here
        if (!callAjax()) {
            div.setAttribute('style', 'filter: grayscale(90%);')
        }

    }

}

function test() {
    console.log("test");
}