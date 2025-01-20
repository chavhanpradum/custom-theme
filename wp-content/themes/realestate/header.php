<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Real_Estate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="contact-list clearfix">
                            <li><i class="la la-home"></i> 256 Interior the good, New York</li>
                            <li><i class="la la-envelope-o"></i><a href="#">Supportyou@Interiores.com</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <div class="btn-box"><a href="admin/submit-property.html" class="theme-btn btn-style-four">Submit Property</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Lower -->
        <div class="header-lower">
            <div class="main-box">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="logo-box">
                            <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
                        </div>

                        <div class="nav-outer">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu"></span>
                                    </button>
                                </div>
                                
                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index-2.html">Header Style One</a></li>
                                                        <li><a href="index-3.html">Header Style Two</a></li>
                                                        <li><a href="index-4.html">Header Style three</a></li>
                                                        <li><a href="index-5.html">Header Style Four</a></li>
                                                        <li><a href="index-6.html">Header Style Five</a></li>
                                                        <li><a href="index-7.html">Header Style Six</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="index-2.html">Home page 01</a></li>
                                                <li><a href="index-3.html">Home page 02</a></li>
                                                <li><a href="index-4.html">Home page 03</a></li>
                                                <li><a href="index-5.html">Home page 04</a></li>
                                                <li><a href="index-6.html">Home page 05</a></li>
                                                <li><a href="index-7.html">Home page 06</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Agents</a>
                                            <ul>
                                                <li><a href="agents.html">Agents</a></li>
                                                <li><a href="agent-detail.html">Agent Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Properties</a>
                                            <ul>
                                                <li><a href="properties.html">Properties</a></li>
                                                <li><a href="property-list-view.html">Property List View</a></li>
                                                <li><a href="property-grid-view.html">Property Grid View</a></li>
                                                <li><a href="property-modern-view.html">Property Modern View</a></li>
                                                <li><a href="property-detail.html">Property Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Default</a></li>
                                                <li><a href="blog-list.html">Blog List View</a></li>
                                                <li><a href="blog-grid.html">Blog Grid View</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                            <div class="mega-menu">
                                                <div class="mega-menu-bar row clearfix">
                                                    <div class="column col-lg-3 col-md-3 col-sm-12">
                                                        <h3>About Us</h3>
                                                        <ul>
                                                            <li><a href="about.html">About Us</a></li>
                                                            <li><a href="agents.html">Agents</a></li>
                                                            <li><a href="agent-detail.html">Agent Detail</a></li>
                                                            <li><a href="faq.html">FAQ's</a></li>
                                                            <li><a href="testimonial.html">Testimonials</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-lg-3 col-md-3 col-sm-12">
                                                        <h3>Properties</h3>
                                                        <ul>
                                                            <li><a href="properties.html">Properties</a></li>
                                                            <li><a href="property-list-view.html">Property List View</a></li>
                                                            <li><a href="property-grid-view.html">Property Grid View</a></li>
                                                            <li><a href="property-modern-view.html">Property Modern View</a></li>
                                                            <li><a href="property-detail.html">Property Detail</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-lg-3 col-md-3 col-sm-12">
                                                        <h3>Blog</h3>
                                                        <ul>
                                                            <li><a href="blog.html">Blog Default</a></li>
                                                            <li><a href="blog-list.html">Blog List View</a></li>
                                                            <li><a href="blog-grid.html">Blog Grid View</a></li>
                                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                                            <li><a href="error-page.html">404 Error Page</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-lg-3 col-md-3 col-sm-12">
                                                        <h3>Pages</h3>
                                                        <ul>
                                                            <li><a href="admin/submit-property.html">Submit Property</a></li>
                                                            <li><a href="admin/dashboard.html">Dashboard</a></li>
                                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="contact.html">Contact Us</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>              
                                </div>
                            </nav><!-- Main Menu End-->
                                
                            <!-- Main Menu End-->
                            <div class="outer-box clearfix">
                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="la la-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="post" action="http://expert-themes.com/html/willies/blog.html">
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                            <button type="submit" class="search-btn"><span class="la la-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index-2.html" title=""><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="#">Home</a>
                                    <ul>
                                        <li class="dropdown"><a href="#">Header Styles</a>
                                            <ul>
                                                <li><a href="index-2.html">Header Style One</a></li>
                                                <li><a href="index-3.html">Header Style Two</a></li>
                                                <li><a href="index-4.html">Header Style three</a></li>
                                                <li><a href="index-5.html">Header Style Four</a></li>
                                                <li><a href="index-6.html">Header Style Five</a></li>
                                                <li><a href="index-7.html">Header Style Six</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index-2.html">Home page 01</a></li>
                                        <li><a href="index-3.html">Home page 02</a></li>
                                        <li><a href="index-4.html">Home page 03</a></li>
                                        <li><a href="index-5.html">Home page 04</a></li>
                                        <li><a href="index-6.html">Home page 05</a></li>
                                        <li><a href="index-7.html">Home page 06</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">About</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="testimonial.html">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Agents</a>
                                    <ul>
                                        <li><a href="agents.html">Agents</a></li>
                                        <li><a href="agent-detail.html">Agent Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Properties</a>
                                    <ul>
                                        <li><a href="properties.html">Properties</a></li>
                                        <li><a href="property-list-view.html">Property List View</a></li>
                                        <li><a href="property-grid-view.html">Property Grid View</a></li>
                                        <li><a href="property-modern-view.html">Property Modern View</a></li>
                                        <li><a href="property-detail.html">Property Detail</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Default</a></li>
                                        <li><a href="blog-list.html">Blog List View</a></li>
                                        <li><a href="blog-grid.html">Blog Grid View</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                                <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu-bar row clearfix">
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>About Us</h3>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="agents.html">Agents</a></li>
                                                    <li><a href="agent-detail.html">Agent Detail</a></li>
                                                    <li><a href="faq.html">FAQ's</a></li>
                                                    <li><a href="testimonial.html">Testimonials</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Properties</h3>
                                                <ul>
                                                    <li><a href="properties.html">Properties</a></li>
                                                    <li><a href="property-list-view.html">Property List View</a></li>
                                                    <li><a href="property-grid-view.html">Property Grid View</a></li>
                                                    <li><a href="property-modern-view.html">Property Modern View</a></li>
                                                    <li><a href="property-detail.html">Property Detail</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Blog</h3>
                                                <ul>
                                                    <li><a href="blog.html">Blog Default</a></li>
                                                    <li><a href="blog-list.html">Blog List View</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid View</a></li>
                                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                                    <li><a href="error-page.html">404 Error Page</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-3 col-sm-12">
                                                <h3>Pages</h3>
                                                <ul>
                                                    <li><a href="admin/submit-property.html">Submit Property</a></li>
                                                    <li><a href="admin/dashboard.html">Dashboard</a></li>
                                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                                    <li><a href="login.html">Login</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>              
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->
  