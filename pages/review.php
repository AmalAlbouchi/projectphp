<?php
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if(!isset($_SESSION['username'])){
    echo "<script>alert('Please sign in to leave a review')</script>";
    header('Refresh:0; url=shop.php');}

else{
$rate = $_POST["stars"];
$rev = $_POST["rev"];
$date = date('Y-m-d H:i:s');
$username = $_SESSION['username'];
$id = $_POST["id"];
if($rate==1){
$rev=$rev.' (1 Star)';}
else {$rev=$rev.' ('.$rate.' Stars)';}

$reg= "insert into review(text,username,id,date_review) values('$rev','$username','$id','$date')";
$rs=mysqli_query($con,$reg);

$nbrev="update user set nb_review = (nb_review + 1) where username = '$username';";
$r=mysqli_query($con,$nbrev);

$rate="update product set rate = ((rate*p_rate + $rate)/(p_rate +1)) where id = $id;";
$rat=mysqli_query($con,$rate);

$prate="update product set p_rate = (p_rate + 1) where id = $id;";
$ra=mysqli_query($con,$prate);

if($rs && $r && $ra && $rat){echo 'c bon gg';}

}
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>