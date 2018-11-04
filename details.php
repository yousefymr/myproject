<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="wajde.css">
	<title></title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="wajde.css">

	<div class="header">
  
  	
	<p><a href='http://localhost/web_project/main_page.php'><b>Main</a> <a href='http://localhost/web_project/login.php'><b>Login</a>   <a href='http://localhost/web_project/reg.php'><b>Register</a>   <a href='http://localhost/web_project/add_job.php'><b>Add Job</a>   <a href='http://localhost/web_project/mypost.php'><b>My Post</a>  <a href='http://localhost/web_project/logout.php'><b>Logout</a></p>
</div>
	<?php
	require('conn.php');
if (isset($_GET['id'])) {
	

$id=$_GET['id'];
$query="select * from jop_post where id=$id ";
$result=mysqli_query($conn,$query);
echo mysqli_error($conn) ;
$jop_post=array();
while ($jop_posts=mysqli_fetch_array($result)) {
	$jop_post[]=$jop_posts;
	
}
echo "<ul style=list-style-type:none>";
foreach ($jop_post as $jop_posts) {
echo "<div class=a align='center'>";
echo "<li>";
echo "<div>"."<img src = " . $jop_posts["img"]."> </div>";
$s = 'no';
if($jop_posts["sponsored"] == 1)
	$s = 'yes';

echo "<div class =title>"."<b>ID: " .$jop_posts['id']."<br>"."<b>Job Title: ".$jop_posts['jop_title']."<br>"."<b>Company Name: ".$jop_posts["company_name"].
"<br>"."<b>Category: ".$jop_posts['category']."<br>"."<b>address: ".$jop_posts["address"]."<br>"."<b>Street: ".$jop_posts["street"]."<br>"."<b>City: ".$jop_posts["city"]."<br>"."<b>Jop Desc: ".$jop_posts["jop_desc"]."<br>"."<b>Jop Requiremet: ".$jop_posts["jop_req"]."<br>"."<b>Salary: ".$jop_posts["salary"]."<br>"."<b>TelNumber: ".$jop_posts["teleno"]."<br>"."<b>Email: ".$jop_posts["email"]."<br>"."<b>Sponsored: ". $s ."<br>";
echo "<li><br>";
echo "</div>";
}}

?>
</body>
</html>