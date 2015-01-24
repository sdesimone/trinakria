<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Alojamientos Puglia
 */
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub-puglia.php' );?>
    
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
<h1>Alojamientos en Puglia</h1>
	<p><strong>Trinakria Tours</strong> va personalmente en todos los destinos que ofrece para crear su propio catálogo de alojamientos seleccionados y también en Puglia fue para buscar los mejores <strong>hoteles, casas rurales y B&amp;B</strong>. </p>

	<p>Gracias a nuestros estrictos criterios de selección, en Puglia hemos logrado crear una red de alojamientos con encanto donde el factor humano de los propietarios o encargados y personal del hotel siempre juega un papel central.</p>

	<p>Gracias a esta fórmula podrás disfrutar de tus vacaciones a Puglia a un ritmo tranquilo <strong>manteniéndote al margen de los circuitos turísticos habituales</strong>.<br/>
	Nuestras categorías son <strong>pequeños Hoteles</strong> (rurales o urbanos), <strong>B&amp;B</strong> y <strong>Casas Rurales</strong> y la estancia aconsejada es de <strong>3 Noches</strong>; el desayuno con nosotros está siempre incluido en el precio.</p>

	<p>La posición de nuestros alojamientos en Puglia es ideal para disfrutar de esta bella tierra, lo suficientemente alejados del bullicio de las zonas más turísticas pero al mismo tiempo bien conectados para descubrir Puglia: las playas vírgenes de Porto Selvaggio, el flamante barroco de Lecce o los entrañables pueblos blancos, como Alberobello o Locorotondo, del valle d’Itria.</p>

<h2>Mira nuestro catálogo de alojamientos de Puglia </h2>
	<ul class="widget">
	  <li class="linkable">
<a href="<?php echo site_url(); ?>/puglia/alojamientos/zona-salento"><strong>Salento Sur</strong><span class="text-muted">, el sol, el mar y el viento: naturaleza pura!</span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Salento']['position'] ?>"></i></a></li>

	  <li class="linkable">
<a href="<?php echo site_url(); ?>/puglia/alojamientos/zona-itria-y-murgia"><strong>Valle d’Itria</strong> <span class="text-muted">Centro, Alberobello, los trulli y los acantilados de Polignano.</span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Valle dItria']['position'] ?>"></i></a></li>

	  <li class="linkable">
<a href="<?php echo site_url(); ?>/puglia/alojamientos/zona-matera"><strong>Matera</strong> <span class="text-muted">Centro oeste, la bella ciudad de piedra patrimonio UNESCO.</span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Matera']['position'] ?>"></i></a></li>

	  <li class="linkable">
<a href="<?php echo site_url(); ?>/puglia/alojamientos/zona-gargano"><strong>Gargano</strong> <span class="text-muted">Norte, las playas adriáticas más hermosas y la foresta umbra.</span> <i class="fa fa-compass fa-2x pull-right rotate<?php echo $data['Gargano']['position'] ?>"></i></a></li>

        </ul>

	<div class="row">
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/puglia/alojamientos/Alojamientos_Puglia_1.jpg" class="img-rounded img-responsive">
		</div>
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/puglia/alojamientos/Alojamientos_Puglia_2.JPG" class="img-rounded img-responsive">
		</div>
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/puglia/alojamientos/Alojamientos_Puglia_3.JPG" class="img-rounded img-responsive">
		</div>
	</div>
<br/>
      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        
		<h3>Secciones destacadas</h3>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/faqs">Preguntas Frecuentes</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/testimonios">Nuestros Clientes dicen…</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/puglia/guia/como-llegar">Como llegar a Puglia</a></li>
		</ul>

          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Puglia</h3>

		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/puglia/rutas/puglia-a-tu-aire">Puglia a tu aire</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/puglia/rutas/puglia-rural">Puglia Rural</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/puglia/rutas/puglia-con-encanto">Puglia con Encanto</a></li>
		</ul>
          </div>

        
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
