<?php
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');

$username=$_SESSION["username"];
$id=$_GET['id'];
$date = date('Y-m-d H:i:s');

$s="SELECT * FROM commande where id='$id' and username='$username'";
$rr=mysqli_query($con,$s);
$res=mysqli_fetch_array($rr);

if(!isset($res['id'])){
$sql= "insert into commande(username,id,date_comm) values('$username','$id','$date')";
$result= mysqli_query($con,$sql);}
header('Refresh:0; url=account.php');

include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>
