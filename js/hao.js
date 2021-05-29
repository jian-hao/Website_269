
	var slideIndex = 2
	var numOfImg = "<?php echo $num; ?>"
	showSlides(slideIndex);
	// Next/previous controls
	function plusSlides(n) {
		if ((n==1)&&(slideIndex==numOfImg)) 
		{
			showSlides(numOfImg);
		}
		else if ((n==-1)&&(slideIndex==1)) 
		{
			showSlides(1);
		}
		else
		{
			showSlides(slideIndex += n);
		}
	}

	// Thumbnail image controls
	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("demo");
		var captionText = document.getElementById("caption");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";
		dots[slideIndex-1].className += " active";
		captionText.innerHTML = dots[slideIndex-1].alt;
	}
