window.addEventListener("load", () =>{
	const canvas = document.querySelector("#canvas");
	const ctx = canvas.getContext("2d");

canvas.height = 600;
canvas.width = 800;

let painting = false;

function startposition(e){
	painting = true;
	draw(e);
}
function finishedposition(){
	painting = false;
	ctx.beginPath();
}
function myFunction(event) {
  var x = event.which || event.keyCode;
  if(x==70)
  {
	  clear();
  }
}


function draw(e){
	if(!painting) return;
	ctx.lineWidth = 5;
	ctx.lineCap="round";
	
	ctx.lineTo(e.clientX,e.clientY);
	ctx.stroke();
	
	ctx.beginPath();
	ctx.moveTo(e.clientX,e.clientY);
}
	canvas.addEventListener("mousedown", startposition);
	canvas.addEventListener("mouseup", finishedposition);
	canvas.addEventListener("mousemove", draw);
	canvas.addEventListener("onkeypress", myFunction);
});