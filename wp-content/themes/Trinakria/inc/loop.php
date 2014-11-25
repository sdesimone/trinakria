<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
  <?php the_content(); ?>
  <?php include (TEMPLATEPATH . '/inc/meta.php' );?>
</article>
<?php endwhile; ?>
<?php endif; ?>
<?php bootstrap_pagination(); ?>
