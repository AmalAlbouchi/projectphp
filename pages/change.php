<?php 
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>





<?php
$username=$_SESSION['username'];
$pass=$_SESSION['pass'];

$user=$_POST["username"];
if(!empty($user)){
    $insert="update user set username = '$user' where username = '$username';";
    $rs=mysqli_query($con,$insert);
    $_SESSION['username']=$user;
}

$name=$_POST["first_name"];
if(!empty($name)){
    $insert="update user set first_name = '$name' where username = '$username';";
    $rs=mysqli_query($con,$insert);

}

$last=$_POST["last_name"];
if(!empty($last)){
    $insert="update user set last_name = '$last' where username = '$username';";
    $rs=mysqli_query($con,$insert);
}

$gender=$_POST["gender"];
if(!empty($gender)){
    $insert="update user set gender = '$gender' where username = '$username';";
    $rs=mysqli_query($con,$insert);
}

$email=$_POST["email"];
if(!empty($email)){
    $insert="update user set email = '$email' where username = '$username';";
    $rs=mysqli_query($con,$insert);
}

$add=$_POST["address"];
if(!empty($add)){
    $insert="update user set address = '$add' where username = '$username';";
    $rs=mysqli_query($con,$insert);
}

$phone=$_POST["phone"]; 
$number=$_POST["number"];
if(!empty($number) && !empty($phone)){ 
    $number=$phone.$number;
    $insert="update user set phone = '$number' where username = '$username';";
    $rs=mysqli_query($con,$insert);
}else if(!empty($number) && empty($phone))
{echo "<script>alert('Phone number cannot be changed')</script>";}



$pass1=$_POST["pass1"]; //&& $pass1==$_SESSION['pass'] !empty($pass1) && 
$pass2=$_POST["pass2"];
$pass3=$_POST["pass3"];
if(!empty($pass2) && $pass2==$pass3 && $pass1==$pass){ 
    if($pass1 == $pass2)
    {echo "<script>alert('Current password is the same as the new one')</script>";} 
    else{
    $insert="update user set password = '$pass2' where username = '$username';";
    $rs=mysqli_query($con,$insert);
    $_SESSION['pass']=$pass2;
    echo "<script>alert('Password changed successfully')</script>";}
//    header('Refresh:0; url=account.php');
}else if(!empty($pass1) || !empty($pass2) || !empty($pass3)){echo "<script>alert('Password cannot be changed, one or more field is empty')</script>";}



$imagename=$_FILES["newimage"]["name"];
if (!empty($imagename)){
//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['newimage']['tmp_name']));
//Insert the image name and image content in image_table
$insert_image="update user set img = '$imagetmp' where username = '$username';";
$rs=mysqli_query($con,$insert_image);
}




if(isset($_POST['delete']))
    {
        func($con);
    }
    function func($con)
    { $username=$_SESSION['username'];
        $delete="update user set img = null where username = '$username';";
        $rs=mysqli_query($con,$delete);
        header('Refresh:0; url=account.php');
    }


header('Refresh:0; url=account.php');
?>
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>