<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Rutas */
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub.php' );?>
    
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
        <h1>Rutas por <?php echo $destino; ?></h1>
        <p>Si prefieres <em>viajar en total libertad</em>, nosotros te proporcionamos <strong>los alojamientos y el coche</strong> y después que prime tu actitud viajera y tu curiosidad!!</p>
        <p>Los alojamientos elegidos para estas rutas van desde los sencillos a los de más calidad, pero todos tienen unas características en común: <strong>encanto</strong>, <strong>buen trato</strong>, <strong>limpieza</strong> y <strong>ambiente rural o de importancia cultural</strong>.</p>
        <h2>¡Elige tu viaje!</h2>
        <?php foreach ($data[$destino]['rutas'] as $value) { ?>
        <div class="row list linkable">
          <div class="col-md-4 col-sm-4 col-xs-4 offset-0"><img src="http://www.shinesicily.com/images/<?php echo $destino; ?>-a-tu-aire.jpg"  class="img-rounded img-responsive"></div>
          <div class="col-md-6 col-sm-6 col-xs-8 description">
            <h2><a href="/trinakria/ruta/?ruta=<?php echo $value;?>"><?php echo $value;?></a></h2>
            
            <span class="text-muted">Un viaje a tu medida</span>
            <p class="text-muted visible-xs">Desde <strong class="price">540€</strong> <small>por persona</small></p>
            <p class="hidden-xs"><?php echo $value;?> es un tour de <?php echo $destino; ?> completo que no descuida ningún rincón de la isla. Los alojamientos elegidos para esta ruta son Bed and Breakfast que están situados o en el casco antiguo de un pueblo o a sus rededores. Los propietarios de los B&B son todos enamorados de <?php echo $destino; ?> y te ayudarán a descubrir los lugares más auténticos…</p>
          </div>
          <div class="col-md-2 col-sm-2 hidden-xs offset-0 text-right text-muted">Desde <strong class="price">540€</strong> <small>por persona</small></div>
        </div>
        <?php } ?>
        <div class="spacer"></div>
        <?php //include_once (TEMPLATEPATH . '/inc/pagination.php' );?>
      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> <img src="http://photos1.blogger.com/blogger/38/1489/400/2%20mercado%20Catania_1.jpg" class="img-rounded img-responsive"> </div>
          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
            <p><small>
            Un viaje para el encuentro, <?php echo $destino; ?>, tierra conquistada por todos los pueblos habidos y por haber, se vió invadida por Ian y Elena en esta ocasión. Nos zumbó el cráter del volcán y nos arrulló el sonido del mar. Poco sol, temperatura agradable. El idioma maravilloso que suena a amante y esas camas enormes que nos ponían en cada sitio. Los mercados de peces y los templos griegos, la elegancia y poderío de una época ya pasada. Todo lo que sea de después del año 600 dc no tiene ningún valor. La arqueología, las clavadas en los restaurantes, el pan y las carreteras desvencijadas. Cruzar las calles a la palermitana y fotografiar vírgenes. La pizza, los cannoli de ricotta, el vinito.., J'aimerai tant voir Syracuse... El sirocco, que ventarrón. Un helado, porfavor! escusi siñore! Autobús a todas partes.</small></p>
            <p><small><a href="#">Sigue leyendo...</a></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
