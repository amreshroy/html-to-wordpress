<?php 
$opts = get_option( 'neuron_options' );
// $image = wp_get_attachment_image( $opts );

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
		<?php get_template_part('common/promo'); ?>
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2><?php echo  $opts['home_post_title'] ?></h2>
							<p><?php echo  $opts['home_post_content'] ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo $opts['home_post_image']  ?>" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	
	
		<?php get_template_part('common/services'); ?>
	

		<!-- :::::::::::::::::::::  Client Section:::::::::::::::::::::::::: -->
		<section class="client-logo">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="all-client-logo">
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/1.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/2.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/3.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/4.jpg" alt="" /></a>
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cling-logo/5.jpg" alt="" /></a>
						</div>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- end client section -->
		
	
		<!-- ::::::::::::::::::::: Footer Section:::::::::::::::::::::::::: -->
	<?php get_footer(); ?>