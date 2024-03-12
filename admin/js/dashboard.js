//add hovered class to selected list item
let list =document.querySelectorAll(".navigation li");
function activelink(){
    list.forEach((item)=>{
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");

}
list.forEach((item) => item.addEventListener("mouseover",activelink));


//menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main2");
let profile = document.querySelector(".profile-img");
let book = document.querySelector(".booking1");
let drop_icon = document.querySelector(".dropdown_icon");





toggle.onclick = function(){
    navigation.classList.toggle("active");
    main.classList.toggle("active");
    profile.classList.toggle("active");
    book.classList.toggle("active");
    drop_icon.classList.toggle("active");



}

// ========== view booking =========
$(".mobile-btn").click(function(){
    $(".side-menu-btn ul .mobile-show").toggle("show");
    $(".side-menu-btn ul .six").toggleClass("rotate");
  });

  var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}