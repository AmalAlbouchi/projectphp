<?php 
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>

<br><br>
<div class="container target">
    
	<div class="row"><!--etaswira wil username wil buttons-->
        <div class="col-sm-10">
             <h1 class=""><?php echo $_SESSION['username']?></h1><br>
         
          <button type="button" class="btn btn-success">Cart</button>  <button type="button" class="btn btn-info">Update profile</button>  <a href="/projectphp/pages/logout.php"><button type="button" class="btn btn-danger" href="logout.php">Logout</button></a>
			<br>
        </div>
      <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" src="http://www.rlsandbox.com/img/profile.jpg"></a>

        </div>
    </div>
  <br><br>
    <div class="row"><!--eli 3ala jnab WIL BIO-->
        <div class="col-sm-3">
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false">Profile</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Joined</strong></span> 2.13.2014</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Last seen</strong></span> Yesterday</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Real name</strong></span> Joseph</li>
              <li class="list-group-item text-right"><span class="pull-left"><strong class="">Role </strong></span> Pet Sitter
               
                      </li>
            </ul>
           <br>
          
            <ul class="list-group">
                <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i>

                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Reviews</strong></span> 125</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong class="">Likes</strong></span> 13</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong class="">Posts</strong></span> 37</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong class="">Items bought</strong></span> 78</li>
            </ul>

		</div>
           <div class="panel panel-default">
                <div class="panel-heading"> Bio</div>
                <div class="panel-body"> Description

                </div>
			</div>
	</div>
       
</div>

<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>