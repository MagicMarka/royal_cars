<?php
/*
The Single Posts Loop
=====================
*/
?> 

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article class="row selected-car" role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
    <div class="col-md-12">
        <a href="<?php echo home_url('/cars-for-sale'); ?>" class="back-link"><span>&larr;</span> CHOOSE ANOTHER CAR </a>
    </div>
    <div class="col-md-6">
        <div class="car">
        <p class="name"><?php the_field('car_name'); ?></p>
        <p class="price">
            <span class="curenncy">£ </span>
            90,700</p>
    </div>
        <div class="row car-char">
            <div class="col-md-6 char-col">
                <div class="char-row">
                    <p>Model</p><p><?php the_field('model'); ?></p>
                </div>
                <div class="char-row">
                    <p>Year</p><p><?php the_field('year'); ?></p>
                </div>
                <div class="char-row">
                    <p>Color</p><p><?php the_field('color'); ?></p>
                </div>
                <div class="char-row">
                    <p>Engine</p><p><?php the_field('engine'); ?></p>
                </div>
                <div class="char-row">
                    <p>Transmission</p><p><?php the_field('transmission'); ?></p>
                </div>
                <div class="char-row">
                    <p>Fuel</p><p><?php the_field('fuel'); ?></p>
                </div>
            </div>
            <div class="col-md-6 char-col">
                <div class="char-row">
                    <p>VIN #</p><p><?php the_field('vin'); ?></p>
                </div>
                <div class="char-row">
                    <p>Cylinders</p><p><?php the_field('cylinders'); ?></p>
                </div>
<!--                <div class="char-row">-->
<!--                    <p>Color</p><p>Yellow</p>-->
<!--                </div>-->
<!--                <div class="char-row">-->
<!--                    <p>Engine</p><p>V8</p>-->
<!--                </div>-->
<!--                <div class="char-row">-->
<!--                    <p>Transmission</p><p>Manual</p>-->
<!--                </div>-->
<!--                <div class="char-row">-->
<!--                    <p>Fuel</p><p>Gasoline</p>-->
<!--                </div>-->
            </div>
        </div>
        <div class="row  desc">
                <h5>Description</h5>
                <p><?php the_field('description'); ?>
                </p>
                <a href="#" class="main-link">ORDER CAR <span> &rarr; </span></a>
        </div>
    </div>
        <div class="col-md-6">
            <?php

            $images = get_field('images');

            if( $images ): ?>
                <div  class="slider-for">

                        <?php foreach( $images as $image ): ?>
                            <div>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                <p><?php echo $image['caption']; ?></p>
                            </div>
                        <?php endforeach; ?>

                </div>
                <div class="slider-nav">

                        <?php foreach( $images as $image ): ?>
                            <div>
                                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </div>
                        <?php endforeach; ?>

                </div>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="col-md-12 related-cars">
            <h2 class="block-heading">Don't suit you? Choose another car.</h2>
            <?php

            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
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
    </article>

<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
<script>
    (function ($) {
        $(document).ready(function(){

            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
                slidesToShow: 20,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                arrows: false,
                centerMode: false,
                focusOnSelect: true,
                infinite: false,
            });
        });
    }(jQuery));
</script>