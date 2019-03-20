<?php 
$page=5;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>


<?php


//session_start();
$con = mysqli_connect('localhost','root','','projectphp');



$username = $_POST["username"];
$firstname = $_POST["first_name"];
$lastname = $_POST["last_name"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$address = $_POST["address"];
$phonenumb = $_POST["phone"].$_POST["number"];
$pass = $_POST["pass1"];
$date = date('Y-m-d H:i:s');

$s = "select * from user where username='$username'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($num == 1){echo "Username already taken";}
else {
    echo $date;
    $reg= "insert into user(username, password, first_name, last_name, email, phone, address, gender, date) values('$username','$pass','$firstname','$lastname','$email','$phonenumb','$address','$gender','$date')";
    $rs=mysqli_query($con,$reg);
    if($rs){echo "Registration has been successfully completed ";}
}

?>


<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>