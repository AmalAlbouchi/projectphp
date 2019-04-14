<?php
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if(!isset($_SESSION['username'])){
    echo "<script>alert('Please sign in to leave a review')</script>";
    header('Refresh:0; url=login.php');}

else{
$rate = $_POST["stars"];
$rev = $_POST["rev"];
$date = date('Y-m-d H:i:s');
$username = $_SESSION['username'];
$id = $_POST["id"];

$s="SELECT * FROM review where id='$id' and username='$username'";
$rr=mysqli_query($con,$s);
$res=mysqli_fetch_array($rr);

$sq="SELECT * FROM product where id='$id'";
$rrr=mysqli_query($con,$sq);
$ress=mysqli_fetch_array($rrr);

if($res['username']=='')//if exist
{
$reg= "insert into review(text,username,id,date_review,rate) values('$rev','$username','$id','$date','$rate')";
$rs=mysqli_query($con,$reg); 

$nbrev="update user set nb_review = (nb_review + 1) where username = '$username';";
$r=mysqli_query($con,$nbrev);

$nrate="update product set rate = ((rate*p_rate + $rate)/(p_rate +1)) where id = $id;";
$rat=mysqli_query($con,$nrate);

$prate="update product set p_rate = (p_rate + 1) where id = $id;";
$ra=mysqli_query($con,$prate);

if($rs && $r && $ra && $rat){header('Refresh:0; url=item.php?product_id='.$id);}
}

else//if !exist
{
$reg= "update review set text='$rev', date_review='$date', rate='$rate' where username='$username' and id='$id'";
$rs=mysqli_query($con,$reg);
$a=(($ress['rate']*$ress['p_rate'] - $res['rate'])/($ress['p_rate'] -1));
$o="update product set rate = $a where id = $id;";
$rat=mysqli_query($con,$o);
$nrate="update product set rate = ((rate*(p_rate-1) + $rate)/(p_rate)) where id = $id;";
$ra=mysqli_query($con,$nrate);
if($rs && $ra && $rat){header('Refresh:0; url=item.php?product_id='.$id);}
}
}
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>