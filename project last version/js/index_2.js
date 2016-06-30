$.ajax({
    url: "index_2.php"+location.search, 
    dataType: 'json',
    success: function (data){change(data['background_id'], data['image_id'], data['message']);},
    error: function(){alert('Problem');}
});

function change(background, image, message)
{
  change_background(background);
  detail_change(image);
  set_message(message);
}

function change_background(id)
{$('#canvas').css("background", "url('../project/img/background_"+id+".jpg') 100% 100% no-repeat").css("background-size","cover"); }

function detail_change(id)
{
    var canvas = document.getElementById("canvas").getContext("2d");
	var img = new Image();      
    img.onload = function() {
	    canvas.clearRect(150, 250, 180, 250);
        canvas.drawImage(img, 150, 250, 180, 250);
    }
    img.src = "img/"+id+".png";
};

function set_message(message)
{
    var header = document.getElementById('text_box');
	header.innerHTML = message;
}