<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Home Page */
$page='home';
get_header();
?>

<!-- Carousel -->

<div class="container nopadding shadow"> 
  
  <!-- Fotorama -->
  <div class="fotorama dots" data-loop="true" data-allowfullscreen="true" data-autoplay="true"> 
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/1-Bici-Mediterranea_JLH.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/10-Playa+de+la+pelosa.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/11-Etna_fila+di+persone_RM.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/12-Piazza+Duomo+Ragusa+Ibla_RL.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/13-meana+sardo+domos+antigas+376.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/14-riserva+dello+zingaro.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/15-Rinella-Salina.JPG" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/16-Marzamemi_restaurante.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/17-Strombolicchio2.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/18-Lavadero+-+Cefalu.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/19-Iglesia+de+San+Francesco_Alghero.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/2-Marsala_molino+atardecer_RM.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/20-a+Vela+verso+Marettimo.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/21+CATANIA+la+pescheria_JLH.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/22-Cala+Luna_Cerdeña.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/23-Viajeros_Trinakria+Tours_23.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/24-Souvenirs_JLH.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/3-Scopello_tonnara_RM.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/4-SEGESTA_JLH.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/5-mariposa+cerdeña.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/6-Pastores.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/7-Viajeros_Trinakria+Tours_25.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/8-Alicudi+y+Filicudi+desde+Salina_1.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/9-particular+barco+maltés.jpg" data-caption="">
  </div>
  <!-- /.fotorama -->

<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>

<!-- Main -->
<main class="main container shadow">
  <?php //include_once (TEMPLATEPATH . '/inc/loop.php' );?>
  <h3>Descubre <?php echo $destino;?> <small class="pull-right hidden-xs"><a href="#">un viaje a tu medida</a></small></h3>
  <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow link"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/f-s1.jpg" class="img-rounded img-responsive"></a>
        <div class="caption"><?php echo $destino;?> en 7 dias</div>
        <p>Dapibus ac facilisis in, ullam id dolor id nibh ultricies vehicul.</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow link"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/f-s2.jpg" class="img-rounded img-responsive"></a>
        <div class="caption"><?php echo $destino;?> en 15 dias</div>
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
      <h3>Pasión por el Mediterráneo</h3>
      
      <!-- Slider Fotorama -->
      <div class="fotorama thumbnail" data-max-width="100%" data-nav="thumbs" data-allowfullscreen="true" data-loop="true"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s1.jpg" data-caption="Foto 1 descripcion"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s2.jpg" data-caption="Foto 2 descripcion"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s3.jpg" data-caption="Foto 3 descripcion"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s4.jpg" data-caption="Foto 4 descripcion"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s5.jpg" data-caption="Foto 5 descripcion"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s1.jpg" data-caption="Foto 6 descripcion"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s2.jpg" data-caption="Foto 7 descripcion"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s3.jpg" data-caption="Foto 8 descripcion"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s4.jpg" data-caption="Foto 9 descripcion"> 
      <img src="<?php bloginfo('template_directory'); ?>/img/f-s5.jpg" data-caption="Foto 10 descripcion"> 
      </div>
      <!-- /.slider --> 
      
    </div>
    <div class="col-md-6 col-sm-6">
      <h3>Guías de Viaje</h3>
      <img src="<?php bloginfo('template_directory'); ?>/img/f-mapa.jpg" class="img-responsive">
	<p>Conoce más a fondo nuestros destinos leyendo las <strong>guías de viaje</strong> que hemos elaborado. Estas te permitirán sumergirte en cada maravilloso lugar que tenemos en nuestro catálogo de viajes. Descubre historia, cultura, eventos y mira la manera más rápida de llegar a <a href="<?php echo site_url(); ?>/sicilia/">Sicilia</a>, <a href="<?php echo site_url(); ?>/cerdeña/">Cerdeña</a>, <a href="<?php echo site_url(); ?>/puglia/">Puglia</a>, <a href="<?php echo site_url(); ?>/creta/">Creta</a> y <a href="<?php echo site_url(); ?>/malta/">Malta</a> desde los aeropuertos españoles.</p>
    </div>
  </div>
</div>
<!-- /.main-->

<?php get_footer(); ?>
