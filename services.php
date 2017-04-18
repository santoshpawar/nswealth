 <?php include_once 'include/header.php'; ?>

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
                            <li class="cool-link "><a href="about_us.php">About Us</a></li>
                            <li class="cool-link active"><a href="about_us.php">Services</a></li>
                            <li class="cool-link"><a href="#">Testimonials</a></li>
                                 <li class="cool-link"><a href="career.php">Career</a></li>
                            <li class="cool-link"><a href="contact.php">Contact</a></li>
                            <li class="cool-link"><a href="http://nswealth.my-portfolio.co.in" target="_blank">Client Login</a></li>
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
                    <h2> Services</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <ol class="breadcrumb">
                        <li><a href="#">You are here:</a></li>
                        <li class="active"><a href="#">Services</a></li>
                       <!--  <li class="active">Debt  Services</li> -->
                    </ol>
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

                        <h2>NSwealth  <span class="color_red">Services</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-7 col-sm-7 col-xs-12">

                    <div class="row">
                        <div class="col-md-12 p-b-35">
                            <p class="m-t-40 p_18">
                              Holistic Advice That Covers All Aspects of Personal Finance
                            </p></br>
                            <p><strong style="font-size:20px;">Services as under:</strong>
                            </p>      </br>            
                            <div class="project_details_text p-t-50">
                                <ul>
                                    <li>INVESTMENT ADVICE</li>
                                    <li>TAX ADVICE</li>
                                    <li>FINANCIAL GOAL ADVICE</li>
                                    <li>RISK PLANNINGEARLY RETIREMENT PLANNING</li>
                                    <li>FINANCIAL PROJECTION FOR FUTURE PLANNING</li>
                                    <li>DUAL GOAL PLANNING</li>
                                    <li>COMPREHENSIVE FINANCIAL PLANNING</li>
                                </ul>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="finance_about_page">
                        <img src="images/finance/about_us-page.jpg" alt="image" class="img-responsive">
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
    <div class="container">
        <a href="#" class="back-to-top text-center" style="display: inline;">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>

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