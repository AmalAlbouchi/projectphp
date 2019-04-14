<?php
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');

$id=$_GET['id'];
$username=$_SESSION["username"];
$sql= "DELETE FROM commande Where id='$id' AND username='$username'";
$result= mysqli_query($con,$sql);
header('Refresh:0; url=account.php');

include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>
