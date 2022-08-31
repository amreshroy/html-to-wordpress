<?php 

$client_brand = get_option('my_neuron');
$gallery_opt = $client_brand['opt-client-brand']; // for eg. 15,50,70,125
$gallery_ids = explode( ',', $gallery_opt );

if( is_page (array('22', '24')) && !empty($gallery_opt) ) :
?>
<section class="client-logo <?php if( is_page (24) ) : ?> darker-bg <?php endif; ?> ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="all-client-logo">
                <?php if ( ! empty( $gallery_ids ) ) {
                    foreach ( $gallery_ids as $gallery_item_id ) { ?>
                        <?php echo wp_get_attachment_image( $gallery_item_id, 'full' ); ?>
                <?php }
                } ?>
                </div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- end client section -->
<?php endif; ?>