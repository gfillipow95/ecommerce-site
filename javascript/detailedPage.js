var homeBtn = document.querySelector("#navbar-home");

homeBtn.addEventListener("click", function(e){
    window.location.href = "index.html";
});

function zoomIn() {
    var img = document.querySelector(".product-page-image");
    img.style.transform = "scale(1.5)";
}

function zoomOut() {
    var img = document.querySelector(".product-page-image");
    img.style.transform = "scale(1)";
}