<?php include_once 'include/header.php'; ?>
<body class="finance">
    <body>
        <!-- Loader Start -->
           <?php include_once 'include/loader.php'; ?>
    <!-- Header Top Start -->
    <?php include_once 'include/headerBottom.php' ?>
    <!-- Navbar End -->
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
                                  <li class="cool-link "><a href="career.php">Career</a></li>
                            <li class="cool-link"><a href="contact.php">Contact</a></li>
                            <li class="dropdown cool-link on"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Login</a>
                                <ul class="dropdown-menu animated fadeInDown" style="display: none; opacity: 1;">
                                    <li><a href="http://nswealth.my-portfolio.co.in/" target="_blank">Portfolio</a></li>
                                    <li><a href="https://www.ifastfinancial.co.in/ifast/acl/iFastClientLogin.svdo?ifaCo=NITEN&id=&password">IFAST Login</a></li>
                                    <li><a href="credit-rating-services.html">NS Consultant Login</a></li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Page Banner Start -->
    <section id="page_banner" class="border_b">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Subscription </h2>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- Page Banner End -->



    <!-- Project Details Start -->
    <section id="solution" class="p-t-80">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <div class="heading_border bg_red"></div>

                        <h2>Health checkup </h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-7 col-sm-7 col-xs-12">

                    <div class="row">
                        <div class="col-md-12 p-b-35">
                            <p class="m-t-40 p_18">
                               
Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you
                            </p></br>

                            <!-- <div class="project_details_text p-t-50">
                                <ul>
                                    <li>Internship opportunity in our company

                                    </li>
                                    <li>Fundamental Analyst (Energy Sector)</li>
                                    <li>Fundamental Analyst (Infra Sector)</li>
                                    <li>Fundamental Analyst (Automobile)</li>
                                    <li>	Relationship Manager</li>

                                    <li>Senior Marketing Manager</li>

                                    <li>Corporate Trainer</li>
                                </ul>
                            </div> -->
                        </br>
                      



                    </div>
                </div>

            </div>

            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="finance_about_page">
                    <img src="images/finance/career.jpg" alt="image" class="img-responsive">
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Project Details End -->

















<!-- Footer Start -->
<?php include_once 'include/footer.php' ?>
<!-- Footer End -->


<!-- Back-To-Top -->
 

<!-- Team Pop Up Start -->
 
<!-- Team Pop Up End -->

<!--Required JS -->
<?php include_once 'include/jsfile.php' ?>
<script type="text/javascript">
    /* Smooth-Scroll */
    $(".scroll").click(function(event) {

        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 2000);
    });
        //Check to see if the window is top if not then display button
        var offset = 650;
        var duration = 300;
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset) {
                $('.back-to-top').fadeIn(200);
            } else {
                $('.back-to-top').fadeOut(200);
            }
        });

        $('.back-to-top').on("click", function(event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    </script>
</body>

</html>