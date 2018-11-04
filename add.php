<?php
require ('conn.php');

if(isset($_POST['submit'])){

$username=$_POST['username'];
$passw=$_POST['passw'];
$teleno=$_POST['teleno'];
$address=$_POST['address'];
$email=$_POST['email'];


$query="insert into user_account(username,passw,teleno,address,email)values('$username','$passw','$teleno','$address','$email')";
$result=mysqli_query($conn,$query);
if ($result) {
	echo "saved successfully";
}
else{echo "error the data does not saved";}
}
else{
	header("loaction:land_marksform.htm");
}
?>