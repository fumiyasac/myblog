/*
    definition.js	
	
	Fumiya Sakai(Just One Factory)
	
*/

$(document).ready(function(){
    
    //get Twitter jsonp list
    var TWITTER_ACCOUNT = 'http://api.twitter.com/1/statuses/user_timeline.json?screen_name=fumisac&count=1&callback=?';
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