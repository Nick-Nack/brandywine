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
		<form action="action_page.php" method="post" >
			<br>
			<legend>Insert goat name to delete goat:<br><br>
				Name : <input type="text" placeholder="Jamaica" name = "name"<br>
					   <input type="submit" name="delete" value="Delete">
		       </legend><br>
		</form> 
		<?php include 'footer.php';?>
	</body>
</html>

