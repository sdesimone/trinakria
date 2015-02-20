<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Viajes Creta */
get_header();
$destino='Creta';
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub-creta.php');?>
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">

<br/><br/>

<p><em>¿Quieres viajar a Creta? Has llegado en el lugar correcto!</em></p>

<p><strong>Trinakria Tours</strong> es la agencia de viajes online especialista en rutas y circuitos por Creta y por el Mediterráneo.</p> 

<p>Con nosotros tendrás una experiencia de viaje a Creta diferente: playas vírgenes, pueblos hermosos y encontrarás a cretenses que delante de un buen raki te contarán las historias más peculiares de la isla.</p> 

<p>En nuestra página encontrarás entre las mejores ofertas de <strong>turismo sostenible y viajes de autor</strong> para conocer la isla de Creta, elige entre una <a href="<?php echo site_url();?>/creta/rutas">ruta a tu aire con coche de alquiler</a> o una estancia en uno de <a href="<?php echo site_url();?>/creta/alojamientos">nuestros alojamientos</a> a lo largo de toda la isla.</p>

<p>Nos movemos fuera de los circuitos del turismo de masa y estamos especializados en servicios de viaje alternativos y de alta calidad en Creta.</p>

<p><em>Cada alojamiento ha estado <strong>visitado</em> personalmente por alguien de nuestro equipo y entonces seleccionado</strong>.</p>

<p>Las propuestas que verás aquí son ejemplos de lo que podemos ofrecer porque <strong>cada viaje lo confeccionamos totalmente a tu medida</strong>, una vez nos contactes poco a poco llegaremos a la oferta de viaje a Creta que estabas buscando.</p>

<p>Esto es lo que piensan de Creta escritores del pasado:</p>

<p><em>Creta está llena de bellezas, la belleza de sus hombres y de sus lugares. Montañas altas con nieve, gargantas profundas y bruscas, bosques rasos con césped grueso, fuentes con agua clara y fresca</em>.<br/>
<strong>James Hamilton Delargy</strong> - profesor de historia del folklore, Universidad de Dublin, 1946-1971</p>

<p><em>La cara de Creta es seria, sincera y probada. Las montañas son salvajes, duras y serias. Cuando miras a Creta desde el avión, parece un puente que conecta tres continentes. Profundamente marcada de estos tres destinos (Moirae). Por la primera vez en Europa, el hambrienta ave que llamamos cultura, saltó a Creta y hizo su nido allí. Abrió sus alas encima de la tierra cretense y dio a la luz la misteriosa, pero silenciosa, llena de vida, movimiento y gloria civilización cretense. Creta tiene algo primitivo, sagrado, arrepentido y orgulloso; algo que tienen solo las mujeres que dieron a la luz a hombres valientes. Esta tierra ha luchado y ha sufrido mucho, ha afrontado la muerte tantas veces que al final ha perdido todo su temor; ahora sabe reír y jugar con la muerte</em>.<br/>
<strong>Nikos Kazantzakis</strong> - escritor griego, "50 años desde la guerra en Creta"</p>

      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        <div class="row">

      

		<div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> 
			<div class="thumbnail shadow link"> <a href="<?php echo site_url();?>/creta/rutas"><img src="<?php bloginfo('template_directory'); ?>/img/creta/1-Rutas por Creta.jpg" class="img-rounded img-responsive"></a>
				<div class="captionlarge"><center><big><big>Rutas por Creta</big></big></center></div>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs"> <p/> </div>
		<div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> 
			<div class="thumbnail shadow link"> <a href="<?php echo site_url();?>/creta/alojamientos"><img src="<?php bloginfo('template_directory'); ?>/img/creta/2-Alojamientos_Creta.JPG" class="img-rounded img-responsive"></a>
				<div class="captionlarge"><center><big><big>Alojamientos</big></big></center></div>
		
		</div>
		<div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs"> <p/> </div>
		<div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> 
			<div class="thumbnail shadow link"> <a href="<?php echo site_url();?>/creta/guia"><img src="<?php bloginfo('template_directory'); ?>/img/creta/3-Guia de viaje_Creta.JPG" class="img-rounded img-responsive"></a>
				<div class="captionlarge"><center><big><big>Guía de viaje</big></big></center></div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs"> <p/> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
