
var addBtn= document.getElementById('add-btn');

var bind= function(elem, ev, func){
	
	if(window.addEventListener){
		elem.addEventListener(ev, func, false);
	}
	
		
	else{
		elem.attachEvent('on' + ev, func);
	}
};


		
	