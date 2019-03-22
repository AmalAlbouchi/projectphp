<?php 
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>
<?php $username=$_SESSION['username'];

$sql = "SELECT * FROM user WHERE username = 'kasei'";
$sth = mysqli_query($con,$sql);
$res=mysqli_fetch_array($sth);
$name=$res['first_name'];
$last=$res['last_name'];
$date=$res['date_sign'];
?>

<div class="container target" style="margin-top:50px;">
  
    <div class="row">
        <div class="col-sm-3">
            
            <?php 
           if ($res['img']!=null){
                echo '<center><img class="rounded" width="200px" height="200px" src="data:image/jpeg;base64,'.base64_encode( $res['img'] ).'"/></center>';
            }
                else 
                {
                    echo '<center><img class="rounded" src="../images/user.png" width="200px" height="200px"><center>';
                }
                ?>
               
            <br>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                   <p class="text-muted" style="margin:0 auto;" > <strong>General</strong></p>

                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Username
                    <span class="badge badge-light badge-pill"><?php echo $username;?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Real name
                    <span class="badge badge-light badge-pill"><?php echo $name.' '.$last;?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Joined
                    <span class="badge badge-light badge-pill"><?php echo $date;?></span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Reviews
                    <span class="badge badge-light badge-pill">1</span>
                </li>
                </ul>

        
    </div>
    
            
<div class="col-sm-9" style="margin-top:50px;">


<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="account.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="account2.php">Profile data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="account3.php">Update profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" >Logout</a>
      </li>
    </ul>
  </div>

  <div class="card-body"><br>
    <h5 class="card-title">Changing profile data</h5>
    <article class="card-body mx-auto" style="max-width: 300px;">            


    <form method="POST" action="change.php" enctype="multipart/form-data" autocomplete="off">



                <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="far fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Change Username" type="text">
    </div>
		<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="first_name" class="form-control" placeholder="Change First Name" type="text">
    </div>

	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-users"></i> </span>
		 </div>
        <input name="last_name" class="form-control" placeholder="Change Last Name" type="text">
    </div> 


	    <div class="form-group input-group">
    		<div class="input-group-prepend">
		    	<span class="input-group-text"> <i class="fa fa-venus"></i> </span>
			</div>
		
		<select class="form-control" name="gender">
			<option value="">Change Gender</option>
			<option value=1>Male</option>
			<option value=0>Female</option>

		</select>
	</div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Change Email address" type="email">
    </div> 


<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-map-marker-alt"></i></span>
		 </div>
        <input name="address" class="form-control" placeholder="Change Physical address" type="text">
    </div>


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>


		<input value="+216" type="text" list="ph" class="form-control" style="max-width: 100px;" name="phone"/>
			<datalist id="ph">
				<option value="+216">+216</option>
				<option value="+972">+972</option>
				<option value="+198">+198</option>
				<option value="+701">+701</option>
				<option value="+971">+971</option>
			</datalist>
		
		
    	<input name="number" class="form-control" placeholder="Change Phone number" type="text">
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass1" class="form-control" placeholder="Change password" type="password">
    </div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="pass2" class="form-control" placeholder="Confirm password" type="password">
    </div>


                
                <div class="form-group input-group">
                <span class="btn btn-secondary btn-file" style="width:300px;">
                    Change Profile Picture <input type="file" name="newimage">
                </span>
            </div>
            <br>
                <input type="submit" name="submit_image" value="Submit changes" class="btn btn-success">
                </form>
            </article>
    
  </div>
</div>
            

</div>

	</div>
       
</div>
<br><br><br><br>
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>
