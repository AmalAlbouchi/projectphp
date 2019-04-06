<?php 
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');

if (!isset($_SESSION["admin"])){
    ?>

<br>

<div class="container">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Login Admin</h4>
<br>

	
	
<form action="access.php" method="post" name="formlog">
		
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
        <button type="submit" class="btn btn-primary btn-block"> Login  </button>
    </div> <!-- form-group// -->      
                                                     
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


<?php
} 
else  header('Refresh:0; url=access.php');

include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>