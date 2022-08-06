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
    acc[i].addEventListener("click", function() {
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
window.onscroll = function() {
    scrollFunction();
}
var topBtn = document.getElementById("myTopBTN");
var stickyNav = document.getElementById("A-Z-List");
var a_zContainer = document.getElementById("a_zContainer");

function scrollFunction() {
    if(document.documentElement.scrollTop > 500 || document.body.scrollTop > 500) {
        stickyNav.classList.add("sticky");
        a_zContainer.style.width = "100%";
        a_zContainer.style.padding = "0";
        topBtn.style.display = "block";
    } else {
        stickyNav.classList.remove("sticky");
        a_zContainer.style.width = "min(80%, 90rem)";
        a_zContainer.style.padding = "0.2em 0.2em";
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

searchBTN.addEventListener("click", function(){
overlay.classList.toggle("active");
searchBTN.classList.toggle("fa-times")
})

const li = document.querySelectorAll(".test-letters-alphabets");
const sectionAlphabets = document.querySelectorAll(".test-names-by-aphabets");

function activeMenu(){
    let len = sectionAlphabets.length;
    while(--len && window.scrollY + 97 < sectionAlphabets[len].offsetTop){}
    li.forEach(ltx=>ltx.classList.remove("true")); 
    li[len].classList.add("true");
}
activeMenu();
window.addEventListener("scroll", activeMenu);


//move the test-nav links few margins up to avoid entering footer 
$(window).scroll(() => {
    topOfFooter = $('#footer').position().top;
    //Distance the user has scrolled from top, adjusted to take in height of menu bar
    scrollDistanceFromTopOfDoc = $(document).scrollTop() + 800;
    scrollDistanceFromTopOfFooter = scrollDistanceFromTopOfDoc - topOfFooter;
    //Difference between the two
    if (scrollDistanceFromTopOfDoc > topOfFooter) {
        $('#A-Z-List').css('margin-top', 0 - scrollDistanceFromTopOfFooter);
    } else {
        $('#A-Z-List').css('margin-top', 0);
    }
});


//remove preloader when webpage has finished loading. 
var myPreLoader = document.getElementById("preLoader"); 
window.addEventListener("load", function(){
    myPreLoader.style.display = "none";
})



//LIVE SEARCH SCRIPT FOR SEARCH BAR, INTEGRATED WITH LIVE SERVER USING AJAX, PHP and XML
function liveSearch(str) {                                     
    if (str.length == 0) {                          
    document.getElementById("searchResult").innerHTML = document.getElementById("searchResult2").innerHTML;
    return;
  }
  /**
  else {
    document.getElementById("searchResult").innerHTML = document.getElementById("searchInput").value;
}
 */
  document.getElementById("searchBTN").onclick = function clearInput(){
  document.getElementById("searchInput").value = "";
  document.getElementById("searchResult").innerHTML = document.getElementById("searchResult2").innerHTML;
  }
var xmlHttp = new XMLHttpRequest(); 
xmlHttp.onreadystatechange = function () {
  if(this.readyState == 4 && this.status == 200) {
    document.getElementById("searchResult").innerHTML = this.responseText;
    document.getElementById("searchResult").style.color="#828282";
  }
}
  xmlHttp.open("GET", "../liveSearch.php?q="+str, true); 
  xmlHttp.send();
}





