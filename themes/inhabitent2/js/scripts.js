
// Main menu appears again when scrolled passed hero header.
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("masthead");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

jQuery(document).ready(function($) {
    $('.search-section-nav').on('click', function(event) {
      
      // The default action that belongs to the event will not occur. Clicking on the submit button, prevents it from re-directing to the search page.
      event.preventDefault();
  
      var $searchField = $('.search-field');
  
      //When clicking the icon, focus will be on the input field isntead of icon
      $searchField.addClass('search-active').focus();
  
      //When it loses focus by clicking somewhere else, hides the input field
      $searchField.on('blur', function() {
        $searchField.removeClass('search-active');
      });
    });
  
  