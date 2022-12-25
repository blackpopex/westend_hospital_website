function myFunction(x) {
  var sideBar = document.getElementById("sideNavbar");
  x.classList.toggle("change");
  //search bar toggle
  sideBar.classList.toggle("activated");
}

//onclick slideDown accordion on the sidebar
var acc = document.getElementsByClassName("dropbtn");
var i;
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

//onclick slideDown accordion2 for
var myAcc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < myAcc.length; i++) {
  myAcc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

//Slide down navbar and display the back to top button when document scroll height is > 500
window.onscroll = function () {
  scrollFunction();
};
var topBtn = document.getElementById("myTopBTN");

function scrollFunction() {
  if (
    document.documentElement.scrollTop > 500 ||
    document.body.scrollTop > 500
  ) {
    document.getElementById("myHeaderMenu").classList.add("navbarAnimation");
    topBtn.style.display = "block";
  } else {
    document.getElementById("myHeaderMenu").classList.remove("navbarAnimation");
    topBtn.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//slide down overlay when search BTN is clicked
var searchBTN = document.getElementById("searchBTN");
var overlay = document.getElementById("search-Overlay");

searchBTN.addEventListener("click", function () {
  overlay.classList.toggle("search-overlay-activited");
  searchBTN.classList.toggle("fa-times");
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  var overlay = document.getElementById("search-Overlay");
  if (event.target == overlay) {
    overlay.classList.remove("search-overlay-activited");
    searchBTN.classList.remove("fa-times");
  }
};
/*
//remove preloader when webpage has finished loading. 
var myPreLoader = document.getElementById("preLoader"); 
window.addEventListener("load", function(){
    myPreLoader.style.display = "none";
})
*/
// CHANGE HERO IMAGE WHEN SCREEN SIZE CHANGES
if (window.matchMedia("(max-width: 600px)").matches) {
  document.getElementById("slideshow_image_1").src =
    "img/slideshow/mobile/slideshow-1-mobile.jpg";
  document.getElementById("slideshow_image_2").src =
    "img/slideshow/mobile/slideshow-2-mobile.jpg";
  document.getElementById("slideshow_image_3").src =
    "img/slideshow/mobile/slideshow-3-mobile.jpg";
  document.getElementById("slideshow_image_4").src =
    "img/slideshow/mobile/slideshow-4-mobile.jpg";
} else {
  document.getElementById("slideshow_image_1").src =
    "img/slideshow/slideshow-1.jpg";
  document.getElementById("slideshow_image_2").src =
    "img/slideshow/slideshow-2.jpg";
  document.getElementById("slideshow_image_3").src =
    "img/slideshow/slideshow-3.jpg";
  document.getElementById("slideshow_image_4").src =
    "img/slideshow/slideshow-4.jpg";
}
