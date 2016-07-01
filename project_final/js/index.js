var g_cardBackground = '';
var g_cardImage = '';
var g_cardMessage = '';

$(document).on('click', ".background",function() { 
    var img = $(this).children('img');
    g_cardBackground = img.attr('src');
    background_change(g_cardBackground);
});

$(document).on('click', ".detail",function() { 
    var img = $(this).children('img');
    g_cardImage = img.attr('src');
    detail_change(g_cardImage);
});

function detail_change(detail) 
{
    var canvas = document.getElementById("canvas").getContext("2d");
    var img = new Image();      
    img.onload = function() {
        canvas.clearRect(150, 250, 180, 250);
        canvas.drawImage(img, 150, 250, 180, 250);
    }
    img.src = detail;
}

function background_change(background) 
{
    var canvas = document.getElementById('canvas');
    canvas.style.backgroundImage='url('+background+')';
}

$('.cards_button').on('click', function() {
    g_cardMessage = $(".text_box").val();
    $.ajax({
        url: "adding_to_the_database.php?background="+g_cardBackground[15]+"&image="+g_cardImage[4]+"&message="+g_cardMessage,
        success: function (){}
    });
});