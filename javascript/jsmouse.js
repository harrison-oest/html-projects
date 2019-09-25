var canvas = document.getElementById("canvas");
var center_x = 200;
var center_y = 200;
var radius = 180;

function drawSmileyFace() {
	var ctx = canvas.getContext("2d");
	drawFace();
	drawEyes();
	drawSmile();
}

function drawSadFace() {
	var ctx = canvas.getContext("2d");
	drawFace();
	drawEyes();
	drawFrown();
}

function drawFace() {
	var ctx = canvas.getContext("2d");
	ctx.beginPath();
	ctx.fillStyle = "yellow";
	ctx.arc(center_x, center_y, radius, 0, Math.PI * 2, true); 
	ctx.closePath();
	ctx.fill();
}

function drawEyes() {
	var ctx = canvas.getContext("2d");
	ctx.moveTo(150,150);
	ctx.beginPath();
	ctx.fillStyle = "black";
	ctx.arc(150, 150, 20, 0, Math.PI * 2, true);  
   	ctx.closePath();  
   	ctx.fill();

   	ctx.moveTo(200,150);
   	ctx.beginPath();  
   	ctx.fillStyle = "black";  
   	ctx.arc(250, 150, 20, 0, Math.PI * 2, true);  
   	ctx.closePath();  
   	ctx.fill();  
}

function drawSmile() {
	var ctx = canvas.getContext("2d");
	ctx.moveTo(200, 250);  
   	ctx.beginPath();  
   	ctx.strokeStyle = "black";  
   	ctx.lineWidth = 5;
   	ctx.arc(200, 230, 90, 0, Math.PI, false);  
   	ctx.stroke();
}

function drawFrown() {
	var ctx = canvas.getContext("2d");
	ctx.moveTo(200, 250);  
   	ctx.beginPath();  
   	ctx.strokeStyle = "black";  
   	ctx.lineWidth = 5;
   	ctx.arc(200, 320, 90, Math.PI, Math.PI * 2, false);  
   	ctx.stroke();
}

function btnPress() {
	var button = document.getElementById("button");
	if(button.innerHTML=="Make Me Sad") {
		button.innerHTML="Make Me Happy";
		drawSadFace();
	}
	else {
		button.innerHTML="Make Me Sad";
		drawSmileyFace();
	}
}

canvas.addEventListener("mousedown", getPosition, false);

function getPosition(event)
{
  var x = event.x;
  var y = event.y;

  x -= canvas.offsetLeft;
  y -= canvas.offsetTop;

  if (((x-center_x)**2 + (y-center_y)**2) < radius**2) {
  	btnPress();
  }
}

function toggleMode() {
	var darkBtn = document.getElementById("dark_mode");
	if(darkBtn.innerHTML=="Dark Mode"){
		darkBtn.innerHTML="Light Mode";
		document.body.style.backgroundImage = "url('../images/blackpaper.jpg')";
		document.getElementById("title").style.color = "white";
	} else {
		darkBtn.innerHTML="Dark Mode";
		document.body.style.backgroundImage = "url('../images/paper.jfif')";
		document.getElementById("title").style.color = "black";
	}
}

drawSmileyFace();