var images = [
	"public/img/Artwork.jpg",
	// "public/img/2.jpg",
	// "public/img/3.jpg",
	// "public/img/4.jpg"
];
var num = 0;
var t = setInterval(next,5000);

function prev(){
	clearInterval(t);
	t = setInterval(next, 5000);
	var slider = document.getElementById("slider");
	num--;
	if(num < 0){
		num = images.length - 1;
	}
	slider.src = images[num];
}

function next(){
	clearInterval(t);
	t = setInterval(next, 5000);
	var slider = document.getElementById("slider");
	num++;
	if(num >= images.length){
		num = 0;
	}
//	slider.src = images[num];
}
