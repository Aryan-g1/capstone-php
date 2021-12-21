<?php
$con = mysqli_connect('localhost','root','','capstonegamestore');
$id = $_POST['id'];
$category = $_POST['category'];
$gamename = $_POST['gamename'];
$couponcode = $_POST['couponcode'];

$input = mysqli_query($con, "INSERT INTO gamedetails (id,category,gamename,couponcode) 
    VALUES ('$id', '$category', '$gamename', '$couponcode')");

if($input){
    echo "Game details added in the table";
}else{
    echo "Error";
}
?>