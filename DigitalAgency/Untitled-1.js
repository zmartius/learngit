// JavaScript Document
function showPic(whichpic){
		var source=whichpic.getAttribute("href");
		var placeholder=document.getElementById("placeholder");
		placeholder.setAttribute("src",source);
	}
function countBodyChildren(){
		var body_element=document.getElementsByTagName("body")[0];
		alert(body_element.childNodes.length);
		widow.onload=countBodyChildren;
	}