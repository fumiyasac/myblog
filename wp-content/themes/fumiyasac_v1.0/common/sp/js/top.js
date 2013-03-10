/*
    top.js	
	
	Fumiya Sakai(Just One Factory)
	
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
    var positionPicsNav = 160 - navPicsWidth / 2;
    $('#navPics').css("left",positionPicsNav);
    
});