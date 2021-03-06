<?php

include_once './vendor/autoload.php';
\App\Session::init();
// var_dump(\App\Session::get('user_type_id'));
// var_dump(\App\Session::get('profile_id'));

?>



<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Avalon - Home 2</title>

    <!--=================================
Meta tags
=================================-->

    <meta name="description" content="">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />

    <!--=================================
Style Sheets
=================================-->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pixeden-fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animations.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dl-menu.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

</head>

<body>

    <!--======================
Preloading Splash Screen
=======================-->
    <div id="jSplash">
        Avalon, &copy;All Rights Reserved <a href="#">xvelopers</a>
    </div>

    <!--========================================
Body Content
===========================================-->


    <div class="quick-access">
        <div class=" container">

            <ul class="getintouch">
                <li>
                    <a href="./view/update_profile.php">Update Profile</a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="livicon" data-name="tablet" data-onparent="true" data-size="20"></span>Log Out
                    </a>
                </li>
                <li>
                    <a href="mailto:info@yourdomain.com">
                        <span class="livicon" data-name="mail" data-onparent="true" data-size="20"></span>info@yourdomain.com
                    </a>
                </li>

            </ul>

            <ul class="social">
                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                <li><a href="#"><span class="fa fa-flickr"></span></a></li>
                <li><a href="#"><span class="fa fa-youtube"></span></a></li>
                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
            </ul>

        </div>
    </div>
    <!--=================================
header
=================================-->
    <header>
        <nav id="sticktop" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><img src="assets/img/basic/logo-nav.png" alt="/"></a>
                </div>

                <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                    <button class="dl-trigger">Open Menu</button>
                    <div class="clearfix"></div>
                    <ul class="dl-menu">
                        <li class="parent active"><a>Home</a>
                            <ul class="lg-submenu">
                                <li><a href="index.html">Home <span class="badge badge-yellow">unique</span></a></li>
                                <li><a href="index2.html">Home Two</a></li>
                                <li><a href="index3.html">Home Three</a></li>
                                <li><a href="index4.html">Home Four <span class="badge badge-green">events</span></a></li>
                                <li><a href="index5.html">Home Five <span class="badge">mailchimp</span></a></li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#">Pages</a>
                            <ul class="lg-submenu">
                                <li class="parent"><a href="#">Landing pages <span class="badge badge-red">Hot</span></a>
                                    <ul class="lg-submenu">
                                        <li><a href="index-onepage.html">Creative</a></li>
                                        <li><a href="index-onepage2.html">Creative Large</a></li>
                                        <li><a href="resume.html">Resume/CV</a></li>
                                        <li><a href="index-blog.html">Blogger/Writter</a></li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#">General pages</a>
                                    <ul class="lg-submenu">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="about-2.html">About 2</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="services-styles.html">Services Styles</a></li>
                                        <li><a href="events.html">Events</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#">Portfolio pages</a>
                                    <ul class="lg-submenu">
                                        <li><a href="portfolio-2col.html">Two Column</a></li>
                                        <li><a href="portfolio-3col.html">Three Column</a></li>
                                        <li><a href="portfolio-4col.html">Four Column</a></li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#">Single pages</a>
                                    <ul class="lg-submenu">
                                        <li><a href="event-detail.html">Event Single</a></li>
                                        <li><a href="portfolio-detail.html">Portfolio Single</a></li>
                                        <li><a href="portfolio-detail2.html">Portfolio Single 2</a></li>
                                        <li><a href="member-timeline.html">Member/User</a></li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#">Special pages <span class="badge badge-green">bonus</span></a>
                                    <ul class="lg-submenu">
                                        <li><a href="coming-soon.html">Coming soon</a></li>
                                        <li><a href="error-404.html">404 error</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="parent megamenu"><a href="#">Features</a>
                            <ul class="lg-submenu">

                                <li><a>Features Set one</a>
                                    <ul class="lg-submenu">
                                        <li><a href="accordian.html"><i class="fa fa-magic"></i>Accordian</a></li>
                                        <li><a href="tabs.html"><i class="fa fa-folder"></i>Tabs</a></li>
                                        <li><a href="Sitemap.html"><i class="fa fa-sitemap"></i>Sitemap</a></li>
                                    </ul>
                                </li>

                                <li><a>Features Set Two</a>
                                    <ul class="lg-submenu">
                                        <li><a href="pagers.html"><i class="fa fa-sort-numeric-asc"></i>Pagers</a></li>
                                        <li><a href="panels.html"><i class="fa fa-certificate"></i>Panels</a></li>
                                        <li><a href="alerts.html"><i class="fa fa-compass"></i>Alerts</a></li>
                                    </ul>
                                </li>
                                <li><a>Features Set Three</a>
                                    <ul class="lg-submenu">
                                        <li><a href="pricing.html"><i class="fa fa-money"></i>Pricing</a></li>
                                        <li><a href="testimonials.html"><i class="fa fa-user"></i>Testimonials</a></li>
                                        <li><a href="thumbnails.html"><i class="fa fa-picture-o"></i>Thumbnails</a></li>
                                    </ul>
                                </li>
                                <li><a>Features Set Four</a>
                                    <ul class="lg-submenu">
                                        <li><a href="page-template.html"><i class="fa fa-file-o"></i>Page template</a></li>
                                        <li><a href="page-sidebar.html"><i class="fa fa-thumbs-o-up"></i>Page sidebar</a></li>
                                        <li><a href="popovers.html"><i class="fa fa-bookmark"></i>Popovers</a></li>
                                    </ul>
                                </li>
                                <li><a>Features Set Five</a>
                                    <ul class="lg-submenu">
                                        <li><a href="list-group.html"><i class="fa fa-list"></i>List Group</a></li>
                                        <li><a href="media-list.html"><i class="fa fa-list-alt"></i>Media List</a></li>
                                        <li><a href="index-blog.html"><i class="fa fa-laptop"></i>Parallax</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="parent megamenu"><a href="#">Shop</a>
                            <ul class="lg-submenu">
                                <li><a>Shop Pages</a>
                                    <ul class="lg-submenu">
                                        <li><a href="shop.html">Shop <span class="badge badge-yellow">unique</span></a></li>
                                        <li><a href="shop2.html">Shop Simple</a></li>
                                        <li><a href="product-detail.html">Product Detail <span class="badge badge-red">hot</span></a></li>
                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                        <li><a href="shop-login.html">login/signup</a></li>
                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                        <li><a href="password-recovery.html">Forgot Password</a></li>
                                        <li><a href="cart.html">Cart <span class="badge">11 items</span></a></li>
                                        <li><a href="checkout.html">Check out</a></li>
                                    </ul>
                                </li>
                                <li><a>Best Sale Offers</a>
                                    <ul class="lg-submenu">
                                        <li>
                                            <a href="portfolio-2col.html">
                                                <figure><img src="assets/img/extra/offer.jpg" alt="" /></figure>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a>Weekly Exclusive offers</a>
                                    <ul class="lg-submenu">
                                        <li>
                                            <a href="portfolio-2col.html">
                                                <figure><img src="assets/img/extra/offer2.png" alt="" /></figure>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li class="parent"><a href="#">Blog</a>
                            <ul class="lg-submenu">
                                <li class="parent"><a href="#">Main Pages</a>
                                    <ul class="lg-submenu">
                                        <li><a href="blog.html">Blog Clasic</a></li>
                                        <li><a href="index-blog.html">Blog Magzine <span class="badge badge-yellow">special</span></a></li>
                                        <li><a href="blog-timeline.html">Blog Timeline</a></li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#">Masonary</a>
                                    <ul class="lg-submenu">
                                        <li><a href="blog-masonary.html">Blog Masonary</a></li>
                                        <li><a href="blog-masonary-full.html">Blog masonary Full</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog-detail.html">Blog Single</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- /dl-menuwrapper -->
            </div>
        </nav>
    </header>
    <!--=================================
Slider
=================================-->
    <section class="custom-slider">
        <div id="home-slider" class="xv_slider flexslider">
            <ul class="slides">
                <li class="xv_slide" data-slideBg="url('assets/img/slider/1.jpg')">
                    <div class="flex-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <h1 class="fadeInDown animated">Avalon</h1>
                                    <h2 class="fadeInLeft animated slower">FlexSlider with awesome Animations</h2>
                                    <p class="fadeInRight animated slow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. </p>
                                    <a href="#" class="btn btn-default bounceInUp animated slow">Purchase Now!</a>
                                </div>
                                <div class="col-xs-12 col-md-6 xv-slide-fig">
                                    <div class="fadeInUp animated slower">
                                        <a href="http://vimeo.com/51740084" data-rel="prettyPhoto" class="trigger_fancy-video"><img src="assets/img/slider/laptop.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="xv_slide" data-slideBg="url('assets/img/slider/bg3.jpg')">
                    <div class="flex-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <h1 class="fadeInDown animated">Avalon</h1>
                                    <h2 class="fadeInLeft animated slower">Clean multi purpose theme</h2>
                                    <p class="fadeInRight animated slow">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. </p>
                                    <a href="#" class="btn btn-default bounceInUp animated slow">Purchase Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="xv_slide" data-slideBg="url('assets/img/slider/bg4.jpg')">
                    <div class="flex-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 xv-slide-fig">
                                    <div class="fadeInUp animated slower">
                                        <a href="http://vimeo.com/51740084" data-rel="prettyPhoto" class="trigger_fancy-video"><img src="assets/img/slider/laptop.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <h1 class="bounceInDown animated slower">Fusion</h1>
                                    <h2 class="fadeInRight animated slower">fusion of flat and corporate style</h2>
                                    <p class="bounceInLeft animated slowest">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. </p>
                                    <a href="#" class="btn btn-default bounceInUp animated slow">Purchase Now!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--=================================
Services
=================================-->
    <section class="services">
        <div class="container">
            <div class="row animatedParent" data-sequence="400">
                <h2>Welcome to avalon</h2>
                <h3>a clean and modern multi purpose theme.</h3>
                <div class="col-lg-4 col-sm-6 col-xs-12 animated bounceInUp" data-id="1">
                    <div class="service">
                        <span class="livicon" data-name="lab" data-onparent="true" data-size="30"></span>
                        <h4>advanced admin panel</h4>
                        <p>Quisque posuere dolor quis varius sodales. Cras pretium quam eu quam venenatis tincidunt. Duis tempor iaculis turpis. Duis ac consequat massa, consectetur luctus lectus.</p>
                    </div>
                    <!--service-->
                </div>
                <!--col-->

                <div class="col-lg-4 col-sm-6 col-xs-12 animated bounceInUp" data-id="2">
                    <div class="service">
                        <span class="livicon" data-name="brush" data-onparent="true" data-size="30"></span>
                        <h4>unlimited colors </h4>
                        <p>Quisque posuere dolor quis varius sodales. Cras pretium quam eu quam venenatis tincidunt. Duis tempor iaculis turpis. Duis ac consequat massa, consectetur luctus lectus.</p>
                    </div>
                    <!--service-->
                </div>
                <!--col-->

                <div class="col-lg-4 col-sm-6 col-xs-12 animated bounceInUp" data-id="3">
                    <div class="service">
                        <span class="livicon" data-name="doc-landscape" data-onparent="true" data-size="30"></span>
                        <h4>well documented </h4>
                        <p>Quisque posuere dolor quis varius sodales. Cras pretium quam eu quam venenatis tincidunt. Duis tempor iaculis turpis. Duis ac consequat massa, consectetur luctus lectus.</p>
                    </div>
                    <!--service-->
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
    </section>
    <!--=================================
Promo Box
=================================-->
    <section id="promo-box">
        <div class="container animatedParent">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-xs-12">
                    <div class="promo-line animated bounceInLeft slow">
                        <h2>Avalon is a perfect solution</h2>
                        <h3>for Design Agencys, Freelancers and alot more</h3>
                    </div>
                    <a href="#" class="btn animated bounceInRight slow">Purchase Now!</a>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
 Portfolio/Showcase
 =================================-->

    <section class="portfolio style2">
        <div class="container">
            <h2>recent projects</h2>


            <ul class="project-filter">
                <li class="active" data-filter="*">all</li>
                <li data-filter=".type1">Websites</li>
                <li data-filter=".type2">Print</li>
                <li data-filter=".type3">Mobile</li>
                <li data-filter=".type4">Photography</li>
                <li data-filter=".type5">Illustrations</li>
                <li data-filter=".type6">Logo Design</li>
            </ul>

        </div>

        <div class="projects">
            <div class="project type1">
                <figure>
                    <img src="assets/img/portfolio/8.jpg" alt="/">
                </figure>
                <div class="hover">
                    <div class="hover-content">
                        <a href="#"><span class="livicon" data-name="eye-open" data-onparent="true" data-size="30"></span></a>
                        <a href="#"><span class="livicon" data-name="share" data-onparent="true" data-size="30"></span></a>
                    </div>
                </div>
            </div>

            <div class="project type2">
                <figure>
                    <img src="assets/img/portfolio/2.jpg" alt="/">
                </figure>
                <div class="hover">
                    <div class="hover-content">
                        <a href="#"><span class="livicon" data-name="eye-open" data-onparent="true" data-size="30"></span></a>
                        <a href="#"><span class="livicon" data-name="share" data-onparent="true" data-size="30"></span></a>
                    </div>
                </div>
            </div>

            <div class="project type4 type3">
                <figure>
                    <img src="assets/img/portfolio/3.jpg" alt="/">
                </figure>
                <div class="hover">
                    <div class="hover-content">
                        <a href="#"><span class="livicon" data-name="eye-open" data-onparent="true" data-size="30"></span></a>
                        <a href="#"><span class="livicon" data-name="share" data-onparent="true" data-size="30"></span></a>
                    </div>
                </div>
            </div>

            <div class="project type6">
                <figure>
                    <img src="assets/img/portfolio/4.jpg" alt="/">
                </figure>
                <div class="hover">
                    <div class="hover-content">
                        <a href="#"><span class="livicon" data-name="eye-open" data-onparent="true" data-size="30"></span></a>
                        <a href="#"><span class="livicon" data-name="share" data-onparent="true" data-size="30"></span></a>
                    </div>
                </div>
            </div>

            <div class="project type3">
                <figure>
                    <img src="assets/img/portfolio/3.jpg" alt="/">
                </figure>
                <div class="hover">
                    <div class="hover-content">
                        <a href="#"><span class="livicon" data-name="eye-open" data-onparent="true" data-size="30"></span></a>
                        <a href="#"><span class="livicon" data-name="share" data-onparent="true" data-size="30"></span></a>
                    </div>
                </div>
            </div>

            <div class="project type4 type3">
                <figure>
                    <img src="assets/img/portfolio/6.jpg" alt="/">
                </figure>
                <div class="hover">
                    <div class="hover-content">
                        <a href="#"><span class="livicon" data-name="eye-open" data-onparent="true" data-size="30"></span></a>
                        <a href="#"><span class="livicon" data-name="share" data-onparent="true" data-size="30"></span></a>
                    </div>
                </div>
            </div>

            <div class="project type1 type5">
                <figure>
                    <img src="assets/img/portfolio/7.jpg" alt="/">
                </figure>
                <div class="hover">
                    <div class="hover-content">
                        <a href="#"><span class="livicon" data-name="eye-open" data-onparent="true" data-size="30"></span></a>
                        <a href="#"><span class="livicon" data-name="share" data-onparent="true" data-size="30"></span></a>
                    </div>
                </div>
            </div>

            <div class="project type4">
                <figure>
                    <img src="assets/img/portfolio/9.jpg" alt="/">
                </figure>
                <div class="hover">
                    <div class="hover-content">
                        <a href="#"><span class="livicon" data-name="eye-open" data-onparent="true" data-size="30"></span></a>
                        <a href="#"><span class="livicon" data-name="share" data-onparent="true" data-size="30"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=================================
Team
=================================-->
    <section class="team">
        <div class="container">
            <h2>meet the team</h2>
            <h4>the awsome people working behind the scene </h4>
            <div class="row animatedParent" data-sequence="400">
                <div class="col-md-3 col-xs-12 animated flipInY" data-id="1">
                    <div class="member"> <img src="assets/img/team/1.jpg" alt="/">
                        <div class="member-content">
                            <h5>john doe</h5>
                            <h6>Founder/CEO</h6>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--member-->
                </div>
                <div class="col-md-3 col-xs-12 animated flipInY" data-id="2">
                    <div class="member"> <img src="assets/img/team/2.jpg" alt="/">
                        <div class="member-content">
                            <h5>john doe</h5>
                            <h6>Founder/CEO</h6>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--member-->
                </div>
                <div class="col-md-3 col-xs-12 animated flipInY" data-id="3">
                    <div class="member"> <img src="assets/img/team/3.jpg" alt="/">
                        <div class="member-content">
                            <h5>john doe</h5>
                            <h6>Founder/CEO</h6>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--member-->
                </div>
                <div class="col-md-3 col-xs-12 animated flipInY" data-id="4">
                    <div class="member"> <img src="assets/img/team/4.jpg" alt="/">
                        <div class="member-content">
                            <h5>john doe</h5>
                            <h6>Founder/CEO</h6>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class=" fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class=" fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class=" fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--member-->
                </div>
            </div>
        </div>
    </section>
    <!--=================================
Testimonials
=================================-->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-xs-12">
                    <h2>satisfied customers</h2>
                    <h3>we put customer satisfaction above everything else!</h3>
                    <div id="testimonial-slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <blockquote>
                                    <figure>
                                        <img src="assets/img/basic/testimonial.png" alt="/">
                                    </figure>
                                    <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. Pellentesque sed ipsum eu risus sagittis varius. Suspendisse sed sapien dictum.</em></p>
                                    <a class="test-web" href="#">JOhn Doe - <span>website.com</span></a>
                                </blockquote>
                            </li>

                            <li>
                                <blockquote>
                                    <figure>
                                        <img src="assets/img/basic/testimonial.png" alt="/">
                                    </figure>
                                    <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. Pellentesque sed ipsum eu risus sagittis varius. Suspendisse sed sapien dictum.</em></p>
                                    <a class="test-web" href="#">JOhn Doe - <span>website.com</span></a>
                                </blockquote>
                            </li>

                            <li>
                                <blockquote>
                                    <figure>
                                        <img src="assets/img/basic/testimonial.png" alt="/">
                                    </figure>
                                    <p><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent egestas justo sed sagittis interdum. Pellentesque sed ipsum eu risus sagittis varius. Suspendisse sed sapien dictum.</em></p>
                                    <a class="test-web" href="#">JOhn Doe - <span>website.com</span></a>
                                </blockquote>
                            </li>

                        </ul>
                    </div>
                    <!--flex-->
                </div>
            </div>
        </div>
    </section>
    <!--=================================
Clients
=================================-->
    <section class="clients">
        <div class="container">
            <ul>
                <li>
                    <a href="#"><img src="assets/img/clients/1.jpg" alt="/"></a>
                </li>
                <li>
                    <a href="#"><img src="assets/img/clients/1.jpg" alt="/"></a>
                </li>
                <li>
                    <a href="#"><img src="assets/img/clients/1.jpg" alt="/"></a>
                </li>
                <li>
                    <a href="#"><img src="assets/img/clients/1.jpg" alt="/"></a>
                </li>
                <li>
                    <a href="#"><img src="assets/img/clients/1.jpg" alt="/"></a>
                </li>
            </ul>
        </div>
    </section>

    <!--=================================
Blog post
=================================-->
    <section id="blog-latest">
        <div class="container">
            <h5>recent blog posts</h5>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="latest-post">
                        <figure><img src="assets/img/blog/1.jpg" alt="/"></figure>
                        <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                        <div class="post-info">Posted by <a href="#">Admin</a> on 28 Nov | <a href="#">5 Comments</a></div>
                        <p>Cras accumsan pellentesque dignissim. Duis volutpat odio cursus. Vivamus rhoncus, arcu ac faucibus laoreet, lorem tellus varius lectus... <a href="#">read more</a> </p>
                    </div>
                </div>
                <!--col-->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="latest-post">
                        <figure><img src="assets/img/blog/2.jpg" alt="/"></figure>
                        <h4><a href="#">Vestibulum tristique eros turpis</a></h4>
                        <div class="post-info">Posted by <a href="#">Admin</a> on 28 Nov | <a href="#">5 Comments</a></div>
                        <p>Cras accumsan pellentesque dignissim. Duis volutpat odio cursus. Vivamus rhoncus, arcu ac faucibus laoreet, lorem tellus varius lectus... <a href="#">read more</a> </p>
                    </div>
                </div>
                <!--col-->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="latest-post">
                        <figure><img src="assets/img/blog/3.jpg" alt="/"></figure>
                        <h4><a href="#">Class aptent taciti sociosqu</a></h4>
                        <div class="post-info">Posted by <a href="#">Admin</a> on 28 Nov | <a href="#">5 Comments</a></div>
                        <p>Cras accumsan pellentesque dignissim. Duis volutpat odio cursus. Vivamus rhoncus, arcu ac faucibus laoreet, lorem tellus varius lectus... <a href="#">read more</a> </p>
                    </div>
                </div>
                <!--col-->
            </div>
            <!--row-->
        </div>
    </section>
    <!--=================================
Footer
=================================-->
    <footer>
        <section class="widgets-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <a href="#" class="logo-footer"><img src="assets/img/basic/logo-nav.png" alt="" /></a>
                        <p>Donec at malesuada arcu. Sed interdum tortor id odio elementum. Donec tempor tellus elementum</p>
                    </div>
                    <!--col-->

                    <div class="col-md-3 col-xs-12">
                        <h3>latest tweets</h3>
                        <div id="tweet-slider" class="flexslider latest-tweet"><i class="fa fa-twitter"></i></div>
                    </div>
                    <!--col-->

                    <div class="col-md-3 col-xs-12">
                        <h3>Flicker Feed</h3>
                        <ul id="flicker-feed"></ul>
                    </div>
                    <!--col-->

                    <div class="col-md-3 col-xs-12">
                        <h3>contact</h3>
                        <ul class="contact-info">
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="location" data-onparent="true" data-size="22"></i> 123 Street Down Town, Newyork
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="phone" data-onparent="true" data-size="22"></i> 1.800.321.9876
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="mail" data-onparent="true" data-size="22"></i> hello@avalon.com
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--col-->
                </div>
                <!--row-->
            </div>
        </section>
        <div class="privacy-rights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <div class="rights"> ??2013 Avalon. All rights reserved. A product by <a href="#">xvelopers</a>. </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <ul class="rights">
                            <li><a href="#">Disclaimer |</a></li>
                            <li><a href="#">Privacy Policy |</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--=================================
Script Source
=================================-->
    <script src="assets/js/jquery-1.10.1.min.js"></script>
    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/liveicon.js"></script>
    <script src="assets/js/jpreloader.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.waitforimages.js"></script>
    <script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="assets/js/jquery.flexslider-min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/jflickrfeed.min.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/jquery.stellar.min.js"></script>
    <script src="assets/js/css3-animate-it.js"></script>
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/tweetie.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $('body').jpreLoader({
            splashID: "#jSplash",
            loaderVPos: '0%',
            autoClose: true,
        });
        /*=========Place Google Tracker Code here===========*/
    </script>

</body>

</html>