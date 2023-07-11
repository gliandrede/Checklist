var __orientation;
	var __newOrientation;
	$(document).ready(function(){
		// código para 'ignorar' teclado do mobile
		if(screen.availHeight > screen.availWidth){
			__orientation="portrait";
		}else{
			__orientation="landscape";
		}
	    var viewport = document.querySelector("meta[name=viewport]");
		viewport.setAttribute("content", viewport.content + ", height=" + window.innerHeight);
		__newOrientation=__orientation;
		console.log(__orientation);
	});

	$(window).resize(function(){
		console.log(__orientation);
		if(screen.availHeight > screen.availWidth){
			__newOrientation="portrait";
		}else{
			__newOrientation="landscape";
		}
		if(__orientation!=__newOrientation){
			 location.reload();
		}
	});