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