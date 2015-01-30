<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Viajes Puglia */
get_header();
$destino='Puglia';
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub-puglia.php');?>
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">

<br/>
<p><strong>¿Quieres viajar y descubrir el cálido Sur de Italia?</strong> <em>Puglia...el tacón de la bota italiana es lo que estás buscando!</em> </p>

<p><strong>Trinakria Tours</strong> ha decidido organizar viajes y tours a Puglia porque es una región de Italia todavía muy poco conocida y muy rica de atractivos. Un viaje a Puglia es descubrir un Sur de Italia muy auténtico, con mucha arqueología, ciudades de arte, gastronomía excelente y una costa estrepitosa.<br/>
El Sur de Italia y Puglia sobre todo conserva lugares todavía vírgenes y una humanidad única en el Mediterráneo. Aquí te sentirás un lugareño más!! </p>

<p>Todos los alojamientos de nuestro catálogo han sido seleccionados personalmente por nosotros siguiendo parámetros de familiaridad del lugar, limpieza y encanto.</p>

<p>Aquí encontrarás los mejores tours e itinerarios de <strong>turismo sostenible y de autor</strong> para visitar Puglia (Apulia), puedes elegir entre una <a href="#">ruta a tu aire</a> o una estancia en uno de <a href="#">nuestros alojamientos</a>, esparcidos por toda Puglia.</p>

<p>Somos los especialistas en tours por libres y hechos a medida en Puglia y en el Mediterráneo, una vez te hayas hecho una idea de los que ofrecemos, <strong><a href="<?php echo site_url();?>/contactar">contacta con nosotros</a></strong> y te prepararemos un tour totalmente personalizado y en base a tus deseos.</p>


      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> 
			<div class="thumbnail shadow link"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/puglia/1-Rutas por Puglia.JPG" class="img-rounded img-responsive"></a>
				<div class="captionlarge"><center><big><big>Rutas por Puglia</big></big></center></div>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs"> <p/> </div>
		<div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> 
			<div class="thumbnail shadow link"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/puglia/2-Alojamientos.jpg" class="img-rounded img-responsive"></a>
				<div class="captionlarge"><center><big><big>Alojamientos</big></big></center></div>
		
		</div>
		<div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs"> <p/> </div>
		<div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> 
			<div class="thumbnail shadow link"> <a href="#"><img src="<?php bloginfo('template_directory'); ?>
/img/puglia/3-Guia de Viaje.jpg" class="img-rounded img-responsive"></a>
		</div>
				<div class="captionlarge"><center><big><big>Guía de viaje</big></big></center></div>
		<div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs"> <p/> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
