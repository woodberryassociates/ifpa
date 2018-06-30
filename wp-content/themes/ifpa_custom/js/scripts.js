//TODO: insert jquery in footer, rather than header
jQuery(document).ready(function( $ ) {

  $("#wp-"+year).click();
  $("#ff-"+year).click();
  $("#pb-"+year).click();
  $("#rc-"+year).click();
  $("#a-"+year).click();

  $('.clickable').on('click', function() {
  	var itemClassYear = $(this).attr('itemYear');
    // itemClassType is used to distinguish b/w diff types of policy papers
    var itemClassType = $(this).attr('itemType');

  	// reset display
    $('.years.' + itemClassType).children().css({"color":"#B5B5B5"});
    $('.split-page-no-thumbnail.' + itemClassType).children().css({"display":"none"})
    // color this year
    $(this).css({"color":"#282f5d"});
    // woot woot! displays selected year's posts
    $('.' + itemClassType + '.' + itemClassYear).css({"display":"flex"});
  
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