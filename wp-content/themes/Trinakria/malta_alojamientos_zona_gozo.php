<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php include_once (TEMPLATEPATH . '/utils.php' );?>
<?php 
/* Template Name: Alojamientos Zona Malta Gozo*/
get_header();
$xml_zona='Zona Gozo'; // String de zona, como aparece en el XML del Backoffice
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub-malta.php' );?>
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">

	<h1>Alojamientos en Gozo
	<i class="fa fa-compass pull-right rotate<?php echo $data[$zona]['position'] ?>"></i></h1>

	<p class="spacer">
Gozo es una isla más tranquila y menos agitada, pero igualmente atractiva. Cultura, monumentos, playas y calas espectaculares. Nuestros alojamientos en <strong>Victoria (Rabat), Qala o Nadur</strong> se sitúan a 10 minutos en coche de cualquier parte de la isla. Playas, acantilados, fortaleza y salinas, buceo y gastronomía en una isla para descubrir y disfrutar..  </p>

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

	<?php include_once (TEMPLATEPATH . '/inc/menu-right-alojamientos-malta.php' );?>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
