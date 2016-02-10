$(document).ready(function() {

	// remove sidebar to show just the background image
	$("#side_menu").remove();
	$("#main_content").css("width", "100%");


	// THESE ARE JUST TEMP VALUES FOR TESTING
	var image = document.getElementById("background_img");
	var image_paths = ["images/i1.jpg", "images/i2.jpg", "images/i3.jpg", "images/i4.jpg"];
	var index=0;
	function changeImage() {
		image.setAttribute("src", image_paths[index]);
		if(index >= image_paths.length-1) {
			index = 0;	// reset
		} else {
			index++;
		}
	}
	setInterval(changeImage, 3000);	// intervals in millisecond
});
