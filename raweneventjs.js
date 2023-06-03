
function myfunctionArtistes(){
	if (getComputedStyle(document.getElementById("element1")).display != "flex"){
			(document.getElementById("element1").style.display ="flex") && (document.getElementById("element2").style.display = "none") && (document.getElementById("element3").style.display = "none") && (document.getElementById("element4").style.display = "none") && (document.getElementById("element5").style.display = "none") ;
	}else{
		document.getElementById("element1").style.display ="none";
	}
	 
}
function myfunctionLieux(){
	if (getComputedStyle(document.getElementById("element2")).display != "flex") {
			(document.getElementById("element2").style.display ="flex") && (document.getElementById("element1").style.display = "none") && (document.getElementById("element3").style.display = "none") && (document.getElementById("element4").style.display = "none") && (document.getElementById("element5").style.display = "none") ;
	}else{
		document.getElementById("element2").style.display ="none";
	}
}
function myfunctionParticipant(){
	if (getComputedStyle(document.getElementById("element3")).display != "flex") {
			(document.getElementById("element3").style.display ="flex") && (document.getElementById("element1").style.display = "none") && (document.getElementById("element2").style.display = "none") && (document.getElementById("element4").style.display = "none") && (document.getElementById("element5").style.display = "none") ;;
	}else{
		document.getElementById("element3").style.display ="none";
	}
}

function myfunctionRestauration(){
	if (getComputedStyle(document.getElementById("element4")).display != "flex") {
			(document.getElementById("element4").style.display ="flex") && (document.getElementById("element1").style.display = "none") && (document.getElementById("element2").style.display = "none") && (document.getElementById("element3").style.display = "none") && (document.getElementById("element5").style.display = "none") ;;
	}else{
		document.getElementById("element4").style.display ="none";
	}
}
function myfunctionSecurite(){
	if (getComputedStyle(document.getElementById("element5")).display != "flex") {
			(document.getElementById("element5").style.display ="flex") && (document.getElementById("element1").style.display = "none") && (document.getElementById("element2").style.display = "none") && (document.getElementById("element3").style.display = "none") && (document.getElementById("element4").style.display = "none") ;;
	}else{
		document.getElementById("element5").style.display ="none";
	}
}