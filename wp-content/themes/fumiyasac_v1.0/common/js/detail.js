/*
    detail.js	
	
	Fumiya Sakai(Just One Factory)
	
*/

$(document).ready(function(){
	
	//RelatedEntry Rollover	
	$('.relatedEntry .relatedContent ul li a').hover(function(){
		$(this).animate({backgroundColor:'#f7f7f7'},200);
	},function(){
		$(this).animate({backgroundColor:'#ffffff'},200);
	});

	//RecentEntry Rollover	
	$('.recentEntry .recentContent ul li a').hover(function(){
		$(this).animate({backgroundColor:'#f7f7f7'},200);
	},function(){
		$(this).animate({backgroundColor:'#ffffff'},200);
	});

	//submit Rollover	
	$('#submit').hover(function(){
		$(this).animate({backgroundColor:'#d1d1d1',color:'#ffffff'},200);
	},function(){
		$(this).animate({backgroundColor:'#f7f7f7',color:'#333333'},200);
	});
	
	//Panel action /* !if find bug IE, detele it. */
	var PANELS_BUTTON = ".commentToggle span";
	var AREA = ".commentArea"
        var COMMENT_COUNT_AREA = ".commentScntence";
        
	$(AREA).hide();
        
        if($(COMMENT_COUNT_AREA).length > 0){
            $(PANELS_BUTTON).css("cursor","pointer");

            $(PANELS_BUTTON).hover(function(){
                $(this).animate({backgroundColor:'#d1d1d1',color:'#ffffff'},200);
            },function(){
                $(this).animate({backgroundColor:'#f7f7f7',color:'#333333'},200);
            });

            $(PANELS_BUTTON).click(function () {
                $(AREA).slideToggle("fast");
            });
        }
	
});

//shadowbox
Shadowbox.init({
  language:'jp',
  players:['img', 'html', 'iframe', 'qt', 'wmp', 'swf', 'flv'],
  handleOversize:"drag",
  overlayOpacity:"0.8"
});