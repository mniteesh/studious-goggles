<?php
include_once('header.php');



?>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
<a class="navbar-brand" href="">collegepedia.com</a>
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="">Home</a></li>
<li class="nav-item">
<a class="nav-link" href="">bla</a></li>
<li class="nav-item">
<a class="nav-link" href="">bla2</a></li>
</ul>
</nav><br>
<div class="container border border-light form-group bg-light" style="box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<form action="regcode.php" method="POST" class="form-inline">
<table class="table table-striped mt-4" >
<tr>
<td><input type="text" name="fname" placeholder="Firstname" class="form-control"/>&nbsp;&nbsp;&nbsp;<input type="text" name="lname" placeholder="Lastname" class="form-control"/></td>
</tr>
<tr>
<td><input type="number" name="mob" placeholder="Mobile no." class="form-control" /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Email address" class="form-control"/></td>
</tr>
<tr>
<td><input type="radio" name="gender"  class="form-control" value="male"/>  Male&nbsp;&nbsp;&nbsp; <input type="radio" name="gender"  class="form-control"  value="female"/>    Female </td>
</tr>
<tr>
<td>
<select name="day" class="form-control">
<option>Day</option>
<?php
$a = 31;
for ($i=1;$i<=$a;$i++){
echo "<option value='$i'>".$i."</otion>";
} 
?>
</select>
&nbsp;&nbsp;&nbsp;
<select name="month" class="form-control">
<option>Month</option>
<?php
$a = 12;
for ($i=1;$i<=$a;$i++){
echo "<option value='$i'>".$i."</otion>";
} 
?>
</select >
&nbsp;&nbsp;&nbsp;
<select name="year" class="form-control">
<option>Year</option>
<?php
$a = 1950;
for ($i=2018;$i>=$a;$i--){
echo "<option value='$i'>".$i."</otion>";
} 
?>
</select>
</td>
</tr>
<tr>
<td><input type="password" name="pass" placeholder="Enter your password" class="form-control"/>&nbsp;&nbsp;&nbsp;
<!--<input type="password" name="pass1" placeholder="Re-enter your password" class="form-control"/>--></td>
</tr>
<!--<tr>
<td><span id = "scap"></span><input type="text" name="cap" placeholder="......" class="form-control" /></td> 
</tr>-->
<tr>
<td><button type="submit" class="btn btn-danger btn-lg">Submit</button></td>
</tr>
</form>
</div>
<?php
include_once('footer.php');



?>
