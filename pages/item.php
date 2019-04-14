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
$Product_p_Rate=$result['p_rate'];
echo '
<div class="container">
    <div class="card mt-4">
          <div style="max-width: 100%; height: 50%; margin: 0 auto; display:flex; align-items:center;">';
          if(isset($result['image'])){echo '<img style="max-width: 100%; max-height: 100%;" src="data:image/jpeg;base64,'.base64_encode( $Product_Image ).'"/>';}
          else{echo '<img style="max-width: 100%; max-height: 100%;" src="../images/item.png"/>';}
           echo '</div>
            <div class="card-body">
                <h3 class="card-title">'.$Product_Name.'       
                </h3>
                <h4>$'.$Product_Price.'</h4>
                <p class="card-text">'.$Product_Description.'<br><small class="text-muted">Product ID: '.$temp.'</small>
                </p>
                <span class="text-warning">';
                for ($i=0; $i <intval($Product_Review) ; $i++) { echo "&#9733;";}
                for ($i=0; $i <5-$Product_Review ; $i++) { echo "&#9734;";} 
                if ($Product_p_Rate==0) echo '</span> No Stars (0 Ratings)';
                else if($Product_Review==1){ if($Product_p_Rate==1) echo '</span> 1 Star ('.$Product_p_Rate.' Rating)'; 
                      else echo '</span> 1 Star ('.$Product_p_Rate.' Ratings)';}
                else if($Product_Review-floor($Product_Review)==0){ if ($Product_p_Rate==1) echo '</span> '.$Product_Review.' Stars ('.$Product_p_Rate.' Rating)'; 
                      else echo '</span> '.$Product_Review.' Stars ('.$Product_p_Rate.' Ratings)';}
                else echo '</span> '.number_format((float)$Product_Review, 2, ".", "").' Stars ('.$Product_p_Rate.' Ratings)';
                echo'<center><a href="add_item.php?id='.$temp.'"><button type="button" class="btn btn-info">Add To Cart</button></a></center>
            </div>
            </div>

            <!-- /.card -->
            <div class="card card-outline-secondary my-4">
            <div class="card-header">
                Product Reviews
            </div>
            <div class="card-body">';
            $sql="SELECT * FROM review where id='".$_GET['product_id']."' order by date_review";
            $result=mysqli_query($con,$sql);
                while ($review = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                  if($review['text']!=''){
                    $username=$review['username'];
            $s = "SELECT * FROM user WHERE username = '$username'";
            $sth = mysqli_query($con,$s);
            $product = mysqli_fetch_array($sth);
                  echo '<div class="card">
                  <div class="card-body">';
                     echo '<div class="row"><div class="col-sm-2">';
                    if(isset($product['img'])) {echo '<img style="max-width: 100%; max-height: 100px; border-radius: 20%;" src="data:image/jpeg;base64,'.base64_encode( $product['img'] ).'"/>';}
                    else{echo '<img style="max-width: 100%; max-height: 100px; border-radius: 10%;" src="../images/user.png"/>';} 
                    echo '</div>
                      <div class="col-sm-8" style="display:flex; align-items:center;">
                      ';
                echo '<p>'.$review['text'].'</p>';
                echo '</div>
                <div class="col-sm-2" style="display:flex;flex-direction:column; align-items:flex-end; margin-left: auto;">';
                for ($i=0; $i <intval($review['rate']) ; $i++) { echo "&#9733;";}
                for ($i=0; $i <5-$review['rate'] ; $i++) { echo "&#9734;";} 
                echo '</div></div><hr>';
                echo '<small class="text-muted">Posted by '.$review['username'].' on '.$review['date_review'].'</small>';
                echo '</div></div><br>';  
              }
              }
            echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Leave a Review</button>
            </div>
    </div>
</div>';
        }
}else{

}?>
<br><br><br><br>
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>

<?php       if(isset($_SESSION['username'])){      
            $s="SELECT * FROM review where id='".$_GET['product_id']."' and username='".$_SESSION['username']."'";
            $r=mysqli_query($con,$s);
            $res=mysqli_fetch_array($r);}
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
        <form onsubmit="return false" name="formrate">
          <div class="form-group">
            <label class="col-form-label">Stars:</label> 
            <button class="njoum" id="1" >&#9734;</button>
            <button class="njoum" id="2">&#9734;</button>
            <button class="njoum" id="3">&#9734;</button>
            <button class="njoum" id="4">&#9734;</button>
            <button class="njoum" id="5">&#9734;</button> <label id='nostrs'></label>
          </div>
        </form>
      </div>


      <div class="modal-body">
        <form onsubmit="return review()" method="post" action="review.php" name='formsub'>
        <input type="hidden" name="stars" value="" id='strs'/>
        <?php echo "<input type='hidden' name='id' value='$temp'/>";?>
        <?php 
        if(isset($res['rate'])){
        $r=$res['rate']; 
        echo "<input type='hidden' id='rt' value='$r'/>";}
        else{echo "<input type='hidden' id='rt' value=0>";}
        ?>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Your Review:</label>
            <textarea class="form-control" id="message-text" name='rev'><?php if(isset($res['text'])){echo $res['text'];}?></textarea>
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Send Review">
         </div>
        </form>
      </div>


      
    </div>
  </div>

</div>
<script>


 stars=0;
 x = document.getElementById("rt").value;
 console.log(x);
 stars=parseInt(x);
 if(stars!=0){
 for (var i = 1; i <= stars; i++) {        
         id="#"+i;
        $(id).html('&#9733;');
     };}

 $(function(){
     $(".njoum").on('click',function(){
      len= parseInt($(this).attr('id'));
      stars=len;
      document.getElementById("strs").value= stars;
      for (var i = stars+1; i <= 5; i++) {        
         id="#"+i;
        $(id).html('&#9734;');
     };
 }); 
 });

 $(function(){
         $(".njoum").hover(function(){
             len= parseInt($(this).attr('id'));
             for (var i = stars+1; i <= len; i++) {        
                 id="#"+i;
                 console.log(id)
                $(id).html('&#9733;');}
    
            }, function(){
                // change to any color that was previously used.
                len= parseInt($(this).attr('id'));
                for (var i = stars+1; i <= len; i++) {        
                    id="#"+i;
                   $(id).html('&#9734;');
                };     
 })
 });


function review(){
  if(stars==0){document.getElementById("nostrs").innerHTML='You should at least leave a rating!'; return false;}
  return true;
} 
</script>