<?php get_template_part('includes/header'); ?>
<div class="container-fluid main-wrapper" id="main-wrap">
    <div class="row top-block section">
      <div class="col-md-6 left">
        <h1 class="main-header">ROYAL CARS</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/AM.png" alt="AM">
      </div>
      <div class="col-md-6 right">
          <p class="main-description">
            <span class="first-letter">R</span>oyal Cars was created to rewrite the canvas that we have been forced to accept
            by living with mass produced vehicle that are beginning to lose their individuality.
          </p>
          <a class="main-link">VIEW CARS <span> &rarr; </span></a>
          <div class="spacing"></div>
          <div class="social">
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.svg"  alt="social icon">
            </a>
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/fb.svg" alt="social icon">
            </a>
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/google.svg" alt="social icon">
            </a>
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/instagram.svg" alt="social icon">
            </a>
            <a href="#" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/pinterest.svg" alt="social icon">
            </a>
          </div>
    </div>
    </div>
    <div class="row cars section">
    <div class="row cars-heading">
      <div class="col-md-8">
        <h2 class="block-heading">Cars for Sale</h2>
      </div>
      <div class="col-md-4">
        <a class="main-link">VIEW All <?php
          $count_posts = wp_count_posts()->publish; ?>
          <?php echo $count_posts; ?> CARS <span> &rarr; </span></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 related-cars">
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
  </div>
    <div class="row about section">
      <div class="col-md-4 left">
        <h2 class="block-heading">About Us</h2>
        <p class="description">
          <span class="first-letter">C</span>ars in modern world is a continuous
          world movement and allpeople everywhere are looking for quick, safe means of accessing accurate information.
        </p>
        <p class="description">
          Prompt information is vital for people who want to keep the pace with a constantly evolving society,
          and many people are turning to the Internet help in their quest for knowledge.
        </p>
        <p class="description">
          The Internet is not only the best means to quickly access information, it also has the merit  bringing to interact in a safe, exciting environment.
        </p>
      </div>
      <div class="col-md-8 right">
        <div class="slider">
          <div class="slider-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/2017-porsche-911-gt3-img.jpg" alt="">
            <p>Short description of the picture, 2018</p>
          </div>
          <div class="slider-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/2017-porsche-911-gt3-img.jpg" alt="">

          </div>
          <div class="slider-item">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/2017-porsche-911-gt3-img.jpg" alt="">

          </div>
        </div>
      </div>
    </div>
    <div class="row contact section">
    <div class="col-md-4 left">
      <h2 class="block-heading">Contacts</h2>
      <p class="contact">
        07923 093 335
      </p>
      <a class="contact">
        hello@royalcars.com
      </a>
      <p class="contact">
        Cyprus, Larnaca, <br>
        Panagia Chrisopolitissa street, 12
      </p>
      <div class="social">
        <a href="#" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/twitter.svg"  alt="social icon">
        </a>
        <a href="#" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/fb.svg" alt="social icon">
        </a>
        <a href="#" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/google.svg" alt="social icon">
        </a>
        <a href="#" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/instagram.svg" alt="social icon">
        </a>
        <a href="#" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/pinterest.svg" alt="social icon">
        </a>
      </div>
    </div>
    <div class="col-md-8 right">

    </div>
  </div>

</div><!-- /.container-fluid -->
<?php get_template_part('includes/footer'); ?>
<script>
  (function ($) {
  $(document).ready(function(){
//    $(function() {
//      var blockScroller = $("#main-wrap").blockScroll();
//    });
    $('.slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      centerMode: true,
      dots: true,

  });
  });
  }(jQuery));
</script>