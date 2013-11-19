function appandText(){
	var dom = document.getElementsByClassName("dnamicInfo")[0];
	dom.innerHTML ="hello world danamic";
}

function addEvent(obj){ 		
	obj.addEventListener("click",appandText); 
	
}
var view = document.getElementsByClassName("viewDnamicInfo")[0];
addEvent(view);
