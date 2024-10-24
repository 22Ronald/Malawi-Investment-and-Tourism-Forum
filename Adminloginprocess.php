<?php

session_start();
require('connection.php');
$fullname= $_POST["Fullname"];
$password= $_POST["password"];
$query="select * FROM `Admin` WHERE fullname= '$fullname' and password=
'$password' ";
$results=mysqli_query($connection,$query);
$row=mysqli_fetch_array($results);
if (is_array($row))
{

include_once ("Admin session.php");
}
else { echo "Login error. Enter correct name or
password".mysqli_error($connection);
echo "<br><strong>Back to Homepage to <a
href='Adminlogin.php'>login</a></strong>"; } 
?>