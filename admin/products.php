<?php
$page=7;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if (!isset($_SESSION["Admin"])){
    ?>



<?php
} 
else {
    ?>
   <h1>ACCESS DENIED</h1> follow this link and <a href="/projectphp/pages/admin"><b>try agin</b></a>...
    <?php
}
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>