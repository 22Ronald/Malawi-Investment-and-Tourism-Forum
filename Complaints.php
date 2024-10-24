<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Malawi Stock Exchange</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Malawi Stock Exchange </a>
                </div>
                </div>

<div class="nav__menu" id="nav-menu">
    <ul class="nav__list">
        <li class="nav__item"><a href="index.php" class="nav__link active">Home</a></li>
       <li class="nav__item"><a href="Payment.php" class="nav__link">Payments</a></li>
       <li class="nav__item"><a href="#sills" class="nav__link">Complaints and recomandations</a></li>
        <li class="nav__item"><a href="Adminlogin.php" class="nav__link">Sign out</a></li>

     
    </ul>
</div>

<div class="nav__toggle" id="nav-toggle">
    <i class='bx bx-menu'></i>
</div>
</nav>
</header>


<main class="l-main">
<!--===== HOME =====-->
<section class="home bd-grid" id="home">
<div class="home__data">
    <h1 class="home__title">STOCK EXCHANGE<br>  <span class="home__title-color"></span><br></h1>

    <a href="#" class="button"><i>
<h2> welcome Admin:</h2>
</i></a>
</div>

<div class="home__social">
    <a href="" class="home__social-icon"><i class='bx bxl-facebook'></i></a>
    <a href="" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
    <a href="" class="home__social-icon"><i class='bx bxl-twitter' ></i></a>
</div>

<div class="home__img">    
    <img src="assets/img/wo.png" alt="-logo">
</div>
</section>

<!--===== ABOUT =====-->
<section class="about section " id="about">
<h2 class="section-title">About</h2>

<div class="about__container bd-grid">
    <div class="about__img">
        <img src="assets/img/wo.png" alt=" logo">
    </div>
    
    <div>
        <h2 class="about__subtitle"></h2>
   <i>     <p class="about__text">Prime insurance is a malawian company that offers car insurances to different vehicles on different schemes its headquaters is in Lilongwe Chief liabunya bulding!</p>   <i>        
    </div>                                   
</div>
</section>
<style>
table {
font-family: arial, sans-serif;
border-collapse: collapse;
width: 100%;
}

td, th {
border: 1px solid #dddddd;
text-align: left;
padding: 8px;
}

tr:nth-child(even) {
background-color: #dddddd;
}
</style>
</head>
<body>
<?php require_once "connection.php";


?>




<section class="contact section" id="sills">
<h2 class="section-title">Complaints and recomendations</h2>

<i>

<?php


$sql = "SELECT userID, Fullname, Message, email FROM inquries";
$result = mysqli_query($connection, $sql);
if ($result->num_rows > 0) {
echo "<table><tr><th>UserID</th><th>Fullname</th><th>email</th><th>message</th></tr>";
// output data of each row
while($row = $result ->fetch_assoc()) {
echo "<tr><td>".$row["userID"]."</td><td>".$row["Fullname"]."</td><td> ".$row["email"]."</td><td>".$row["Message"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
?>
<section>
</i>

</table>
<br>
 <!--===== FOOTER =====-->
 <footer class="footer">

<p class="footer__title"> Malawi Stock Exchange</p>
<b><i>Making development possible </i></b><br></br>
<div class="social">
<a href="https://www.linkedin.com/company/malawi-stock-exchange"><i class="fab fa-linkedin-in"></i></a>
<a href="https://www.facebook.com/malawistockexchange"><i class="fab fa-facebook-f"></i></a>
<a href="https://twitter.com/Mw_S_Exchange"><i class="fab fa-twitter"></i></a>
<a href="https://wa.me/+265887249784?text=hello"><i class="fab fa-whatsapp"></i></a>
<a href="https://mse.co.mw/contact"><i class="far fa-envelope"></i></a>
<a href="tel:+265 1 824 233"><i class="fas fa-phone"></i></a>
</div>
<ul class="list-inline">
<!--
<li class="list-inline-item"><a href="#">Home</a></li>
<li class="list-inline-item"><a href="#">Services</a></li>
<li class="list-inline-item"><a href="#">About</a></li>
-->
<li class="list-inline-item"><a href="https://mse.co.mw/terms">Terms of Use</a></li>
<li class="list-inline-item"><a href="https://mse.co.mw/privacy">Privacy Policy</a></li>
</ul>
<p class="copyright">Malawi Stock Exchange © 2022</p>
<p>&#169; 2022</p>
</footer>

<!--===== MAIN JS =====-->
<script src="assets/js/main.js"></script>


</body>
</html>
</body>
</html>            
                    
