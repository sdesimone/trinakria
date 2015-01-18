<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Alojamientos Cerdeña
 */
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub-cerdena.php' );?>
    
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
        <h1>Alojamientos en Cerdeña</h1>

<p><strong>Trinakria Tours</strong> ha seleccionado personalmente varios <strong>hoteles, casas rurales y B&amp;B</strong> a lo largo de toda Cerdeña. Son alojamientos ideales para pasar una semana o más entre <strong>exuberantes paisajes, pueblos con encanto</strong> y <strong>gente cálida</strong>.</p>

<p>Gracias a esta fórmula podrás disfrutar de tus vacaciones a un ritmo tranquilo <strong>manteniéndote al margen de los circuitos turísticos habituales</strong>.</p>

<p>En nuestro catálogo encontrarás un listado exclusivo de <strong>Hoteles con Encanto</strong> (hoteles rurales o pequeños hoteles en cascos antiguos), <strong>Bed &amp; Breakfast, Casas Rurales</strong> y <strong>Agroturismos</strong> en Cerdeña. El desayuno siempre está incluido en nuestra oferta de alojamiento.</p>

<p>Para vivir plenamente la experiencia que cada estancia os puede ofrecer os aconsejamos planificar rutas con estancias mínimas de <strong>3 Noches</strong> por alojamiento, que es el tiempo mínimo para conocer cada zona de Cerdeña. </p>

<p>Todos nuestros alojamientos están <strong>bien posicionados</strong> para visitar los puntos más emblemáticos de la isla de Cerdeña: sus maravillosas playas a lo largo de toda su costa, el interior montañoso y virgen y sus pueblos llenos de tradiciones.</p>

        <h2>Mira nuestros alojamientos en cada zona de la isla</h2>
        <ul class="widget">

	  <li class="linkable">
<a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-alghero">
<strong>Alghero </strong> <span class="text-muted">Noroeste, la catalana, arte y naturaleza en una mezcla ideal.  </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Alghero']['position'] ?>"></i></a></li>

	  <li class="linkable"><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-oristano-y-interior"><strong>Oristano </strong> <span class="text-muted">Centro oeste, playas de cuarzo, buen pescado y Tharros. </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Oristano']['position'] ?>"></i></a></li>

	  <li class="linkable"><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-sulcis-iglesiente"><strong>Sulcis-Iglesiente </strong> <span class="text-muted">Sur oeste, la Cerdeña más salvaje y desconocida.  </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Sulcis-Iglesiente']['position'] ?>"></i></a></li>

	  <li class="linkable"><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-cagliari-y-interior"><strong>Cagliari </strong> <span class="text-muted">Sur, la capital cultural de Cerdeña con un entorno precioso. </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Cagliari']['position'] ?>"></i></a></li>

	  <li class="linkable"><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-nuoro-y-interior"><strong>Orosei </strong> <span class="text-muted">Centro este, el misterioso interior y el agua cristalina de sus calas.  </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Orosei']['position'] ?>"></i></a></li>

	  <li class="linkable"><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-gallura"><strong>Gallura y Costa Esmeralda </strong> <span class="text-muted">Noreste, playas de ensueño y gastronomía excelente.  </span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Gallura y C. Esmeralda']['position'] ?>"></i></a></li>
        </ul>

	<div class="row">
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/cerdena/alojamientos/Alojamientos_Cerdeña_1.JPG" class="img-rounded img-responsive">
		</div>
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/cerdena/alojamientos/Alojamientos_Cerdeña_2.JPG" class="img-rounded img-responsive">
		</div>
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/cerdena/alojamientos/Alojamientos_Cerdeña_3.JPG" class="img-rounded img-responsive">
		</div>
	</div>
<br/>
      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        
		<h3>Secciones destacadas</h3>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/faqs">Preguntas Frecuentes</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/testimonios">Nuestros Clientes dicen…</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/cerdena/guia/como-llegar">Como llegar a Cerdeña</a></li>
		</ul>

          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Cerdeña</h3>

		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/cerdena/rutas/cerdena-a-tu-aire">Cerdeña a tu aire</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/cerdena/rutas/cerdena-rural">Cerdeña Rural</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/cerdena/rutas/cerdena-con-encanto">Cerdeña con Encanto</a></li>
		</ul>
          </div>

        
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
