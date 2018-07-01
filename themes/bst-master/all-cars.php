<?php
/*
Template Name: All Cars
=====================
*/
?>
<?php get_template_part('includes/header'); ?>

    <div class="container all-cars">
        <div class="row">
            <div class="row">
                <div class="text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/imgs/stars.svg"" alt="">
                    <h2 class="block-heading">Cars for Sale</h2>
                    <p>Royal Cars was created to rewrite the canvas that we <br>
                        have been forced to accept by living with mass produced <br>
                        vehicle that are beginning to lose their individuality.</p>
                </div>
                <div class="col-md-12 related-cars">
                 <?php
                    $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
                    if( $related ) foreach( $related as $post ) {
                        $images = get_field('images');
                        setup_postdata($post); ?>
                        <div class="col-md-4 car-item">
                            <img class="car-img" <img src="<?php echo $images[0]["sizes"]["large"]; ?>" >
                            <div class="car">
                                <p class="name"><?php the_field( "car_name" ); ?></p>
                                <p class="price">
                                    <span class="curenncy"><?php the_field( "curency" ); ?> </span>
                                    <?php the_field( "price" ); ?></p>
                            </div>
                            <h4 class="model"><?php the_field( "model" ); ?></h4>
                            <a class="main-link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">DETAILS <span> &rarr; </span></a>
                        </div>
                    <?php }
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>