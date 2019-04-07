<?php
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if (!isset($_SESSION["Admin"])){
 };
    ?>

            <form action="access.php" name="formlog">
            <div class="form-group" style="width:60px;margin:5px;">
                <button type="submit" class="btn btn-info btn-block"> <i class="fas fa-redo"></i>  </button>
            </div>
            </form>
            <div class="card-body"><br>
        <h5 class="card-title">Your Products</h5>
            <table class="table">
<?php
$sql="SELECT commande.username, user.phone FROM commande INNER JOIN user on username";
    $rs=mysqli_query($con,$sql);
    if ($rs!=FALSE){
        while ($users = mysqli_fetch_array($rs)) {
echo "<tr><th scope='col'>".$users[0]."</th></tr>"
$sql= "SELECT Commande.id, Commande.date_comm, Product.price, Product.name FROM Commande INNER JOIN Product ON Commande.id = Product.id WHERE Commande.username = '$user' ;";
$result= mysqli_query($con,$sql);
if ($result!=FALSE){
    $s=0;
    while ($p = mysqli_fetch_assoc($result)) {
s+=$p['price'];
echo '<tr>
    <td scope="col"><a href="item.php?product_id='.$p['id'] .'">'.$p['id'] .'</a></td>
    <td scope="col">'. $p['name'] .'</td>
    <td scope="col">'. $p['date_comm'].'</td>
    <td scope="col">'. $p['price'].'</td>
    <td><a href="delete_item.php?product_id='.$p['id'].'"><i class="delete_item fas fa-times-circle"></i></a></td></tr>'
  ;}}
  echo "<tr><th scope='col'>$s</th><th scope='col'>".$users[1]."</th></tr>"
 echo' <form method="post" name="form" action="verif.php">
    <div class="form-group input-group">
    <input type="submit" name="delete" id="delete" value="Delete Product" class="btn btn-danger" style="margin : auto;">
    </div></form>';

?>

    </table>
    </div>



<?php
} 
else {
    ?>
   <h1>ACCESS DENIED</h1> follow this link and <a href="/projectphp/pages/admin"><b>try agin</b></a>...
    <?php
}
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>