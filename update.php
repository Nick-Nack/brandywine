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
		<?php include 'connect.php';?>
		<?php include 'topBar.html';?>
		<?php include 'adminHeader.html';?>
		<form action="" method="post" >
			<br>
			<legend>Insert Goat Name for Autofill:<br /><br>
				Name : <input type="text" placeholder="Jamaica" name = "fillName">
					<br><br>
				<input type="submit" name="fill" value="Get Data">
			</legend>
		</form> 
		<?php

		$search_query = $_POST['fillName'];
		try{
			if (!empty($_POST['fill'])) {
				$sql = $conn->prepare("SELECT * FROM goats WHERE name LIKE '$search_query'") or die(mysql_error());; 
				$sql->execute(); 
 				$arr = $sql->fetch(PDO::FETCH_ASSOC);
 			}
		}
		catch(PDOException $e){
			echo "Couldnt find Name or something went wrong";
		}

        ?>
		<form action="action_Page.php" method="post" >
			<br>
			<legend>Goat information:<br /><br>
				Name : <input type="text" name = "name" value="<?php echo $arr['name']?>" placeholder="Jamaica"
					<br><br><br> 
				Type : <select name="type"> value="<?php echo $arr['type']?> 
 					<option value="seniorDoe">Senior Doe</option>
			    	<option value="buck">Buck</option>
			    	<option value="junior">Junior</option>
					</select>
					<br><br>
				Farm : <input type="text" name = "farm" value="<?php echo $arr['farm']?>"
				    <br><br><br>
				Dam  : <input type="text" name = "dam" value="<?php echo $arr['dam']?>"
				    <br><br><br>
				Sire : <input type="text" name = "sire" value="<?php echo $arr['sire']?>"
					<br><br><br>
		    	
			Birthday : <input type="date" name="birthday" value="<?php echo $arr['birthday']?>" <br><br><br>
			
			I'm this tall: <input type="decimal" name = "height" min="0" max="30" value="<?php echo $arr['height']?>"
			    <br><br><br>
			For Sale :	   
		      	 <input type="radio" name="forSale" value="1" checked> Yes
			  	 <input type="radio" name="forSale" value="0"> No<br>
				 <br>
		    If so what Price : <input type="number" name = "price" min="0" max="9999"  value="<?php echo $arr['price']?>"
			     <br><br><br>
			I'm I alive :	   
		      	 <input type="radio" name="dead" value="1" checked> Yes
			  	 <input type="radio" name="dead" value="0"> No<br>
				 <br>
		    Milk Capacity (cups) : <input type="decimal" name = "milkCapacity" min="0" max="9999" value="<?php echo $arr['milkCapacity']?>"
			     <br><br><br>
		    Percent Milk Fat : <input type="decimal" name = "percentMilkFat" min="0" max="99" value="<?php echo $arr['percentMilkFat']?>"
			     <br><br><br>
		    Percent Milk Protien : <input type="decimal" name = "percentMilkProtien" min="0" max="99" value="<?php echo $arr['percentMilkProtien']?>"
			     <br><br><br>			     
			NDGA Grands: <input type="decimal" name = "ndga" min="0" max="5" value="<?php echo $arr['ndgaGrands']?>">  Reserves: <input type="decimal" name = "ndga" min="0" max="10" value="<?php echo $arr['ndgaReserves']?>">
			     <br><br> 
		    ADGA wins : <input type="decimal" name = "adga" min="0" max="5" value="<?php echo $arr['adgaGrands']?>">   Reserves: <input type="decimal" name = "ndga" min="0" max="10" value="<?php echo $arr['adgaReserves']?>">
			     <br><br>
		    AGS wins : <input type="decimal" name = "ags" min="0" max="5" value="<?php echo $arr['agsGrands']?>">   Reserves: <input type="decimal" name = "ndga" min="0" max="10" value="<?php echo $arr['agsReserves']?>">
			     <br><br>			     			       			     				 
			Make sure everything is filled in! Put 0 or No in irrelevant spots. <br><br>	 
		         <input type="submit" name="update" value="Update">
		         </legend>
		</form> 
		<?php include 'footer.php';?>
	</body>
</html>

