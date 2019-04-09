<?php
$page=5;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');

$id=$_POST['name'];
$id=intval($id);
$sql="DELETE FROM product WHERE id=$id";
$rs=mysqli_query($con,$sql);
if($rs){
    echo "<div class='container'>
    <br>
    <h1>Product deleted successfully</h1>
    </div>
    ";}
    else{ echo "<div class='container'>
        <br>
        <h1>Product not deleted</h1>
        </div>";}
    header('Refresh:1; url=access.php');

include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>