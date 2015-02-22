<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php include_once (TEMPLATEPATH . '/utils.php' );?>
<?php 
/* Template Name: Alojamientos Zona Creta Rethymno*/
get_header();
$xml_zona='Zona Rethimno'; // String de zona, como aparece en el XML del Backoffice
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub-creta.php' );?>
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">

	<h1>Alojamientos en Rethymno
	<i class="fa fa-compass pull-right rotate<?php echo $data[$zona]['position'] ?>"></i></h1>

	<p class="spacer">El distrito de Rethymno se encuentra en el centro norte de la isla, lo cual permite explorar tanto la zona oeste (hasta la ciudad de <strong>Chania</strong>) como la zona este (la capital <strong>Heraklion</strong>). <strong>Rethymno</strong> es una ciudad de origen bizantino que todavía mantiene el puerto veneciano y algún minarete, legado de los árabes. También el sur de la prefectura de Rethymno es interesante a nivel naturalístico, porque tiene varias gargantas y playas (como <strong>Preveli</strong>) que dista unos 60 km de la ciudad. Otro monumento imperdible en la zona, es el monasterio de <strong>Arkadi</strong>. Nuestros alojamientos aquí permiten realizar una estancia única y moverse a lo largo de buena parte de Creta.</p>


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
