<?php
$id=$_POST['name'];
sql="DELETE * FROM products WHERE id=$id";
$rs=mysqli_query($con,$sql);

?>