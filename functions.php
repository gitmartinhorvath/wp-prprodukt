<?php
if ( ! function_exists( 'proprodukt_setup' ) ) :

function proprodukt_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'proprodukt', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */
    add_theme_support( 'woocommerce' );
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'proprodukt' ),
        'social'  => __( 'Social Links Menu', 'proprodukt' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    register_nav_menu(  'category_menu', __( 'Category menu', 'proprodukt' )  );

    register_nav_menu(  'footermenu1', __( 'footermenu1', 'proprodukt' )  );

    register_nav_menu(  'footermenu2', __( 'footermenu2', 'proprodukt' )  );

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // proprodukt_setup

add_action( 'after_setup_theme', 'proprodukt_setup' );


if ( ! function_exists( 'proprodukt_init' ) ) :

function proprodukt_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}

endif; // proprodukt_setup

add_action( 'init', 'proprodukt_init' );


if ( ! function_exists( 'proprodukt_custom_image_sizes_names' ) ) :

function proprodukt_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'proprodukt_custom_image_sizes_names' );
endif;// proprodukt_custom_image_sizes_names



if ( ! function_exists( 'proprodukt_widgets_init' ) ) :

function proprodukt_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'proprodukt_widgets_init' );
endif;// proprodukt_widgets_init



if ( ! function_exists( 'proprodukt_customize_register' ) ) :

function proprodukt_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'sehero', array(
        'title' => __( 'se-hero', 'proprodukt' )
    ));

    $wp_customize->add_section( 'catergory', array(
        'title' => __( 'Catergory', 'proprodukt' )
    ));

    $wp_customize->add_section( 'cta', array(
        'title' => __( 'Call Action', 'proprodukt' )
    ));

    $wp_customize->add_section( 'footer', array(
        'title' => __( 'footer', 'proprodukt' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'Title', array(
        'type' => 'theme_mod',
        'default' => 'Upratovanie<br>domácností',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'Title', array(
        'label' => __( 'title', 'proprodukt' ),
        'type' => 'text',
        'section' => 'sehero'
    ));

    $wp_customize->add_setting( 'subtitle', array(
        'type' => 'theme_mod',
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua.',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'subtitle', array(
        'label' => __( 'Sub title', 'proprodukt' ),
        'type' => 'text',
        'section' => 'sehero'
    ));

    $wp_customize->add_setting( 'button-show', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'button-show', array(
        'label' => __( 'button-show', 'proprodukt' ),
        'type' => 'checkbox',
        'section' => 'sehero'
    ));

    $wp_customize->add_setting( 'button-txt', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'button-txt', array(
        'label' => __( 'button-txt', 'proprodukt' ),
        'type' => 'text',
        'section' => 'sehero'
    ));

    $wp_customize->add_setting( 'button-link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'button-link', array(
        'label' => __( 'button-link', 'proprodukt' ),
        'type' => 'url',
        'section' => 'sehero'
    ));

    $wp_customize->add_setting( 'titile-category', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet consectetur adipisicing elit', 'proprodukt' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'titile-category', array(
        'label' => __( 'titile-category', 'proprodukt' ),
        'type' => 'textarea',
        'section' => 'catergory'
    ));

    $wp_customize->add_setting( 'subtitle-category-show', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'subtitle-category-show', array(
        'label' => __( 'subtitle-category-show', 'proprodukt' ),
        'type' => 'checkbox',
        'section' => 'catergory'
    ));

    $wp_customize->add_setting( 'subtitle-category', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'subtitle-category', array(
        'label' => __( 'subtitle-category', 'proprodukt' ),
        'type' => 'textarea',
        'section' => 'catergory'
    ));

    $wp_customize->add_setting( 'title-cta', array(
        'type' => 'theme_mod',
        'default' => 'Currently You are using free<br> Lite version of ShopGrids',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'title-cta', array(
        'label' => __( 'title', 'proprodukt' ),
        'type' => 'textarea',
        'section' => 'cta'
    ));

    $wp_customize->add_setting( 'subtitle-cta', array(
        'type' => 'theme_mod',
        'default' => 'Please, purchase full version of the template to get all pages,<br> features and commercial license.',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'subtitle-cta', array(
        'label' => __( 'subtitle-cta', 'proprodukt' ),
        'type' => 'textarea',
        'section' => 'cta'
    ));

    $wp_customize->add_setting( 'subtitle-cta-show', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'subtitle-cta-show', array(
        'label' => __( 'subtitle-cta-show', 'proprodukt' ),
        'type' => 'checkbox',
        'section' => 'cta'
    ));

    $wp_customize->add_setting( 'button-show-cta', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'button-show-cta', array(
        'label' => __( 'button-show-cta', 'proprodukt' ),
        'type' => 'checkbox',
        'section' => 'cta'
    ));

    $wp_customize->add_setting( 'button-txt-cta', array(
        'type' => 'theme_mod',
        'default' => __( 'Purchase Now', 'proprodukt' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'button-txt-cta', array(
        'label' => __( 'button-txt-cta', 'proprodukt' ),
        'type' => 'text',
        'section' => 'cta'
    ));

    $wp_customize->add_setting( 'button-link-cta', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'button-link-cta', array(
        'label' => __( 'button-link-cta', 'proprodukt' ),
        'type' => 'url',
        'section' => 'cta'
    ));

    $wp_customize->add_setting( 'footer-title-1', array(
        'type' => 'theme_mod',
        'default' => __( 'Information', 'proprodukt' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer-title-1', array(
        'label' => __( 'footer-title-1', 'proprodukt' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    $wp_customize->add_setting( 'footer-title-2', array(
        'type' => 'theme_mod',
        'default' => __( 'Shop Departments', 'proprodukt' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'footer-title-2', array(
        'label' => __( 'footer-title-1', 'proprodukt' ),
        'type' => 'text',
        'section' => 'footer'
    ));

    /* Pinegrow generated Customizer Controls End */

}


add_action( 'customize_register', 'proprodukt_customize_register' );
endif;// proprodukt_customize_register


if ( ! function_exists( 'proprodukt_enqueue_scripts' ) ) :
    function proprodukt_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'tinyslider' );
    wp_enqueue_script( 'tinyslider', get_template_directory_uri() . '/assets/js/tiny-slider.js', false, null, true);

    wp_deregister_script( 'glightbox' );
    wp_enqueue_script( 'glightbox', get_template_directory_uri() . '/assets/js/glightbox.min.js', false, null, true);

    wp_deregister_script( 'cunsom' );
    wp_enqueue_script( 'cunsom', get_template_directory_uri() . '/assets/js/cunsom.js', false, null, true);

    wp_deregister_script( 'main' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', false, null, true);

    wp_deregister_script( 'uikit' );
    wp_enqueue_script( 'uikit', 'https://cdn.jsdelivr.net/npm/uikit@3.7.3/dist/js/uikit.min.js', false, null, false);

    wp_register_script( 'inline-script-1', '', [], '', true );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', 'const current = document.getElementById("current");
        const opacity = 0.6;
        const imgs = document.querySelectorAll(".img");
        imgs.forEach(img => {
            img.addEventListener("click", (e) => {
                //reset opacity
                imgs.forEach(img => {
                    img.style.opacity = 1;
                });
                current.src = e.target.src;
                //adding class 
                //current.classList.add("fade-in");
                //opacity
                e.target.style.opacity = opacity;
            });
        });');

    wp_register_script( 'inline-script-2', '', [], '', true );
    wp_enqueue_script( 'inline-script-2' );
    wp_add_inline_script( 'inline-script-2', '//========= Hero Slider 
        tns({
            container: \'.hero-slider\',
            slideBy: \'page\',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: [\'<i class="lni lni-chevron-left"></i>\', \'<i class="lni lni-chevron-right"></i>\'],
        });

        //======== Brand Slider
        tns({
            container: \'.brands-logo-carousel\',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });');

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'lineicons' );
    wp_enqueue_style( 'lineicons', get_template_directory_uri() . '/assets/css/LineIcons.3.0.css', false, null, 'all');

    wp_deregister_style( 'tinyslider' );
    wp_enqueue_style( 'tinyslider', get_template_directory_uri() . '/assets/css/tiny-slider.css', false, null, 'all');

    wp_deregister_style( 'glightbox' );
    wp_enqueue_style( 'glightbox', get_template_directory_uri() . '/assets/css/glightbox.min.css', false, null, 'all');

    wp_deregister_style( 'main' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', false, null, 'all');

    wp_deregister_style( 'contribute' );
    wp_enqueue_style( 'contribute', get_template_directory_uri() . '/assets/css/contribute.css', false, null, 'all');

    wp_deregister_style( 'style' );
    wp_enqueue_style( 'style', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'proprodukt_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/wp_pg_helpers.php";
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";
require_once "inc/wp_smart_navwalker.php";

    /* Pinegrow generated Include Resources End */

    register_sidebar( array(
            'name' => __( 'Content Pages Right', 'ready_ecommerce' ),
            'id' => 'sidebar-5',
            'description' => __( 'Right sidebar area for content pages only. Not availabe at products or catalogue pages', 'ready_ecommerce' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => "</aside>",
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        ) );
    


?>