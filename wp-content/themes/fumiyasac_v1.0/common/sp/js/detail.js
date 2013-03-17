/*
    detail.js	
	
	Fumiya Sakai(Just One Factory)
	
*/

$(document).ready(function(){
    
    //strip & replace character at breadcramb
    var targetBreadcramb = ['.breadcramb li.last'];
    var STRING_LIMIT = 10;
    initTargetListTags(targetBreadcramb, STRING_LIMIT);

    //strip & replace character at list links.
    var targetEntries =['.recentContent ul li a','.relatedContent ul li a']; 
    var STRING_LIMIT_ENTRIES = 20;
    initTargetListTags(targetEntries, STRING_LIMIT_ENTRIES);
    
    function initTargetListTags(array, val){
        for(i=0; i<array.length; i++){
            srtipListTag(array[i],val);
        }
    }
    
    function srtipListTag(target, val){
        count = $(target).length;
        for(var i=0; i<count; i++){
            stringLink = $(target).eq(i).html();
            //alert(stringLink);
            if(stringLink.length > val){
                newStringLink = stringLink.substr(0, val);
                $(target).eq(i).html(newStringLink + "...");
            }
        }   
    }
    
    //Panel action /* !if find bug IE, detele it. */
    var PANELS_BUTTON = ".commentToggle span";
    var AREA = ".commentArea"
    var COMMENT_COUNT_AREA = ".commentScntence";

    $(AREA).hide();

    if($(COMMENT_COUNT_AREA).length > 0){
        $(PANELS_BUTTON).css("cursor","pointer");
        $(PANELS_BUTTON).click(function () {
            $(AREA).slideToggle("fast");
        });
    }
    
});