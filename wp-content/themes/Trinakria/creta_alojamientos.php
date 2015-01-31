<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Alojamientos Creta
 */
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub-creta.php' );?>
    
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
        <h1>Alojamientos en Creta</h1>

<p>Trinakria Tours ha escogido los mejores alojamientos en Creta en cuanto a trato familiar y belleza del lugar. En nuestro catálogo de alojamientos en Creta tenemos pequeños hoteles, casas rurales y B&amp;B.</p> 

<p>Nuestros criterios de selección hotel, nos ha permitido crear en Creta una red de alojamientos completa y cubriendo todas las zonas más bonitas de la isla.</p>

<p>Con nuestros paquetes vacacionales podrás disfrutar de tus vacaciones a Creta de forma lenta y relajante y manteniéndote al margen de los circuitos turísticos de masa.<br/>
La estancia que aconsejamos es de 3 Noches por alojamiento; el desayuno siempre está incluido en el precio de la habitación.</p>

<p>Nuestros alojamientos en Creta están bien posicionados para disfrutar de esta maravillosa isla del mediterráneo, alojando en cualquier de ellos disfrutarás de la tranquilidad de verdaderas oasis de paz y al mismo tiempo te permitirán moverte por las varias zonas de Creta en total autonomía.</p>

        <h2>Mira nuestro catálogo de alojamientos en Creta</h2>
        <ul class="widget">

	  <li class="linkable">
<a href="<?php echo site_url(); ?>/creta/alojamientos/zona-chania">
<strong>Chania </strong> <span class="text-muted">La Canea, la ciudad turco-veneciana de Creta. Belleza pura. </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Chania']['position'] ?>"></i></a></li>

	  <li class="linkable"><a href="<?php echo site_url(); ?>/creta/alojamientos/zona-rethymno"><strong>Rethymno </strong> <span class="text-muted">La ciudad minoica y el puerto del centro de Creta. </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Rethymno']['position'] ?>"></i></a></li>

	  <li class="linkable"><a href="<?php echo site_url(); ?>/creta/alojamientos/zona-heraklion"><strong>Heraklion </strong> <span class="text-muted">Capital de Creta, distrito verde y con pueblos de ensueño. </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Heraklion']['position'] ?>"></i></a></li>

	  <li class="linkable"><a href="<?php echo site_url(); ?>/creta/alojamientos/zona-lasithi"><strong>Lasithi </strong> <span class="text-muted">Este, zona casi despoblada, playas vírgenes y olivares seculares. </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Lasithi']['position'] ?>"></i></a></li>
        </ul>

	<div class="row">
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/creta/alojamientos/Alojamientos_Creta1.jpg" class="img-rounded img-responsive">
		</div>
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/creta/alojamientos/Alojamientos_Creta2.JPG" class="img-rounded img-responsive">
		</div>
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/creta/alojamientos/Alojamientos_Creta3.JPG" class="img-rounded img-responsive">
		</div>
	</div>
<br/>
      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        
		<h3>Secciones destacadas</h3>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/faqs">Preguntas Frecuentes</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/testimonios">Nuestros Clientes dicen…</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/creta/guia/como-llegar">Como llegar a Creta</a></li>
		</ul>

          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Creta</h3>

		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/creta/rutas/creta-a-tu-aire">Creta a tu aire</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/creta/rutas/creta-rural">Creta Rural</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/creta/rutas/creta-con-encanto">Creta con Encanto</a></li>
		</ul>
          </div>

        
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
