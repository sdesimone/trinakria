<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php include_once (TEMPLATEPATH . '/utils.php' );?>
<?php 
/* Template Name: Alojamientos Zona Cerdeña Oristano*/
get_header();
$xml_zona='Zona Oristano'; // String de zona, como aparece en el XML del Backoffice
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub-cerdena.php' );?>
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
	<h1>Alojamientos en Oristano
	<i class="fa fa-compass pull-right rotate<?php echo $data[$zona]['position'] ?>"></i></h1>

	<p class="spacer">Oristano está en el centro oeste de Cerdeña y es una ciudadela pequeña y hermosa. Durante el carnaval, la ciudad ofrece uno de los más espectaculares juegos a caballo del mundo: Sa Sartiglia. La oferta turística de Oristano incluye la península del Sinis con sus lindas playas de cuarzo y la ruinas romanas de Tharros. Nuestra selección de alojamientos en Oristano va de la clásica casa rural familiar a un exclusivo Boutique Hotel.</p>


	<?php 
		$fichas = lista_alojamientos_zona($xml_zona);
		$site_root = site_url();
		foreach ($fichas as $ficha) {  ?>

        <div class="row list linkable">
	<div class="col-md-2 col-sm-2 col-xs-4 offset-0"> <a href="<?php echo $site_root?>/ficha?page=<?php echo $ficha['id']; ?>"><img src="<?php echo $ficha['photo']?>"  class="img-rounded img-responsive"></a> </div>
          <div class="col-md-8 col-sm-8 col-xs-8 description">
	    <h2><a href="<?php echo $site_root?>/ficha?page=<?php echo $ficha['id']; ?>"><?php echo $ficha['name']; ?></a></h2>
	    <span class="text-muted"><?php echo $ficha['locality']?></span>
	    <p class="hidden-xs"><?php echo $ficha['description']?></p>
          </div>
	  <div class="col-md-2 col-sm-2 hidden-xs offset-0"> <a href="#"><img src="http://maps.google.com/maps/api/staticmap?center=<?php echo $ficha['lat']?>,<?php echo $ficha['lon']?>&zoom=6&size=120x90&markers=color:orange|<?php echo $ficha['lat']?>,<?php echo $ficha['lon']?>&sensor=false&key=ABQIAAAAMODomaaa8tP-qfkUyBEOJRQ3scZ6SVrhgLe-YKthzIvFUUaJMBQeYrU5KKfF8g70UdAii8s6bupyBQ" class="img-rounded img-responsive"></a> </div>
        </div>
        <?php } ?>
	<br/>
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
