<?php
session_start();
require_once("dbcontroller.php");
require_once("lib_uchi.php");
require_once("lib_topnav.php");
$db_handle = new DBController();
?>

<HTML>
<?php echo htmlHeader(); ?>

<BODY>
<?php echo htmlTopNav(); ?>
 <div id="product-grid">
	<div class="txt-heading">Welcome:</div>
 </div>

<style>
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 478px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.activeP, .dot:hover {
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
  .prev, .next,.text {font-size: 11px}
}
</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="product-images/uchikomidai_front.jpg" style="height:75%">
  <div class="text">Uchikomidai Front</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="product-images/uchikomidai_side.jpg" style="height:75%">
  <div class="text">Uchikomidai Side</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="product-images/uchikomidai_half_side.jpg" style="height:75%">
  <div class="text">Uchikomidai Close-up</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
var timer = 0;
var restartTimer = 0;
showSlides(slideIndex);
startTimer();

function startTimer()
{
  timer = setInterval(scrollSlides, 3000); // Change image every 2 seconds
}

function scrollSlides()
{
  showSlides(slideIndex += 1);
}

function plusSlides(n) {
  showSlides(slideIndex += n);
  clearInterval(timer);
  clearTimeout(restartTimer);
  restartTimer = setTimeout(startTimer, 5000);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
  clearInterval(timer);
  clearTimeout(restartTimer);
  restartTimer = setTimeout(startTimer, 5000);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activeP", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " activeP";
}
</script>

</BODY>

</HTML>
