<?php

echo include("header.php");


?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 250px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

* {
	box-sizing: border-box;
}
.column {
	float: left;
	width: 33.33%;
	padding: 5px;
}
.row::after {
	content: "";
	clear: both;
	display: table;
}
h3{
	text-align: center;
	font-family: cursive;
	color: #470938;
}
.image_card{
	height: 30%;
}
.hover-opacity:hover{
	opacity:0.60;
	}
</style>
</head>
<body>

<div class = "row">
	<div class = "column">
		<h2>New In Collection!</h2>
		<div class="slideshow-container">
		<div class="mySlides fade">
		  <div class="numbertext">1 / 4</div>
		  <img src="images/BCI12.jpg" style="width:100%">
		  <div class="text">Hobbits</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">2 / 4</div>
		  <img src="images/BCI13.jpg" style="width:100%">
		  <div class="text">Return of the Kings</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">3 / 4</div>
		  <img src="images/BCI14.jpg" style="width:100%">
		  <div class="text">Harry Potter 5</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext">4 / 4</div>
		  <img src="images/BCI15.jpg" style="width:100%">
		  <div class="text">Game Of Thrones</div>
		</div>
		</div>	
	</div>

	<div class = "column">
			<h2>Popular Collection!</h2>
		<div class = "row">
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI19.jpg"> </div>
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI20.jpg"> </div>
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI21.jpg"> </div>
		</div>
		<div class = "row">
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI22.jpg"> </div>
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI23.jpg"> </div>
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI24.jpg"> </div>
		</div>
	</div>
	
		<div class = "column">
			<h2>Old Collection...</h2>
		<div class = "row">
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI25.jpg"> </div>
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI26.jpg"> </div>
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI27.jpg"> </div>
		</div>
		<div class = "row">
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI28.jpg"> </div>
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI29.jpg"> </div>
			<div class = "column">  <img class = "image_card hover-opacity" src="images/BCI30.jpg"> </div>
		</div>
	</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 




<?php

echo include("footer.php");


?>   