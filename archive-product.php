<?php get_header( 'woocommerce' ); ?>

        <!-- End Header Area -->
        <section>
            <div class=" container">
                <div class="row">
                    <div class="d-none d-lg-block" style=" max-width: 21%; border-right: 1px solid #eee;">
                        <div class="product-details-info">
                            <div class="" style="margin: 20px 0 0 0"><?php echo do_shortcode('[iks_menu id="19"]'); ?></div>
                        </div>
                    </div>                     
                    <div class="" style=" max-width: 79%; margin-bottom: 90px;"> 
                        <div class="trending-product section" style="background-color: #FFF">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="section-title align-left" style="padding-bottom: 20px;">
                                            <h2><?php woocommerce_page_title(); ?></h2>
                                        </div>
                                    </div>
                                </div>
                        
                               

                                <!-- product_content -->                                 
                                <div style="margin: 0 20px;"> 
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
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-12">
                                        <!-- Start Single Product -->
                                        <div class="single-product">
                                            <div class="product-image">
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/product-1.jpg" alt="#">
                                                <div class="button">
                                                    <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> <?php _e( 'Add to Cart', 'proprodukt' ); ?></a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <span class="category"><?php _e( 'Watches', 'proprodukt' ); ?></span>
                                                <h4 class="title"> <a href="product-grids.html"><?php _e( 'Xiaomi Mi Band 5', 'proprodukt' ); ?></a> </h4>
                                                <ul class="review">
                                                    <li>
                                                        <i class="lni lni-star-filled"></i>
                                                    </li>
                                                    <li>
                                                        <i class="lni lni-star-filled"></i>
                                                    </li>
                                                    <li>
                                                        <i class="lni lni-star-filled"></i>
                                                    </li>
                                                    <li>
                                                        <i class="lni lni-star-filled"></i>
                                                    </li>
                                                    <li>
                                                        <i class="lni lni-star"></i>
                                                    </li>
                                                    <li>
                                                        <span><?php _e( '4.0 Review(s)', 'proprodukt' ); ?></span>
                                                    </li>
                                                </ul>
                                                <div class="price">
                                                    <span><?php _e( '$199.00', 'proprodukt' ); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Product -->
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Shipping Info -->
        <section class="shipping-info">
            <div class="container">
                <ul>
                    <!-- Free Shipping -->
                    <li>
                        <div class="media-icon">
                            <i class="lni lni-delivery"></i>
                        </div>
                        <div class="media-body">
                            <h5><?php _e( 'Free Shipping', 'proprodukt' ); ?></h5>
                            <span><?php _e( 'On order over $99', 'proprodukt' ); ?></span>
                        </div>
                    </li>
                    <!-- Money Return -->
                    <li>
                        <div class="media-icon">
                            <i class="lni lni-support"></i>
                        </div>
                        <div class="media-body">
                            <h5><?php _e( '24/7 Support.', 'proprodukt' ); ?></h5>
                            <span><?php _e( 'Live Chat Or Call.', 'proprodukt' ); ?></span>
                        </div>
                    </li>
                    <!-- Support 24/7 -->
                    <li>
                        <div class="media-icon">
                            <i class="lni lni-credit-cards"></i>
                        </div>
                        <div class="media-body">
                            <h5><?php _e( 'Online Payment.', 'proprodukt' ); ?></h5>
                            <span><?php _e( 'Secure Payment Services.', 'proprodukt' ); ?></span>
                        </div>
                    </li>
                    <!-- Safe Payment -->
                    <li>
                        <div class="media-icon">
                            <i class="lni lni-reload"></i>
                        </div>
                        <div class="media-body">
                            <h5><?php _e( 'Easy Return.', 'proprodukt' ); ?></h5>
                            <span><?php _e( 'Hassle Free Shopping.', 'proprodukt' ); ?></span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End Shipping Info -->
        <!-- Start Footer Area -->        

<?php get_footer( 'woocommerce' ); ?>