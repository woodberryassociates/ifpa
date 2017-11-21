//sidebar animation
function animNav() {
   var sidebar = document.getElementById("mySidebar");
   if (!opened) {
      openNav();
  } else {
      closeNav();
  }
}

/*
function openNav() {
   document.getElementById("mySidebar").style.width = "75px";
   document.getElementById("main").style.marginLeft = "75px";
   opened = true;
}

function closeNav() {
   document.getElementById("mySidebar").style.width = "0";
   document.getElementById("main").style.marginLeft = "0";
   opened = false;
}

//highlight "BY ISSUE" when mousing over text
/*function mouseoverNavText(id){
   document.getElementById(id).style.backgroundColor = 'white';
}

function mouseoutNavText(id){
   document.getElementById(id).style.backgroundColor = '';
}

//TODO: keep the nav box for the current page highlighted
/*function highlightPage(){
	alert(this.href);
	alert(this.href.substr(this.href.lastIndexOf('/') + 1));
	//document.getElementById("btn1").classList.toggle("red”,  “italics");
}*/