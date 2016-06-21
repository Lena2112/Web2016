var CANVAS_WIDTH = 471;
var CANVAS_HEIGHT = 532;

$(document).on('click', ".arrow_next",function(){ 
	var carusel = $(this).parents('.selecting_unit');
	right_carusel(carusel);
	return false;
});

$(document).on('click',".arrow_prev",function(){ 
	var carusel = $(this).parents('.selecting_unit');
	left_carusel(carusel);
	return false;
});
function left_carusel(carusel){
   var block_height = $(carusel).find('li').outerHeight();
   $(carusel).find("ul li").eq(-1).clone().prependTo($(carusel).find("ul")); 
   $(carusel).find("ul").css({"top":"-"+block_height+"px"});
   $(carusel).find("ul li").eq(-1).remove();    
   $(carusel).find("ul").animate({top: "0px"}, 500); 
   
}
function right_carusel(carusel){
   var block_height = $(carusel).find('li').outerHeight();
   $(carusel).find("ul").animate({top: "-"+ block_height +"px"}, 500, function(){
	  $(carusel).find("ul li").eq(0).clone().appendTo($(carusel).find("ul")); 
      $(carusel).find("ul li").eq(0).remove(); 
      $(carusel).find("ul").css({"top":"0px"}); 
   }); 
}

$(document).on('click', ".background",function(){ 
	var img = $(this).children('img');
	var background = img.attr('src');
	background_change(background);
	return false;
});

$(document).on('click', ".details",function(){ 
	var img = $(this).children('img');
	var details = img.attr('src');
	details_change(details);
	return false;
});

function details_change(details){
    var canvas = document.getElementById("canvas").getContext("2d");
	canvas.width = CANVAS_WIDTH;
	canvas.height = CANVAS_HEIGHT; 
	var img = new Image();      
    img.onload = function() {
	    canvas.clearRect(150, 250, 180, 250);
        canvas.drawImage(img, 150, 250, 180, 250)
    }
    img.src = details;
}
function background_change(background){
     var a = document.getElementById('canvas');
     a.style.backgroundImage='url('+background+')';
}

$('.go_to_message').on('click', function(){ 
$('#right_block').css("display", "none"); 
$('#right_block_2').css("display", "block");
});

$('.go_to_choose').on('click', function(){ 
$('#right_block').css("display", "block"); 
$('#right_block_2').css("display", "none");
});


