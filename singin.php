<?php
$con = mysqli_connect('localhost','root','','capstonegamestore');

$email = $_POST['email'];
$password = $_POST['password'];

$check_data = mysqli_query($con, "SELECT * FROM userdetails WHERE email='$email' and password = '$password'");
$check = mysqli_num_rows($check_data);

if($check > 0){
    echo "Login Successful";
}
else{
        echo "Login Failed";
    }

?>