
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
                            <div>
                                <?php the_content(); ?>

                                <h1><?php esc_html_e('STRÁNKA NENÁJDENÁ','proprodukt'); ?></h1>
                    
                                 <p><?php esc_html_e('Stránka, ktorú hľadáte, je bohužiaľ nedostupná.','proprodukt'); ?> <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e(' Presunte sa na úvodnú stránku','proprodukt'); ?> <?php esc_html_e('','proprodukt'); ?></a></p>
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <!--End: site content -->                     
        </div>                 
    </div>             
</div>                 

<?php get_footer( '' ); ?>