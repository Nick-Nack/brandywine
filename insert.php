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
		<form action="action_page.php"  method="post" >
			<br>
			<legend>Goat information:<br />
				Name : <input type="text" placeholder="Jamaica" name = "name"
					<br><br><br>
				Type : <select name="type">
 					<option value="seniorDoe">Senior Doe</option>
			    	<option value="buck">Buck</option>
			    	<option value="junior">Junior</option>
					</select>
					<br><br>
				Farm : <input type="text" name = "farm"
				    <br><br><br>
				Dam  : <input type="text" name = "dam"
				    <br><br><br>
				Sire : <input type="text" name = "sire"
					<br><br><br>
		    	
			Birthday : <input type="date" name="birthday"> <br><br>
			
			I'm this tall: <input type="decimal" name = "height" min="0" max="30"
			    <br><br><br>
			For Sale :	   
		      	 <input type="radio" name="forSale" value="1" checked> Yes
			  	 <input type="radio" name="forSale" value="0"> No<br>
				 <br>
		    If so what Price : <input type="number" name = "price" min="0" max="9999">
			     <br><br>
			I'm I alive :	   
		      	 <input type="radio" name="dead" value="1" checked> Yes
			  	 <input type="radio" name="dead" value="0"> No<br>
				 <br>
		    Milk Capacity (cups) : <input type="decimal" name = "milkCapacity" min="0" max="9999">
			     <br><br>
		    Percent Milk Fat : <input type="decimal" name = "percentMilkFat" min="0" max="99">
			     <br><br>
		    Percent Milk Protien : <input type="decimal" name = "percentMilkProtien" min="0" max="99">
			     <br><br>			     
			NDGA Grands: <input type="decimal" name = "ndgaGrands" min="0" max="5">  Reserves: <input type="decimal" name = "ndgaReserve" min="0" max="10">
			     <br><br> 
		    ADGA wins : <input type="decimal" name = "adgaGrands" min="0" max="5">   Reserves: <input type="decimal" name = "adgaReserve" min="0" max="10">
			     <br><br>
		    AGS wins : <input type="decimal" name = "agsGrands" min="0" max="5">   Reserves: <input type="decimal" name = "agsReserve" min="0" max="10">
			     <br><br>		
			Goat Image : <input type="text" placeholder="img/jamaica.jpg" name = "goatImage"
					<br><br><br>
			Dam Image : <input type="text" placeholder="img/mom.jpg" name = "damImage"
					<br><br><br>	     			       			     				 
			Make sure everything is filled in! Put 0 or No in irrelevant spots. <br><br>	 
		         <input type="submit" name="insert" value="Add Goat">
		         </legend>
		</form> 
		<?php include 'footer.php';?>
	</body>
</html>

