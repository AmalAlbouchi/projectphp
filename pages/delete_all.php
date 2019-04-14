<?php
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');

$username=$_SESSION["username"];
$sql= "DELETE FROM commande Where username='$username'";
$result= mysqli_query($con,$sql);
header('Refresh:0; url=account.php');

include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>
