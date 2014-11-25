<?php 
    $category ='Top5'; 
	$sliders = 3; 	
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <?php  for ($i = 1; $i < $sliders; $i++) { ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $i;?>"></li>
    <?php }?>
  </ol>
  <div class="carousel-inner">
    <?php 
   $n = 0;
   echo $s;
   $the_query = new WP_Query(array(
    'category_name' => $category, 
    'posts_per_page' => $sliders
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
   if (has_post_thumbnail( $post->ID ) ):  $bgimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); endif;
  ?>
    <div class="item <?php if($n==0){echo 'active';}?>" style="background-image:url(<?php echo $bgimage[0]; ?>);">
      <?php //the_post_thumbnail('large');?>
      <div class="carousel-caption">
        <h1><a href="<?php the_permalink() ?>">
          <?php the_title(); ?>
          </a></h1>
        <p>
          <?php the_excerpt();?>
          <?php //the_content(); ?>
        </p>
      </div>
    </div>
    <!-- item -->
    <?php 
	$n++;
   endwhile; 
  	?>
  </div>
  <!-- carousel-inner --> 
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
<!-- #myCarousel --> 

<script type="text/javascript">
    jQuery(document).ready(function($) { 
        $('#myCarousel').carousel({
            pause: 'hover',
			interval: 20000
        }); 
        $('#myCarousel').carousel('cycle');
    });
</script> 
