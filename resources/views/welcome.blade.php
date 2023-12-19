<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>{{ $halaman }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('home/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('home/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/templatemo-space-dynamic.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/owl.css') }}">
    <!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        @include('partials.home.navbar')
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        @include('partials.home.main_banner')
    </div>

    <div id="about" class="about-us section">
        @include('partials.home.about')
    </div>

    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image">
                        <img src="{{ asset('home/assets/images/services-left-image.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="section-heading">
                        <h2>Grow your website with our <em>SEO</em> service &amp; <span>Project</span> Ideas</h2>
                        <p>Space Dynamic HTML5 template is free to use for your website projects. However, you are not
                            permitted to redistribute the template ZIP file on any CSS template collection websites.
                            Please contact us for more information. Thank you for your kind cooperation.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="first-bar progress-skill-bar">
                                <h4>Website Analysis</h4>
                                <span>84%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="second-bar progress-skill-bar">
                                <h4>SEO Reports</h4>
                                <span>88%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="third-bar progress-skill-bar">
                                <h4>Page Optimizations</h4>
                                <span>94%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>See What Our Agency <em>Offers</em> &amp; What We <span>Provide</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>SEO Analysis</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="{{ asset('home/assets/images/portfolio-image.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                                <h4>Website Reporting</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="{{ asset('home/assets/images/portfolio-image.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="hidden-content">
                                <h4>Performance Tests</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="{{ asset('home/assets/images/portfolio-image.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="#">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                                <h4>Data Analysis</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="{{ asset('home/assets/images/portfolio-image.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="blog" class="our-blog section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="top-dec">
                        <img src="{{ asset('home/assets/images/blog-dec.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="left-image">
                        <a href="#"><img src="{{ asset('home/assets/images/big-blog-thumb.jpg') }}" alt="Workspace Desktop"></a>
                        <div class="info">
                            <div class="inner-content">
                                <ul>
                                    <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                                    <li><i class="fa fa-users"></i> TemplateMo</li>
                                    <li><i class="fa fa-folder"></i> Branding</li>
                                </ul>
                                <a href="#">
                                    <h4>SEO Agency &amp; Digital Marketing</h4>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut
                                    labore et dolore magna...</p>
                                <div class="main-blue-button">
                                    <a href="#">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
                    <div class="right-list">
                        <ul>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                                    <a href="#">
                                        <h4>New Websites &amp; Backlinks</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="{{ asset('home/assets/images/blog-thumb-01.jpg') }}" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                                    <a href="#">
                                        <h4>SEO Analysis &amp; Content Ideas</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="{{ asset('home/assets/images/blog-thumb-01.jpg') }}" alt=""></a>
                                </div>
                            </li>
                            <li>
                                <div class="left-content align-self-center">
                                    <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                                    <a href="#">
                                        <h4>SEO Tips &amp; Digital Marketing</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                                </div>
                                <div class="right-image">
                                    <a href="#"><img src="{{ asset('home/assets/images/blog-thumb-01.jpg') }}" alt=""></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <div class="section-heading">
                        <h2>Feel Free To Send Us a Message About Your Website Needs</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor
                            incididunt ut labore et dolores</p>
                        <div class="phone-info">
                            <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a
                                        href="#">010-020-0340</a></span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on"
                                        required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="surname" name="surname" id="surname" placeholder="Surname"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message"
                                        placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="{{ asset('home/assets/images/contact-decoration.png') }}" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            @include('partials.home.footer')
        </div>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('home/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('home/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('home/assets/js/animation.js') }}"></script>
    <script src="{{ asset('home/assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('home/assets/js/templatemo-custom.js') }}"></script>

</body>

</html>