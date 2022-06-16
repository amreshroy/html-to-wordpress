<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>
	</head>

	<body>
	
		<!-- ::::::::::::::::::::: Header Section:::::::::::::::::::::::::: -->
	<?php get_header(); ?>	

		<!-- ::::::::::::::::::::: start slider section:::::::::::::::::::::::::: -->
		<section class="slider-area">
			<?php
			global $post;
			$args = array('posts_per_page' => 5, 'post_type' => 'slide', 'orderby' => 'menu_order', 'order' => 'ASC');
			$slide_posts = new WP_Query($args);
			while ( $slide_posts->have_posts() ) : $slide_posts->the_post();  
			?>
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
		<section class="section-padding darker-bg">	
			<div class="container">
				<div class="row">
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
						<div class="intro-title text-center">
							<h2>Welcome to the Neuron Finance</h2>
							<div class="hidden-xs">
								<p>Interactively simplify 24/7 markets through 24/7 best practices. Authoritatively foster cutting-edge manufactured products and distinctive.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<?php
				global $post;
				$args = array('posts_per_page' => 3, 'post_type' => 'intro', 'orderby' => 'menu_order', 'order' => 'ASC');
				$intro_posts  = new WP_Query($args);
				while ( $intro_posts->have_posts() ) : $intro_posts->the_post();  ?>

				<!-- single intro -->
					<div class="col-md-4">
						<div class="single-intro">
							<div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>)"; class="intro-img"></div>
							<div class="intro-details text-center">
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</section><!-- intro area end -->
	
	
		<!-- ::::::::::::::::::::: start block content area:::::::::::::::::::::::::: -->
		<section class="section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="block-text">
							<h2>A Finance Agency Crafting Beautiful & Engaging Online Experiences</h2>
							<p>Seamlessly communicate distinctive alignments and business models. Efficiently whiteboard robust meta-services whereas stand-alone synergy. Enthusiastically engage premier supply chains after intuitive testing procedures. Conveniently parallel task robust imperatives through corporate customer service.</p> 
							
							<p>Dynamically productivate tactical mindshare via business collaboration and idea-sharing. Credibly conceptualize extensive schemas for functionalized metrics. </p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="block-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/homepageblock.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section><!-- block area end -->
	
	
		<!-- ::::::::::::::::::::: start services section:::::::::::::::::::::::::: -->
		<section class="section-padding darker-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
						<div class="template-title text-center">
							<h2>We Provide Huge Range of Services</h2>
							<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
						</div>
					</div>
				</div>
				
				<div class="row">
					<!-- single service -->
					<?php
					global $post;
					$args = array('posts_per_page' => 6, 'post_type' => 'services', 'orderby' => 'menu_order' , 'order' => 'ASC');
					$services_post  = new WP_Query($args);
					while ( $services_post->have_posts() ) : $services_post->the_post(); ?>
					<div class="col-sm-6 col-md-4">
						<div class="services-tiem">
							<?php the_post_thumbnail('thumbnail', array('class' => 'hvr-buzz-out')); ?>
							<h3><a href="<?php echo get_post_meta($post -> ID, 'url_link', true); ?>"><?php the_title(); ?></a></h3>
							<?php the_content(); ?>
						</div>
					</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>
			</div>
		</section><!-- end services section -->
	

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