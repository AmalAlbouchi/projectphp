<?php 
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if(isset($_SESSION['username']))
{
	header('Refresh:0; url=account.php');
}
?>

<br>

<div class="container">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Login</h4>
<br>

	
	
<form action="login.php" method="post" name="formlog">
		
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Username" type="text" required>
    </div> <!-- form-group// -->
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass" class="form-control" placeholder="Password" type="password" required>
    </div>
	
	
	                                   
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Don't have an account? <a href="/projectphp/pages/signupform.php">Sign Up</a> </p>                                                          
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->



<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>