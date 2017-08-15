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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "goatBase";

try {
    $conn = new PDO("mysql:host=$servername;dbname=goatBase", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
	<body>	
		<?php include 'topBar.html';?>
		<?php include 'adminHeader.html';?>
		<form action="insert.php" method="post" >
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
			
			I'm this tall: 		<select name="height">
						<option> - Height - </option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					    <option value="24">32</option>
						<option value="25">33</option>
						<option value="26">34</option>
						<option value="27">35</option>
						<option value="28">36</option>
						<option value="29">37</option>
						<option value="30">38</option>
						<option value="31">39</option>
				</select>
			    <br><br>
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
		    Milk Capacity (cups) : <input type="number" name = "capacity" min="0" max="9999">
			     <br><br>
		    Percent Milk Fat : <input type="number" name = "percentMilkFat" min="0" max="99">
			     <br><br>
		    Percent Milk Protien : <input type="number" name = "percentMilkProtien" min="0" max="99">
			     <br><br>			     
			NDGA Grands: <input type="number" name = "ndga" min="0" max="5">  Reserves: <input type="number" name = "ndga" min="0" max="5">
			     <br><br> 
		    ADGA wins : <input type="number" name = "adga" min="0" max="5">   Reserves: <input type="number" name = "ndga" min="0" max="5">
			     <br><br>
		    AGS wins : <input type="number" name = "ags" min="0" max="5">   Reserves: <input type="number" name = "ndga" min="0" max="5">
			     <br><br>			     			       			     				 
			Make sure everything is filled in! Put 0 or No in irrelevant spots. <br><br>	 
		         <input type="submit" value="Add Goat">
		         </legend>
		</form> 
		<?php include 'footer.php';?>
	</body>
</html>

