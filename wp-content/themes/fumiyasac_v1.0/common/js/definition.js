/*
    definition.js	
	
	Fumiya Sakai(Just One Factory)
	
*/

$(document).ready(function(){
    //Fade Action.
    var WRAPPER = "#wrapper";
    var NOW_LOADEING = "#nowLoading";

    $(WRAPPER).css("display","none");
    $(NOW_LOADEING).css("display","block");	
	
    $(window).load(function(){
        $(NOW_LOADEING).fadeOut("slow",function(){
            $(WRAPPER).css("display","block");
            $(WRAPPER).css("opacity",0);
            $(WRAPPER).fadeTo("slow", 1.0, function(){
				
                /* Edit Action */
				
                //Footer Scroll
                $('.partnerContent').jScrollPane();	
				
                //Lazyload
                $('.image').lazyload({
                    effect:"fadeIn"
                });
				
            });
        });
    });
													 
    //Rollover Action.
    $('#mainContainer nav ul li a').opOver(1.0,0.3,400,400);
	
    //Sidebar Rollover
    $('.sideNavContent ul li a').hover(function(){
        $(this).animate({color:'#000000',backgroundColor:'#f7f7f7'},200);
    },function(){
        $(this).animate({color:'#333333',backgroundColor:'#ffffff'},200);
    });
	
    //Form Auto Clear
    $('.autoClear').autoclear();
        
    //get Twitter jsonp list
    var TWITTER_ACCOUNT = 'http://api.twitter.com/1/statuses/user_timeline.json?screen_name=fumiyasac&count=1&callback=?';
    var COUNT_NUM = 1;
    $.getJSON(TWITTER_ACCOUNT, function (json) {
        for(var i=0; i<COUNT_NUM; i++){
            var text = json[i].text;
            text = text.replace(/(s?https?:\/\/[-_.!~*'()a-zA-Z0-9;\/?:@&=+$,%#]+)/gi,'<a href="$1">$1</a>');
            text = text.replace(/#(\w+)/gi,'<a href="http://twitter.com/search?q=%23$1">#$1</a>');
            text = text.replace(/@(\w+)/gi,'<a href="http://twitter.com/$1">@$1</a>');
            $("ul#twitList1").append('<li class="twitEntry"><span>' + text + '</span></li>');
        }
    });
	
});
