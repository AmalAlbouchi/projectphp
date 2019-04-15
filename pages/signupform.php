<?php 
$page=5;
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
	<h4 class="card-title mt-3 text-center">Create Account</h4>
<br>

	
	
	<form action="signup.php" method="post" onsubmit='return Myfunction()' name="myform">
		<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="far fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Username" type="text" required>
    </div>
		<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="first_name" class="form-control" placeholder="First Name" type="text" required>
    </div>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-users"></i> </span>
		 </div>
        <input name="last_name" class="form-control" placeholder="Last Name" type="text" required>
    </div> <!-- form-group// -->


	    <div class="form-group input-group">
    		<div class="input-group-prepend">
		    	<span class="input-group-text"> <i class="fa fa-venus"></i> </span>
			</div>
		
		<select class="form-control" name="gender" required>
			<option value="">Select Gender</option>
			<option value=1>Male</option>
			<option value=0>Female</option>

		</select>
	</div> <!-- form-group end.// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> <!-- form-group// -->


<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i></span>
		 </div>
        <input name="address" class="form-control" placeholder="Physical address" type="text" required>
    </div>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>


		<input value="+216" type="text" list="ph" class="form-control" style="max-width: 100px;" name="phone" required />
			<datalist id="ph">
				<option value="+216">+216</option>
				<option value="+972">+972</option>
				<option value="+198">+198</option>
				<option value="+701">+701</option>
				<option value="+971">+971</option>
			</datalist>
		
		
    	<input name="number" class="form-control" placeholder="Phone number" type="text" required>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass1" class="form-control" placeholder="Create password" type="password" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass2" class="form-control" placeholder="Confirm password" type="password" required>
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="/projectphp/pages/loginform.php">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->
<br>
<br>
<br>




<script>
function Myfunction() {
        if (document.myform.pass1.value != document.myform.pass2.value)
        {alert("Invalid Password"); return false;}
        else{return true;}
          }
</script>


<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>