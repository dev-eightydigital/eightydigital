jQuery( function($) {
var navItem = 'header ul li a';
		var navItem_activeClass = 'selected'; //when clicked add class 'selected' to the navItem
var bodySml = 'body--sml';
var nv = $.noConflict();

nv(document).ready(function(){
	checkDimSml();
	nv(window).resize(function(){ 
		//check width on max-width: 767px
		//addClass('body--sml') to header
		checkDimSml();
	});
	
	nv(navItem).click(function(event){
		//event.preventDefault();
		//menu: on when clicked
		activeMenuItem(this);
		//menu & logo: scroll to data-target
		thisTarget = nv(this).attr('data-target');
		
		ustat = (userStatus == true)? 30 : 0 ;
		doScroll( nv('#'+thisTarget).offset().top-ustat );
		});
	
	//mobile bar to show nav menu
	var mobclick = 1;
	nv('.mobile i').click(function(){
		mobclick++;
		//toggle class bars and times (for close) navigation 
		mobiIcon( mobclick , this);
		});//\mobile i on click
	
	nv('header a').click(function(){
		hideNav();
		mobclick++;
		mobiIcon( mobclick , '.mobile i');
		});//\header a on click
			
});//ready	
	
//check if window is max-width: 767px
function checkDimSml(){
	var winWidth = nv(window).width();
	if(winWidth <= 767){
		nv('body').addClass(bodySml);
		hideNav();
	}else{
		nv('body').removeClass(bodySml);
		nv('header').css({right: '0px'});
	}
}//checkDimSml

function hideNav(){
	nv('.'+bodySml+' header').animate({right: '-200px'});
	}
	
function showNav(){
	nv('.'+bodySml+' header').animate({right: 0});
	}
	
function mobiIcon( numClick , mobObj){
	if(numClick % 2 == 0){
		nv(mobObj).removeClass('fa-bars');
		nv(mobObj).addClass('fa-times');
		//show header
		showNav();
	}else{
		nv(mobObj).addClass('fa-bars');
		nv(mobObj).removeClass('fa-times');
		//hide header
		hideNav();
	}
}

function activeMenuItem(thisItem){
	nv(navItem).removeClass( navItem_activeClass );
	nv(thisItem).addClass( navItem_activeClass );
	}	
function deactivateMenuItem(){
	nv(navItem).removeClass( navItem_activeClass )
			.css({ position: 'relative' });
	}

function doScroll(scrollHere){
	nv('html, body, document').animate({
		scrollTop: scrollHere
		}, 500);
	}//doScroll	
});//jQuery
