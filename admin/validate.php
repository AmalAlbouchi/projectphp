<?php
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');

$username=$_GET["u"];
$sql= "DELETE FROM commande Where username='$username' ";
$result= mysqli_query($con,$sql);
header('Refresh:0; url=commandes.php');

include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>
