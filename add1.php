<?php
session_start();
 require ('conn.php');

if(isset($_POST['submit'])){

$jop_title=$_POST['jop_title'];
$company_name=$_POST['company_name'];
$category=$_POST['category'];
$address=$_POST['address'];
$street=$_POST['street'];
$city=$_POST['city'];
$jop_desc=$_POST['jop_desc'];
$jop_req=$_POST['jop_req'];
$salary=$_POST['salary'];
$teleno=$_POST['teleno'];
$email=$_POST['email'];
$img=$_POST['img'];
if(isset($_SESSION['id']))
$user_id = $_SESSION['id'];
 $sponsored = false;
if(isset($_POST['sponsored']) && $_POST['sponsored'] == 'Yes')
{

    $sponsored = true;

}
  

$query="insert into jop_post(jop_title,company_name,category,address,street,city,jop_desc,jop_req,salary,teleno,email,img,sponsored,user_id)values('$jop_title','$company_name','$category','$address','$street','$city','$jop_desc','$jop_req','$salary','$teleno','$email','$img','$sponsored','$user_id')";
$result=mysqli_query($conn,$query);

 header("location:main_page.php");

?>