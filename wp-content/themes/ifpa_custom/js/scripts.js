//TODO: insert jquery in footer, rather than header (bad practice)
jQuery(document).ready(function( $ ) {
	
  $('.clickable').on('click', function() {
  	var itemClass = $(this).attr('itemYear');

  	//reset display
    $('#years').children().css({"font-weight":"normal"});
    $('#split-page-no-thumbnail').children().css({"display":"none"})
    //bold this year
    $(this).css({"font-weight":"bold"});

    $('.' + itemClass).css({"display":"flex"});
  });
	
});

// for dropdown menu
var opened = false;

// Activates the dropdown menu
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
