<?php


session_start();

if(!isset($_SESSION['id']))
header("location:login.php");

?>
<link rel="stylesheet" type="text/css" href="wajde.css">

  <div class="header">
  
    
    <p><a href='http://localhost/web_project/main_page.php'><b>Main</a> <a href='http://localhost/web_project/login.php'><b>Login</a>   <a href='http://localhost/web_project/reg.php'><b>Register</a>   <a href='http://localhost/web_project/add_job.php'><b>Add Job</a>   <a href='http://localhost/web_project/mypost.php'><b>My Post</a>  <a href='http://localhost/web_project/logout.php'><b>Logout</a></p>
</div>
<link href="min.css" rel="stylesheet" id="bootstrap-css">
<div class="login-page">
  <div class="form">
   
    <form class="login-form" action="add1.php" method="post">
    <input type="text" placeholder="jop_title" name="jop_title" />
    <input type="text" placeholder="company_name" name="company_name" />
     <input type="text" placeholder="category" name="category" />
    <input type="text" placeholder="Address" name="address" />
     <input type="text" placeholder="street" name="street" />
     
    <input type="text" placeholder="city" name="city" />
    <input type="text" placeholder="jop_desc" name="jop_desc" />
     <input type="text" placeholder="jop_req" name="jop_req" />
    <input type="text" placeholder="salary" name="salary" />
     <input type="text" placeholder="teleno" name="teleno" />
      <input type="text" placeholder="email" name="email" />
    <input type="text" placeholder="img" name="img" />
    sponsored: <input type="checkbox" name="sponsored" value="Yes" />


   
  
      <button type="submit" name="submit">R</button>
     
    </form>
  </div>
</div>