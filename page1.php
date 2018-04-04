<?php
include_once('header.php');
session_start();
if($_SESSION['email']==null){
	header("Location:login.php");
}


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
</ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form class="form-inline ml-5" action="logout.php" method="POST">
<input type="text" class="form-control   mr-sm-2" name="email" placeholder="Email Id" disabled/>
<input type="password" class="form-control  mr-2" name="pass" placeholder="Password" disabled/>
<button class="btn btn-danger  form-control">Log in</button>&nbsp;&nbsp;
<a href="login.php." class="btn btn-danger">Log out</a>
</form>
</nav><br><br>
<!----start----->
<div class="container bg-light">
<h1>&nbsp;&nbsp;&nbsp;Welcome to page<br>
You login successfully</h1>

</div>
<?php
include_once('footer.php');



?>