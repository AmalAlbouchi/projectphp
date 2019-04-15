<?php 
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if(!isset($_SESSION['username']))
{
	header('location:../');
}
?>
<?php $username=$_SESSION['username'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$sth = mysqli_query($con,$sql);
$res=mysqli_fetch_array($sth);
$name=$res['first_name'];
$last=$res['last_name'];
$date=$res['date_sign'];
if($res['gender']==1){$gender='Male';}else{$gender='Female';}
$mail=$res['email'];
$add=$res['address'];
$phone=$res['phone'];
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
        <a class="nav-link active" href="account2.php">Profile data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="account3.php">Update profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" >Logout</a>
      </li>
    </ul>
  </div>

  <div class="card-body"><br>
    <h5 class="card-title">Profile data</h5><br>
    <table class="table" style="width:400px; margin: 0 auto;">
    <tr>
      <th scope="row">Username</th>
      <td><?php echo $username;?></td>
    </tr>
    <tr>
      <th scope="row">First name</th>
      <td><?php echo $name;?></td>
    </tr>
    <tr>
      <th scope="row">Last name</th>
      <td><?php echo $last;?></td>
    </tr>
    <tr>
      <th scope="row">Gender</th>
      <td><?php echo $gender;?></td>
    </tr>
    <tr>
      <th scope="row">E-mail address</th>
      <td><?php echo $mail;?></td>
    </tr>
    <tr>
      <th scope="row">Physical address</th>
      <td><?php echo $add;?></td>
    </tr>
    <tr>
      <th scope="row">Phone number</th>
      <td><?php echo $phone;?></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
    </tr>
</table>

    <br><br>
  </div>
</div>
            

</div>

	</div>
       <br><br><br><br>
</div>

<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>
