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
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/1-Bici-Mediterranea.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/2-Marsala_molino+atardecer.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/3-Scopello_tonnara.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/4-SEGESTA.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/5-mariposa+cerdeña.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/6-Pastores.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/7-Viajeros_Trinakria+Tours_25.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/8-Alicudi+y+Filicudi+desde+Salina_1.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/9-particular+barco+maltés.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/10-Playa+de+la+pelosa.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/11-Etna_fila+di+persone.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/12-Piazza+Duomo+Ragusa+Ibla.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/13-meana+sardo+domos+antigas+376.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/14-riserva+dello+zingaro.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/15-Rinella-Salina.JPG" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/16-Marzamemi_restaurante.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/17-Strombolicchio2.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/18-Lavadero+-+Cefalu.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/19-Iglesia+de+San+Francesco_Alghero.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/20-a+Vela+verso+Marettimo.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/21+CATANIA+la+pescheria.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/22-Cala+Luna_Cerdeña.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/23-Viajeros_Trinakria+Tours_23.jpg" data-caption="">
	<img src="<?php bloginfo('template_directory'); ?>/img/fotorama/24-Souvenirs.jpg" data-caption="">
  </div>
  <!-- /.fotorama -->

<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>

<!-- Main -->
<main class="main container shadow">
  <?php //include_once (TEMPLATEPATH . '/inc/loop.php' );?>
  <h3>Descubre nuestros tours<small class="pull-right hidden-xs">Ofertas de viajes en Sicilia, Cerdeña, Puglia y Creta</small></h3>
  <div class="row">
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow link"> <a href="http://www.shinesicily.com/Rutas-por-Sicilia.asp?lang=esp" target="blank"><img src="<?php bloginfo('template_directory'); ?>/img/f-s1.jpg" class="img-rounded img-responsive"></a>
        <div class="caption">Viajes Sicilia</div>
        <p>Rutas e itinerarios culturales en Sicilia. ¡Descubre la perla del Mediterráneo!</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow link"> <a href="<?php echo site_url();?>/cerdena"><img src="<?php bloginfo('template_directory'); ?>/img/f-s2.jpg" class="img-rounded img-responsive"></a>
        <div class="caption">Viajes Cerdeña</div>
        <p>Un tour por Cerdeña es una gran experiencia sensorial, verde y azul intenso.</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow link"> <a href="<?php echo site_url();?>/puglia"><img src="<?php bloginfo('template_directory'); ?>/img/f-s3.jpg" class="img-rounded img-responsive"></a>
        <div class="caption">Viajes Puglia</div>
        <p>El tacón de Italia, cruce de culturas mediterráneas. ¡Descubre Puglia con nosotros!</p>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="thumbnail shadow"> <a href="<?php echo site_url();?>/creta"><img src="<?php bloginfo('template_directory'); ?>/img/f-s4.jpg" class="img-rounded img-responsive"></a>
        <div class="caption">Viajes Creta</div>
        <p>Viaja a Creta y descubre el verde de sus olivos, sus flores multicolor y el azul de su mar.</p>
      </div>
    </div>
  </div>
</main>
<div class="main container shadow bgcolor">
  <div class="row">
    <div class="col-md-6 col-sm-6">
      <h3>Pasión por el Mediterráneo</h3>
      
			<div class="videoWrapper">
      <iframe width="560" height="349" 
      src="https://www.youtube.com/embed/kNKI4CeaH2o" frameborder="0"
			allowfullscreen></iframe>
			</div>
			
<p>Pasión por los viajes de autor, descubrir lugares únicos, conocer a personas entrañables y vivir experiencias mediterráneas inolvidables! Así son nuestros viajes en nuestros destinos, pensamos que son ideales para personas con <strong>espíritu viajero</strong>, que quieren de verdad conocer el lugar que visitan desde el punto de vista del lugareño más que del turista. ¿Te atreves a probar?</p>

			
    </div>
    <div class="col-md-6 col-sm-6">
      <h3>Guías de Viaje</h3>

<img src="<?php bloginfo('template_directory'); ?>/img/f-mapa.jpg" class="img-responsive">

	<p>Conoce más a fondo nuestros destinos leyendo las <strong>guías de viaje</strong> que hemos elaborado. Estas te permitirán sumergirte en cada maravilloso lugar que tenemos en nuestro catálogo de viajes. Descubre historia, cultura, eventos y mira la manera más rápida de llegar a <a href="http://www.shinesicily.com/Historia.asp?lang=esp" target="blank">Sicilia</a>, <a href="<?php echo site_url(); ?>/cerdena/guia">Cerdeña</a>, <a href="<?php echo site_url(); ?>/puglia/guia">Puglia</a>, <a href="<?php echo site_url(); ?>/creta/guia">Creta</a> y <a href="<?php echo site_url(); ?>/malta/guia">Malta</a> desde los aeropuertos españoles. Disfruta y elige el viaje a tu medida y que más se ajusta a tus deseos. Viajar en el Mediterráneo es pasión!</p>
    </div>
  </div>
</div>
<!-- /.main-->

<?php get_footer(); ?>
