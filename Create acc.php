

</script>
<script> alert('Welcome User ....!');

</script>";


<?php
          session_start();
         if(!isset($_SESSION["fullname"]))
            ?>

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

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="Index.php" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="map.php" class="nav__link active">Precise location</a></li>
                       <li class="nav__item"><a href="#skills" class="nav__link">Sign IN</a></li>
                       <li class="nav__item"><a href="#Jesus" class="nav__link">Buy Shares</a></li>

                     
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
                    <h1 class="home__title">Stock <br>  <span class="home__title-color">Market</span><br></h1>

                    <a href="#" class="button" style="background-color:#4070F4; width: 50%">Welcome </a>
                    <h1> welcome user:</h1>
<h3>You have logged in as: <?php echo $_SESSION["fullname"]; ?>
</h3>
<h3>And your Username is: <?php echo $_SESSION["fullname"];?>
</h3>
         
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-facebook'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-twitter' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/o.jpg" alt="-logo">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">


                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/m.jpg" alt=" logo">
                    </div>

   
                        <!--===== CONTACT  =====-->
                        <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>
               <h4 class= "Sent notification"> </h4>
                <div class="contact__container bd-grid">
                    <form id="myForm" class="contact__form">
                        <input type="text" placeholder="Enter Name" id="name"  name="name" class="contact__input">
                        <input type="mail" placeholder="Email" id="email"  name="email" class="contact__input">
                        <input type="text" placeholder="Subject" id="subject"  name="Subject" class="contact__input">
                        <textarea name="text"placeholder="Message" id="body" cols="0" rows="10" class="contact__input " ></textarea>
      
                        <input type="submit" onclick="sendemail" value="Send" class="contact__button button">
                    </form>
                    
                    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

                <script type="text/javascript">
                function Send(){
                    var name =$( "#name");
                    var email=$("#email");
                    var subject=$("#subject");
                    var body=$("#body");

                    if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body) ){
                        $.ajax({
                            url: 'sendEmail.php',
                            method: 'POST',
                            dataType: 'json', 
                            data: {
                                name: name. val(),
                                email: email.Val(),
                                subject: subject.val(),
                               body: body.val(), 

                            },success: function(response){
                                $('#myForm')[0].reset();
                                $('sent-notification').text("Message sent successfully.");
                            }
                        });
                    }
                }
                function isNotEmpty(caller){
                    if(caller.val()==""){
                       caller.css('border','1px solid red'); 
                       return false;
                    }
                    else{
                     caller.css('border','');
                     return true;   
                    }
                }
                </script>



 
                    </div>  
                    </section>
           
           </main> 
        <br>
        <br>  
        </main>
        <section class="contact section" id="Jes">
                <h2 class="section-title"><i>Live Location</i></h2>
                <button id="getLocation"> Get Location</button>

 <button class="geeks" type="button" onclick="getlocation();">
     Current Position
 </button>
 <div id="demo2" style="width: 1340px; height: 500px"></div>
 <script src="https://maps.google.com/maps/api/js?sensor=false">
 </script>
 <script type="text/javascript">
     function getlocation() {
         if (navigator.geolocation) {
             navigator.geolocation.getCurrentPosition(showLoc, errHand);
         }
     }
     function showLoc(pos) {
         latt = pos.coords.latitude;
         long = pos.coords.longitude;
         var lattlong = new google.maps.LatLng(latt, long);
         var OPTions = {
             center: lattlong,
             zoom: 10,
             mapTypeControl: true,
             navigationControlOptions: {
                 style: google.maps.NavigationControlStyle.SMALL,
             },
         };
         var mapg = new google.maps.Map(
             document.getElementById("demo2"),
             OPTions
         );
         var markerg = new google.maps.Marker({
             position: lattlong,
             map: mapg,
             title: "You are here!",
         });
     }

     function errHand(err) {
         switch (err.code) {
             case err.PERMISSION_DENIED:
                 result.innerHTML =
                     "The application doesn't have the permission" +
                     "to make use of location services";
                 break;
             case err.POSITION_UNAVAILABLE:
                 result.innerHTML = 
                       "The location of the device is uncertain";
                 break;
             case err.TIMEOUT:
                 result.innerHTML = 
                       "The request to get user location timed out";
                 break;
             case err.UNKNOWN_ERROR:
                 result.innerHTML =
                     "Time to fetch location information exceeded" +
                     "the maximum timeout interval";
                 break;
         }
     }
 </script>
 
</section>


        <section class="contact section" id="Jes">
                <h2 class="section-title"><i>Live chat</i></h2>
                <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="1ed8194f-ab23-4c0d-afe8-7c0cf6a3e537";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
                <script>window.addEventListener('load', function () { var el = document.createElement('script'); el.setAttribute('src', 'https://client.consolto.com/iframeApp/iframeApp.js'); el.id = 'et-iframe'; el.async = true; el.setAttribute('data-widgetId', '658f31bfdcea663cc79e802b'); el.setAttribute('data-version', 0.5); el.setAttribute('data-test', false); document.body.appendChild(el); }); </script>
            <!--===== Subscribe =====-->
            <section class="contact section" id="Jesus">
                <h2 class="section-title"><i>Buy Shares</i></h2>
<i>
                <div class="contact__container bd-grid">
                    <form action="Subscriptionprocess.php" method="post" class="contact__form">
                        <input type="text" placeholder="Fullname" Required id="fullname" name="Fullname" class="contact__input">
                        <label>Gender</label>
                        <select name="gender" id="gender">
                         <option value="Male">Male</option>
                         <option value="Female">Female</option>
                         <option value="Other">Other</option>
                        </select>
                        <br>
                        <br>
                        <input type="date" placeholder="dob" id="dob" name="dob"  class="contact__input">
                        <input type="text" placeholder="nationalID"  id="nationalid" name="nationalid"  class="contact__input">
                        <input type="text" placeholder="phonenumber" Required id="phonenumber" name="phonenumber"  class="contact__input">
                        <input type="mail" placeholder="Email" Required id="email" name="email" class="contact__input">
                        <input type="text" placeholder="Occupation"Required  id="occupation" name="occupation"  class="contact__input">
                        <label>Company</label>
                        <select id="Company" name="Company">
                         <option value="Telecom Networks Malawi(TNM)">Telecom Networks Malawi(TNM)</option>
                         <option value="Airtel">Airtel</option>
                         <option value="Illovo Sugar Group">Illovo Sugar Group</option>
                         <option value="Sunbird Hotels">Sunbird Hotels</option>
                         <option value="Old Mutual">Old Mutual</option>
                         <option value="Mpico">Mpico</option>
                         <option value="Nico Holdings Group">Nico Holdings Group</option>
                         <option value="Press Corparation Limited">Press Corparation Limited</option>
                         <option value="Protea Hotels Ryalls">Protea Hotels Ryalls</option>
                         <option value="National Bank">National Bank</option>
                         <option value="Standard Bank">Standard Bank</option>
                         <option value="First Merchant Bank">First Merchant Bank(FMB)</option>
                        </select>
                        <br>
                        <br>
                        <label>Origin</label>
                        <select name="Origin" id="Origin">
                         <option value="Malawian">Malawian</option>
                         <option value="Foreigner">Foreigner</option>
                        </select>
                        <br>
                        <br>
                        
                        <label>Payment Method</label>
                        <select id="payment" name="payment">
                         <option value="Visa">Visa</option>
                         <option value="Debit Card">PayPal</option>
                         <option value="Master Card">Master Card</option>
                        </select>
                        
                        </br>
                        <BR>
                        <input type="submit" style="background-color:#4070F4; width: 50%" value="BUY" class="contact__button button" >
                        <br>
                   

                        
                        
                        <br>
                        <i><b>You MUST to fill the personal information and should be exactly the same as of the on the Passport but preferably NationID</b><i>
      <br></br>                  <i><b>
Foreign subscribers can still subscribe without National ID, the can use Passport ID but notify the Administrators  </b></i>

                    </form>
                </div>
            </section>



            
      

        
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
<br>
</footer>

<!--===== MAIN JS =====-->
<script src="assets/js/main.js"></script>


</body>
</html>