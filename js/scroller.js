jQuery(function ($) {
	var sc = $.noConflict();
	
	//#pageTop : the topmost element : used to scroll to top
	var pageTop = sc('#pageTop').offset().top;
	var distanceTop = 300;

	sc(document).ready(function(){		
		sc(document).scroll(function(){
			bodyTop = ({
				onBody: sc('body').scrollTop(), //General browser uses body with scroll
				onHtml: sc('html').scrollTop()  //firefox uses html with scroll 
			});
			runScroller( bodyTop );
		});		
		
		sc('#Scroller').click(function(){
			doScroll( pageTop );
			//hideNav();
			//mobiIcon( 1 , '.mobile i');
		});
	});//ready
	
	
	
	function runScroller(bodyTop){	
		if( bodyTop['onBody'] > distanceTop || bodyTop['onHtml'] > distanceTop ){
			sc('.home #Scroller').css({display: 'block'});
		}else{
			sc('.home #Scroller').css({display: 'none'});
		}
	
	}//runScroller
	
	function doScroll(scrollHere){
		sc('html, body, document').animate({
			scrollTop: scrollHere
			}, 500);
	}//doScroll
});//scuery function