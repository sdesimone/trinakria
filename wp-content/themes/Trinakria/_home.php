<?php 
get_header();
?>

<!-- Carousel -->

<div class="container nopadding shadow"> 
  
  <!-- Fotorama -->
  <div class="fotorama dots" data-loop="true" data-allowfullscreen="true"> 
  	<img src="<?php bloginfo('template_directory'); ?>/img/slider-s1.jpg" data-caption="Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus."> 
  	<img src="<?php bloginfo('template_directory'); ?>/img/slider-s2.jpg" data-caption="Donec id elit non mi porta gravida at eget metus."> 
  	<img src="<?php bloginfo('template_directory'); ?>/img/slider-s3.jpg" data-caption="Dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus."> </div>
  </div>
  <!-- /.fotorama -->

<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>

<!-- Main -->
<main class="main container shadow">
  <?php //include_once (TEMPLATEPATH . '/inc/loop.php' );?>
  <h3>Descubre Sicilia <small class="pull-right hidden-xs"><a href="#">un viaje a tu medida</a></small></h3>
  <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow link"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/f-s1.jpg" class="img-rounded img-responsive"></a>
        <div class="caption">Sicilia en 7 dias</div>
        <p>Dapibus ac facilisis in, ullam id dolor id nibh ultricies vehicul.</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow link"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/f-s2.jpg" class="img-rounded img-responsive"></a>
        <div class="caption">Sicilia en 15 dias</div>
        <p>Ac facilisis in, ullam id dolor id nibh ultricies vehicula  elit.</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow link"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/f-s3.jpg" class="img-rounded img-responsive"></a>
        <div class="caption">Diarios de viaje</div>
        <p>Facilisis in, ullam id dolor id nibh ultricies vehicula utt.</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/f-s4.jpg" class="img-rounded img-responsive"></a>
        <div class="caption">Cómo llegar </div>
        <p>Ullam id dolor id nibh ultricies vehicula ut id elit facilisis.</p>
      </div>
    </div>
  </div>
</main>
<div class="main container shadow bgcolor">
  <div class="row">
    <div class="col-md-6 col-sm-6">
      <h3>Fotos mediterráneas</h3>
      
      <!-- Slider Fotorama -->
      <div class="fotorama thumbnail" data-max-width="100%" data-nav="thumbs" data-allowfullscreen="true" data-loop="true"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s1.jpg" data-caption="Foto 1 descripcion"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s2.jpg" data-caption="Foto 2 descripcion"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s3.jpg" data-caption="Foto 3 descripcion"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s4.jpg" data-caption="Foto 4 descripcion"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s5.jpg" data-caption="Foto 5 descripcion"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s1.jpg" data-caption="Foto 6 descripcion"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s2.jpg" data-caption="Foto 7 descripcion"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s3.jpg" data-caption="Foto 8 descripcion"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s4.jpg" data-caption="Foto 9 descripcion"> <img src="<?php bloginfo('template_directory'); ?>/img/f-s5.jpg" data-caption="Foto 10 descripcion"> </div>
      <!-- /.slider --> 
      
    </div>
    <div class="col-md-6 col-sm-6">
      <h3>Mapa de destinos</h3>
      <img src="<?php bloginfo('template_directory'); ?>/img/f-mapa.jpg" class="img-responsive">
      <p>En Trinakria Tours <a href="#"><strong>elaboramos rutas a medida</strong></a>, tours y excursiones u otras actividades adaptándolas a las preferencias de cada viajero o grupo. <strong>Somos un equipo de profesionales sicilianos con años de experiencia</strong> que queremos transmitir la pasión por nuestra tierra. Somos un Tour Operador Artesanal con pasión por el turismo humano y de autor!</p>
    </div>
  </div>
</div>
<!-- /.main-->

<?php get_footer(); ?>
