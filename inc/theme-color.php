<?php

// theme color
function enqueue_custom_color_stylesheet() {

    wp_enqueue_style('kidsa-style', get_stylesheet_uri());

    $theme_color_1 = cs_get_option('theme_color_1'); 
    

    wp_enqueue_style('custom-color-theme', get_template_directory_uri() . '/inc/theme-stylesheets/theme-color.css');
    wp_add_inline_style('custom-color-theme', '     
	


    .widget_kidsa_popular_posts .theme-recent-post-item .time:before,
    .single-post-navigation .single-post-navigation-center-grid a,

    .header-main .main-menu ul li a:hover,
    .header-main .main-menu ul .current-menu-item a,
    .header-main .main-menu ul .current_page_ancestor a,    
    .main-sidebar .single-sidebar-image .contact-text .icon,
    .main-sidebar .single-sidebar-widget .opening-category ul li i,
    .main-sidebar .single-sidebar-widget .widget-categories ul li i,
    .search-close,
    .search-wrap .main-search-input,
    .preloader p,
    .preloader .animation-preloader .txt-loading .letters-loading,
    .mean-container .mean-nav ul li a:hover,
    .mean-container .mean-nav ul li a:hover,
    .breadcrumb-wrapper .page-heading .breadcrumb-items li a:hover ,
    .offcanvas__wrapper .offcanvas__content .offcanvas__contact ul li .offcanvas__contact-icon i,
    .header-main .main-menu ul li:hover > a::after,
    .header-main .main-menu ul li:hover > a,
    .header-main .main-menu ul li .sub-menu li.has-dropdown > a::after,
    .header-main .main-menu ul li .sub-menu li:hover > a::after,
    .header-main .main-menu ul li a:hover,
    .banner-span span,
    .theme-btn-2:hover  {

        color: ' . esc_attr($theme_color_1) . ';

        }


    ::-webkit-scrollbar-thumb,
    .comment-form .submit-btn,
    .single-post-navigation .prev-post a:hover i,
    .widget .widget-headline:before,
    .widget_search .search-form .submit-btn,
    .wp-block-tag-cloud a:hover,
    .blog-pagination ul li span.current,
    .blog-main-item-01 .blog-bottom .btn,
    .widget_kidsa_category .service-item-list:hover,
    .offcanvas__wrapper .offcanvas__content .offcanvas__contact .social-icon a:hover,
    .offcanvas__wrapper .offcanvas__content .offcanvas__close,
    .sticky.header-3 .header-main .header-right .header-button .theme-btn,
    .header-main .main-menu ul li .sub-menu li:hover > a,
    .theme-btn {

    background-color: ' . esc_attr($theme_color_1) . ';

    }

		
    ');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_color_stylesheet');
  