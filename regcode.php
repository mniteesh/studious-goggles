<?php
include_once("connection.php");

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile_no=$_POST['mob'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$password=$_POST['pass'];
$date= $day.'-'.$month.'-'.$year ;

//echo= $gender;
//$sql="insert into student_info(firstname,lastname,mobile_no,email,gender,d.o.b,password) values('$fname','$lname',$mobile_no,'$email','$gender','$date','$password')";
//$sql="insert into student_info(firstname,lastname,mobile_no,email,gender,d.o.b,password) values('$fname','$lname',$mobile_no,'$email','$gender',$date,'$password')";
$sql="insert into student_info(firstname,lastname,mobile_no,email,gender,d.o.b,password) values('ghgchj','jbj',4567,'hghhf@gmail.com','female',04-04-2018,'111')";
$res=mysqli_query($conn,$sql);
if($res)
{
   header("location:login.php");
	
}
else
{
	header("location:reg.php");
}


?>