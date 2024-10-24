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
                       <li class="nav__item"><a href="#skills" class="nav__link">Create Account</a></li>


                     
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
            <section class="about section " id="skills">


                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/ui.jpg" alt=" logo">
                    </div>
                    <section class="contact section" id="skills">
                <h2 class="section-title">Admin Account</h2>

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
                    <form action="Registrationprocess.php" method="post" class="contact__form" \ onSubmit="return valid();">
                        <input type="text" placeholder="Fullname" id="fullname" name="Fullname" class="contact__input" required="required">
                        <br>

                        <input type="text" placeholder="nationalID" id="nationalid" name="nationalid"  class="contact__input" required="required">
                        <input type="text" placeholder="phonenumber" id="phonenumber" name="phonenumber"  class="contact__input" required="required">
                        <input type="mail" placeholder="Email" id="email" name="email" class="contact__input" required="required">
                   <i>  <b>   <label for="PASSWORD">PASSWORD</label> <br></b></i>
                       <input type="PASSWORD"  name="password" placeholder="password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="" id="myInput"  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                       <br>
                       <b>   <label for="PASSWORD">CONFIRM PASSWORD</label> <br></b></i>
                       <label for="PASSWORD"    class="control-label"></label>
                                                        <div class="">
                                                            <input type="PASSWORD" name="newpassword" required="required" class="confirm password" value="" id="myInput"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"   title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Confirm Password">
                                                        </div>
                  
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
                        </br>
                        <input type="submit" value="Create Account" class="contact__button button">
                    </form>
                
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

<form  name="chngpwd" method="post" \ onSubmit="return valid();">
                                                    <div class="form-group has-success">
                                                        <label for="success" class="control-label">Current Password</label>
                                                		<div class="">
                                    <input type="password" name="password" class="form-control" required="required" id="success"placeholder="Enter Current Password">
                                                      
                                                		</div>
                                                	</div>
                                                       <div class="form-group has-success">
                                                        <label for="success" class="control-label">New Password</label>
                                                        <div class="">
                                                            <input type="password" name="newpassword" required="required" class="form-control" id="success"placeholder="Enter New Password">
                                                        </div>
                                                        
                                                    </div>
                                                     <div class="form-group has-success">
                                                        <label for="success" class="control-label">Confirm Password</label>
                                                        <div class="">
                                                            <input type="password" name="confirmpassword" class="form-control" required="required" id="success"placeholder="Confirm your passsword">
                                                        </div>
                                                    </div>
  <div class="form-group has-success">

                                                        <div class="">
                                                           <button type="submit" name="submit" class="result-color1">Change</button>
                                                    </div>


                                                    
                                                </form>
            
                </div>
            </section>

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
        </footer>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>

     
    </body>
</html>
    </body>
</html>