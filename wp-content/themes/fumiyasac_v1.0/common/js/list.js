/*
    list.js	
	
	Fumiya Sakai(fumiyasac.com)
	
*/

$(document).ready(function(){
	
	//ArticleList Rollover	
	$('.articleList').hover(function(){
		$(this).animate({backgroundColor:'#f7f7f7'},200);
	},function(){
		$(this).animate({backgroundColor:'#ffffff'},200);
	});
	
	//Pager Rollover	
	$('.pagerBlock a').hover(function(){
		$(this).animate({backgroundColor:'#d1d1d1'},200);
	},function(){
		$(this).animate({backgroundColor:'#f7f7f7'},200);
	});
	
});
