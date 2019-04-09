<?php 
$page=4;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');

if(isset($_GET['product_id'])){
    $temp=$_GET['product_id'];
    $sql="SELECT * FROM product Where id = $temp";
    $result=mysqli_fetch_assoc(mysqli_query($con,$sql));
    if ($result!=FALSE){
$Product_Name=$result['name'];
$Product_Price=$result['price'];
$Product_Description=$result['description'];
$Product_Review=$result['rate'];
$Product_Image=$result['image'];
$Product_p_Rate=['p_rate'];
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
                if ($Product_p_Rate==0) echo '</span> No Stars';
                else echo '</span>'.$Product_Review.' stars';
                echo'
            </div>
            </div>
            <!-- /.card -->
            <div class="card card-outline-secondary my-4">
            <div class="card-header">
                Product Reviews
            </div>
            <div class="card-body">';
            $sql="SELECT * FROM reviews where id='".$_GET['product_id']."'";
            $result=mysqli_query($con,$sql);
                while ($review = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                echo '<p>'.$review['text'].'</p>';
                echo '<small class="text-muted">Posted by'.$review['user'].' on '.$review['date'].'</small><hr>';
            }
            echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Leave a Review</button>
            </div>
    </div>
</div>';
        }
}else{

}

include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form onsubmit="return false">
          <div class="form-group">
            <label class="col-form-label">Stars:</label>
            <button class="njoum" id="1" >&#9734;</button>
            <button class="njoum" id="2">&#9734;</button>
            <button class="njoum" id="3">&#9734;</button>
            <button class="njoum" id="4">&#9734;</button>
            <button class="njoum" id="5">&#9734;</button>  
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Your Review:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send Review</button>
      </div>
    </div>
  </div>
</div>