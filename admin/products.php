<?php
$page=5;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
if (!isset($_SESSION["Admin"])){
    ?>
            <form action="access.php" name="formlog">
            <div class="form-group" style="width:60px;margin:5px;">
                <button type="submit" class="btn btn-info btn-block"> <i class="fas fa-redo"></i>  </button>
            </div>
            </form>
            <div class="card-body"><br>
    <center><h5 class="card-title">Adding Product</h5></center>
    <article class="card-body mx-auto" style="max-width: 300px;" name='article'>            

   
    <form name="form" method="post" action="add_p.php" enctype="multipart/form-data" autocomplete="off">
		<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fas fa-box-open"></i> </span>
				 </div>
		        <input name="name" class="form-control" placeholder="Product Name" type="text" required>
		</div>

		<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fas fa-dollar-sign"></i> </span>
				 </div>
		        <input name="price" class="form-control" placeholder="Product Price" type="number" required>
		</div>

		<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fas fa-align-left"></i> </span>
				 </div>
		<textarea name="description" placeholder="Full Descripton" class="form-control" aria-label="With textarea" required></textarea>
		</div>

		<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fas fa-italic"></i></span>
				 </div>
		        <input name="brief_descr" class="form-control" placeholder="Short Descripton" type="text" required>
		</div>
			<div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fas fa-list-ul"></i> </span>
				 </div>
		        <input name="catg" class="form-control" placeholder="Category" type="number" required>
		</div>

		                <div class="form-group input-group">
                <span class="btn btn-secondary btn-file" style="width:300px;">
                    Add Picture <input type="file" name="newimage">
                </span>
            </div>
                           <input type="submit" name="submit" value="Submit" class="btn btn-success" style="width:260px;">
                </form>
                <br><br>
                <center><h5 class="card-title">Deleting Product</h5></center>
                <form method="post" name="form" action="delete_p.php" autocomplete="off">

                <div class="form-group input-group">
				<div class="input-group-prepend">
				    <span class="input-group-text"> <i class="fas fa-box"></i> </span>
				 </div>
		        <input name="name" class="form-control" id="delete_p" name="id" placeholder="Product ID" type="number" required>
		</div>

            <div class="form-group input-group">
            <input type="submit" name="delete" id="delete" value="Delete Product" class="btn btn-danger" style="margin : auto;">
            </div></form>
            </article>
    
</div>
<br><br><br><br>

<?php
} 
else {
    ?>
   <h1>ACCESS DENIED</h1> follow this link and <a href="/projectphp/pages/admin"><b>try agin</b></a>...
    <?php
}
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>