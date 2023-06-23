function DiscoverToCampaign(){
    window.location.href = "menu/men ready to wear.php";
  }
  // function homepage(){
  //   window.location.href = "homepage.php";
  // }

// function registerto(){
//   window.location.href ="men ready to wear.html";
// }

  var searchButton = document.getElementById("searchLV");
  var searchInput = document.getElementById("searchInput");
  var isInputVisible = false
  var menuLink = document.querySelector(".Menu");
  var menuOptions = document.getElementById("menuOptions");
  var MYLV = document.getElementById("MYLV");
  
  // searchButton.addEventListener("click", function() {
  //  searchInput.classList.remove("hidden");
  // });

  
  searchButton.addEventListener("click",function(){
    if(isInputVisible){
      searchInput.classList.add("hidden");
      isInputVisible = false
    }
    else{
      searchInput.classList.remove("hidden");
      isInputVisible = true;
    }
  })

  
  
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
  