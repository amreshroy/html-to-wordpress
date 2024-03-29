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

	if ( is_singular() && comments_open() && get_option('thread_comments') ){
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'neuron_theme_files');


function neuron_setup() {
	load_theme_textdomain( 'neuron', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size('neuron-blog-thumbnails', 370, 260, true);

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
			'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
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

// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

add_filter( 'csf_fa4', '__return_true' );


// CMB2 Metabox Added
require_once __DIR__ . '/inc/cmb2/init.php';

//Codestar Framework Added
require_once get_theme_file_path() .'/inc/codestar-framework/codestar-framework.php';
require_once get_theme_file_path() .'/inc/codestar-framework/options/admin-options.php';

// Redux Framework Added
require_once __DIR__ . '/inc/redux_4/tgm.php';
// require_once __DIR__ . '/inc/redux_4/redux_options.php';

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );
/**
 * Define the metabox and field configurations.
 */

function cmb2_sample_metaboxes() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'portfolio_details',
		'title'         => __( 'Portfolio Details', 'cmb2' ),
		'object_types'  => array( 'portfolio', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Category Name', 'cmb2' ),
		'desc'       => __( 'field description (optional)', 'cmb2' ),
		'id'         => 'category_text',
		'type'       => 'text',
		'default'	 => 'Uncategorized',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

	// URL text field
	$cmb->add_field( array(
		'name' => __( 'Category URL', 'cmb2' ),
		'desc' => __( 'Add Category Url Link', 'cmb2' ),
		'id'   => 'category_url',
		'type' => 'text_url',
	) );

	// Add Image Field
	$cmb->add_field( array(
		'name'    => 'Portfolio Image',
		'desc'    => 'Upload an image or enter an URL.',
		'id'      => 'portfolio_image',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add File' // Change upload button text. Default: "Add or Upload File"
		),
		// query_args are passed to wp.media's library query.
		'query_args' => array(
			// 'type' => 'application/pdf', // Make library only display PDFs.
			// Or only allow gif, jpg, or png images
			'type' => array(
				'image/gif',
				'image/jpeg',
				'image/png',
			),
		),
		'preview_size' => 'large', // Image size to use when previewing in the admin.
	) );

	// Button URL
	$cmb->add_field( array(
		'name' => __( 'Button URL', 'cmb2' ),
		'desc' => __( 'Add Button Url Link', 'cmb2' ),
		'id'   => 'button_url',
		'type' => 'text_url',
	) );

	$blog_group_id = $cmb->add_field( array(
		'id'          => 'blog_group',
		'type'        => 'group',
		'repeatable'  => true,
		'options'     => array(
			'group_title'   => 'Others Details {#}',
			'add_button'    => 'Add Another Fields',
			'remove_button' => 'Remove Field',
			'closed'        => true,  // Repeater fields closed by default - neat & compact.
			'sortable'      => true,  // Allow changing the order of repeated groups.
		),
	) );
	$cmb->add_group_field( $blog_group_id, array(
		'name' => 'Title',
		'id'   => 'title',
		'type' => 'text',
	) );
	$cmb->add_group_field( $blog_group_id, array(
		'name' => 'Value Info',
		'id'   => 'value',
		'type' => 'text',
	) );

	// Theme Options
	$cmb_options = new_cmb2_box( array(
		'id'           => 'neuron_option_metabox',
		'title'        => esc_html__( 'Site Options', 'neuron' ),
		'object_types' => array( 'options-page' ),
		'option_key'      => 'neuron_options', // The option key and admin menu page slug.
		'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
	) );

	$cmb_options->add_field( array(
		'name' => 'Homepage Contents',
		'type' => 'title',
		'id'   => 'homepage_title'
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Portfolio Title', 'neuron' ),
		'desc' => __( 'portfolio section title', 'neuron' ),
		'id'   => 'portfolio_title',
		'type' => 'text',
		'default' => 'Default Title',
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Portfolio Contents', 'neuron' ),
		'desc' => __( 'portfolio section content', 'neuron' ),
		'id'   => 'portfolio_content',
		'type' => 'textarea',
		'default' => 'Default Content',
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Service Title', 'neuron' ),
		'desc' => __( 'service section title', 'neuron' ),
		'id'   => 'service_title',
		'type' => 'text',
		'default' => 'Default Title',
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Service Contents', 'neuron' ),
		'desc' => __( 'service section contents', 'neuron' ),
		'id'   => 'service_content',
		'type' => 'textarea',
		'default' => 'Default Content',
		) );	
		
	$cmb_options->add_field( array(
		'name' => __( 'Home Post Title', 'neuron' ),
		'desc' => __( 'home main post title', 'neuron' ),
		'id'   => 'home_post_title',
		'type' => 'text',
		'default' => 'Default Title',
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Home Post Contents', 'neuron' ),
		'desc' => __( 'home main post contents', 'neuron' ),
		'id'   => 'home_post_content',
		'type' => 'textarea',
		'default' => 'Default Content',
	) );
	
	$cmb_options->add_field( array(
		'name' => __( 'Home Post image', 'neuron' ),
		'desc' => __( 'home main post image', 'neuron' ),
		'id'   => 'home_post_image',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false,
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Image'
		),
		'query_args' => array(
			'type' => array(
				'image/gif',
				'image/jpeg',
				'image/png',
			),
		),
		'preview_size' => 'large',
	) );
}

 