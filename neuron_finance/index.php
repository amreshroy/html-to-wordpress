<?php get_header(); ?>
    <!-- ::::::::::::::::::::: Page Title Section:::::::::::::::::::::::::: -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb content -->
                    <div class="page-breadcrumbd">
                        <h2>News & Press</h2>
                        <p><a href="<?php echo site_url(); ?>">Home</a> / Blog</p>
                    </div><!-- end breadcrumb content -->
                </div>
            </div>
        </div>
    </section><!-- end breadcrumb -->

    <!-- ::::::::::::::::::::: Blog Section:::::::::::::::::::::::::: -->
    <section class="blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
                    <!-- blog title -->
                    <div class="template-title text-center">
                        <h2>News Blog</h2>
                        <p>Holisticly transform excellent systems rather than collaborative leadership. Credibly pursue compelling outside the box.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
            <?php while(have_posts()) : the_post(); ?>
                <!-- single blog item -->
                <div class="col-sm-6 col-md-4">
                    <div class="blog-item">
                        <!-- blog thumbnail -->
                        <div class="blog-thumb">
                            <?php the_post_thumbnail(''); ?>
                        </div>
                        <div class="blog-content">
                            <!-- blog title -->
                            <header class="blog-header">
                                <div class="tag">
                                    <ul>
                                        <?php 
                                            $categories = get_the_category();
                                            $separator = ' , ';
                                            $output = '';
                                            if ( ! empty( $categories ) ) {
                                                foreach( $categories as $category ) {
                                                    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'neuron' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                                }
                                                echo trim( $output, $separator );
                                            }
                                        ?>
                                    </ul>
                                </div>
                                <div class="blog-title">
                                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                            </header>
                            
                            <!-- blog content -->
                            <div class="entry-content">
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink(); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section><!-- end blog section -->
<?php get_footer(); ?>