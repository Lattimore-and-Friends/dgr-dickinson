// jQuery(document).ready(function ($) {
var slideIndex = 1;
showSlides(slideIndex);

// var frameButton = document.querySelector('#image-frame');

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    event.preventDefault();
    showSlides(slideIndex = n);
}

// if ($('.roompage-dot').length) {

//     console.log("I show up");

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("roompage-mySlides");
    var dots = document.getElementsByClassName("roompage-dot");

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
    // };
// });