<?php
session_start();
require ('conn.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from user_account where username='$username' and passw='$password' ";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if ($num>=1) {
	$_SESSION['id']=$row['id'];
	header("location:main_page.php");
}else{header("location:login.php");}

?>