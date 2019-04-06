<?php
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if (!isset($_SESSION["Admin"])){
    ?>
            <form action="access.php" name="formlog">
            <div class="form-group" style="width:60px;margin:5px;">
                <button type="submit" class="btn btn-info btn-block"> <i class="fas fa-redo"></i>  </button>
            </div>
            </form>

<?php
} 
else {
    ?>
   <h1>ACCESS DENIED</h1> follow this link and <a href="/projectphp/pages/admin"><b>try agin</b></a>...
    <?php
}
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>