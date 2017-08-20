<html>
<body>
Action Page
<!-- All forms are handled here, each form has its own name to specfiy which action to perform -->
<?php

require('connect.php');


	if (isset($_POST['admin']) == 'Submit') {
		if (strcmp($_POST["username"],"admin")==0 and strcmp($_POST["password"],"farmer54")== 0) {
			echo "<script> location.href='admPage.php'; </script>";
		}
		else {
			echo "<script> location.href='home.php'; </script>";
		}
	} 
	
	if (isset($_POST['insert']) == 'Add Goat') {
		try {
		    $sql = "INSERT INTO goats (name, type, farm, dam, sire, birthday, height, forSale, price, dead, milkCapacity,
		    percentMilkFat, percentMilkProtien, ndgaGrands,ndgaReserves, adgaGrands, adgaReserves, agsGrands, agsReserves, 
		    goatImage, damImage)
		    VALUES ('$_POST[name]', '$_POST[type]','$_POST[farm]','$_POST[dam]','$_POST[sire]','$_POST[birthday]',
		    '$_POST[height]','$_POST[forSale]','$_POST[price]','$_POST[dead]','$_POST[milkCapacity]','$_POST[percentMilkFat]','$_POST[percentMilkProtien]',
		    '$_POST[ndgaGrands]','$_POST[ndgaReserve]','$_POST[adgaGrands]','$_POST[adgaReserve]','$_POST[agsGrands]','$_POST[agsReserve]','$_POST[goatImage]','$_POST[damImage]')";
		    // use exec() because no results are returned
		    $conn->exec($sql);
			 echo "<script> location.href='insert.php'; </script>";
			
		}
		catch(PDOException $e){
		    echo "<script> location.href='error.php'; </script>";
		    }		
	}
	if (isset($_POST['update']) == 'Update') {
		try {
		    $sql = "UPDATE goats SET type='$_POST[type]', farm='$_POST[farm]', dam='$_POST[dam]', sire='$_POST[sire]', birthday='$_POST[birthday]', height='$_POST[height]', forSale='$_POST[forSale]'
		    , price='$_POST[price]', dead='$_POST[dead]', milkCapacity='$_POST[milkCapacity]',percentMilkFat='$_POST[percentMilkFat]'
		    , percentMilkProtien='$_POST[percentMilkProtien]', ndgaGrands='$_POST[ndgaGrands]',ndgaReserves='$_POST[ndgaReserve]', adgaGrands='$_POST[adgaGrands]'
		    , adgaReserves='$_POST[adgaReserve]', agsGrands='$_POST[agsGrands]', agsReserves='$_POST[agsReserve]', 
		    goatImage='$_POST[goatImage]', damImage='$_POST[damImage]' WHERE name LIKE '$_POST[name]'";

		    // use exec() because no results are returned
		    $conn->exec($sql);
			echo "<script> location.href='update.php'; </script>";
			
		}
		catch(PDOException $e){
		    echo "<script> location.href='error.php'; </script>";
		    }		
	}	
	if (isset($_POST['delete']) == 'Delete') {
		try {
			$delete = $_POST['name'];
			$sql = $conn->prepare("DELETE FROM goats WHERE name LIKE '$delete'") or die(mysql_error());; 
			$sql->execute(); 
 			echo "<script> location.href='delete.php'; </script>";

		}
		catch(PDOException $e){
		    echo "<script> location.href='error.php'; </script>";
		    }		
	}
		if (isset($_POST['addPost']) == 'Add Post') {
		try {
		    $sql = "INSERT INTO posts (type,message,showImage,imageLink)
		    VALUES ('$_POST[type]','$_POST[message]','$_POST[showImage]','$_POST[imageLink]')";
		    // use exec() because no results are returned
		    $conn->exec($sql);
			 echo "<script> location.href='addPost.php'; </script>";
			
		}
		catch(PDOException $e){
		    echo "<script> location.href='error.php'; </script>";
		    }		
	}	
?>
<!--
$sql = "INSERT STATEMENT VALUES (?,?,?,?)"
$conn->exec(array($_POST['type'],$_POST['f'}]))
   -->
</body>
</html>
