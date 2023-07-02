function DiscoverToCampaign(){
    window.location.href = "menu/Men/men ready to wear.html";
  }
  // function homepage(){
  //   window.location.href = "homepage.php";
  // }

// function registerto(){
//   window.location.href ="men ready to wear.html";
// }

  var searchButton = document.getElementById("searchLV");
  
  var isInputVisible = false
  var menuLink = document.querySelector(".Menu");
  var menuOptions = document.getElementById("menuOptions");
  var MYLV = document.getElementById("MYLV");
  var logoSpan = document.querySelector(".logo");
  // searchButton.addEventListener("click", function() {
  //  searchInput.classList.remove("hidden");
  // });

  
  searchButton.addEventListener("click", function() {
  if (isInputVisible) {
    searchInput.classList.add("hidden");
    isInputVisible = false;
    logoSpan.classList.remove("hidden");
  } else {
    searchInput.classList.remove("hidden");
    isInputVisible = true;
    logoSpan.classList.add("hidden");
  }
});

  

  
  
  menuLink.addEventListener("click", function(event) {
    event.preventDefault();
    menuOptions.classList.toggle("hidden");
  });
  // menuLink.addEventListener("click", function(event) {
  //   event.preventDefault();
  //   menuOptions.classList.toggle("hidden");
  // });
  function toggleLVTable() {
    var lvTable = document.getElementById('lvTable');
    lvTable.classList.toggle('hidden');
  }
  


//  thêm 
function togglesearch() {
  var searchTable = document.getElementById("searchTable");
  var logo = document.querySelector(".logo");
  var navItems = document.querySelectorAll(".nav-item1");
  
  searchTable.classList.toggle("hidden");
  logo.classList.toggle("hidden");
  
  navItems.forEach(function(navItem) {
    navItem.classList.toggle("hidden");
  });
}
