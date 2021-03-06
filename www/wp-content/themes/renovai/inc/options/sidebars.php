<?php
use Digidez\Functions;
use Digidez\Theme;

return [
	[
		'name'          => __('Menu Bar', THEME_TD),
		'id'            => 'menu-bar',
		'description'   => 'Menu Bar widget area',
		'before_widget' => '<li id="%1$s" class="menu-item widget">',
		'after_widget'  => '</li>',
		'before_title'  => '<span class="hidden">',
		'after_title'   => '</span>',
	],
	[
		'name'          => __('Single Post Sidebar', THEME_TD),
		'id'            => 'single-post-sidebar',
		'description'   => 'Single post sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Single Job Sidebar', THEME_TD),
		'id'            => 'single-job-sidebar',
		'description'   => 'Single job post sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Market Sidebar', THEME_TD),
		'id'            => 'market-sidebar',
		'description'   => 'Market post sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Right Sidebar', THEME_TD),
		'id'            => 'right-sidebar',
		'description'   => 'Right sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Left Sidebar', THEME_TD),
		'id'            => 'left-sidebar',
		'description'   => 'Left sidebar widget area',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Hero Slider', THEME_TD),
		'id'            => 'hero',
		'description'   => 'Hero slider area. Place two or more widgets here and they will slide!',
		'before_widget' => '<div class="carousel-item">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	],
	[
		'name'          => __('Hero Static', THEME_TD),
		'id'            => 'statichero',
		'description'   => 'Static Hero widget. no slider functionallity',
		'before_widget' => '<div id="%1$s" class="static-hero-widget %2$s '.Theme::slbd_count_widgets('statichero').'">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Footer Col 1', THEME_TD),
		'id'            => 'footer_col_1',
		'description'   => 'Widget area below footer full sidebar',
		'before_widget' => '<nav>',
		'after_widget'  => '</nav>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Footer Col 2', THEME_TD),
		'id'            => 'footer_col_2',
		'description'   => 'Widget area below footer full sidebar',
		'before_widget' => '<nav>',
		'after_widget'  => '</nav>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Footer Col 3', THEME_TD),
		'id'            => 'footer_col_3',
		'description'   => 'Widget area below footer full sidebar',
		'before_widget' => '<nav>',
		'after_widget'  => '</nav>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Footer Col 4', THEME_TD),
		'id'            => 'footer_col_4',
		'description'   => 'Widget area below footer full sidebar',
		'before_widget' => '<nav>',
		'after_widget'  => '</nav>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Sub Footer Top Full width', THEME_TD),
		'id'            => 'sub_footer_top_full_width',
		'description'   => 'Widget area below footer full width sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	],
	[
		'name'          => __('Sub Footer Col 1', THEME_TD),
		'id'            => 'sub_footer_col_1',
		'description'   => 'Widget area below footer half sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	],
	[
		'name'          => __('Sub Footer Col 2', THEME_TD),
		'id'            => 'sub_footer_col_2',
		'description'   => 'Widget area below footer half sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	],
	[
		'name'          => __('Second Sub Footer Col 1', THEME_TD),
		'id'            => 'second_sub_footer_col_1',
		'description'   => 'Widget area below footer half sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	],
	[
		'name'          => __('Second Sub Footer Col 2', THEME_TD),
		'id'            => 'second_sub_footer_col_2',
		'description'   => 'Widget area below footer half sidebar',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	],
	[
		'name'          => __('Footer Top Full width sidebar', THEME_TD),
		'id'            => 'footer-full-top',
		'description'   => 'Widget area in site footer',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div><!-- .footer-widget -->',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
	[
		'name'          => __('Footer Bottom Full width sidebar', THEME_TD),
		'id'            => 'footer-full-bottom',
		'description'   => 'Widget area in site footer',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div><!-- .footer-widget -->',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	],
];