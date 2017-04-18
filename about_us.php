<?php include_once 'include/header.php'; ?>

<body>
    <!-- Loader Start -->
       <?php include_once 'include/loader.php'; ?>
<!-- Header Top Start -->
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
                        <li class="cool-link active"><a href="about_us.php">About Us</a></li>
                        <li class="cool-link"><a href="services.php">Services</a></li>
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
<!-- Navbar End -->

<!-- Page Banner Start -->
<section id="page_banner" class="border_b">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>About Us</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <ol class="breadcrumb">
                    <li><a href="#">You are here:</a></li>
                    <li><a href="#">Home</a></li>
                    <li class="active">About Us</li>
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
                    <p>We started with a simple idea.</p>
                    <h2>Company <span class="color_red">overview</span></h2>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-7 col-sm-7 col-xs-12">

                <div class="row">
                    <div class="col-md-12 p-b-35">
                        <p class="m-t-40 p_18">
                            In its 8th year of operations, NS Wealth Solution Pvt. Ltd. is a financial planning-cum-investment advisory organisation, in the nitinaboutus business of helping clients achieve their financial goals
                            We firmly believe that the ‘Financial Planning’ route is the way forward in advising our members on their f The pillars of our business are honesty, competence and relationship. We believe that the client’s interest comes foremost, and we stand with him in all matters related to personal finance

                        </p></br> <p class="m-t-40 p_18">
                        We ensure that our advice is always unbiased, impartial and objective. We also believe there is no substitute for knowledge and each of us is committed to a path of learning and constant up gradation of our skills; so as to deliver the best in terms of products and services to our membersinancial freedom
                    </p></br>

                    <div class="project_details_text p-t-50">
                        <ul>
                            <li>We have founded as “NS Wealth ” in 2008 in Vita ( Sangli) Maharashtra by Nitin Sawant, NS Wealth at first used to be an office from small town with a client base of 15-20 investors
                            </li>
                            <li> He added on by 2009, clients in cities other than Vita ( Sangli), specially Pune, 100 clients by 2014, a transformation to a private limited company by 2015, another branch office, this time in Kolhapur by 2016</li>
                            <li>Today NS wealth Solution Pvt. Ltd is a 11 people strong organisation, with offices in Vita ( Sangli), Pune and Karad, a client base of 163+ families from across India and the world – Middle East and South East Asia</li>
                            <li>Assets under Advice of over Rs.75 Crores and a risk cover of Rs.60 Crores, and a belief that it will only get better</li>
                            <li> We believe 'Financial planning is more about the Client's life and their relationship with money than about their finances' Our entire team at NS Wealth and focus is always on long term relationships, and ensuring that Our Member’s interest always comes first.</li>
                        </ul>
                    </div>


                    <p class="m-t-40 p_18"><strong>Vision</strong></br>
                     To be the foremost provider of Financial consultancy, Corporate Training and  Research

                 </p>
                 <p class="m-t-40 p_18"><strong>Mission</strong></br>
                     To be the partner of entrepreneur in the raising fund and Train crude future financial aspirants and give them comfort and hands on.


                 </p>


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