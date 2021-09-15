<?php get_header( 'page' ); ?>

<!-- Start Item Details -->         
<section class="item-details section co-wp-page"> 
    <div class="container"> 
        <div class="row"> 
            <!-- site content -->                     
            <div class="product-details-info col-lg-12 col-12"> 
                <div class="single-block"> 
                    <div class=""> 
                        <div class="info-body custom-responsive-margin"> 
                           <!-- single-product_content -->                             
                                <div> 
                                    <?php
                                            /**
                                             * woocommerce_before_main_content hook.
                                             *
                                             * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                                             * @hooked woocommerce_breadcrumb - 20
                                             */
                                            do_action( 'woocommerce_before_main_content' );
                                        ?>
                                    <?php while ( have_posts() ) : ?>
                                        <?php the_post(); ?>
                                        <?php wc_get_template_part( 'content', 'single-product' ); ?>
                                    <?php endwhile; // end of the loop. ?>
                                    <?php
                                            /**
                                             * woocommerce_after_main_content hook.
                                             *
                                             * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                                             */
                                            do_action( 'woocommerce_after_main_content' );
                                        ?>
                                </div>
                                <!-- single-product_content -->                                      
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <!--End: site content -->                     
        </div>                 
    </div>             
</div>                 

<?php get_footer( '' ); ?>