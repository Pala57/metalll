<?php
/**
 * Loads the child theme textdomain.
 */
function onepagez_child_theme_setup() {
    load_child_theme_textdomain('onepagez');
}
add_action( 'after_setup_theme', 'onepagez_child_theme_setup' );

function onepagez_child_enqueue_styles() {
    $parent_style = 'onepagez-parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'onepagez-style',get_stylesheet_directory_uri() . '/onepagez.css');
}
add_action( 'wp_enqueue_scripts', 'onepagez_child_enqueue_styles',99);

// svg design

if (!function_exists('oneline_lite_svg_enable')) {
  function oneline_lite_svg_enable(){
    $svg_disable= get_theme_mod('oneline-lite_svg_disable');
    if($svg_disable =='' || $svg_disable =='0'){
        $return = '<div class="svg-top-container">
            
     <svg xmlns="http://www.w3.org/2000/svg" width="0" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 L100 100 0 2 L0 100 Z" stroke-width="0"></path>
      </svg>
    </div>';
    return $return;
     } else {
    return false;
     }
  }
}

if (!function_exists('oneline_lite_svg_bottom_enable')) {
  function oneline_lite_svg_bottom_enable(){
    $svg_btm_disable= get_theme_mod('oneline-lite_svg_disable');
    if($svg_btm_disable =='' || $svg_btm_disable =='0'){
        $return = '<div class="svg-bottom-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="0" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 L100 100 0 2 L0 100 Z" stroke-width="0"></path>
      </svg>
    </div>';
    return $return;
     } else {
    return false;
     }
  }
}

if (!function_exists('oneline_lite_page_svg_top_enable')) {
  function oneline_lite_page_svg_top_enable(){
    $custom_background_color = get_background_color();
    $svg_top_disable= get_theme_mod('oneline-lite_svg_disable');
    if($svg_top_disable =='' || $svg_top_disable =='0'){
        $return = '<div style="fill:#'.$custom_background_color.'" class="svg-bottom-container">  
    <svg xmlns="http://www.w3.org/2000/svg" width="0" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 L100 100 0 2 L0 100 Z" stroke-width="0"></path>
      </svg>
    </div>';
    return $return;
     } else {
    return false;
     }
  }
}

if (!function_exists('oneline_lite_page_svg_bottom_enable')) {
  function oneline_lite_page_svg_bottom_enable(){
    $custom_background_color = get_background_color();    
    $svg_bottom_disable= get_theme_mod('oneline-lite_svg_disable');
    if($svg_bottom_disable =='' || $svg_bottom_disable =='0'){
        $return = '<div style="fill:#'.$custom_background_color.'" class="svg-top-container">
   <svg xmlns="http://www.w3.org/2000/svg" width="0" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 L100 100 0 2 L0 100 Z" stroke-width="0"></path>
      </svg>
    </div>';
    return $return;
     } else {
    return false;
     }
  }
}
?>