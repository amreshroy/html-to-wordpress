<?php get_header(); ?>
<?php
	// Grab the metadata from the database
	$category_text  = get_post_meta( get_the_ID(), 'category_text', true );
	$category_url  = get_post_meta( get_the_ID(), 'category_url', true );
	$portfolio_image  = get_post_meta( get_the_ID(), 'portfolio_image', true );
	$button_url  = get_post_meta( get_the_ID(), 'button_url', true );
	$entries = get_post_meta( get_the_ID(), 'blog_group', true );

	foreach ( (array) $entries as $key => $entry ) {

		$title = $value = '';

		if ( isset( $entry['title'] ) ) {
			$title = esc_html( $entry['title'] );
		}

		if ( isset( $entry['value'] ) ) {
			$value = esc_html( $entry['value'] );
		}
		else{
			$entry = '';
		}
	}
?>
    <!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
	<?php while(have_posts()) : the_post(); ?>
    <section <?php if(has_post_thumbnail()) : ?> style="background-image: url(<?php the_post_thumbnail_url(); ?>)" <?php endif;?> class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb content -->
                    <div class="page-breadcrumbd">
                        <h2><?php the_title(); ?></h2>
                        <p><a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?></p>
                    </div><!-- end breadcrumb content -->
                </div>
            </div>
        </div>
    </section><!-- end breadcrumb -->

    <!-- start portfolio single -->
	<section class="single-portfolio-wrapper section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<!-- single portfolio images -->
					<div class="single-portfolio-images">
					<?php if(!empty($portfolio_image)) : ?>
						<img class="img-responsive" src="<?php echo esc_html( $portfolio_image ); ?>" alt="" />
						<?php else:	the_post_thumbnail('large'); endif;?>
					</div>
				</div>
				<div class="col-md-4">
					<!-- single portfolio info -->
					<div class="single-portfolio-inner">
						<header class="single-portfolio-title">
							<a href="<?php echo esc_html( $category_url ); ?>"><?php echo esc_html( $category_text ); ?></a>	
						</header>
						<div class="portfolio-details-panel">
							<?php the_content(); ?>	
							<ul class="portfolio-meta">	
								<?php if(!empty($entries)) : foreach ($entries as $data) : ?>
								<li><span> <?php echo $data['title']; ?> </span> <?php echo $data['value']; ?></li>
								<?php endforeach; endif;?>
								<li><span> Share </span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-google-plus"></i></a> <a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<a class="btn btn-primary" href="<?php echo esc_html( $button_url ); ?>"> Visit website </a>
					</div>
				</div>
			</div>
		</div>
	</section>
    <?php endwhile; ?>
<?php get_footer(); ?>