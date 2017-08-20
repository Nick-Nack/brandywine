<!DOCTYPE html>
<html lang="en">
	<style>
		body {background-color: powderblue;}		
	</style>
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>test</title>
		<meta name="description" content="BrandywineFarmsBucks">
		<meta name="author" content="nickb">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>
	<body>	
		<?php include 'topBar.html';?>
		<?php include 'adminHeader.html';?>
		<form action="action_page.php" method="post" >
			<br>
			<legend>Post information:<br /><br>
			Home or Pig :	   
		      	 <input type="radio" name="home" value="1" checked> Home
			  	 <input type="radio" name="home" value="0"> Pig<br>
				 <br>
			Insert Post Here:<br>	 
		   <textarea name="message" rows="10" cols="30"></textarea><br>
		    
		    Attach Image :	   
		      	 <input type="radio" name="forSale" value="1" checked> Yes
			  	 <input type="radio" name="forSale" value="0"> No<br>
				 <br>
		    
		    Image Name : <input type="text" placeholder="image.jpg" name = "image">   
			     <br><br>			     			       			     				 
			Make sure everything is filled in! Put 0 or No in irrelevant spots. <br><br>	 
		         <input type="submit" name="addPost" value="Add Post">
		         </legend>
		</form> 
		<?php include 'footer.php';?>
	</body>
</html>

