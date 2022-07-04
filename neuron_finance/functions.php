<?php 
function neuron_theme_files(){
    wp_enqueue_style ('animate', get_template_directory_uri() .'/assets/css/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style ('font-awesome', get_template_directory_uri() .'/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
    wp_enqueue_style ('carousel', get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), '1.0', 'all');
    wp_enqueue_style ('bootsnav', get_template_directory_uri() .'/assets/css/bootsnav.css', array(), '1.0', 'all');
    wp_enqueue_style ('bootstrap', get_template_directory_uri() .'/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');

    wp_enqueue_style('theme-style', get_stylesheet_uri());

    wp_enqueue_script('bootstrap', get_template_directory_uri() .'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootsnav', get_template_directory_uri() .'/assets/js/bootsnav.js', array('jquery'), '1.0', true);
    wp_enqueue_script('carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() .'/assets/js/wow.min.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('ajaxchimp', get_template_directory_uri() .'/assets/js/ajaxchimp.js', array('jquery'), '1.0', true);
    // wp_enqueue_script('ajaxchimp-config', get_template_directory_uri() .'/assets/js/ajaxchimp-config.js', array('jquery'), '1.0', true);
    wp_enqueue_script('theme-script', get_template_directory_uri() .'/assets/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'neuron_theme_files');

function neuron_setup() {
	load_theme_textdomain( 'neuron', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'neuron' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'neuron_setup' );

function neuron_register_post_type() {
    register_post_type('slide', array(
        'labels' => array(
            'name' => __('Slides'),
            'singular_name' => __('Slide')
            ),
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
            'public' => false,
            'show_ui' => true 
        ),
    );

    register_post_type('intro', array(
        'labels' => array(
            'name' => __('My Intro'),
            'singular_name' => __('intro')
            ),
            'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
            'public' => false,
            'show_ui' => true 
        ),
    );

    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services'),
            'singular_name' => __('service')
            ),
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
            'public' => false,
            'show_ui' => true 
        ),
	);

	register_post_type('portfolio', array(
		'labels' => array(
			'name' => __('Portfolio'),
			'singular_name' => __('portfolio')
			),
			'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
			'public' => true 
		),
    );
}
add_action( 'init', 'neuron_register_post_type' );

// Register widget area.
function neuron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 1', 'neuron' ),
			'id'            => 'widget-1',
			'description'   => esc_html__( 'Add footer widgets here', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="footer-widget about-us %2$s online-card">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 2', 'neuron' ),
			'id'            => 'widget-2',
			'description'   => esc_html__( 'Add footer widgets here', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s usefull-link ">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 3', 'neuron' ),
			'id'            => 'widget-3',
			'description'   => esc_html__( 'Add footer widgets here', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s latest-post">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 4', 'neuron' ),
			'id'            => 'widget-4',
			'description'   => esc_html__( 'Add footer widgets here', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s news-letter">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'neuron_widgets_init' );

// Footer Recent Post Shortcode
function recent_post_shortcode(){
    $att = array('posts_per_page' => 3, 'post_type' => 'post');
    $q = new WP_Query($att);
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
    $list .= '<li>'.get_the_post_thumbnail(get_the_ID(), 'thumbnail').
                '<p><a href="'.get_permalink().'">'.wp_trim_words( get_the_title(), 6).'</a></p>
                <span>'.get_the_date('d F Y', get_the_ID()).'</span> 
            </li>';
    endwhile;
    $list .= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('footer_recent_post', 'recent_post_shortcode');

require get_template_directory() .'/inc/cs-framework/codestar-framework.php';

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
