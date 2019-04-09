<?php
$username=$_SESSION["username"];
$sql= "DELETE * FROM commande Where username=$username ";
$result= mysqli_query($con,$sql);
header('Refresh:0; url=account.php');
?>
