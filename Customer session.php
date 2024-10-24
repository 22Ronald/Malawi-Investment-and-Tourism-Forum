<?php

$_SESSION["userID"]=$row['userID'];
$_SESSION["fullname"]=$row['Fullname'];

if($_SESSION["userID"]&&$_SESSION["fullname"] ==TRUE){
header("Location:Create acc.php");exit;
}
else{
$message= "Invalid username or Password!";
}
if(!$_SESSION["userID"]){
header("Location:Create acc.php");
}

?>