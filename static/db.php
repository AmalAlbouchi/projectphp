<?php
session_start();
$hostname="localhost";
$database="projectphp";
$username="root";
$password="";

$con = mysqli_connect($hostname,$username,$password,$database);
?>