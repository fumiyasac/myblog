/*
    validator.js	
	
	Fumiya Sakai(Just One Factory)
	
*/
$(document).ready(function(){
	
    //Configure
    const COMMENT_FORM = '#commentform';
    const COLOR_ERROR = '#ffcccc';
    const COLOR_CORRECT = '#ffffff';
    const AUTHOR_SELECTOR = 'input#author';
    const MAIL_SELECTOR = 'input#email';
    const COMMENT_SELECTOR = 'textarea#comment';

    //Variables
    var ERROR_FLAG = false;
    var AUTHOR_COUNTER;
    var COMMENT_COUNTER;
    var author_status;
    var mail_status;
    var comment_status;
	
    //Action	
    $(COMMENT_FORM).submit(function(){
		
        //Author Validate
	AUTHOR_COUNTER = $(AUTHOR_SELECTOR).val().length;		
		
	if($(AUTHOR_SELECTOR).val() == '' || $(AUTHOR_SELECTOR).val() == 'お名前を入力して下さい（必須）'){

            $(AUTHOR_SELECTOR).css("background-color",COLOR_ERROR);
            ERROR_FLAG = true;
            //alert('case1-1');

	}else if(AUTHOR_COUNTER > 32){
		
            $(AUTHOR_SELECTOR).css("background-color",COLOR_ERROR);
            ERROR_FLAG = true;
            //alert('case1-2');

        }else{
			
            $(AUTHOR_SELECTOR).css("background-color",COLOR_CORRECT);
            author_status = 1;
            //alert('case1:OK');
			
	}
		
	//Email Validate
	if($(MAIL_SELECTOR).val() == ''){
		
            $(MAIL_SELECTOR).css("background-color",COLOR_ERROR);
            ERROR_FLAG = true;
            //alert('case2-1');
	
	}else if(!$(MAIL_SELECTOR).val().match(/.+@.+\..+/g)){

            $(MAIL_SELECTOR).css("background-color",COLOR_ERROR);
            ERROR_FLAG = true;
            //alert('case2-2');
						
	}else{
			
            $(MAIL_SELECTOR).css("background-color",COLOR_CORRECT);
            mail_status = 1;
            //alert('case2:OK');
	}
		
	//Comment Validate
	COMMENT_COUNTER = $(COMMENT_SELECTOR).val().length;

	if($(COMMENT_SELECTOR).val() == ''){

            $(COMMENT_SELECTOR).css("background-color",COLOR_ERROR);
            ERROR_FLAG = true;
            //alert('case3-1');
		
	}else if(COMMENT_COUNTER > 500){

            $(COMMENT_SELECTOR).css("background-color",COLOR_ERROR);			
            ERROR_FLAG = true;
            //alert('case3-2');
			
        }else{

            $(COMMENT_SELECTOR).css("background-color",COLOR_CORRECT);
            comment_status = 1;
            //alert('case3:OK');

	}
		
	if(author_status == 1 && mail_status == 1 && comment_status == 1){
            ERROR_FLAG = false;
	}
		
	if(ERROR_FLAG == true){
            //alert('Error! Error flag:' + ERROR_FLAG);
            return false;
	}
		
    });
	
});