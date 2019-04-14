<?php
$page=6;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if (!isset($_SESSION["admin"])){ 
if (!isset($_POST["pass"]) && !isset($_POST["username"])){
    ?>
           <h1>Error</h1> follow this link and <a href="/projectphp/admin"><b>try agin</b></a>...
    <?php
}elseif (!(strcmp($_POST["username"],"admin") && !(strcmp($_POST["pass"],"admin")))) {
    $_SESSION['admin']="admin"
    ?>
    
    <div class="container" style="margin-top: 7%;">
        <div class="card bg-light" style="margin-left:25%;max-width: 50%;">
            <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Choose action</h4>
    <br>
            <form action="products.php" name="formlog">
            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-info btn-block"> products  </button>
            </div>
            </form>
            <form action="commandes.php" name="formlog">
            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-success btn-block"> commandes  </button>
            </div>
            </form>
            <form action="/projectphp/pages/logout.php" name="formlog">
            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-danger btn-block"> logout  </button>
            </div>
            </form>
        </article>
         </div>
    </div>
    <?php
} 
else {
    ?>
       <h1>ACCESS DENIED</h1> follow this link and <a href="/projectphp/pages/admin"><b>try agin</b></a>...
    <?php
}
}else {
    ?>
 <div class="container" style="margin-top: 7%;">
        <div class="card bg-light" style="margin-left:25%;max-width: 50%;">
            <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Choose action</h4>
    <br>
            <form action="products.php" name="formlog">
            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-info btn-block"> products  </button>
            </div>
            </form>
            <form action="commandes.php" name="formlog">
            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-success btn-block"> commandes  </button>
            </div>
            </form>
            <form action="/projectphp/pages/logout.php" name="formlog">
            <div class="form-group" style="text-align:center;">
                <button type="submit" class="btn btn-danger btn-block"> logout  </button>
            </div>
            </form>
        </article>
         </div>
    </div>


    <?php 
}


include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>