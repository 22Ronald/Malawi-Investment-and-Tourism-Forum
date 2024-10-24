 <!DOCTYPE html>
<html lang="en">
    <head>
    <script src="https://www.google.com/recaptcha/api.js"></script>
  <!-- Your code -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://www.google.com/recaptcha/api.js"></script>

        <title>Malawi Stock Exchange</title>
        <script src="https:www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token){
                document.getElementById("login_form").Submit();
            }
            </script>
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
                       <li class="nav__item"><a href="#skills" class="nav__link">Sign up</a></li>
                       <li class="nav__item"><a href="#kills" class="nav__link">Sign in</a></li>


                     
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
                    <h1 class="home__title">Stock Exchange <br>  <span class="home__title-color"></span><br></h1>

                    <a href="#" class="button" style="background-color:#4070F4; width: 50%">Welcome </a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-facebook'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-twitter' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/vv.jpg" alt="-logo">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">


                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/1659514696479.PNG" alt=" logo">
                    </div>
            <!--===== Subscribe =====-->
            <section class="contact section" id="skills">
                <h2 class="section-title" >Sign up</h2>
                <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>

                <div class="contact__container bd-grid">
                    <form action="Account process.php" method="post" class="contact__form">
                        <input type="text" placeholder="Fullname" id="fullname" name="Fullname" class="contact__input">
                   <i>  <b>   <label for="PASSWORD">PASSWORD</label> <br></b></i>
                   <input type="PASSWORD"  name="password"  required="required" class="form-control"placeholder="Enter New Password"  required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="" id="myInput"  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                       <br>
                                 
<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
               
                        </select>
                        <br>
                        <div class="g-recaptcha" data-sitekey="6LeIDkcpAAAAAJx1ysogY7TI9rokq0sjN5Y36UXL" data-callback="onSubmit" data-action="Log-in" required>Log-In</div>
                        </br>
                        <input type="submit" value="Sign up" class="contact__button button" style="background-color:#4070F4; width: 50%">
                    </form>

                    <section class="contact section" id="kills">
                    <h2 class="section-title" >Sign In</h2>
                    <form name="loginform" form action="Login process.php" method="post" class="contact__form">
                        <input type="text" placeholder="Fullname" id="fullname" name="Fullname" class="contact__input">
                   <i>  <b>   <label for="PASSWORD">PASSWORD</label> <br></b></i>
                   <input type="PASSWORD"  name="password" placeholder="password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="" id="myInputooo"  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                       <br>
                                       
<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInputooo");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
               
                
                        </select>
                        <br>
                        <div class="g-recaptcha" data-sitekey="6LeIDkcpAAAAAJx1ysogY7TI9rokq0sjN5Y36UXL" data-callback="onSubmit" data-action="Log-in" required>Log-In</div>
                        </br>
                        <input type="submit" value="Sign IN" class="contact__button button" style="background-color:#4070F4; width: 50%">
                    </form>
                    <script>
                      function login(login)
                      {
                        if(loginform.fullname.value && loginform.password.value)
                        {
                          var fullname=document.getElementById("fullname").value;
                          document.write('<html><body><h1><center>')
                          document.write("Welcome" +"");
                          document.write(fullname);
                          document.write('<center><h1><body></html>')

                        }
                        else
                        alert("Please enter your name");
                      }
                      </script>



                </div>
            </section>  
            </section>
            <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<h2>Popup Form</h2>
<p>Click on the button at the bottom of this page to open the login form.</p>
<p>Note that the button and the form is fixed - they will always be positioned to the bottom of the browser window.</p>

<button class="open-button" onclick="openForm()">Open Form</button>

<div class="form-popup" id="myForm">
<form action="Account process.php" method="post"  class="form-container">
    <h1>Sign up</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Fullname" id="fullname" name="Fullname" required>

    <label for="psw"><b>Password</b></label>
    <input type="PASSWORD"  name="password" placeholder="password" required>

    <button type="submit" class="btn">Sign-up</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

            
            
                </div>
            </section>  
            
            <script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>

<form action="Account process.php" method="post" class="contact__form" form  name="chngpwd" method="post" \ onSubmit="return valid();">
                                                    <div class="form-group has-success">
                                                    
                                                       <div class="form-group has-success">
                                                        <label for="success" class="control-label">New Password</label>
                                                        <div class="">
                                                            <input type="password" name="newpassword" required="required" class="form-control" placeholder="Enter New Password"  required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="" id="myInput"  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                                                            <input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
                                                        </div>
                                                        
                                                    </div>
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">Confirm Password</label>
                                                        <div class="">
                                                            <input type="password" name="confirmpassword" class="form-control" required="required" id="success"placeholder="Confirm your passsword"  required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="" id1="myInput"  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                                                        </div>
                                                    </div>
  <div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="submit" class="result-color1">Change</button>
                                                    </div>


                                                    
                                                </form>
            
            </section>
</div>
<h6>Click to view goal</h6>
<button onclick="myFunction()">Try it</button>
<script>
function myFunction() {
    alert("<?php
echo "Today is " . date("Y/m/d") . "";?>");
}
</script></a>
</section>
</div></form>
        
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
                    