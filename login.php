<?php
include_once('header.php')

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
<form class="form-inline ml-5" action="logincode.php" method="POST">
<input type="text" class="form-control   mr-sm-2 " name="email" placeholder="Email Id"/>
<input type="password" class="form-control  mr-2" name="pass" placeholder="Password"/>
<button class="btn btn-danger  form-control">Log in</button>&nbsp;&nbsp;
<a href="reg.php" class="btn btn-danger">Sign Up</a>
</form>
</nav>
<?php
include_once('footer.php')

?>