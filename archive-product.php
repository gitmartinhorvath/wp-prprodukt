<?php get_header( 'woocommerce' ); ?>

        <!-- End Header Area -->
        <section>
            <div class=" container">
                <div class="row">
                    <div class="d-none d-lg-block woo-contanier-21">
                        <!-- widget-area -->
                        <div id="secondary-2" class="widget-area sidebar" role="complementary">
                                <?php do_action( 'before_sidebar' ); ?>
                                <?php if ( ! dynamic_sidebar( 'sidebar-5' ) ) : ?>
                                <?php endif; // end sidebar widget area ?>
                        </div><!-- #secondary .widget-area -->
                        <!--End: widget-area -->
                    </div>                     
                    <div class=" woo-contanier-79"> 
                        <div class="trending-product section" style="background-color: #FFF">
                            <div class="">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="section-title align-left" style="padding-bottom: 20px;">
                                            <h2><?php woocommerce_page_title(); ?></h2>
                                        </div>
                                    </div>
                                </div>
                        
                               

                                <!-- product_content -->                                 
                                <div> 
                                    <?php
                                        if ( woocommerce_product_loop() ) {

                                            /**
                                             * Hook: woocommerce_before_shop_loop.
                                             *
                                             * @hooked woocommerce_output_all_notices - 10
                                             * @hooked woocommerce_result_count - 20
                                             * @hooked woocommerce_catalog_ordering - 30
                                             */
                                            do_action( 'woocommerce_before_shop_loop' );

                                            woocommerce_product_loop_start();

                                            if ( wc_get_loop_prop( 'total' ) ) {
                                                while ( have_posts() ) {
                                                    the_post();

                                                    /**
                                                     * Hook: woocommerce_shop_loop.
                                                     */
                                                    do_action( 'woocommerce_shop_loop' );

                                                    wc_get_template_part( 'content', 'product' );
                                                }
                                            }

                                            woocommerce_product_loop_end();

                                            /**
                                             * Hook: woocommerce_after_shop_loop.
                                             *
                                             * @hooked woocommerce_pagination - 10
                                             */
                                            do_action( 'woocommerce_after_shop_loop' );
                                        } else {
                                            /**
                                             * Hook: woocommerce_no_products_found.
                                             *
                                             * @hooked wc_no_products_found - 10
                                             */
                                            do_action( 'woocommerce_no_products_found' );
                                        }

                                            ?>
                                </div>
                                <!-- -product_content -->                                 
                                <!-- ////////////////////////////////// --> 
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="shipping-info" style="background-color: #fff;"> 
            <div class="container"> 
                <ul> 
                    <!-- Free Shipping -->                     
                    <li> 
                        <div class="media-icon"> 
                            <i class="lni lni-delivery"></i> 
                        </div>                         
                        <div class="media-body"> 
                            <h5>Free Shipping</h5> 
                            <span>On order over $99</span> 
                        </div>                         
                    </li>                     
                    <!-- Money Return -->                     
                    <li> 
                        <div class="media-icon"> 
                            <i class="lni lni-support"></i> 
                        </div>                         
                        <div class="media-body"> 
                            <h5>24/7 Support.</h5> 
                            <span>Live Chat Or Call.</span> 
                        </div>                         
                    </li>                     
                    <!-- Support 24/7 -->                     
                    <li> 
                        <div class="media-icon"> 
                            <i class="lni lni-credit-cards"></i> 
                        </div>                         
                        <div class="media-body"> 
                            <h5>Online Payment.</h5> 
                            <span>Secure Payment Services.</span> 
                        </div>                         
                    </li>                     
                    <!-- Safe Payment -->                     
                    <li> 
                        <div class="media-icon"> 
                            <i class="lni lni-reload"></i> 
                        </div>                         
                        <div class="media-body"> 
                            <h5>Easy Return.</h5> 
                            <span>Hassle Free Shopping.</span> 
                        </div>                         
                    </li>                     
                </ul>                 
            </div>             
        </section>
               
        <!-- Start Footer Area -->        
        <?php get_footer( 'home' ); ?>