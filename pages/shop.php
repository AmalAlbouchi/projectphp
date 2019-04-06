<?php 
$page=4;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>

<div class="container">
<div class="row">

<div class="col-lg-3">

  <h1 class="my-4">Shop Name</h1>

  <form onchange="showProducts()">
  <div id="list_grp" class="list-group">
    <ul>
    <li>
        <input type='radio' value='1' name='radio' id='radio1'/>
        <label for='radio1'class="list-group-item">Category 1</label>
    </li>
    <li>
        <input type='radio' value='2' name='radio'  id='radio2'/>
        <label for='radio2'class="list-group-item">Category 2</label>
    </li>
    <li>
        <input type='radio' value='3' name='radio'  id='radio3'/>
        <label for='radio3'class="list-group-item">Category 3</label>
    </li>
    <li>
        <input type='radio' value='4' name='radio'  id='radio4' checked/>
        <label for='radio4'class="list-group-item">ALL</label>
    </li>
    </ul>
  </div>
  <div class="form-group">
    <label for='price_range'>Price : $<span id="price_show">2500</span> </label> 
    <input type="range" class="form-control-range" name="price_range" id="price_range" min="0" max="5000" oninput="price_change(this.value)" onchange="price_change(this.value)">
  </div>

  </form>
  
</div>
<!-- /.col-lg-3 -->

<div class="col-lg-9">
<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row" id="txtHint">

      </div>
    </div>
  </div>
</div>

<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>

