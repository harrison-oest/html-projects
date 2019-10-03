var x = 0;
var y = 0;
var width = 80;
var height = 40;

window.onload = function() {
    var img = new Image();
    img.src = "../images/gtr.png";
    moveImage();

    window.addEventListener("keydown",keyDown,false);
};

function moveImage() {
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");

    var img = new Image();
    img.src = "../images/gtr.png";

    ctx.clearRect(0,0,400,400);
    
    img.addEventListener("load", function() {
        ctx.drawImage(img, x, y, width, height);
    }, false);
}

function keyDown(e) {
    var keyPress = e.keyCode;
  
    if(keyPress === 39 && x<=(400-height)){ 
        x = x+20;
    }
    else if(keyPress === 37 && x>=80){
        x = x-20;
    }
    else if(keyPress === 38 && y>=40) {
        y = y-20;
    }
    else if(keyPress === 40 && y<=(400-width)) {
        y = y+20;
    }
    moveImage();
}