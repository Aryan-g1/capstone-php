<?php
$con = mysqli_connect('localhost','root','','capstonegamestore');


$check = mysqli_query($con, "DELETE FROM userdetails WHERE email=".$_POST['email']);


if($check > 0){
echo "Account Deleted";
}
else{
echo "Error";
}

?>

