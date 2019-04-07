<?php 
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>
<?php $username=$_SESSION['username'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$sth = mysqli_query($con,$sql);
$res=mysqli_fetch_array($sth);
$name=$res['first_name'];
$last=$res['last_name'];
$date=$res['date_sign'];
//$gender=
//$email=
//$add=
//$phone=
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
        <a class="nav-link active" href="account.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="account2.php">Profile data</a>
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

    <h5 class="card-title">Your Products</h5>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Product id</th>
      <th scope="col">Product Name</th>
      <th scope="col">Date</th>
      <th scope="col">Price</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
<?php 
$user=$_SESSION['username'];
 $sql= "SELECT Commande.id, Commande.date_comm, Product.price, Product.name FROM Commande INNER JOIN Product ON Commande.id = Product.id WHERE Commande.username = '$user' ;";
$result= mysqli_query($con,$sql);
if ($result!=FALSE){
      while ($p = mysqli_fetch_assoc($result)) {
echo '<tr>
      <td scope="col"><a href="item.php?product_id='.$p['id'] .'">'.$p['id'] .'</a></td>
      <td scope="col">'. $p['name'] .'</td>
      <td scope="col">'. $p['date_comm'].'</td>
      <td scope="col">'. $p['price'].'</td>
      <td><a href="delete_item.php?product_id='.$p['id'].'"><i class="delete_item fas fa-times-circle"></i></a></td></tr>'
    ;}}
       ?>
  </tbody>
  </table>
 <br><br><br><br>
  </div>
  <form action="delete_all.php" name="formlog">
            <center><div class="form-group" style="text-align:center; width:100px;">
                <button type="submit" class="btn btn-danger btn-block"> Delete All  </button>
            </div></center>
            </form>
</div>
            

</div>

	</div>
       <br><br><br><br>
</div>

<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>
