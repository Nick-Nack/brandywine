<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Brandywine Farms</title>
		<meta name="description" content="Home Page">
		<meta name="author" content="Nick">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" type="text/css" href="styleSheet.css">
	</head>
	<style>
		body {
			background-color: #EDE7DA
		}
		.wrapper{
		  max-width: 100%;
  		  position: relative;
  		  margin: auto;
		  background-color: #d5cbcb
		}
		.container {
		    width: 15%;
		    height: 15%;
		    float: left;
		    margin-top: 40px;
		    margin-bottom: 20px;
    		margin-right: 5%;
    		margin-left: 5%;
    		border: 2px;
		}	
		.image {
		  opacity: 1;
		  display: block;
		  width: 100%;
		  height: auto;
		  transition: .5s ease;
		  backface-visibility: hidden;
		}

			.middle {
		  transition: .5s ease;
		  opacity: 0;
	      margin: auto;
	      top: ;
	      left:0;
	      right:0;
	      bottom:0;
		
		}
		.container:hover .image {
		  opacity: 0.3;
		}
		.container:hover .middle {
		  opacity: 1;
		}

		.text {
		  background-color: #79201F;
		  color: #EDE7DA;
		  font-size: 16px;
		  padding: 16px 32px;
		}
		
	</style>
	<body>
		<?php include 'topBar.html';?>
		<?php include 'header.html';?>
		<!-- this is the beginning of the slideshow banner on the home page -->
		<div class="slideshow-container">
		 	<div class="mySlides fade">
		    <div class="numbertext">1 / 3</div>
		    <img src="img/farm3.jpg" style="width:100%" >
		  </div>
		
		  <div class="mySlides fade">
		    <div class="numbertext">2 / 3</div>
		    <img src="img/ribbons2.jpg" style="width:100%" >
		  </div>
		
		  <div class="mySlides fade">
		    <div class="numbertext">3 / 3</div>
		    <img src="img/pigs.jpg" style="width:100%">
		  </div>
		
		</div>
	  <!-- End of slideshow banner -->
	  <!-- Slide show script -->
	  <script>
		var slideIndex = 0;
		showSlides();
		
		function showSlides() {
		    var i;
		    var slides = document.getElementsByClassName("mySlides");
		    for (i = 0; i < slides.length; i++) {
		        slides[i].style.display = "none"; 
		    }
		    slideIndex++;
		    if (slideIndex> slides.length) {slideIndex = 1} 
		    slides[slideIndex-1].style.display = "block"; 
		    setTimeout(showSlides, 10000); // Change image every 2 seconds
		}
		</script>
		<!-- end slideshow script--> 

		</div>
		<div class = "wrapper">
			<div class="container" >
				<a href="allGoats.php">
				 <img style='height: 100%; width: 100%'; class="image" src="img/allGoats3.jpg"; /> 
				 <div class="middle">
				    <div class="text"><center>All Goats</center></div>
				  </div>
				</a>
			</div>
			<div class="container"> 
				<a href="pigs.php">
				<img style='height: 100%; width: 100%'; class="image" src="img/pigs4.jpg"; />  
				<div class="middle">
				    <div class="text"><center>Pigs</center></div>
				</div>
				</a>
			</div>
			<div class="container"> 
				<a href="legacyGoats.php">
				<img style='height: 100%; width: 100%'; class="image" src="img/legacy1.jpg"; /> 
				<div class="middle">
				    <div class="text"><center>Legacy Goats</center></div>
				</div>
				</a>
			</div>
			<div class="container"> 
				<a href="photos.php">
				<img style='height: 100%; width: 100%'; class="image" src="img/photos2.jpg"; />  
				<div class="middle">
				    <div class="text"><center>Photos</center></div>
				</div>
				</a>
			</div>
		</div>	
		<?php include 'footer.php';?>
	</body>
</html>