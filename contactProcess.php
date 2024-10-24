<?php require_once "connection.php";
session_start();
$name= $_POST["name"];
$email= $_POST["email"];
$text= $_POST["text"];
$query="INSERT INTO`inquries`(`userID`,`Fullname`,`email`,`message`)
values(null,'$name','$email','$text')";


$ret = mysqli_query($connection,$query);
if ($ret) { echo "<p>thank you for contacting us</p>";}
else { echo "<p>Something went wrong </p>".mysqli_error($connection);}

    
if ($ret) { echo "<p><a href=\"index.php\"><h2>//:Click here to redirect to
the Index</h2></a></p>"; } else { echo ""; }


?>

