<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri( 'slick/slick.css') ?>" >
    <link rel="stylesheet" type="text/css" href="<?php echo get_theme_file_uri( 'slick/slick-theme.css') ?>" >
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'css/editor-style.css' ) ?>">
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-default navbar-static-top">
  <div class="container navbar-container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/imgs/Logo.svg" alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
  
