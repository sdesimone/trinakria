<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php include_once (TEMPLATEPATH . '/utils.php' );?>
<?php 
/* Template Name: Alojamientos Zona Creta Herakleio*/
get_header();
$xml_zona='Zona Heraklion'; // String de zona, como aparece en el XML del Backoffice
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub-creta.php' );?>
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">

	<h1>Alojamientos en Heraklion
	<i class="fa fa-compass pull-right rotate<?php echo $data[$zona]['position'] ?>"></i></h1>

	<p class="spacer">Es la zona de los sitios arqueológicos como <strong>Knossos</strong>, <strong>Festos</strong>, <strong>Prinias</strong> (antigua Rhizenia), <strong>Vori</strong> (museo de arte artesanal) y de pueblos con encanto como <strong>Archanes</strong>. La Capital, <strong>Heraklion</strong>, es sin duda una visita importante de la zona, así como el pueblo tradicional de <strong>Anoia</strong>. También, los amantes de la naturaleza pueden hacer excursiones a pie o en bicicleta a las gargantas cercanas y visitar iglesias bizantinas. Más al suroeste encontraréis las ruinas de una aldea minoica en la playa de Komos y las cuevas neolíticas del pueblo pescadero <strong>Matala</strong> que en los años sesenta fueron ocupadas por los hippies. Los alojamientos Trinakria de Heraklion están muy cerca de la ciudad pero estratégicos para moverse por la zona.</p>


	<?php 
		$filtrado = $filtrados[$xml_zona];
		$fichas = lista_alojamientos_zona($xml_zona, $filtrado);
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

	<?php include_once (TEMPLATEPATH . '/inc/menu-right-alojamientos-creta.php' );?>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
