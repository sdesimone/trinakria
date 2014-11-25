<?php get_header();?>

<div class="container nopadding shadow">
  <div class="container shadow">
    <div class="row">
      <main class="main col-md-9 col-sm-9 col-xs-12">
        <?php include_once (TEMPLATEPATH . '/inc/loop.php' );?>
      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar" > sidebar </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
