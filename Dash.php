<?php
Session_starts();
if(empty($_SESSION['Name']))
{
    header('location:Create acc.php');
}
$fullname= $_SESSION['fullname'];
?>
<h2 style=text-align:center;><?php echo $fullname; ?>, Welocome to Dashboard</h2>
<p><h4 style=text-align:center;><a href="Account.php">Log Out</a></h4>