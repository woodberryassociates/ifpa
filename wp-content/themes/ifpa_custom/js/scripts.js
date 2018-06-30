//TODO: insert jquery in footer, rather than header
jQuery(document).ready(function( $ ) {
	
	$('.clickable').on('click', function() {
  	var itemClassYear = $(this).attr('itemYear');
    // itemClassType is used to distinguish b/w diff types of policy papers
    var itemClassType = $(this).attr('itemType');

  	//reset display
    $('.years.' + itemClassType).children().css({"color":"#B5B5B5"});
    $('.split-page-no-thumbnail.' + itemClassType).children().css({"display":"none"})
    //color this year
    $(this).css({"color":"#282f5d"});
    //display selected year's posts
    $('.' + itemClassType + '.' + itemClassYear).css({"display":"flex"});

    //execute once to select most recent year
	//$('.itemYear') = "<?php echo $year ?>"

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
