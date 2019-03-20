<?php 
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>

<br>

<div class="container">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Login</h4>
<br>

	
	
<form action="login.php" method="post">
		
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Username" type="text">
    </div> <!-- form-group// -->
	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Password" type="password">
    </div>
	
	
	                                   
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Don't have an account? <a href="/projectphp/pages/signupform.php">Sign up</a> </p>                                                          
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->



<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>