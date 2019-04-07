<?php
$id=$_GET['id'];
$username=$_SESSION["username"];
$sql= "DELETE * FROM commande Where id=$id AND username=$username ";
$result= mysqli_query($con,$sql);
header('Refresh:0; url=account.php');
?>
