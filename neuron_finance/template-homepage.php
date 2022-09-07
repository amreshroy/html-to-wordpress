<?php 
$cmb_opts = get_option( 'neuron_options' );

// Get options
 // unique id of the framework
$home_main = get_option('my_neuron');
$about_group = $home_main['opt-fieldset-about'];
$main_group = $home_main['opt-fieldset-main'];
$service_group = $home_main['opt-fieldset-service'];
/*
Template Name: Homepage Template
*/
	get_header(); ?>	
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">
			<?php
			global $post;
			$args = array('posts_per_page' => 5, 'post_type' => 'slide', 'orderby' => 'menu_order', 'order' => 'ASC');
			$slide_posts = new WP_Query($args);
			while ( $slide_posts->have_posts() ) : $slide_posts->the_post(); ?>
				<div style="background-image:url(<?php the_post_thumbnail_url('large'); ?>);" class="homepage-slider">
					<div class="display-table">
						<div class="display-table-cell">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="slider-content">
											<h1><?php the_title(); ?></h1>
											<?php the_content(); ?>
											<a href="<?php echo get_post_meta($post -> ID, 'btn_link', true); ?>"> <?php echo get_post_meta($post -> ID, 'btn_text', true); ?> <i class="fa fa-long-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
			
			<?php endwhile; wp_reset_query(); ?>
		</section><!-- slider area end -->
	
	
		<!-- ::::::::::::::::::::: start intro section:::::::::::::::::::::::::: -->
		<?php if( $about_group['opt-switcher-about'] == false ) { get_template_part('common/promo'); } ?>
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<?php if( $main_group['opt-switcher-main'] == false ) : ?>
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php //echo  $cmb_opts['home_post_title']; ?></h2>
							<h2><?php echo $main_group['main-title']; // id of the field ?></h2>
							<p><?php //echo  $cmb_opts['home_post_content']; ?></p>
							<?php $main_content = $main_group['main-content']; ?>
							<p><?php echo wpautop($main_content); ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php //echo $cmb_opts['home_post_image']  ?>" />
							<img src="<?php echo $main_group['opt-upload-main']  ?>" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
		<?php endif; ?>
	
		<?php if( $service_group['opt-switcher-service'] == false ) { get_template_part('common/services');} ?>
	

		<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->

		<?php  get_template_part('common/client-brand'); ?>
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
	<?php get_footer(); ?>