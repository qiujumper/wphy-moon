
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

//Function to prevent Default Events
function pde(e){
  var evt = e || window.event; // IE compatibility

  if(e.preventDefault){
    evt.preventDefault();
  } else{
    evt.returnValue = false;
    evt.cancelBubble = true;
  }
}

 //make same height/width div and half height/width div
function make_square(){  
  if(jQuery('.square-div').length > 0)
  div_width = jQuery('.square-div').width();
  jQuery('.square-div').css({
      'height': div_width + 'px'
  });
}


 
function make_square_half_height(){  
  if(jQuery('.square-half-div').length > 0)
  div_width = jQuery('.square-half-div').width()/2;
  jQuery('.square-half-div').css({
      'height': div_width + 'px'
  });
} 

