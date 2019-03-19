<?php 
$page=5;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>


<?php
$username = $_POST["username"];
$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$address = $_POST["address"];
$phonenumb = $_POST["phone"].$_POST["number"];
if ($_POST["pass1"] == $_POST["pass2"])
{$pass = $_POST["pass1"];}
else {
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
}



?>


<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>