
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="wajde.css">
	<title>main page</title>
</head>
<body>
	<div class="header">
  
  	
	<p><a href='http://localhost/web_project/main_page.php'><b>Main</a> <a href='http://localhost/web_project/login.php'><b>Login</a>   <a href='http://localhost/web_project/reg.php'><b>Register</a>   <a href='http://localhost/web_project/add_job.php'><b>Add Job</a>   <a href='http://localhost/web_project/mypost.php'><b>My Post</a>  <a href='http://localhost/web_project/logout.php'><b>Logout</a></p>
</div>
<div class="container">
	<?php
	session_start();



	require ('conn.php');


$query="select * from jop_post";
$result=mysqli_query($conn,$query);
$jop_post=array();
while ($jop_posts=mysqli_fetch_array($result)) {
	$jop_post[]=$jop_posts;
	
}
echo "<ul style=list-style-type:none>";
foreach ($jop_post as $jop_posts) {

	if($jop_posts['sponsored'] == true){
echo "<div class='a' align='center'>";
echo "<li>";
echo "<div>"."<img src = " . $jop_posts["img"]."> </div>";
echo "<div class =title>"."<b>ID: " .$jop_posts['id']."<br>"."<b>Job Title: ".$jop_posts['jop_title']."<br>"."<b>Company Name: ".$jop_posts["company_name"]."<br>";
echo "<div>"."<a href='http://localhost/web_project/details.php?id=".$jop_posts['id']."'>Details</a>";
echo "<li><br>";
echo "</div>";
}
}
foreach ($jop_post as $jop_posts) {

	if($jop_posts['sponsored'] == false){
echo "<div class='a' align='center'>";
echo "<li>";
echo "<div>"."<img  src = " . $jop_posts["img"]."> </div>";
echo "<div class =title>"."<b>ID: " .$jop_posts['id']."<br>"."<b>Job Title: ".$jop_posts['jop_title']."<br>"."<b>Company Name: ".$jop_posts["company_name"]."<br>";
echo "<div>"."<a href='http://localhost/web_project/details.php?id=".$jop_posts['id']."'>Details</a>";
echo "<li><br>";
echo "</div>";
}
}
echo "<ul>";
	?>
</div>

</body>
</html>