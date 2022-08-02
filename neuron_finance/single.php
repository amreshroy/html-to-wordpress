<?php get_header(); ?>
    <!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb content -->
                    <div class="page-breadcrumbd">
                        <h2>News & Press</h2>
                        <p><a href="<?php echo site_url(); ?>">Home</a> / News Details</p>
                    </div><!-- end breadcrumb content -->
                </div>
            </div>
        </div>
    </section><!-- end breadcrumb -->
<?php while (have_posts()) : the_post(); ?>
<!-- ::::::::::::::::::::: single-blog section:::::::::::::::::::::::::: -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- post wrapper -->
                <div class="post-wrapper clearfix">
                    <!-- post thumbnail -->
                    <div class="single-thumb">
                        <a href="">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    </div>
                    
                    <!-- start single blog content -->
                    <div class="blog-content">
                        <!-- start single blog header -->
                        <header class="single-header">
                            <div class="single-post-title">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <!-- post meta -->
                            <div class="post-meta">
                                <ul>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-user"></i>
                                            <?php the_author( 'display_name', 20 ); ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-tag"></i>
                                            <?php 
                                                $categories = get_the_category();
                                                $separator = ' , ';
                                                $output = '';
                                                if ( ! empty( $categories ) ) {
                                                    foreach( $categories as $category ) {
                                                        $output .=  esc_html( $category->name). $separator;
                                                    }
                                                    echo trim( $output, $separator );
                                                }
                                            ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-calendar"></i>
                                            <?php the_time( 'j F Y' ); ?> 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-comment"></i>
                                            <?php comments_number( 'No Comments', 'One Comment', '% Comments' ); ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </header><!-- /.end single blog header -->
                        
                        <!-- start single blog entry content -->
                        <div class="entry-content">
                            <?php the_content(); ?>
                        
                        <!-- start social link -->
                        <div class="social-link">
                            <ul>
                                <li><a class="facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                    <span>1.6k</span>
                                </a></li>
                                <li><a class="twitter" href="#">
                                    <i class="fa fa-twitter"></i>
                                    <span>1.6k</span>
                                </a></li>
                                <li><a class="google" href="#">
                                    <i class="fa fa-google-plus"></i>
                                    <span>1.6k</span>
                                </a></li>
                                <li><a class="linkedin" href="#">
                                    <i class="fa fa-linkedin"></i>
                                    <span>1.6k</span>
                                </a></li>
                                <li><a class="pinterest" href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                    <span>400</span>
                                </a></li>
                                <li><a class="reddit" href="#">
                                    <i class="fa fa-reddit-alien"></i>
                                    <span>400</span>
                                </a></li>
                                <li><a class="message" href="#">
                                    <i class="fa fa-envelope"></i>
                                    <span>400</span>
                                </a></li>
                            </ul>
                        </div><!-- /.end social link -->     
                    </div><!-- /.end single blog content -->
                    
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) : ?>

                    <!-- start comments wrapper -->
                    <div class="comments-wrapper">
                        <div class="single-post-title comment-title">
                              <?php comments_template(); ?>
                        </div>
                    </div><!-- /.end comments wrapper -->
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./end single-blog section -->
<?php endwhile; ?>
<?php get_footer(); ?>