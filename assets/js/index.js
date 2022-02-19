//HAMBURGER MENU//

var bars = document.querySelector(".bars");
var navbar = document.querySelector(".navbar");
var main = document.querySelector(".main");
function toggleBtn() {
  !navbar.classList.contains("active")
    ? navbar.classList.add("active")
    : navbar.classList.remove("active");
  !main.classList.contains("active")
    ? main.classList.add("active")
    : main.classList.remove("active");
}

//GALLERY//
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

//PARALLAX EFFECT//
let parallax = document.querySelector(".parallax");
function startParallax(element) {
  let value = window.scrollY;
  element.style.top = value * 0.5 + "px";
}

document.addEventListener("scroll", function () {
  startParallax(parallax);
});

//SPLIT BANNER//

function create() {
  let split = document.querySelector(".split");
  let w = split.getBoundingClientRect().width;
  let h = split.getBoundingClientRect().height;
  let gridX = 3;
  let gridY = 1;
  let img = document.querySelector(".split-image");

  for (x = 0; x < gridX; x++) {
    let splitedDiv = document.createElement("div");
    splitedDiv.setAttribute("class", "splitedDiv");
    for (y = 0; y < gridY; y++) {
      var width = ((w / gridX) * 101) / w + "%",
        height = ((h / gridY) * 101) / h + "%",
        top = ((h / gridY) * y * 100) / h + "%",
        left = ((w / gridX) * x * 100) / w + "%",
        bgPosX = -((w / gridX) * x) + "px",
        bgPosY = -((h / gridY) * y) + "px";

      let styles = {
        top: top,
        left: left,
        width: width,
        height: height,
        backgroundImage: "url(" + img.src + ")",
        backgroundPosition: bgPosX + " " + bgPosY,
        backgroundSize: w + "px",
      };

      Object.assign(splitedDiv.style, styles);
      split.appendChild(splitedDiv);
    }
  }
}

window.addEventListener("load", create);
