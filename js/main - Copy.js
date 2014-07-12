//document dimension
//use to initialize height and width of the current browser
var docuDim = new Array();
//main navigation menu item
var navItem = 'header ul li a';
		var navItem_activeClass = 'selected'; //when clicked add class 'selected' to the navItem
var color1 = '#8a8a8b', //link color1
	color2 = '#ffffff'; //link color2 :hover
//distance from top where head nav changes and show the BackToTop button
var distanceTop = 200;
//initialize section offset top : topmost position of the section
var section = ({
	1: ({ offsetTop: $('#section--1').offset().top }), //home
	2: ({ offsetTop: $('#section--2').offset().top }), //who we are
	3: ({ offsetTop: $('#section--3').offset().top }), //our work
	4: ({ offsetTop: $('#section--4').offset().top }), //what we do	
	5: ({ offsetTop: $('#section--5').offset().top }), //our team
	6: ({ offsetTop: $('#section--6').offset().top }), //blog
	7: ({ offsetTop: $('#section--7').offset().top }),  //get in touch
	});
//class when window resizes to 767
var bodySml = 'body--sml';
$('document').ready(function() {
	//initialize section height
	initSectionDim();
	//on resizing the browser, automatically resize the dimension of the sections
	//and the distance of home text from the topmost corner of the browser
	checkDimSml()
	$(window).resize(function(){ 
		//initialize section's width and height again
		initSectionDim();
		//check width on max-width: 767px
		//addClass('header--sml') to header
		checkDimSml();
	});
	//on click item on menu, go to respective section
	$(navItem).click(function(event){
		event.preventDefault();
		//menu: on when clicked
		activeMenuItem(this);
		//menu & logo: scroll to data-target
		thisTarget = $(this).attr('data-target');
		
		ustat = (userStatus == true)? 30 : 0 ;
		doScroll( $('#'+thisTarget).offset().top-ustat );
		});
	//on click logo, animate scroll to top
	$('nav .home').click(function(event){
		event.preventDefault();
		doScroll( section[1]['offsetTop'] );
		});
	//on scroll event
	$(document).scroll(function(){
		bodyTop = ({
			onBody: $('body').scrollTop(), //General browser uses body with scroll
			onHtml: $('html').scrollTop()  //firefox uses html with scroll 
		});
		runScroller( bodyTop );
		
		//change logo image when body scrolls to section--2
		if(bodyTop['onBody'] > section[2]['offsetTop'] || bodyTop['onHtml'] > section[2]['offsetTop']){
			$('.logo').css({display: 'none'});
			$('.logo2').css({display: 'block'});
		}else{
			$('.logo').css({display: 'block'});
			$('.logo2').css({display: 'none'});
		}
		//add class to header if reaches > 300 scrollTop
		//blank transparent tint effect
		if(bodyTop['onBody'] > distanceTop || bodyTop['onHtml'] > distanceTop){
			$('header').addClass('header--fix');
		}else{
			$('header').removeClass('header--fix');
		}
		//set nav item to active when reaches its top position
		//addClass selected
		section[2]['fromTop'] = $('#section--2').position().top-300;
		section[3]['fromTop'] = $('#section--3').position().top-300;
		section[4]['fromTop'] = $('#section--4').position().top-300;
		section[5]['fromTop'] = $('#section--5').position().top-300;
		section[6]['fromTop'] = $('#section--6').position().top-300;
		section[7]['fromTop'] = $('#section--7').position().top-300;
		
		if( bodyTop['onBody'] >= section[2]['fromTop'] && bodyTop['onBody'] < section[3]['fromTop'] ||
			bodyTop['onHtml'] >= section[2]['fromTop'] && bodyTop['onHtml'] < section[3]['fromTop'] ){
			activeMenuItem( $(navItem+':eq(0)') ); 
		}else 
		if( bodyTop['onBody'] >= section[3]['fromTop'] && bodyTop['onBody'] < section[4]['fromTop'] ||
			bodyTop['onHtml'] >= section[3]['fromTop'] && bodyTop['onHtml'] < section[4]['fromTop'] ){
			activeMenuItem( $(navItem+':eq(1)') ); 
		}else 
		if( bodyTop['onBody'] >= section[4]['fromTop'] && bodyTop['onBody'] < section[5]['fromTop'] ||
			bodyTop['onHtml'] >= section[4]['fromTop'] && bodyTop['onHtml'] < section[5]['fromTop'] ){
			activeMenuItem( $(navItem+':eq(2)') ); 
		}else 
		if( bodyTop['onBody'] >= section[5]['fromTop'] && bodyTop['onBody'] < section[6]['fromTop'] ||
			bodyTop['onHtml'] >= section[5]['fromTop'] && bodyTop['onHtml'] < section[6]['fromTop'] ){
			activeMenuItem( $(navItem+':eq(3)') ); 
		}else 
		if( bodyTop['onBody'] >= section[6]['fromTop'] && bodyTop['onBody'] < section[7]['fromTop'] ||
			bodyTop['onHtml'] >= section[6]['fromTop'] && bodyTop['onHtml'] < section[7]['fromTop'] ){
			activeMenuItem( $(navItem+':eq(4)') ); 
		}else 
		if( bodyTop['onBody'] >= section[7]['fromTop'] ||
			bodyTop['onHtml'] >= section[7]['fromTop'] ){
			activeMenuItem( $(navItem+':eq(5)') ); 
		}else{
			deactivateMenuItem(); 
			}

		});//\scroll 
		
	
	
	//#TalkToUs button on click
	$('#TalkToUs').on('click', function(){
		target = $('#TalkToUs').attr('data-target');
		doScroll( $('#'+target).offset().top );
		});
		
	//mobile bar to show nav menu
	var mobclick = 1;
	$('.mobile i').click(function(){
		mobclick++;
		//toggle class bars and times (for close) navigation 
		mobiIcon( mobclick , this);
		});//\mobile i on click
	
	$('header a').click(function(){
		hideNav();
		mobclick++;
		mobiIcon( mobclick , '.mobile i');
		});//\header a on click
	
	$('#Scroller').click(function(){
		doScroll( section[1]['offsetTop'] );
		hideNav();
		mobiIcon( 1 , '.mobile i');
		});
});

function mobiIcon( numClick , mobObj){
		if(numClick % 2 == 0){
			$(mobObj).removeClass('fa-bars');
			$(mobObj).addClass('fa-times');
			//show header
			showNav();
		}else{
			$(mobObj).addClass('fa-bars');
			$(mobObj).removeClass('fa-times');
			//hide header
			hideNav();
		}
	}

function hideNav(){
	$('.'+bodySml+' header').animate({right: '-200px'});
	}
	
function showNav(){
	$('.'+bodySml+' header').animate({right: 0});
	}

function doScroll(scrollHere){
	$('html, body, document').animate({
		scrollTop: scrollHere
		}, 500);
	}//doScroll


function initSectionDim(){
	docuDim['width'] = $(window).width();
	docuDim['height'] = $(window).height();
	
	$('#section--1 .intro-text').css({
		paddingTop: docuDim['height']/3+'px'
		});
	
	$('.section').css({
		minHeight: docuDim['height']+'px'
		});
	}
	
function activeMenuItem(thisItem){
	$(navItem).removeClass( navItem_activeClass );
	$(thisItem).addClass( navItem_activeClass );
	}	
function deactivateMenuItem(){
	$(navItem).removeClass( navItem_activeClass )
			.css({ position: 'relative' });
	}

function runScroller(bodyTop){	
		if( bodyTop['onBody'] > distanceTop || bodyTop['onHtml'] > distanceTop ){
			$('#Scroller').css({display: 'block'});
		}else{
			$('#Scroller').css({display: 'none'});
		}
	
	}

//check if window is max-width: 767px
function checkDimSml(){
	var winWidth = $(window).width();
	if(winWidth <= 767){
		$('body').addClass(bodySml);
		hideNav();
	}else{
		$('body').removeClass(bodySml);
		$('header').css({right: '0px'});
	}
	
	}
