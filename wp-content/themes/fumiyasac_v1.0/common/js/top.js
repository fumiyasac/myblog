/*
    top.js	
	
	Fumiya Sakai(fumiyasac.com)
	
*/

$(document).ready(function(){
		
	//jQuery Cycle Plugin(photo gallery)
  	$('#slider').cycle({
  		fx : 'fade',
  		speed : 600,
  		timeout : 6000,
  		easing : 'swing',
  		pause : 0,
		pager: '#navPics',
		cleartype: true
  	});
    
	//jQuery Cycle Plugin(dot navigation)
	var navPicsWidth = $('#navPics').width();
	var positionPicsNav = 490 - navPicsWidth / 2 - 8;
	$('#navPics').css("left",positionPicsNav);
		
	//ArticleList Rollover	
	$('.articleList').hover(function(){
		$(this).animate({backgroundColor:'#f7f7f7'},200);
	},function(){
		$(this).animate({backgroundColor:'#ffffff'},200);
	});
	
	//aboutSlider
	$('#aboutGallery').cycle({
    	fx:      'scrollLeft',
    	next:   '#aboutGallery',
    	timeout:  6000,
    	easing:  'easeInOutBack'
	});
	
});
