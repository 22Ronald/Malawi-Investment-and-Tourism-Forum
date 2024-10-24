<?php require_once "connection.php";
session_start();
$fullname= $_POST["Fullname"];
$password= $_POST["password"];


$check_duplicate_username = "SELECT fullname FROM `customer account` where fullname ='$fullname'";
$result = mysqli_query($connection, $check_duplicate_username);
$count = mysqli_num_rows($result);
if($count >0){
  
    echo "
<script> alert('User already exist ....!');</script>"; ;
    echo "<h1> name already exist </h1>";
    return false;

       
}
$query="INSERT INTO
`customer account`(`Fullname`,`password`)
values('$fullname','$password')";
$ret=mysqli_query ($connection,$query);

?>
<p>Registration COMPLETE.
<p>You can now log in the <a href="index mse.php">Log in</a> </p>
<?php
if ($connection->connect_error){
    die("connection failed".$connection_error);
}   