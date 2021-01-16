

function changeColor() {
	var textbox_id = "txtColor";
  var textbox = document.getElementById(textbox_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
  var color = textbox.value;
  div.style.backgroundColor = color; 
}

$('#defaultColor').click(function(){
  //console.log("This is the set color " + color);
  $('#div1').css("background-color", 'rgb(60, 175, 179)');
});


function clickMe(){
  alert("Clicked!");
}

$(document).ready(function(){
  
  $('#jqBtn').click(function(){
    var color = $('#jqColor').val();
    //console.log("This is the set color " + color);
    $('#div4').css("background-color", color);
  });

  $('#jqColorDefault').click(function(){
    //console.log("This is the set color " + color);
    $('#div4').css("background-color", 'rgb(179, 131, 60)');
  });

  $('#fadeBtn').click(function(){
    $('#div6').fadeToggle(1000);
  });
  
});

  //
