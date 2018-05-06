//TODO: insert jquery in footer, rather than header (bad practice)
jQuery(document).ready(function( $ ) {
	
  $('.clickable').on('click', function() {
  	var itemClass = $(this).attr('itemYear');

  	//reset display
    $('#years').children().css({"color":"#B5B5B5"});
    $('#split-page-no-thumbnail').children().css({"display":"none"})
    //color this year
    $(this).css({"color":"#282f5d"});
    //display selected year's posts
    $('.' + itemClass).css({"display":"flex"});
  });
	
});

// DROPDOWN MENU
var opened = false;

// activates the dropdown menu
function dropdown() {
  var element = document.getElementById("menu-collapsible");

  if(!opened) {
    element.style.visibility = "visible";
    element.style.opacity = "1";
    opened = true;
  } else {
    element.style.visibility = "hidden";
    element.style.opacity = "0";
    opened = false;
  }
}
