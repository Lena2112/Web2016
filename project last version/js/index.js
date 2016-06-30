var CARD_BACK = '';
var CARD_IMG = '';
var CARD_MESS = '';

$(document).on('click', ".background",function() { 
	var img = $(this).children('img');
	CARD_BACK = img.attr('src');
	background_change(CARD_BACK);
});

$(document).on('click', ".detail",function() { 
	var img = $(this).children('img');
	CARD_IMG = img.attr('src');
	detail_change(CARD_IMG);
});

function detail_change(detail){
    var canvas = document.getElementById("canvas").getContext("2d");
	var img = new Image();      
    img.onload = function() {
	    canvas.clearRect(150, 250, 180, 250);
        canvas.drawImage(img, 150, 250, 180, 250);
    }
    img.src = detail;
}

function background_change(background) {
    var canvas = document.getElementById('canvas');
    canvas.style.backgroundImage='url('+background+')';
}

$('.cards_button').on('click', function() {
    CARD_MESS = $(".text_box").val();
    $.ajax({
        url: "index_take.php?background="+CARD_BACK[15]+"&image="+CARD_IMG[4]+"&message="+CARD_MESS,
        success: function (){}
    });
});