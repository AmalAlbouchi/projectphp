
<?php
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/config.php'); 
if (isset($_GET['catg'])) $catg = intval($_GET['catg']);
else $catg=4;
if (isset($_GET['p'])) $p=intval($_GET['p']);
else $p=2500;
if ($catg>3) {
  $sql= "SELECT * FROM product WHERE (price > $p)" ;
} else {
  $sql= "SELECT * FROM product Where category = $catg AND (price > $p)";
}
$result= mysqli_query($con,$sql);
if ($result!=FALSE){
      while ($product = mysqli_fetch_assoc($result)) {
    echo '<div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
        <a href="projectphp/pages/item.php?product_id=<'.$Product['id'].'"><img src="data:image/jpeg;base64,'.base64_encode( $product['image'] ).'" alt="'.$product['image_name'].'"/></a>
            <div class="card-body">
                <h4 class="card-title">
                  <a href="projectphp/pages/item.php?product_id='.$Product['id'].'">'.$product['name'].'</a>  
                </h4>
                <h5>'.$product['price'].'</h5>
                <p class="card-text">'.$product['brief-discr'].'
            </div>
            <div class="card-footer">
          <small class="text-muted">';
        for ($i=0; $i <intval($product['rate']) ; $i++) { echo "&#9733;";}
        for ($i=0; $i <5-$product['rate'] ; $i++) { echo "&#9734;";} 
        echo '</small></div></div></div>';
}
}
mysqli_close($con);
?>