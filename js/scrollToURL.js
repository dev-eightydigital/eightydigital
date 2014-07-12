jQuery( function($){
	var jq = $.noConflict();
	var sec = getUrlParameter('sec');

	jq(document).ready(function(){
		if(sec){
			dataTarget = $('a#'+sec).attr('data-target');
			secTop = $('#'+dataTarget).offset().top-30;
			doScroll(secTop);
		}
		});//ready
	
	function getUrlParameter(sParam){
		var sPageURL = window.location.search.substring(1);
		var sURLVariables = sPageURL.split('&');
		for(var i=0; i < sURLVariables.length; i++){
				var sParameterName = sURLVariables[i].split('=');
				if(sParameterName[0] == sParam){
					return sParameterName[1];
				}else{
					return false;
					}
				}
	}//getUrlParameter()
	
	function doScroll(scrollHere){
		jq('html, body, document').animate({
			scrollTop: scrollHere
			}, 500);
	}//doScroll
	
});//jQuery