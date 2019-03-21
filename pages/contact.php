<?php 
$page=3;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');
?>

<div class="container">
<br>
<h1>Contact Form</h1>
<h2> Feel free to reach us for your concerns</h2>
<br>
<form action="mail.php" method="post">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="mail" placeholder="name@example.com" required>
    <div class="invalid-feedback">Required</div>
  </div>
  <div class="form-group">
    <label >Subject</label>
    <textarea class="form-control" name="subject" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label>Text</label>
    <textarea class="form-control" name="text" rows="3" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
</form>

</div>

<br> <br>
<?php 
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');

?>