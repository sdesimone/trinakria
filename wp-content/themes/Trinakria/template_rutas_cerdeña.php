<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Rutas Cerdena */
get_header();
$destino='Cerdeña';
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
<!--    <div class="row"> -->
    
    <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub-cerdena.php' );?>
    
    
      <main class="main main-left col-md-12 col-sm-12 col-xs-12">
        <h1>Rutas por <?php echo $destino; ?></h1>
        <p>Si prefieres <em>viajar en total libertad</em>, nosotros te proporcionamos <strong>los alojamientos y el coche</strong> y después que prime tu actitud viajera y tu curiosidad!!</p>

<p>Viajar a Cerdeña por libre es muy divertido y fácil, en nuestra opinión el <em>Fly & Drive</em> en Cerdeña es la mejor opción para descubrir la isla a tu ritmo en total libertad.</p>
<p>Los alojamientos elegidos para estas rutas van desde los sencillos de la ruta <em>a tu aire</em> a los de más calidad de <em>Cerdeña con encanto</em>, pero todos tienen unas características en común: <strong>encanto, buen trato, limpieza</strong> y <strong>ambiente rural o de importancia cultural</strong>.</p>

        <h2>¡Elige tu viaje!</h2>
        <div class="row list linkable">
	<div class="col-md-4 col-sm-4 col-xs-4 offset-0"><img src="<?php bloginfo('template_directory'); ?>/img/cerdena/rutas/cerdena-a-tu-aire.jpg"  class="img-rounded img-responsive"></div>
          <div class="col-md-6 col-sm-6 col-xs-8 description">
	  <h2><a href="<?php echo site_url();?>/cerdena/rutas/cerdena-a-tu-aire">Cerdeña a tu aire</a></h2>
            <p class="text-muted visible-xs">Desde <strong class="price">480,00€</strong> <small>por persona</small></p>
	    <p class="hidden-xs"> Cerdeña a tu aire es un tour completo que intenta no dejar nada de lo más típico de la isla. Mar y naturaleza, comida y gente y la sorpresa de lo desconocido para un viaje que mezcla los ingredientes que hacen de esta isla una tierra maravillosa y muy hospitalaria. Cerdeña a tu aire es un viaje ideal para descubrir la isla a un ritmo lento. <a href="<?php echo site_url();?>/cerdena/rutas/cerdena-a-tu-aire">[Ver más sobre este circuito]</a></p>
          </div>
          <div class="col-md-2 col-sm-2 hidden-xs offset-0 text-right text-muted">Desde <strong class="price">480,00€</strong> <small>por persona</small></div>
        </div>


        <div class="row list linkable">
	<div class="col-md-4 col-sm-4 col-xs-4 offset-0"><img src="<?php bloginfo('template_directory'); ?>/img/cerdena/rutas/cerdena-rural.jpg"  class="img-rounded img-responsive"></div>
          <div class="col-md-6 col-sm-6 col-xs-8 description">
	  <h2><a href="<?php echo site_url();?>/cerdena/rutas/cerdena-rural">Cerdeña Rural</a></h2>
            <p class="text-muted visible-xs">Desde <strong class="price">500,00€</strong> <small>por persona</small></p>
	    <p class="hidden-xs">Circuito ideal para descubrir en profundidad la cultura de la isla y de sus habitantes.
Cerdeña Rural es un tour que quiere ofrecer una Cerdeña no solo de mar sino también de su gente, su cultura, su naturaleza y mucho más, todo lo que se pueda quedar en el espíritu del viajero. Es un viaje familiar a Cerdeña, también ideal para pequeños grupos de amigos.
<a href="<?php echo site_url();?>/cerdena/rutas/cerdena-rural">[Ver más sobre este circuito]</a></p>
          </div>
          <div class="col-md-2 col-sm-2 hidden-xs offset-0 text-right text-muted">Desde <strong class="price">500,00€</strong> <small>por persona</small></div>
        </div>


        <div class="row list linkable">
	<div class="col-md-4 col-sm-4 col-xs-4 offset-0"><img src="<?php bloginfo('template_directory'); ?>/img/cerdena/rutas/cerdena-con-encanto.jpg"  class="img-rounded img-responsive"></div>
          <div class="col-md-6 col-sm-6 col-xs-8 description">
	  <h2><a href="<?php echo site_url();?>/cerdena/rutas/cerdena-con-encanto">Cerdeña con encanto</a></h2>
            <p class="text-muted visible-xs">Desde <strong class="price">740,00€</strong> <small>por persona</small></p>
	    <p class="hidden-xs"> Circuito aconsejado para una luna de miel a Cerdeña y para los amantes del ‘charme’. Un Viaje romántico a Cerdeña. Este tour está estudiado para atravesar la isla de sur a norte (o viceversa) alojandose en fincas estupendas y con mucha historia. Algunas son antiguas y otras más modernas pero todas tienen en común un encanto y cuidado muy particular.
<a href="<?php echo site_url();?>/cerdena/rutas/cerdena-con-encanto">[Ver más sobre este circuito]</a></p>
          </div>
          <div class="col-md-2 col-sm-2 hidden-xs offset-0 text-right text-muted">Desde <strong class="price">740,00€</strong> <small>por persona</small></div>
        </div>

        <div class="spacer"></div>
      </main>
<!--
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        <div class="row">
        </div>
      </div>
    </div>
-->
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
