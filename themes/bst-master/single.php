<?php get_template_part('includes/header'); ?>

<div class="container-fluid main-wrapper"">
  <div class="row">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'single'); ?>
      </div><!-- /#content -->
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
