var images = ["carpark.jpg","parking1.jpg","parking2.jpg"];


var imageNumber =0;
var imageLength = image.length - 1;

function changeImg(x){
	imageNumber += x;
	
	if (imageNumber > imageLength){
		imageNumber = 0;
	}
	
	if (imageNumber < 0){
		imageNumber = imageLength;
	}
	
	document.getElementById("slideshow").src = images[imageNumber];
	//document.getElementById("caption").innerHTML = caption[imageNumber];
	
	return fasle;
}