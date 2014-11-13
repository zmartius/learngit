// JavaScript Document
function showPic(whichpic){
		var source=whichpic.getAttribute("href");
		var placeholder=document.getElementById("carouselname");
		placeholder.setAttribute("src",source);
	}

