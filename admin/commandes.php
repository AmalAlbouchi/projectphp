<?php
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if (!isset($_SESSION["Admin"])){
    ?>

            <form action="access.php" name="formlog">
            <div class="form-group" style="width:60px;margin:5px;">
                <button type="submit" class="btn btn-info btn-block"> <i class="fas fa-redo"></i>  </button>
            </div>
            </form>
            <div class="card-body"><br>
        <h5 class="card-title">Commandes:</h5>
            <table class="table">
<?php
$sql="SELECT commande.username, user.phone FROM commande INNER JOIN user on commande.username = user.username";
    $rs=mysqli_query($con,$sql);    
    if ($rs!=FALSE){
        while ($users = mysqli_fetch_assoc($rs)) {
echo "<tr><th style='border-top:none !important;' scope='col' style='background-color:;'><div class='alert alert-secondary' role='alert'>"
.$users["username"].
"</div></th></tr>";
$user=$users["username"];
$sql= "SELECT Commande.id, Commande.date_comm, Product.price, Product.name FROM Commande INNER JOIN Product ON Commande.id = Product.id WHERE Commande.username = '$user' ";
$result= mysqli_query($con,$sql);
if ($result!=FALSE){
    $s=0;
    while ($p = mysqli_fetch_assoc($result)) {
    $s+=$p['price'];
echo '<tr>
    <td scope="col"><a href="item.php?product_id='.$p['id'] .'">'.$p['id'] .'</a></td>
    <td scope="col">'. $p['name'] .'</td>
    <td scope="col">'. $p['date_comm'].'</td>
    <td scope="col">'. $p['price'].'</td>
    </tr>'
  ;}}
  echo "<tr><th scope='col'>Total: $$s</th><th scope='col'>Phone Number:".$users["phone"]."</th><th><a href='validate.php?u=$user'>Validate Command</a></th></tr>";
    }}
?>

    </table>
    </div>



<?php
} else {
    ?>
   <h1>ACCESS DENIED</h1> follow this link and <a href="/projectphp/admin"><b>try agin</b></a>...
    <?php
}
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>