// TODO: insert jquery in footer, rather than header
jQuery(document).ready(function( $ ) {

	// Display/hide years on backpages (Policy Papers, etc.)
	$('.clickable').on('click', function() {
	  	var itemClassYear = $(this).attr('itemYear');
	    var itemClassType = $(this).attr('itemType'); // used to distinguish b/w diff types of policy papers

	  	// reset display
	    $('.years.' + itemClassType).children().css({"color":"#B5B5B5"}); // color everything as unfocused (gray)
	    $('.split-page-no-thumbnail.' + itemClassType).children().css({"display":"none"}) // hide all articles

	    // color this year
	    $(this).css({"color":"#282f5d"});

	    // woot woot! display selected year's posts
	    $('.' + itemClassType + '.' + itemClassYear).css({"display":"flex"});
	});
});

/*** WARNING: Vanilla JS zone! ***/

// Dropdown menu
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