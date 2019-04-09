
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/config.php'); 
if (isset($_GET['catg'])) $catg = intval($_GET['catg']);
else $catg=4;
if (isset($_GET['p'])) $p=intval($_GET['p']);
else $p=0;
if ($catg==4) {
  $sql= "SELECT * FROM product WHERE (price > $p)" ;
} else {
  $sql= "SELECT * FROM product Where (category = $catg) AND (price > $p)";
}
$result= mysqli_query($con,$sql);
//$res=mysqli_fetch_array($result);
if ($result!=FALSE){
      while ($product = mysqli_fetch_assoc($result)) {
    echo '<div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">';
        if ($product['image']!=null){
       echo '
       <div style="max-width: 100%; height: 300px; margin: 0 auto; display:flex; align-items:center;">
       <a href="item.php?product_id='.$product['id'].'"><center><img class="rounded" style="max-width: 100%; max-height: 300px;" src="data:image/jpeg;base64,'.base64_encode( $product['image'] ).'" alt="'.$product['image_name'].'"/></center></a>
       </div>';
      } else{
        echo '<div style="width: 100%; height: 300px; margin: 0 auto; display:flex; align-items:center;">
        <a href="item.php?product_id='.$product['id'].'"><center><img class="rounded" style="max-width: 100%; max-height: 300px;" src="../images/item.png" /></center></a>
      </div>';
      }
        echo '<div class="card-body">
                <h4 class="card-title">
                  <a href="item.php?product_id='.$product['id'].'">'.$product['name'].'</a>  
                </h4>
                <h5>'.$product['price'].'</h5>
                <p class="card-text">'.$product['brief_descr'].'
            </div>
            <div class="card-footer">
          <small class="text-muted">';
        for ($i=0; $i <intval($product['rate']) ; $i++) { echo "&#9733;";}
        for ($i=0; $i <5-$product['rate'] ; $i++) { echo "&#9734;";} 
        echo '</small>';
        if ( $product['p_rate']==0 ) echo '</span> No Stars';
        else echo '</span>'.$product['rate'].' stars';
        echo'
        </div></div></div>';
}
}
mysqli_close($con);
?>