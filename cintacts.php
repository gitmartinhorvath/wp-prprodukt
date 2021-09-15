<?php
/*
Template Name: Kontakt
*/
?>
<?php get_header( 'contacts' ); ?>
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
                            </div>                                     
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
            <!--End: site content -->                     
        </div>                 
    </div>             
</div>                 

<?php get_footer( 'page' ); ?>