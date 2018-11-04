
	
<?php
$hostname="localhost";
	$username= "root";
	$password="";
	$dbname="web_project";
	$conn=mysqli_connect($hostname,$username,$password,$dbname);
	if (!$conn) {
		die("failed :".mysqli_connect_error());
		
	}

?>

