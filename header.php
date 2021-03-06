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
        <meta name="author" content="www.martinhorvath.sk"> 

        <meta name="msapplication-TileColor" content="#3DBFBB">
        <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
        <meta name="theme-color" content="#3DBFBB">
        <!-- ========================= CSS here ========================= -->                                                               
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
        <header> 
            <!-- Start Header Area -->             
            <header class="header navbar-area"> 
                <!-- Start Topbar  Clearfix -->                 
                <div class="topbar d-none d-md-block"> 
                    <div class="container"> 
                        <div class="row align-items-center"> 
                            <!-- Start Topbar  Clearfix -->                             
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
                                <div class="clearfix"></div>                                 
                            </div>                             
                            <!--End: Topbar  Clearfix -->                             
                            <div class="col-lg-4 col-md-4 col-12"> 
                                <!-- Hard Wp -->                                 
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
                            <!--End: Hard Wp -->                             
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
                            <!-- Start Mega Menu -->                             
                            <!-- Dinamic WP - | Category menu -->                             
                            <div class="mega-category-menu"> 
                                <span class="cat-button"><i class="lni lni-menu"></i><?php _e( 'V??etky kateg??rie', 'proprodukt' ); ?></span> 
                                <ul class="sub-category"> 
                                    <li>
                                        <a href="https://www.proprodukt.sk/index.php/product-category/cistaca/"><?php _e( '??istiaca technika', 'proprodukt' ); ?></a>
                                    </li>                                     
                                    <li>
                                        <a href="https://www.proprodukt.sk/index.php/product-category/profi/"><?php _e( 'Profesion??lna ??istiaca technika', 'proprodukt' ); ?></a>
                                    </li>                                     
                                    <li>
                                        <a href="https://www.proprodukt.sk/upratovacie-sluzby/"><?php _e( 'Upratovacie slu??by', 'proprodukt' ); ?></a>
                                    </li>                                     
                                    <li>
                                        <a href="https://www.proprodukt.sk/pozicovna-cistiacej-techniky/"><?php _e( 'Po??i??ov??a ??istiacej techniky', 'proprodukt' ); ?></a>
                                    </li>                                     
                                </ul>                                 
                            </div>                             
                            <!-- End Mega Menu  -->                             
                            <!--End:  Dinamic WP - | Category menu -->                             
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
        </header>         
        <!-- End Header Area -->         
        <?php wp_footer(); ?>
    </header>     
    <main>