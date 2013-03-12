/*
    detail.js	
	
	Fumiya Sakai(Just One Factory)
	
*/

$(document).ready(function(){
    
    //strip & replace character
    var TARGET_LIST = ".breadcramb li.last";
    var STRING_LIMIT = 10;
    var string = $(TARGET_LIST).html();
    if(string.length > STRING_LIMIT){
        newString = string.substr(0, STRING_LIMIT);
        $(TARGET_LIST).html(newString + "...");
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