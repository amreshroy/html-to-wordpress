<?php 
	// $options = get_post_meta( get_the_ID(), 'home_group', true );
	// $home_groups = get_option( 'repeatable-news-options.php' );
    $opts = get_option( 'neuron_options' );
    // var_dump($opts);
    // die;
    // $promo_title = get_post_meta( get_the_ID(), 'title_text1', true );
    // var_dump($options);

    // foreach ( (array) $options as $key => $option ) {

	// 	$title_one = $content_one = $title2 = $content2 = '';

	// 	if ( isset( $option['title_text1'] ) ) {
	// 		$title_one = esc_html( $option['title_text1'] );
	// 	}

	// 	if ( isset( $option['text_description1'] ) ) {
	// 		$content_one = esc_html( $option['text_description1'] );
	// 	}

    //     if ( isset( $entry['title_text2'] ) ) {
	// 		$title2 = esc_html( $entry['title_text2'] );
	// 	}

	// 	if ( isset( $entry['text_description2'] ) ) {
	// 		$content2 = esc_html( $entry['text_description2'] );
	// 	}

    //     if ( isset( $entry['title_text3'] ) ) {
	// 		$title3 = esc_html( $entry['title_text3'] );
	// 	}

	// 	if ( isset( $entry['text_description3'] ) ) {
	// 		$content3 = esc_html( $entry['text_description3'] );
	// 	}
	// 	else{
	// 		$entry = '';
	// 	}
	// }



?>
<section class="section-padding darker-bg">	
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
                <div class="intro-title text-center">
                    <h2><?php echo  $opts['title1'] ?></h2> 
                    <div class="hidden-xs">
                        <p><?php echo ($opts['textarea1']) ?></p>
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