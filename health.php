<?php include_once 'include/header.php'; ?>
<body>
    <?php include_once 'include/loader.php'; ?>
    <?php include_once 'include/headerBottom.php' ?>
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
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
                    </div>
                    <div class="collapse navbar-collapse  nav_bor_top" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="dropdown cool-link"><a href="index.php">Home</a>
                            </li>
                            <li class="cool-link "><a href="about_us.php">About Us</a></li>
                            <li class="cool-link"><a href="services.php">Services</a></li>
                            <li class="cool-link "><a href="pricing.php">Pricing</a></li>
                            <li class="cool-link"><a href="#">Testimonials</a></li>
                            <li class="cool-link"><a href="career.php">Career</a></li>
                            <li class="cool-link"><a href="contact.php">Contact</a></li>
                            <li class="cool-link active "><a href="contact.php">Health</a></li>
                            <li class="dropdown cool-link on"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Login</a>
                                <ul class="dropdown-menu animated fadeInDown" style="display: block; opacity: 0;">
                                    <li><a href="http://nswealth.my-portfolio.co.in/" target="_blank">Portfolio</a></li>
                                    <li><a href="https://www.ifastfinancial.co.in/ifast/acl/iFastClientLogin.svdo?ifaCo=NITEN&id=&password">IFAST Login</a></li>
                                    <li><a href="credit-rating-services.html">NS Consultant Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <section id="page_banner" class="border_b">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Health Checkup</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <ol class="breadcrumb">
                        <li><a href="#">You are here:</a></li>
                        <li><a href="#">Home</a></li>
                        <li class="active">Health</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="solution" class="p-t-80">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <div class="heading_border bg_red"></div>
                        <p>We started with a simple idea.</p>
                        <h2>Health <span class="color_red">Check Up</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-7 col-sm-7 col-xs-12">

                    <div class="row">
                        <div class="col-md-12 p-b-35">

                            <p class="m-t-40 p_18">
                             <h3> <b> When was the last time you had a check-up for your

                               Financial Health?</b></h3>
                           </p></br> <p class="m-t-40 p_18">
                           Just like we call a doctor about that nagging cough or a plumber to fix the leaking tap, shouldn’t you talk to an expert about your finances? Someone who works with potential investors to help them figure out how well their circumstances might be suited to investing? Makes sense doesn’t it. For a limited time, we’re offering a discounted Financial Health Check where our team can give you honest feedback and most importantly, direction about your financial situation. They will give you an insight into how to start or continue your investing journey and where to go from here. Some highlights are
                       </p></br>

                       <div class="project_details_text p-t-50">
                        <ul>
                            <li>Review of income and expenses</li>
                            <li>Review of existing assets and liabilties</li>
                            <li>Integration with Finametrica Risk Profiling </li>
                            <li>Integration with Finametrica Risk Profiling </li>
                            <li>Fine grained inputs capturing complex real life situations</li>
                            <li>Life Cash Flow Mapping</li>
                            <li>Goal Achievability Snapshot</li>
                            <li>Goal Mapping across Resource Inputs</li>
                            <li>Alert to areas where risk mitigation applies</li>
                            <li>Mode of Delivery: E-mail</li>
                            <li>Estimated Delivery Time: 5-7 days</li>
                        </ul>
                    </div>

                
                        <a href="https://www.payumoney.com/paybypayumoney/#/302417" title="Purchase Package" class="btn-light button-black" id="btn_submit" >Purchase Package</a>


             </div>
         </div>

     </div>

     <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="finance_about_page">
            <img src="images/health.png" alt="image" class="img-responsive">
        </div>
    </div>
</div>

</div>
</section>
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
<!--Required JS -->
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
</php>