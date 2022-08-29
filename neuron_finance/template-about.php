<?php 
/*
Template Name: About Template
*/
get_header();
$home_main = get_option('my_neuron');
$about_group = $home_main['opt-fieldset-about-page'];
$faqs_group = $home_main['opt-fieldset-about-faqs'];
$faqs_right = $home_main['opt-fieldset-about-faqs-right'];

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
    <?php endwhile; ?>

    <!-- ::::::::::::::::::::: Block Section:::::::::::::::::::::::::: -->
    <section class="block about-us-block section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- block text -->
                    <div class="block-text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- block area end -->
    
    <!-- ::::::::::::::::::::: Intro Section:::::::::::::::::::::::::: -->
    <?php if( $about_group['opt-switcher-about-page'] == false ) { get_template_part('common/promo'); }?>

    <!-- ::::::::::::::::::::: Accordian Section:::::::::::::::::::::::::: -->
    <section class="accordian-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="accorian-item">

                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <?php 
                                $faq_no = 0;
                                foreach( $faqs_group['faqs'] as $faqs) : 
                                $faq_no++;
                                if($faq_no == 1){
                                    $area_expended = 'true';
                                    $in_class = 'in';
                                } else{
                                    $area_expended = 'false';
                                    $in_class = ' ';
                                }
                            ?>
                            <!-- accordian item-<?php echo $faq_no; ?> -->
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading-<?php echo $faq_no; ?>">
                                    <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $faq_no; ?>" aria-expanded="<?php echo $area_expended; ?>" aria-controls="collapse<?php echo $faq_no; ?>">
                                    <?php echo $faqs['faq-title-text']; ?>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $faq_no; ?>" class="panel-collapse collapse <?php echo $in_class; ?>" role="tabpanel" aria-labelledby="heading-<?php echo $faq_no; ?>">
                                    <div class="panel-body">
                                    <?php echo wpautop($faqs['faq-content-text']); ?>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- accordian right text block -->
                    <div class="accordian-right-content">
                        <h2><?php echo $faqs_right['faq-right-title-text']; ?></h2>
                        <?php echo wpautop($faqs_right['faq-right-content-text']); ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- end accordian section -->
<?php get_footer(); ?>