// JavaScript Document
function showPic(whichpic){
		var source=whichpic.getAttribute("href");
		var placeholder=document.getElementById("placeholder");
		placeholder.setAttribute("src",source);
		var text=whichpic.getAttribute("title");
		var description=document.getElementById("description");
		description.firstChild.nodeValue=text;
	}
function popUp(winurl){
		window.open(winurl,"popup","width=320,height=480");
	}
window.onload=prepareLinks;
function prepareLinks(){
	var links=document.getElementsByName("a");
	for(var i=0;i<links.length;i++){
		if(links[i].getAttribute("class")=="popup"){
			links[i].onclick=function(){
			pouUp(this.getAttribute("href"));
			return false;
		}
}
}
}