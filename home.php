<?php get_header(); ?>

<!-- Start Hero Area -->         
<section class="hero-area"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-8 col-12 custom-padding-right"> 
                <div class="slider-head"> 
                    <!-- Start Hero Slider -->                             
                    <div class="hero-slider"> 
                        <!-- Start Single Slider -->                                 
                        <div class="single-slider" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero/slider-bnr.jpg'); background-position-x: 60%;">
                            <!-- Wp cusmoter # hero -->                                     
                            <div class="content"> 
                                <h2 class=" d-block "><?php echo get_theme_mod( 'Title', 'ČISTIACE<br>A UPRATOVACIE<br> SLUŽBY' ); ?></h2> 
                                <p class="d-none d-md-block"><?php echo get_theme_mod( 'subtitle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.' ); ?></p> 
                                <div class="button"> 
                                    <?php if ( get_theme_mod( 'button-show' ) ) : ?>
                                        <a href="<?php echo get_theme_mod( 'button-link', 'product-grids.html' ); ?>" class="btn"><?php echo get_theme_mod( 'button-txt', __( 'Dozvedieť sa viac', 'proprodukt' ) ); ?></a>
                                    <?php endif; ?> 
                                </div>                                         
                            </div>
                            <!-- Wp cusmoter # hero -->                                     
                        </div>                                 
                        <!-- End Single Slider -->                                 
                    </div>                             
                    <!-- End Hero Slider -->                             
                </div>                         
            </div>                     
            <div class="col-lg-4 col-12"> 
                <div class="row"> 
                    <div class="col-lg-12 col-md-6 col-12" style="padding-bottom: 10px;"> 
                        <!-- Start Small Banner -->                                 
                        <div class="hero-small-banner" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero/slider-bg1.jpg');"> 
                            <div class="content"> 
                                <h2> <span><?php _e( 'Domácnosti', 'proprodukt' ); ?></span> <h3><?php _e( 'Čistiaca technika', 'proprodukt' ); ?></h3> </h2> 
                                <span class="button" style="margin-top: 20px;"> <a class="btn" href="https://dev.martinhorvath.sk/index.php/product-category/cistaca/"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> </span> 
                            </div>                                     
                        </div>                                 
                        <!-- End Small Banner -->                                 
                    </div>                             
                    <div class="col-lg-12 col-md-6 col-12"> 
                        <!-- Start Small Banner -->                                 
                        <div class="hero-small-banner" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero/slider-bg2.jpg');"> 
                            <div class="content"> 
                                <h2> <span><?php _e( 'Firmy ', 'proprodukt' ); ?></span> <h3><?php _e( 'Profesionálna', 'proprodukt' ); ?><br><?php _e( 'čistiaca technika', 'proprodukt' ); ?></h3> </h2> 
                                <span class="button" style="margin-top: 20px;"> <a class="btn" href="https://dev.martinhorvath.sk/index.php/product-category/profi/"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> </span> 
                            </div>                                     
                        </div>                                 
                        <!-- End Small Banner -->                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- End Hero Area -->         
<!-- Catergory area -->         
<section class="trending-product section" style="margin-top: 12px;"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-12"> 
                <div class="section-title"> 
                    <h2><?php echo get_theme_mod( 'titile-category', __( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'proprodukt' ) ); ?></h2> 
                    <?php if ( get_theme_mod( 'subtitle-category-show' ) ) : ?>
                        <p><?php echo get_theme_mod( 'subtitle-category', __( 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 'proprodukt' ) ); ?></p>
                    <?php endif; ?> 
                </div>                         
            </div>                     
        </div>                 
        <div class="row"> 
            <div class="col-lg-3 col-md-6 col-12"> 
                <!-- Start Single Product -->                         
                <div class="single-product"> 
                    <div class="product-image"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/product-1.jpg" alt="#"> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/cistaca/vysavace/cistiaca-technika-vysavace-mokro-suche-vysavace/" class="btn"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                    <div class="product-info"> 
                        <h4 class="title text-center"> <a href=""><?php _e( 'Vysávače', 'proprodukt' ); ?></a> </h4> 
                    </div>                             
                </div>                         
                <!-- End Single Product -->                         
            </div>                     
            <div class="col-lg-3 col-md-6 col-12" style="margin: 0 0 20px 0"> 
                <!-- Start Single Product -->                         
                <div class="single-product"> 
                    <div class="product-image"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/product-2.jpg" alt="#"> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/cistaca/tepovace-na-zakladne-cistenie/" class="btn"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                    <div class="product-info"> 
                        <h4 class="title text-center"> <a href="product-grids.html"><?php _e( 'Tepovače na základné čistenie', 'proprodukt' ); ?></a> </h4> 
                    </div>                             
                </div>                         
                <!-- End Single Product -->                         
            </div>                     
            <div class="col-lg-3 col-md-6 col-12"> 
                <!-- Start Single Product -->                         
                <div class="single-product"> 
                    <div class="product-image"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/product-3.jpg" alt="#"> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/cistaca/vysavace/cistiaca-technika/" class="btn"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                    <div class="product-info"> 
                        <h4 class="title text-center"> <a href="product-grids.html"><?php _e( 'Vysávače do domácnosti', 'proprodukt' ); ?></a> </h4> 
                    </div>                             
                </div>                         
                <!-- End Single Product -->                         
            </div>                     
            <div class="col-lg-3 col-md-6 col-12"> 
                <!-- Start Single Product -->                         
                <div class="single-product"> 
                    <div class="product-image"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/product-4.jpg" alt="#"> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/cistaca/tepovace-na-zakladne-cistenie/" class="btn"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                    <div class="product-info"> 
                        <h4 class="title text-center"> <a href="product-grids.html"><?php _e( 'Tepovače', 'proprodukt' ); ?></a> </h4> 
                    </div>                             
                </div>                         
                <!-- End Single Product -->                         
            </div>                     
            <div class="col-lg-3 col-md-6 col-12"> 
                <!-- Start Single Product -->                         
                <div class="single-product"> 
                    <div class="product-image"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/product-5.jpg" alt="#"> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/cistaca/cistenie-teras/" class="btn"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                    <div class="product-info"> 
                        <h4 class="title text-center"> <a href="product-grids.html"><?php _e( 'Čistenie terás', 'proprodukt' ); ?></a> </h4> 
                    </div>                             
                </div>                         
                <!-- End Single Product -->                         
            </div>                     
            <div class="col-lg-3 col-md-6 col-12"> 
                <!-- Start Single Product -->                         
                <div class="single-product"> 
                    <div class="product-image"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/product-6.jpg" alt="#"> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/profi/mopy-drziaky-a-handry-profi/" class="btn"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                    <div class="product-info"> 
                        <h4 class="title text-center"> <a href="product-grids.html"><?php _e( 'Mopy, držiaky a handry', 'proprodukt' ); ?></a> </h4> 
                    </div>                             
                </div>                         
                <!-- End Single Product -->                         
            </div>                     
            <div class="col-lg-3 col-md-6 col-12"> 
                <!-- Start Single Product -->                         
                <div class="single-product"> 
                    <div class="product-image"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/product-7.jpg" alt="#"> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/profi/upratovacie-voziky-profi/" class="btn"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                    <div class="product-info"> 
                        <h4 class="title text-center"> <a href="product-grids.html"><?php _e( 'Upratovacie vozíky', 'proprodukt' ); ?></a> </h4> 
                    </div>                             
                </div>                         
                <!-- End Single Product -->                         
            </div>                     
            <div class="col-lg-3 col-md-6 col-12"> 
                <!-- Start Single Product -->                         
                <div class="single-product"> 
                    <div class="product-image"> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/products/product-8.jpg" alt="#"> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/profi/zametacie-stroje-profi/" class="btn"><i class="lni lni-cart"></i><?php _e( 'Nakupovať', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                    <div class="product-info"> 
                        <h4 class="title text-center"> <a href="product-grids.html"><?php _e( 'Zametacie stroje', 'proprodukt' ); ?></a> </h4> 
                    </div>                             
                </div>                         
                <!-- End Single Product -->                         
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- End Trending Product Area -->         
<!-- Start Call Action Area -->         
<section class="call-action section"> 
    <div class="container"> 
        <div class="row "> 
            <div class="col-lg-8 offset-lg-2 col-12"> 
                <div class="inner"> 
                    <div class="content"> 
                        <h2 class="wow fadeInUp" data-wow-delay=".4s"><?php echo get_theme_mod( 'title-cta', 'Currently You are using free<br> Lite version of ShopGrids' ); ?></h2> 
                        <?php if ( get_theme_mod( 'subtitle-cta-show' ) ) : ?>
                            <p class="wow fadeInUp" data-wow-delay=".6s"><?php echo get_theme_mod( 'subtitle-cta', 'Please, purchase full version of the template to get all pages,<br> features and commercial license.' ); ?></p>
                        <?php endif; ?> 
                        <?php if ( get_theme_mod( 'button-show-cta' ) ) : ?>
                            <div class="button wow fadeInUp" data-wow-delay=".8s"> 
                                <a href="<?php echo get_theme_mod( 'button-link-cta', '#' ); ?>" class="btn"><?php echo get_theme_mod( 'button-txt-cta', __( 'Purchase Now', 'proprodukt' ) ); ?></a> 
                            </div>
                        <?php endif; ?> 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- End Call Action Area -->         
<!-- Start Banner Area -->         
<section class="banner section" style="padding-top: 90px !important;"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-lg-6 col-md-6 col-12"> 
                <div class="single-banner" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner/banner-1-bg.jpg')"> 
                    <div class="content"> 
                        <h2><?php _e( 'Čistiaca', 'proprodukt' ); ?> <?php _e( 'technika', 'proprodukt' ); ?></h2> 
                        <p><?php _e( 'Do domácnosti ', 'proprodukt' ); ?></p> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/cistaca/" class="btn"><?php _e( 'Nakupuj teraz', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <div class="col-lg-6 col-md-6 col-12"> 
                <div class="single-banner custom-responsive-margin" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner/banner-2-bg.jpg')"> 
                    <div class="content"> 
                        <h2><?php _e( 'Profesionálna čistiaca', 'proprodukt' ); ?> <?php _e( 'technika', 'proprodukt' ); ?></h2> 
                        <p><?php _e( ' Pre firmy ', 'proprodukt' ); ?></p> 
                        <div class="button"> 
                            <a href="https://dev.martinhorvath.sk/index.php/product-category/profi/" class="btn"><?php _e( 'Nakupuj teraz', 'proprodukt' ); ?></a> 
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </div>             
</section>         
<!-- End Banner Area -->         
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
                    <h5><?php _e( 'Doprava zdarma', 'proprodukt' ); ?></h5> 
                    <span><?php _e( 'Pri objednávke nad... ', 'proprodukt' ); ?></span> 
                </div>                         
            </li>                     
            <!-- Money Return -->                     
            <li> 
                <div class="media-icon"> 
                    <i class="lni lni-support"></i> 
                </div>                         
                <div class="media-body"> 
                    <h5><?php _e( 'Podpora 24/7.', 'proprodukt' ); ?></h5> 
                    <span><?php _e( 'Živý chat alebo hovor.', 'proprodukt' ); ?></span> 
                </div>                         
            </li>                     
            <!-- Support 24/7 -->                     
                           
            <!-- Safe Payment -->                     
            <li> 
                <div class="media-icon"> 
                    <i class="lni lni-reload"></i> 
                </div>                         
                <div class="media-body"> 
                    <h5><?php _e( 'Ľahký návrat.', 'proprodukt' ); ?></h5> 
                    <span><?php _e( 'Bezproblémové nakupovanie.', 'proprodukt' ); ?></span> 
                </div>                         
            </li>                     
        </ul>                 
    </div>             
</section>         
<!-- End Shipping Info -->                 

<?php get_footer(); ?>