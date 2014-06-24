<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package oculus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="OCULUS combines the art of rejuvenation with advanced technologies to help patients achieve a natural look while feeling confident and pampered." />
<meta name="keywords" content="Blepharoplasty Atlanta, Face lift Atlanta, Atlanta lip Augmentation, Atlanta laser skin resurfacing, Liposuction Atlanta, Plastic  Surgery, Cosmetic Surgery, Atlanta Wrinkle Removal Atlanta, Botox Atlanta, Skin Care Atlanta, Botox Injection Treatment Atlanta" />
<meta name="author" content=" Visual23">
<meta name="google-site-verification" content="mbb_fuCrphHOq2-9cOXmK7EECjmjhOAfK6uiAv-Pz3o" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    
<script type="text/javascript" src="//use.typekit.net/vqn8nva.js"></script>
    <script type="text/javascript">
        try {
            Typekit.load();
        } catch (e) {}
    </script>
    
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-40648229-1', 'oculusplasticsurgery.com');
        ga('send', 'pageview');
    </script>
    
<?php wp_head(); ?>
    
    <script>
    videojs.options.flash.swf = "<?php echo get_template_directory_uri(); ?>/includes/js-plugin/videojs/video-js.swf";
    var isMobile = false;
    var isTablet = false;
    <?php 
    if ( is_mobile() ) {
       echo 'isMobile = true;';
    }
    if ( is_tablet() ) {
        echo 'isTablet = true;';
    } 
    ?>
   </script>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
    
    <!-- Preloader -->
        <div id="preloader">
            <div id="status">loading</div>
        </div>

<!-- Start header -->
            <header id="mainHeader" class="clearfix">
                <div class="topBar">
                    <div class="container" id="topBarContainer">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>
                        <div class="row visible-lg visible-md">
                            <div class="col-md-4 text-left"><a href="https://oculusplasticsurgery.nextechweb.com/NexWebPortal510/PatientSummary.aspx" target="_blank" id="myAccountBtn">my account</a></div>
                            <div class="col-md-4 text-center">
                                <a id="oculusLogo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <div class="oculusLogoType"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/oculus_logo_type.png"></div>
                                    <div class="oculusLogoShape"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/oculus_logo_shape.png"></div>
                                </a>
                            </div>
                            <div class="col-md-4 text-right"><span class="pull-right"><a href="#" id="searchBtn">search</a></span>
                            </div>
                        </div>
                
                        <div class="row hidden-lg hidden-md mobileTop">                            
                            
                            <div class="col-md-12 text-center">
                                <a id="oculusLogo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <div class="oculusLogoType"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/oculus_logo_type.png"></div>
                                    <div class="oculusLogoShape"><img src="<?php echo get_template_directory_uri(); ?>/includes/images/oculus_logo_shape.png"></div>
                                </a>
                            </div>
                            <div class="col-md-12 text-center"><a href="https://oculusplasticsurgery.nextechweb.com/NexWebPortal510/PatientSummary.aspx" target="_blank" id="myAccountBtn">my account</a> <a href="#" id="searchBtnMobile">search</a></div>
                        </div>
                            
                    </div>
                    <div id="searchPanelWrapper">
                        <div id="searchPanel">
                            <div class="container">
                                <div class="row">
                                    <div id="searchCloseBtn">Close</div>
                                    <div class="col-md-6 center-block">
                                        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        
                                            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Start typing here', 'placeholder', 'oculus' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'oculus' ); ?>">
                                        
                                        <input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'oculus' ); ?>">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="searchPanelFade"></div>
                    </div>
                </div>
                <div id="topMenu">
                    <div class="container">
                        <div class="row">
                            <?php top_menu(); ?>
                        </div>
                    </div>
                </div>
                    <div id="megaMenuWrapper">
                        <div id="megaMenu"></div>
                        <div id="megaMenuFade"></div>
                    </div>
            </header>
        <div class="fixedBuffer"></div>
            <!-- End header -->
    
    <!-- Start Content -->
    <div class="contentContainer">  
    
