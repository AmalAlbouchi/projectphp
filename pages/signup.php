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
$pass = $_POST["pass1"];
$date = date('Y-m-d H:i:s');

$s = "select * from user where username='$username'";
$m = "select * from user where email='$email'";
$p = "select * from user where phone='$phonenumb'";

$result = mysqli_query($con,$s);
$resultm = mysqli_query($con,$m);
$resultp = mysqli_query($con,$p);

$num = mysqli_num_rows($result);
$numm = mysqli_num_rows($resultm);
$nump = mysqli_num_rows($resultp);

if ($num == 1){
    //echo "Username already taken";
    echo "<div class='container'>
    <br><br>
    <h1> Username already taken...</h1><br>
    <h2> Return to <a href='/projectphp/pages/signupform.php'>Sign Up</a> page</h2>
    <br>
    </div>";
}
else if($numm == 1){
    echo "<div class='container'>
    <br><br>
    <h1> E-mail address already used...</h1><br>
    <h2> Return to <a href='/projectphp/pages/signupform.php'>Sign Up</a> page</h2>
    <br>
    </div>";
    
}
else if($nump == 1){
    echo "<div class='container'>
    <br><br>
    <h1> Phone number already used...</h1><br>
    <h2> Return to <a href='/projectphp/pages/signupform.php'>Sign Up</a> page</h2>
    <br>
    </div>";
}
else {
    $reg= "insert into user(username, password, gender, first_name, last_name, email, address, date_sign, phone) values('$username','$pass','$gender','$firstname','$lastname','$email','$address','$date','$phonenumb')";
    $rs=mysqli_query($con,$reg);
    if($rs){
    echo "<div class='container'>
    <br>
    <h1> The registration has been successfully completed</h1>
    <br><h2> A verification code has been sent to the email address associated with your account</h2>
    <br>
    ";
    echo "
    <script src='../js/javascript.js'></script>
    <center><h3 style='margin:auto;'>Enter code</h3></center>

    <form action='verification.php' method='post' onsubmit='return check2()' name='myform'>
    
    <div class='form-group input-group' style='width:150px; margin:auto; margin-bottom:20px; margin-top:10px;'>
    <input name='code' class='form-control' placeholder='' type='password' required>
    </div></h3>
    <div class='form-group' style='width:150px; margin:auto;'>
        <button type='submit' class='btn btn-primary btn-block'> Confirm  </button>
        </div>
    </form>
        
        </div>
    ";
}
}

?>


<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>