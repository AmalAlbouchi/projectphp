<?php 
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>


<!--?php
if(empty($_POST)) {
echo "empty";
}
else{echo "not empty";}
?-->


<?php

$username=$_SESSION['username'];
echo $username;
//$imagename=$_FILES["newimage"]["name"]; nom de l image

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['newimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="update user set img = '$imagetmp' where username = '$username';";

$rs=mysqli_query($con,$insert_image);
if($rs){header('location:account.php');}
else{echo "false";}

?>
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>