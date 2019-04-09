<?php
$page=5;
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/header.php');


$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$brief_descr = $_POST["brief_descr"];
$catg = $_POST["catg"];

$imagename=$_FILES["newimage"]["name"];
if (!empty($imagename)){
    $imagetmp=addslashes (file_get_contents($_FILES['newimage']['tmp_name']));
    $reg= "insert into product(name,price,description,brief_descr,category,image,image_name) values('$name','$price','$description','$brief_descr','$catg','$imagetmp','$imagename')";
    $rs=mysqli_query($con,$reg);
}else{
    $reg= "insert into product(name,price,description,brief_descr,category) values('$name','$price','$description','$brief_descr','$catg')";
    $rs=mysqli_query($con,$reg);
    }
    

    if($rs){
        echo "<div class='container'>
        <br>
        <h1>Product added successfully</h1>
        </div>
        ";}
        else{ echo "<div class='container'>
            <br>
            <h1>Product not added</h1>
            </div>";}

    header('Refresh:2; url=access.php');


include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/footer.php');
?>