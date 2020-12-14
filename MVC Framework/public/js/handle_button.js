function showButton() {
    // lay id button
    var btn = document.getElementById('btn_update_info');

    // Lấy phần img hien button
    var imgs = document.getElementsByClassName('about_pane_title_img');
    // Khi button được click thì hiện button
    for (var i = 0; i < imgs.length; i++) {
        imgs[i].onclick = function() {
            btn.style.display = "inline-block";
        }
    }
    //sau khi an update se an button di
    btn.addEventListener('click', hideshow, false);

    function hideshow() {
        this.style.display = 'none'
    }
}