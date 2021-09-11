
    </section>     
    <!-- End Item Details -->     
    <!-- /////////////////////////////////////////////////////////////////////////-->     
    <!-- End Item Details -->     
    <!-- Start Footer Area -->     
    <footer> 
        <!-- Start Footer Area -->         
        <footer class="footer"> 
            <!-- Start Footer Top -->             
            <div class="footer-top"> 
                <div class="container"> 
                    <div class="inner-content"> 
                        <div class="row"> 
                            <div class="col-lg-3 col-md-4 col-12"> 
                                <div class="footer-logo"> 
                                    <a href="index.html"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo/LOGO_PROPRODUKT_footer.svg" alt="#"> </a> 
                                </div>                                 
                            </div>                             
                            <div class="col-lg-9 col-md-8 col-12"> 
                                <div class="footer-newsletter"> 
                                    <h4 class="title"> <?php _e( 'Prihlásiť sa ku odberu noviniek', 'proprodukt' ); ?> <span><?php _e( 'Získajte všetky najnovšie informácie, výpredaje a ponuky.', 'proprodukt' ); ?></span> </h4> 
                                    <div class="newsletter-form-head"> 
                                        <?php echo do_shortcode(' [contact-form-7 id="2310" title="Bez názvu"] '); ?> 
                                    </div>                                     
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <!-- End Footer Top -->             
            <!-- Start Footer Middle -->             
            <div class="footer-middle"> 
                <div class="container"> 
                    <div class="bottom-inner"> 
                        <div class="row"> 
                            <div class="col-lg-3 col-md-6 col-12"> 
                                <!-- Single Widget -->                                 
                                <div class="single-footer f-contact"> 
                                    <h3><?php _e( 'Kontaktné informácie', 'proprodukt' ); ?> </h3> 
                                    <p class="phone"><?php _e( 'Tel: +421 910-999-819', 'proprodukt' ); ?></p> 
                                    <ul> 
                                        <li> 
                                            <span> <?php _e( 'PROPRODUKT s.r.o.', 'proprodukt' ); ?></span> 
                                            <?php _e( 'Rybárska 685/53B', 'proprodukt' ); ?> 
                                            <?php _e( 'Hamuliakovo,', 'proprodukt' ); ?> 
                                            <?php _e( '90043', 'proprodukt' ); ?> 
                                        </li>                                         
                                        <li> 
                                            <span> <?php _e( 'IČO:50 877 062', 'proprodukt' ); ?></span> 
                                            <span> <?php _e( 'DIČ:2120521997', 'proprodukt' ); ?></span> 
                                        </li>                                         
                                    </ul>                                     
                                    <p class="mail"> <a href="mailto:info@proprodukt.sk"><?php _e( 'info@proprodukt.sk', 'proprodukt' ); ?></a> </p> 
                                </div>                                 
                                <!-- End Single Widget -->                                 
                            </div>                             
                            <div class="col-lg-3 col-md-6 col-12"> 
                                <!-- Single Widget -->                                 
                                <div class="single-footer our-app"> 
                                    <h3><?php _e( 'Sociálne siete', 'proprodukt' ); ?> </h3> 
                                    <ul class="app-btn"> 
                                        <li> 
                                            <a href="https://www.facebook.com/Proprodukt.sk" target="_blank"> <i class="lni lni-facebook-filled"></i> <span class="small-title"><?php _e( 'Nasledujte nás', 'proprodukt' ); ?> </span> <span class="big-title"><?php _e( 'Na Facebooku', 'proprodukt' ); ?></span> </a> 
                                        </li>                                         
                                        <!-- <li> 
                                            <a href="#"> <i class="lni lni-youtube"></i> <span class="small-title">Download on the</span> <span class="big-title">Google Play</span> </a> 
                                        </li>   -->                                         
                                    </ul>                                     
                                </div>                                 
                                <!-- End Single Widget -->                                 
                            </div>                             
                            <div class="col-lg-3 col-md-6 col-12"> 
                                <!-- Single Widget -->                                 
                                <div class="single-footer f-link"> 
                                    <!-- cunsom -->                                     
                                    <h3><?php echo get_theme_mod( 'footer-title-1', __( 'Information', 'proprodukt' ) ); ?></h3> 
                                    <!-- cunsom menu_footer_1 -->                                     
                                    <?php if ( has_nav_menu( 'footermenu1' ) ) : ?> 
                                        <?php
                                            PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}">
                                                                                        <a {ATTRS}>{TITLE}</a>
                                                                                    </li>';
                                            wp_nav_menu( array(
                                                'container' => '',
                                                'theme_location' => 'footermenu1',
                                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'walker' => new PG_Smart_Walker_Nav_Menu()
                                        ) ); ?> 
                                    <?php endif; ?> 
                                </div>                                 
                                <!-- End Single Widget -->                                 
                            </div>                             
                            <div class="col-lg-3 col-md-6 col-12"> 
                                <!-- Single Widget -->                                 
                                <div class="single-footer f-link"> 
                                    <!-- cunsom -->                                     
                                    <h3><?php echo get_theme_mod( 'footer-title-2', __( 'Shop Departments', 'proprodukt' ) ); ?></h3> 
                                    <!-- cunsom menu_footer_2 -->                                     
                                    <?php if ( has_nav_menu( 'footermenu2' ) ) : ?> 
                                        <?php
                                            PG_Smart_Walker_Nav_Menu::$options['template'] = '<li id="{ID}" class="{CLASSES}">
                                                                                        <a {ATTRS}>{TITLE}</a>
                                                                                    </li>';
                                            wp_nav_menu( array(
                                                'container' => '',
                                                'theme_location' => 'footermenu2',
                                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                                'walker' => new PG_Smart_Walker_Nav_Menu()
                                        ) ); ?> 
                                    <?php endif; ?> 
                                </div>                                 
                                <!-- End Single Widget -->                                 
                            </div>                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <!-- End Footer Middle -->             
            <!-- Start Footer Bottom -->             
            <div class="footer-bottom"> 
                <div class="container"> 
                    <div class="inner-content"> 
                        <div class="row align-items-center"> 
                            <!-- <div class="col-lg-4 col-12">
                            <div class="payment-gateway">
                                <span>We Accept:</span>
                                <img src="assets/images/footer/credit-cards-footer.png" alt="#">
                            </div>
                        </div>-->                             
                            <div class="col-lg-12 col-12"> 
                                <div class="copyright"> 
                                    <p><?php _e( 'Navrhol a vyvinul', 'proprodukt' ); ?><a href="http://martinhorvath.sk/" rel="nofollow" target="_blank"><?php _e( 'www.martinhorvath.sk', 'proprodukt' ); ?></a></p> 
                                </div>                                 
                            </div>                             
                            <!--<div class="col-lg-4 col-12">
                            <ul class="socila">
                                <li>
                                    <span>Follow Us On:</span>
                                </li>
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="#"><i class="lni lni-google"></i></a></li>
                            </ul>
                        </div>-->                             
                        </div>                         
                    </div>                     
                </div>                 
            </div>             
            <!-- End Footer Bottom -->             
        </footer>         
        <!--/ End Footer Area -->         
        <!-- ========================= scroll-top ========================= -->         
        <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a> 
        <!-- ========================= JS here ========================= -->         
    </footer>     
    <!--/ End Footer Area -->     
    <!-- ========================= scroll-top ========================= -->     
    <a href="#" class="scroll-top"> <i class="lni lni-chevron-up"></i> </a> 
    <!-- ========================= JS here ========================= -->                         
