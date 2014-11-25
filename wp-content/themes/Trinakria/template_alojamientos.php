<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Alojamientos */
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub.php' );?>
    
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
        <h1>Alojamientos en <?php echo $destino; ?></h1>
        <br/><p><strong><em>Zágara...viajes mediterráneos</em></strong> ha seleccionado vario s<strong>hoteles, casas rurales y B&amp;B</strong> en varias zonas de <?php echo $destino; ?>, ideales para pasar una semana o más entre <strong>exuberantes paisajes</strong>, <strong>pueblos con encanto</strong> y <strong>gente cálida</strong>.</p>
        <p>Gracias a esta fórmula podrás disfrutar de tus vacaciones a un ritmo tranquilo <strong>manteniéndote al margen de los circuitos turísticos habituales</strong>.</p>
        <p>Nuestras categorías son <strong>Hoteles</strong> (rurales o pequeños hoteles en cascos antiguos), <strong>B&amp;B</strong> y <strong>Casas Rurales</strong> y la estancia mínima es de <strong>3 Noches</strong> (2 en temporada baja) y el desayuno está siempre incluido en el precio.</p>
        <br/>
        <h2>Mira nuestros alojamientos en cada zona de la isla</h2>
        <ul class="widget">
        
        <?php foreach ($data[$destino]['zonas'] as $value) { ?>      
        
          <li class="linkable"><a href="<?php echo site_url(); ?>/<?php echo $destino; ?>/alojamientos/zona/?zona=<?php echo $value; ?>"><strong><?php echo $value; ?></strong> <span class="text-muted">Breve descripción sobre la zona en cuestión.</span><i class="fa fa-compass fa-2x pull-right rotate<?php echo $data[$value]['position'] ?>"></i></a></li>
           
		   <?php } ?>
        </ul>
       <!-- <p><a href="http://www.zagaratravel.com/Contactar.html"><strong>Y envíanos un email</strong></a> para verificar disponibilidad, precios y hacer la reserva</p> -->
        <h2>Recomendaciones</h2>
        <?php foreach ($data[$destino]['fichas'] as $value) { ?>
        <div class="row list linkable">
          <div class="col-md-2 col-sm-2 col-xs-4 offset-0"> <a href="/trinakria/ficha/?ficha=<?php echo $value;?>"><img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/80.jpg"  class="img-rounded img-responsive"></a> </div>
          <div class="col-md-8 col-sm-8 col-xs-8 description">
            <h2><a href="/trinakria/ficha/?ficha=<?php echo $value;?>"><?php echo $value;?></a></h2>
            <span class="text-muted">Paceco Trapani</span>
            <p class="hidden-xs">La casa ha sido recientemente reformada y decorada con muebles de época para crear una atmósfera única.</p>
          </div>
          <div class="col-md-2 col-sm-2 hidden-xs offset-0"> <a href="#"><img src="http://maps.google.com/maps/api/staticmap?center=37.9878583333333,12.5783083333333&zoom=6&size=120x90&markers=color:orange|37.9878583333333,12.5783083333333&sensor=false&key=ABQIAAAAMODomaaa8tP-qfkUyBEOJRQ3scZ6SVrhgLe-YKthzIvFUUaJMBQeYrU5KKfF8g70UdAii8s6bupyBQ" class="img-rounded img-responsive"></a> </div>
        </div>
        <?php } ?>
        <br/><br/>
       
        
      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        
        <h3>Saber mas</h3>
        <ul class="widget">
          <li class="linkable"><a href="#">Nuestros clientes dicen</a></li>
          <li class="linkable"><a href="#">Como llegar</a></li>
        </ul>
        
         <h3>Rutas por <?php echo $destino; ?></h3>
        <?php foreach ($data[$destino]['rutas'] as $value) { ?>   
        <div class="row list linkable">
          <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="http://www.shinesicily.com/images/<?php echo $destino; ?>-a-tu-aire.jpg"  class="img-rounded img-responsive"></div>
          <div class="col-md-10 col-sm-10 col-xs10 description">
            <h2><a href="/trinakria/ruta/"><?php echo $value; ?></a></h2>
            
            <span class="text-muted">Un viaje a tu medida</span>
          </div>
        </div>
        <?php } ?>
        
        
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
