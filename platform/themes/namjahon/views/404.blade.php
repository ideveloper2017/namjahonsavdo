@php
    SeoHelper::setTitle(__('404 - Not found'));
    Theme::fire('beforeRenderTheme', app(\Botble\Theme\Contracts\Theme::class));
@endphp

{!! Theme::partial('header') !!}

<body class="page-wrapper">

<!-- .preloader -->
<div class="preloader"></div>
<!-- /.preloader -->

<!-- switcher menu -->
<div class="switcher">

    <!-- Switcher button -->
    <div class="switch_btn">
        <button><i class="fa fa-cog fa-spin"></i></button>
    </div>

    <!-- switcher body -->
    <div class="switch_menu">
        <h5 class="title">Style Switcher</h5>


        <!-- color changer -->
        <div class="switcher_container">
            <h5>Color Skins</h5>
            <ul id="styleOptions" title="switch styling">
                <li>
                    <a href="javascript: void(0)" data-theme="theme-1" class="color2"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="theme-3" class="color3"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="theme-4" class="color4"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="theme-5" class="color5"></a>
                </li>
                <li>
                    <a href="javascript: void(0)" data-theme="theme-6" class="color6"></a>
                </li>
            </ul>
        </div>

    </div>
</div>
<!-- end switcher menu -->

<!--header search-->
<section class="header-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="search-form pull-right">
                    <form action="#">
                        <div class="search">
                            <input type="search" name="search" value="" placeholder="Search Something">
                            <button type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end header search-->

<!-- main header area -->
<header class="main-header">

    <!-- header upper -->
    <div class="header-upper">
        <div class="container">
            <ul class="top-left">
                <li><i class="fa fa-clock-o" aria-hidden="true"></i>Mon - Sat  9.00 - 18.00</li>
                <li><i class="fa fa-phone"></i>[251] 235-3256</li>
            </ul>
            <div class="top-right">
                <ul class="social-top">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                </ul>
                <div class="button-top">
                    <a href="#" class="btn-one style-one">Get Appoinment</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end header upper -->

    <!-- header lower -->
    <div class="header-lower">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo-box">
                        <a href="index.html"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="about.html">About Us</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="service.html">Our Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="current dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="gallery.html">Our Gallery</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">News</a>
                                        <ul>
                                            <li><a href="our-blog.html">Blog Classic</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="info-box">
                            <div class="search-box">
                                <div class="toggle-search">
                                    <button><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header lower -->

    <!--sticky header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="logo-box">
                        <a href="index.html"></a>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="about.html">About Us</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="service.html">Our Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="current dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="gallery.html">Our Gallery</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">News</a>
                                        <ul>
                                            <li><a href="our-blog.html">Blog Classic</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="info-box">
                            <div class="button"><a href="#" class="btn-one style-one radi">Get A Quote</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end sticky header -->

</header>
<!-- end main header area -->


<!-- page title -->
<div class="about-bg centered">
    <div class="container">
        <div class="text">Error Page</div>
    </div>
</div>
<!-- end page title -->

<!-- bread-crumb -->
<div class="bread-crumb">
    <div class="container">
        <div class="text"><a href="index.html">Home</a><i class="fa fa-angle-right"></i> Error Page
            <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div>
        </div>
    </div>
</div>
<!-- bread crumb end -->

<!-- error section-->
<section class="error-section error-page text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 error-colmun">
                <div class="error-title">404</div>
                <div class="error-content">
                    <h2 class="section-title">Looks like somthing went wrong</h2>
                    <div class="text">
                        <p>The page you are looking for was moved, removed, renamed or might never.</p>
                    </div>
                    <div class="input-box">
                        <form action="#">
                            <input type="text" placeholder="Search again">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="error-btn">
                        <a href="index.html" class="btn-one style-one radi">Go Back Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- error serctio end -->
{!! Theme::partial('footer') !!}


