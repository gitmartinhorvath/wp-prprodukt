<!DOCTYPE html> 

<!--  Converted from HTML to WordPress -- www.martinhorvath.sk -->
<!--  DESIGNED & DEVELOPED by martinhorvath.sk
            
        Website:        http://martinhorvath.sk/
        Email:          martinhorvath@outlook.sk
-->
<html class="no-js" <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"/> 
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>                   
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <meta name="msapplication-TileColor" content="#3DBFBB">
        <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#3DBFBB">

        
        <!-- ========================= CSS here ========================= -->                                                               
        <!-- UIkit JS -->                  
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>


        <!-- Smartsupp Live Chat script -->
        <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '1d0ce7e7db3138fbfc846afc0c7f2f4500f44d7b';
        window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
        </script>    
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?> 
        <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->         
        <!-- Preloader -->         
        <div class="preloader"> 
            <div class="preloader-inner"> 
                <div class="preloader-icon"> 
                    <span></span> 
                    <span></span> 
                </div>                 
            </div>             
        </div>         
        <!-- /End Preloader -->         
        <!-- Start Header Area -->         
        <header class="header navbar-area"> 
            <!-- Start Topbar -->             
            <div class="topbar  d-none d-md-block"> 
                <div class="container"> 
                    <div class="row align-items-center"> 
                        <div class="col-lg-4 col-md-4 col-12"> 
                            <div class="top-left"> 
                                <ul class="menu-top-link"> 
                                    <li> 
                                        <div class="clearfix"></div>                                         
                                    </li>                                     
                                    <li> 
                                        <div class="clearfix"></div>                                         
                                    </li>                                     
                                </ul>                                 
                            </div>                             
                        </div>                         
                        <div class="col-lg-4 col-md-4 col-12"> 
                            <!--
                            <div class="top-middle">
                            <ul class="useful-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                       -->                             
                            <div class="clearfix"></div>                             
                        </div>                         
                        <div class="col-lg-4 col-md-4 col-12"> 
                            <div class="top-end"> 
                                <div class="user"> 
                                    <a href="https://www.proprodukt.sk/index.php/my-account/"></a> 
                                    <i class="lni lni-user"></i>
                                    <?php _e( 'M??j u??et', 'proprodukt' ); ?>
                                </a>                                 
                            </div>                             
                            <ul class="user-login"> 
                                <li> 
                                    <a href="https://www.proprodukt.sk/index.php/my-account/"><?php _e( 'Prihl??senie', 'proprodukt' ); ?></a> 
                                </li>                                 
                                <li> 
                                    <a href="https://www.proprodukt.sk/index.php/my-account/"><?php _e( 'Registrova?? sa', 'proprodukt' ); ?> </a> 
                                </li>                                 
                            </ul>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </div>         
        <!-- End Topbar -->         
        <!-- Start Header Middle -->         
        <div class="header-middle"> 
            <div class="container"> 
                <div class="row align-items-center"> 
                    <div class="col-lg-3 col-md-3 col-7"> 
                        <!-- Start Header Logo -->                         
                        <a class="navbar-brand" href="https://www.proprodukt.sk/"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/LOGO_PROPRODUKT.svg" alt="Logo"> </a> 
                        <!-- End Header Logo -->                         
                    </div>                     
                    <div class="col-lg-5 col-md-7 d-xs-none"> 
                        <!-- Start Main Menu Search -->                         
                        <div class="main-menu-search"> 
                            <!-- navbar search start -->                             
                            <div class="navbar-search search-style-5"> 
                                <div class="clearfix"></div>                                 
                                <div class="search-input"> 
                                    <!-- Dinamic WP -->                                     
                                    <div> 
                                        <?php echo do_shortcode('[fibosearch]'); ?> 
                                    </div>                                     
                                    <!--End Dinamic WP -->                                     
                                </div>                                 
                            </div>                             
                            <!-- navbar search Ends -->                             
                        </div>                         
                        <!-- End Main Menu Search -->                         
                    </div>                     
                    <div class="col-lg-4 col-md-2 col-5"> 
                        <div class="middle-right-area"> 
                            <!-- nav-hotline -->                             
                            <div class="nav-hotline"> 
                                <i class="lni lni-phone"></i> 
                                <h3><a href="tel:+421910999819" class="link"><?php _e( 'Kontakt:', 'proprodukt' ); ?> <span><?php _e( '+421 910-999-819', 'proprodukt' ); ?></span> </a> </h3> 
                            </div>                             
                            <!-- End:  nav-hotline -->                             
                            <!-- navbar-cart - cart-items -->                             
                            <div class="navbar-cart"> 
                                <div class="wishlist"> 
                                    <a href="https://www.proprodukt.sk/wishlist/"> <i class="lni lni-heart"></i> </a> 
                                </div>                                 
                                <div class="cart-items"> 
                                    <a href="#" class="main-btn"> <i class="lni lni-cart"></i> </a> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
        </div>         
        <!-- End Header Middle -->         
        <!-- Start Header Bottom -->         
        <div class="container"> 
            <div class="row align-items-center"> 
                <div class="col-lg-8 col-md-6 col-12"> 
                    <div class="nav-inner"> 
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    
                                <li class="nav-item">
                                        <a href="https://www.proprodukt.sk/" class="" aria-label="Toggle navigation">Domov</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="https://www.proprodukt.sk/obchod/" class="" aria-label="Toggle navigation">Obchod</a>
                                    </li>
 
                                    <li class="nav-item">
                                        <a href="https://www.proprodukt.sk/index.php/kontakt/" class="" aria-label="Toggle navigation">kontakt</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                        </nav>
                        <!-- End Navbar -->                      
                    </div>                     
                </div>                 
                <div class="col-lg-4 col-md-6 col-12"> 
                    <!-- Start Nav Social -->                     
                    <div class="nav-social"> 
                        <h5 class="title"><?php _e( 'Nasleduj n??s:', 'proprodukt' ); ?></h5> 
                        <ul> 
                            <li> 
                                <a href="https://www.facebook.com/Proprodukt.sk" target="_blank"><i class="lni lni-facebook-filled"></i></a> 
                            </li>                             
                            <!-- <li> 
                                <a href="#"><i class="lni lni-twitter-original"></i></a> 
                            </li>                                 
                            <li> 
                                <a href="#"><i class="lni lni-instagram"></i></a> 
                            </li>                                 -->                             
                        </ul>                         
                    </div>                     
                    <!-- End Nav Social -->                     
                </div>                 
            </div>             
        </div>         
        <!-- End Header Bottom -->         
        <!-- Start Breadcrumbs -->         
        <div class="breadcrumbs d-none d-sm-block" uk-sticky="show-on-up: true"> 
            <div class="container"> 
                <div class="row align-items-center"> 
                    <div class="col-lg-6 col-md-6 col-12"> 
                        <div class="breadcrumbs-content"> 
                            <h1 class="page-title"><?php the_title(); ?></h1> 
                        </div>                         
                    </div>                     
                    <div class="col-lg-6 col-md-6 col-12"> 
                        <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'parents', true, 'Domov'); ?>
                        <?php if( !empty( $breadcrumbs ) ) : ?>
                            <ul class="breadcrumb-nav" cms-breadcrumbs-home cms-breadcrumbs-item="a" cms-breadcrumbs-separator=".lni"> 
                                <li>
                                    <?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ); $breadcrumbs_i++) : ?>
                                        <?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?>
                                        <a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a>
                                        <?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?>
                                            <i class="lni lni-angle-double-right"></i>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </li>                                 
                                <li>                                      
</li>                                 
                            </ul>
                        <?php endif; ?> 
                    </div>                     
                </div>                 
            </div>             
        </div>         
        <!-- End Breadcrumbs -->         
        <?php wp_footer(); ?>
    </header>     
    <!-- End Header Area -->     
    <main>