<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Alojamientos Zona Cerdeña Gallura*/
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub-cerdena.php' );?>
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
	<h1>Alojamientos en Gallura y Costa Esmeralda
	<i class="fa fa-compass pull-right rotate<?php echo $data[$zona]['position'] ?>"></i></h1>

	<p class="spacer">La Gallura y la Costa Esmeralda se encuentran en el noreste de Cerdeña. El Glamour de la Costa Esmeralda viene equilibrado por los paisajes, a veces lunares, de la Gallura, su parte interior. Es una zona a visitar sobretodo en primavera para gozar de sus grandes paisajes, playas y una gastronomía que es la más refinada de toda la isla. Aquí veréis las mejores masias de toda Cerdeña, los famosos ‘stazzi’ y muchos de nuestros alojamientos son de este estilo.</p>

        <?php foreach ($data['Sicilia']['fichas'] as $value) {  ?>
        <div class="row list linkable">
          <div class="col-md-2 col-sm-2 col-xs-4 offset-0"> <a href="/trinakria/ficha/?ficha=<?php echo $value; ?>"><img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/80.jpg"  class="img-rounded img-responsive"></a> </div>
          <div class="col-md-8 col-sm-8 col-xs-8 description">
            <h2><a href="/trinakria/ficha/?ficha=<?php echo $value; ?>"><?php echo $value; ?></a></h2>
            <span class="text-muted">Paceco Trapani</span>
            <p class="hidden-xs">La casa ha sido recientemente reformada y decorada con muebles de época para crear una atmósfera única.</p>
          </div>
          <div class="col-md-2 col-sm-2 hidden-xs offset-0"> <a href="#"><img src="http://maps.google.com/maps/api/staticmap?center=37.9878583333333,12.5783083333333&zoom=6&size=120x90&markers=color:orange|37.9878583333333,12.5783083333333&sensor=false&key=ABQIAAAAMODomaaa8tP-qfkUyBEOJRQ3scZ6SVrhgLe-YKthzIvFUUaJMBQeYrU5KKfF8g70UdAii8s6bupyBQ" class="img-rounded img-responsive"></a> </div>
        </div>
        <?php } ?>
        <?php include_once (TEMPLATEPATH . '/inc/pagination.php' );?>
      </main>

      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
		<h3>Secciones destacadas</h3>
		<ul class="widget">
			  <li class="linkable"><a href="#">Preguntas Frecuentes</a></li>
			  <li class="linkable"><a href="#">Nuestros Clientes dicen…</a></li>
			  <li class="linkable"><a href="#">Como llegar a Cerdeña</a></li>
		</ul>
          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">

        <h3>Zonas</h3>
        <ul class="widget">

        <li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-alghero">Alghero<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data[$value]['position'] ?>"></i></a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-oristano-y-interior">Oristano<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data[$value]['position'] ?>"></i></a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-sulcis-iglesiente">Sulcis-Iglesiente<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data[$value]['position'] ?>"></i></a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-cagliari-y-interior">Cagliari<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data[$value]['position'] ?>"></i></a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-nuoro-y-interior">Orosei<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data[$value]['position'] ?>"></i></a></li>
        <li><a href="<?php echo site_url(); ?>/cerdena/alojamientos/zona-gallura">Gallura<i class="fa fa-compass fa-2x pull-right rotate<?php echo $data[$value]['position'] ?>"></i></a></li>
        </ul>
        
        <div class="spacer"></div>
          <a class="btn btn-warning" data-spy="affix" data-offset-top="400" href="/trinakria/alojamientos/">&laquo; Alojamientos en Cerdeña</a>
        
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
