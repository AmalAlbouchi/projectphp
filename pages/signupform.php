<?php 
$page=5;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">

<br>





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
<br>

	
	
	<form action="signup.php" method="post">
		<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="far fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Username" type="text">
    </div>
		<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="first_name" class="form-control" placeholder="First Name" type="text">
    </div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-users"></i> </span>
		 </div>
        <input name="last_name" class="form-control" placeholder="Last Name" type="text">
    </div> <!-- form-group// -->


	    <div class="form-group input-group">
    		<div class="input-group-prepend">
		    	<span class="input-group-text"> <i class="fa fa-venus"></i> </span>
			</div>
		
		<select class="form-control" name="gender">
			<option selected=""> Select Gender</option>
			<option value=1>Male</option>
			<option value=0>Female</option>

		</select>
	</div> <!-- form-group end.// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->


<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i></span>
		 </div>
        <input name="address" class="form-control" placeholder="Physical address" type="text">
    </div>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>

		<select class="custom-select" style="max-width: 120px;" name="phone">
		    <option selected="">+216</option>
		    <option value="+972">+972</option>
		    <option value="+198">+198</option>
		    <option value="+701">+701</option>
		    <option value="+971">+971</option>
			<option value="">Other</option>
			
			
		</select>
    	<input name="number" class="form-control" placeholder="Phone number" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass1" class="form-control" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass2" class="form-control" placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" onclick="check()"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="/projectphp/pages/loginform.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->




<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>