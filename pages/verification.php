<?php 
$page=5;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>
<br><br>
<div class='container'>
    <h1>Verification completed</h1><br>
    <h2> Redirecting to Login page</h2>
    <br><br><img src='../images/pacman.gif'>
    </div>
    
    
    <?php header('Refresh:2; url=loginform.php');
?>

<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>