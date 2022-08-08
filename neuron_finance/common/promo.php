<?php 
    $opts = get_option( 'neuron_options' );
?>
<section class="section-padding darker-bg">	
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                <div class="intro-title text-center">
                    <h2><?php echo  $opts['portfolio_title'] ?></h2> 
                    <div class="hidden-xs">
                        <p><?php echo ($opts['portfolio_content']) ?></p>
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