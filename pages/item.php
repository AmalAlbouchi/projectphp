<?php 
$page=4;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');

if(isset($_GET['product_id'])){
    $sql="SELECT * FROM product Where id =".$_GET['product_id']."";
    $result=mysqli_query($con,$sql);
    if ($result!=FALSE){
$Product_Name=$result['name'];
$Product_Price=$result['price'];
$Product_Description=$result['description'];
$Product_Review=$result['review'];
$Product_Image=$result['image'];
echo '
<div class="container">
    <div class="card mt-4">
            <img src="data:image/jpeg;base64,'.base64_encode( $Product_Image ).'"/>
            <div class="card-body">
                <h3 class="card-title">'.$Product_Name.'       
                </h3>
                <h4>$'.$Product_Price.'</h4>
                <p class="card-text">'.$Product_Description.'
                </p>
                <span class="text-warning">';
                for ($i=0; $i <intval($Product_Review) ; $i++) { echo "&#9733;";}
                for ($i=0; $i <5-$Product_Review ; $i++) { echo "&#9734;";} 
               echo '</span>'.$Product_Review.'stars
            </div>
            </div>
            <!-- /.card -->
            <div class="card card-outline-secondary my-4">
            <div class="card-header">
                Product Reviews
            </div>
            <div class="card-body">';
            $sql="SELECT * FROM reviews where id=".$_GET['product_id']."";
            $result=mysqli_query($con,$sql);
                while ($review = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                echo '<p>'.$review['text'].'</p>';
                echo '<small class="text-muted">Posted by'.$review['user'].' on '.$review['date'].'</small><hr>';
            }
            echo '<a href="#" class="btn btn-success">Leave a Review</a>
            </div>
    </div>
</div>';
        }
}else{

}

include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>
