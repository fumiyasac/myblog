/*
    pagescroller.js	
	
	Fumiya Sakai(Just One Factory)
	
*/
$(function(){
  
    var selector = "a[href=\"#pageTop\"]";
    var duration = 400;
    var easing = "easeInOutExpo";
    
    $(selector).bind("click", onClick);
    
    function onClick(e) {
      e.preventDefault();
      
      $("html, body").animate({
        scrollTop: 0
      }, {
        duration: duration,
        easing: easing
      });
    }
  
});