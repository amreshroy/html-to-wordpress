<?php get_header(); 
/*
Template Name: Portfolio Template
*/
?>
    <!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
    <?php while ( have_posts() ) : the_post(); ?>
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

    <!-- ::::::::::::::::::::: start portfolio section:::::::::::::::::::::::::: -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
					<!-- portfolio title -->
					<div class="template-title text-center">
						<h2>Check Otut Our Latest portfolios</h2>
						<p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
					</div>
				</div>
			</div>
		
			<div class="row">
				<!-- portfolio item -->
				<div class="col-sm-6 col-md-4">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/1.jpg" alt="" />
						<div class="portfolio-details">
							<h3><a href="portfolio-details.html">Finaco Accounts</a></h3>
							<a href="#">Accounts</a>
						</div><!-- /.portfolio-details -->
					</div><!-- /.portfolio-item -->
				</div>
				
				<!-- portfolio item -->
				<div class="col-sm-6 col-md-4">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/2.jpg" alt="" />
						<div class="portfolio-details">
							<h3><a href="portfolio-details.html">Finaco Accounts</a></h3>
							<a href="#">Accounts</a>
						</div><!-- /.portfolio-details -->
					</div><!-- /.portfolio-item -->
				</div>
				
				<!-- portfolio item -->
				<div class="col-sm-6 col-md-4">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/3.jpg" alt="" />
						<div class="portfolio-details">
							<h3><a href="portfolio-details.html">Finaco Accounts</a></h3>
							<a href="#">Accounts</a>
						</div><!-- /.portfolio-details -->
					</div><!-- /.portfolio-item -->
				</div>
				
				<!-- portfolio item -->
				<div class="col-sm-6 col-md-4">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/3.jpg" alt="" />
						<div class="portfolio-details">
							<h3><a href="portfolio-details.html">Finaco Accounts</a></h3>
							<a href="#">Accounts</a>
						</div><!-- /.portfolio-details -->
					</div><!-- /.portfolio-item -->
				</div>
				
				<!-- portfolio item -->
				<div class="col-sm-6 col-md-4">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/1.jpg" alt="" />
						<div class="portfolio-details">
							<h3><a href="portfolio-details.html">Finaco Accounts</a></h3>
							<a href="#">Accounts</a>
						</div><!-- /.portfolio-details -->
					</div><!-- /.portfolio-item -->
				</div>
				
				<!-- portfolio item -->
				<div class="col-sm-6 col-md-4">
					<div class="portfolio-item">
						<img src="assets/img/portfolio/2.jpg" alt="" />
						<div class="portfolio-details">
							<h3><a href="portfolio-details.html">Finaco Accounts</a></h3>
							<a href="#">Accounts</a>
						</div><!-- /.portfolio-details -->
					</div><!-- /.portfolio-item -->
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- ::::::::::::::::::::: testimonial section:::::::::::::::::::::::::: -->
	<section class="testimonial text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<h3>“Best customer support in Trendy Theme. Fast, took care of all my issues, and went the extra miles for me. The theme is very good and versatile.”</h3>
					<h4><a href="#">Lewis Parsons</a></h4>
					<span>CEO, Fintech</span>
				</div>
			</div>
		</div>
	</section><!-- ./end testimonial section -->
    <?php endwhile; ?>
<?php get_footer(); ?>