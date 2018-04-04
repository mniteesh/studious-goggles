<?php
//session_start();
include_once("connection.php");
/*if($conn)
	echo "successfull";
else
	echo "not connected";*/
$email=$_POST['email'];
$password=$_POST['pass'];
//echo $email;
$sql="select * from student where email='$email' and password='$password'";
$res=mysqli_query($conn,$sql);

if($row=mysqli_fetch_assoc($res))
{
	//$_SESSION['email']=$email;
	header('Location:page1.php');
}
else
{
	header("Location:login.php");
}


?>