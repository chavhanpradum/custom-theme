<?php
/**
 * Enqueue scripts and styles.
 */
function wp_acfwebsite_scripts() {   
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/slick.css', array(), time(), 'all' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/assets/css/style.css', array(), time(), 'all' );
    wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/assets/css/responsive.css', array(), time(), 'all' );
    wp_enqueue_style('style_Roboto_ital', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', false, '1.0', 'all');

    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), time(), true );
    wp_enqueue_script( 'popper_min_js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), time(), true );
}
add_action( 'wp_enqueue_scripts', 'wp_acfwebsite_scripts' );

 
function mytheme_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'text_domain' ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}


function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');

add_theme_support( 'post-thumbnails' );
add_image_size( 'mob-thumb', 400, 537 );
add_theme_support( 'title-tag' );

function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

function custom_breadcrumbs() {
    global $post;
    $breadcrumbs = '<section class="breadcrumb-section"><div class="container"><p id="breadcrumbs" class="breadcrumbs">';
    $breadcrumbs .= '<span><a href="' . home_url() . '">Home</a></span> &gt; ';
    if (is_single() || is_page()) {
        $categories = get_the_category($post->ID);
        if ($categories) {
            $breadcrumbs .= '<span><a href="' . get_category_link($categories[0]->term_id) . '">' . $categories[0]->name . '</a></span> &gt; ';
        }
        $breadcrumbs .= '<span class="breadcrumb_last" aria-current="page">' . get_the_title() . '</span>';
    } elseif (is_category()) {
        $breadcrumbs .= '<span class="breadcrumb_last" aria-current="page">' . single_cat_title('', false) . '</span>';
    } elseif (is_tag()) {
        $breadcrumbs .= '<span class="breadcrumb_last" aria-current="page">' . single_tag_title('', false) . '</span>';
    } elseif (is_archive()) {
        $breadcrumbs .= '<span class="breadcrumb_last" aria-current="page">Archives</span>';
    } elseif (is_search()) {
        $breadcrumbs .= '<span class="breadcrumb_last" aria-current="page">Search results</span>';
    } elseif (is_404()) {
        $breadcrumbs .= '<span class="breadcrumb_last" aria-current="page">404 Not Found</span>';
    }

    $breadcrumbs .= '</p></div></section>';
    echo $breadcrumbs;
}

function cta_shortcode(){
    $string = '';
    if ( get_field( 'contact_info', 'option' ) ) :  
         while ( have_rows( 'contact_info', 'option' ) ) : the_row(); 
                    $label = get_sub_field( 'button_label', 'option' );
                    $link = get_sub_field( 'button_link', 'option' );
                    $heading = get_sub_field( 'heading', 'option' );
                    $badge_icon = get_sub_field( 'image', 'option' );
                    $header_number_link = get_field( 'header_number_link', 'option' );
                    $call_icon = get_field( 'call_us_icon', 'option' );
                    $call_us_label = get_field( 'call_us_label', 'option' );
                    $header_number = get_field( 'header_number', 'option' );
                $string .= '<div class="case-cta">
                        <div class="cta-top">
                            <div class="cta-title">'.$heading.'</div>
                            <div class="btn-box">
                                <a class="theme-btn" href="'.$link.'">'.$label.'</a>
                            </div>
                        </div>
                        <div class="call-cta">
                            <div class="cta-badge">
                                <img src="'.$badge_icon['url'].'" width="135" height="135" alt="" />
                            </div>
                            <a class="call-box" href="'.$header_number_link.'">
                                <div class="call-lft">
                                    <img src="'.$call_icon['url'].'" width="30" height="30" alt="">
                                </div>
                                <div class="call-rht">
                                    <div class="call-top">'.$call_us_label.'</div>
                                    <div class="call-bot">'.$header_number.'</div>
                                </div>
                            </a>
                        </div>
                    </div>';
            endwhile; 
          endif; 

        return $string;  
} 
add_shortcode('cta', 'cta_shortcode');