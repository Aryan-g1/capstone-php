<?php
$con = mysqli_connect('localhost','root','','capstonegamestore');

$email = $_POST['email'];
$password = $_POST['password'];

$check = mysqli_query($con, "UPDATE userdetails SET password = '$password' WHERE  email='$email'");

if($check > 0){
    echo "Update Successful";
}
else{
        echo "Error";
    }

?>