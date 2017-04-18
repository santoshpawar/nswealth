<?php include_once 'include/header.php'; ?>

<body>
    <!-- Loader Start -->
      <?php include_once 'include/loader.php'; ?>
   
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
                        <li class="cool-link"><a href="#">Testimonials</a></li>
                        <li class="cool-link"><a href="career.php">Career</a></li>
                        <li class="cool-link active"><a href="contact.php">Contact</a></li>
                        <li class="cool-link"><a href="http://nswealth.my-portfolio.co.in" target="_blank">Client Login</a></li>
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
          
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863387.1847904623!2d70.60733170165662!3d18.98271436540826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd546e9d9cc7129bd!2sNS+Wealth+Solution+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1491905913784" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                    <p><i class="icon-telephone114"></i>+91-9145354545</p>
                    <br>
                    <p><i class=" icon-icons142"></i>nitin.sawant@nswealth.in
                     </p>
                    <br>
                    <p><i class="icon-icons20"></i>Mon to Saturday - 10:00 to 6:30</p>
                    <br>
                    <i class="icon-icons74"></i>
                    <p>Vita,Sangali</p>
                </div>
            </div>

            <div class="form_left">
                <h3 class="text-uppercase"><span>2</span>Social Media</h3>
                
                <div class="social-icons_1 p-t-30">
                    <ul>
                        <li><a href="https://www.facebook.com/NSwealth" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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

<?php include_once 'include/footer.php' ?>
<!-- Footer End -->

<!--Required JS -->
<?php include_once 'include/jsfile.php' ?>
</body>

</html>