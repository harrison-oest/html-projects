var canvas = document.getElementById("canvas")
canvas.setAttribute('tabindex', '0');
canvas.focus();
canvas.addEventListener("keypress",keyDown,true);
ctx = canvas.getContext("2d");
var x = 10;
var y = 10;
var width = 80;
var height = 40;
var img = new Image();
img.onload = function() {
	ctx.drawImage(img, x, y, width, height);
}
img.src = "../images/gtr.png";

function moveImage(x, y) {
    ctx.drawImage(img, x, y, width, height);
}

function keyDown(e) {
    var keyPress = e.keyCode;
  
    if(keyPress === 39 && x<=400){ 
        x = x+20;
        ctx.clearRect(0,0,400,400);
  		moveImage(x,y);
    }
    else if(keyPress === 37 && x>=10){
        x = x-20;
        ctx.clearRect(0,0,400,400);
  		moveImage(x,y);
    }
    else if(keyPress === 38 && y>=10) {
        y = y-20;
        ctx.clearRect(0,0,400,400);
  		moveImage(x,y);
    }
    else if(keyPress === 40 && y<=400){
        y = y+20;
        ctx.clearRect(0,0,400,400);
  		moveImage(x,y);
    }
}