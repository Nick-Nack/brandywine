<html>
<body>
Action Page
<?php
if (strcmp($_POST["username"],"admin")==0 and strcmp($_POST["password"],"farmer54")== 0) {
	 echo "<script> location.href='admPage.php'; </script>";
}
else {
	echo "<script> location.href='home.php'; </script>";
}
?>
    
</body>
</html>
