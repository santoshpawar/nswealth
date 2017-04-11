<?php include_once 'include/header.php'; ?>

<body>
    <!-- Loader Start -->
    <div class="loader"><div style="color:#fff; position:absolute; font-size:20px; width:100%; text-align:center; top:30%;">NSWEALTH</div>
    <div class="sk-rotating-plane"></div>
</div>
   <section id="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 p-0">
                    <div class="hidden">
                        <h1>hidden</h1>
                    </div>
                    <p class="p_15 p-white p-t-10">A client base of 163+ families from across India</p>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 text-right p-0">
                    <div class="header-top-links">
                        <div class="social-icons text-right">
                            <ul>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="cont_office">
                        <div class="office_menu">
                            <span class="selected">Office</span>
                            <ul>
                                <li><a href="#" data-office="mumbai">Vita ( Sangli)</a></li>
                                <li><a href="#" data-office="jaipur"> Pune</a></li>
                                <li><a href="#" data-office="jaipur"> Karad</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Header Top Start -->
<?php include_once 'include/headerBottom.php' ?><!-- Navbar End -->
<nav class="navbar navbar-default navbar-sticky no-background bootsnav">
    <div class="container">
        <div class="row bg-white-2">
            <div class="col-md-12">
                <div class="attr-nav rec-4">
                    <ul>
                        <li class="dropdown">
                            <ul class="dropdown-menu cart-list">
                                <li>
                                </li>
                                <li>
                                </li>
                                <li> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="attr-nav rec-4">
                </div>
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse  nav_bor_top" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="dropdown cool-link"><a href="index.php">Home</a>
                        </li>
                        <li class="cool-link"><a href="about_us.php">About Us</a></li>
                        <li class="cool-link"><a href="services.php">Services</a></li>
                        <li class="cool-link"><a href="corporate-training-modules.php">Testimonials</a></li>
                        <li class="cool-link"><a href="career.php">Career</a></li>
                        <li class="cool-link active"><a href="contact.php">Contact</a></li>
                        <li class="cool-link"><a href="contact.php">Client Login</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
    </div>
</nav>
<!-- Page Banner Start -->
<section id="page_banner" class="m-b-60">
    <div class="container">
        <div class="page-header">
            <h2>Contact Us</h2>
            
        </div>
    </div>
</section>
<!-- Page Banner End -->

<!-- Contact Us Start -->
<!-- Map Start -->
<div id="contact_us_page">
    <div class="container">
        <div class="contact">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.28261551022!2d72.74111742823413!3d19.082769887876157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C+Maharashtra!5e0!3m2!1sen!2sin!4v1487261099897" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
   </div>
</div>
<!-- Map End -->
<section id="contact_form" class="p-t-60 p-b-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8 p-b-10">
                <div class="heading">
                    <div class="heading_border bg_red"></div>
                    <p>Contact Us</p>
                    <h2>WE WANT TO <span class="color_red">HEAR FROM YOU</span></h2>
                </div>
                <div class="row p-t-40">
                    <form  id="contact-form" onSubmit="return false">

                     <div class="col-md-12"><div id="result"></div></div>

                     <div class="col-md-6 col-sm-6">
                        <div class="single-query">
                            <input type="text" placeholder="Your Name" class="keyword-input" required name="name" id="name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single-query">
                            <input type="email" placeholder="Email Address" class="keyword-input" required name="email" id="email" >
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single-query">
                            <input type="text" placeholder="Phone Number" class="keyword-input"  name="phone" id="phone" >
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="single-query">
                            <input type="text" placeholder="Subject" class="keyword-input" name="subject">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-query">
                            <textarea placeholder="Massege" name="message" id="message" required="required"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn-light button-black" id="btn_submit" name="btn_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-4 col-sm-8 colxs-12">

          

            <div class="form_left p-b-80">
                <h3 class="text-uppercase"><span>1</span>Get in Touch</h3>
                <div class="footer_1_contact">
                    <p><i class="icon-telephone114"></i>+91-90985-89386</p>
                    <br>
                    <p><i class=" icon-icons142"></i>info@inayafinancial.com
                    </p>
                    <br>
                    <p><i class="icon-icons20"></i>Mon to Saturday - 10:00 to 6:30</p>
                    <br>
                    <i class="icon-icons74"></i>
                    <p>Mumbai</p>
                </div>
            </div>

            <div class="form_left">
                <h3 class="text-uppercase"><span>2</span>Social Media</h3>
                
                <div class="social-icons_1 p-t-30">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        
                    </ul>

                </div>
            </div>

        </div>

    </div>
</div>
</section>
<!-- Contact Us End -->

<!-- Footer Start -->
<footer id="footer_1" class="bg_blue p-t-100">
    <div class="container">
        <div class="row p-b-55">
            <div class="col-md-3">
                <div class="footer_logo">
                    <img src="images/logo_white.png" alt="image" />
                </div>
            </div>
            <div class="col-md-9 text-center">
               <ul class="footer_link">
                <li><a href="index.html">Home</a></li>
                <li><a href="about_us.html">About Us</a></li>
                <li><a href="debt-services.html">Services</a></li>
                <li><a href="corporate-training-modules.html">Corporate Training Modules</a></li>
                <li><a href="career.html">Carres</a></li>
                <li><a href="contact.html">Contact us</a></li>
            </ul>
        </div>
        
    </div>
    
</div>
<div class="footer_botom m-t-50 p-t-20 p-b-20">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p>Copyrights © 2017 Inaya Financial. All rights reserved.</p>
            </div>
            <div class="col-md-5 text-right">
                <p>Made with <i class="icon-heart3"></i> by <a href="http://www.rajveerstudio.com/" target="_blank">Rajveer Studio</a></p>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- Footer End -->

<!--Required JS -->
<script src="js/jquery.2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- SMOOTH SCROLL -->  
<script type="text/javascript" src="js/scroll-desktop.js"></script>
<script type="text/javascript" src="js/scroll-desktop-smooth.js"></script>

<script src="js/themepunch/jquery.themepunch.revolution.min.js"></script>
<script src="js/themepunch/jquery.themepunch.tools.min.js"></script>
<script src="js/themepunch/revolution.extension.layeranimation.min.js"></script>
<script src="js/themepunch/revolution.extension.navigation.min.js"></script>
<script src="js/themepunch/revolution.extension.parallax.min.js"></script>
<script src="js/themepunch/revolution.extension.slideanims.min.js"></script>
<script src="js/themepunch/revolution.extension.video.min.js"></script>
<script src="js/tab_slider.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/viedobox/video.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/bootstrap-number-input.js"></script>
<script src="js/renge_selectbox-0.2.min.js"></script>
<script src="js/range-Slider.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="js/gmaps.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/zelect.js"></script>
<!-- Progress  -->
<script src="js/progressbar.js"></script>
<script src="js/contact.js"></script>
<script src="js/copious_custom.js"></script>
</body>

</html>