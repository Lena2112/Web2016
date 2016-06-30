$(document).on('click', ".arrow_next",function(){ 
	var carousel = $(this).parents('.selecting_unit');
	bottom_carousel(carousel);
	return false;
});

$(document).on('click',".arrow_prev",function(){ 
	var carousel = $(this).parents('.selecting_unit');
	top_carousel(carousel);
	return false;
});

function top_carousel(carousel)
{
   var block_height = $(carousel).find('li').outerHeight();
   $(carousel).find("ul li").eq(-1).clone().prependTo($(carousel).find("ul")); 
   $(carousel).find("ul").css({"top":"-"+block_height+"px"});
   $(carousel).find("ul li").eq(-1).remove();    
   $(carousel).find("ul").animate({top: "0px"}, 500);
}

function bottom_carousel(carousel)
{
   var block_height = $(carousel).find('li').outerHeight();
   $(carousel).find("ul").animate({top: "-"+ block_height +"px"}, 500, function(){
	    $(carousel).find("ul li").eq(0).clone().appendTo($(carousel).find("ul")); 
        $(carousel).find("ul li").eq(0).remove(); 
        $(carousel).find("ul").css({"top":"0px"});
   }); 
}

$('.go_to_message').on('click', function(){ 
    $('#right_block').css("display", "none"); 
    $('#right_block_2').css("display", "block");
	return false;
});

$('.go_to_choose').on('click', function(){ 
    $('#right_block').css("display", "block"); 
    $('#right_block_2').css("display", "none");
	return false;
});