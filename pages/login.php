<?php 
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>

<?php
$username = $_POST["username"];
$pass = $_POST["pass"];

$s = "select * from user where username='$username' && password='$pass'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if ($num == 1){
    $_SESSION['username'] = $username;
    echo "<div class='container'>
    <br>
    <h1>Login successful</h1>
    <h2> Redirecting to Home page</h2>
    <br>";
    echo "<br><img src='../images/pacman.gif'>
    </div>";
    header("Refresh:4; url=../index.php");
}
else{
echo "<div class='container'>
    <br>
    <h1>Password or Username wrong</h1>
    <h2> Redirecting to Login page</h2>
    <br>";
    echo "<br><img src='../images/pacman.gif'>
    </div>";
header('Refresh:4; url=loginform.php');
}
?>

<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>