<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php include_once (TEMPLATEPATH . '/utils.php' );?>
<?php 
/* Template Name: Ruta Malta 1 */
get_header();
$destino='Malta';
?>

<div class="container nopadding shadow"> 
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub-malta.php' );?>
      <main class="main main-left col-md-6 col-sm-6 col-xs-12">

	<h1>Malta a tu aire <small><small>un tour para descubrir a tu manera la esencia de las islas</small></small></h1>
	<p/>

        <div class="bs-example bs-example-tabs">
          <ul id="myTab" class="nav nav-tabs strong">
            <li class="active"><a href="#descripcion" data-toggle="tab">Descripción</a></li>
            <li><a href="#ficha-tecnica" data-toggle="tab">Ficha Técnica</a></li>
            <li><a href="#reserva" data-toggle="tab">Solicitar Viaje</a></li>
            <li><a href="#amigo" data-toggle="tab">Díselo a un amigo</a></li>
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="descripcion">
              <div class="scrolly-xs">

<br/>
<p>Un viaje al archipiélago de Malta para descubrir los aromas del Mediterráneo en una isla con sabor árabe e influencia británica. Una ruta que permite disfrutar de toda Malta y Gozo, de sus monumentos, playas, sus fiestas, animación y como no la sabrosa gastronomía,</p>

<p>El alojamiento en Bed&amp;Breakfast y pequeños hoteles de Malta hace que diferente al viaje. Una manera más cercana de descubrir un país y su gente, alojándose en establecimientos con encanto, donde los dueños nos ayudarán y nos aconsejarán.</p>

<p><strong>Trinakria Tours</strong> ha buscado y visitado todos los alojamientos para poder disfrutar de un viaje auténtico y distinto de Malta. Los mejores servicios y la amabilidad de los malteses a tu disposición en un viaje único, sencillo y agradable.</p>

<p><strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/malta-a-tu-aire.php" 
rel="shadowbox;player=iframe;width=640;height=480;">
Ver los precios de la ruta</a></strong></p>

<p><strong>Importante:</strong>Los circuitos que mostramos aquí son únicamente ejemplos de <u>Rutas por Malta en 15 días</u> por eso no se preocupe si su idea es diferente. ¡Podemos organizar el viaje totalmente a tu medida, tanto en la duración como en la ruta!
</p>

	<h2>Bed &amp; Breakfast de la ruta</h2>
	<p class="text-muted"><strong>Julio y Agosto mínimo 3 noches por B&amp;B*:</strong></p>
	<ol>
	  <li><a href="#" class="smooth">The Burrow</a><small class="text-muted"> Isla de Malta</small></a></li>
	  <li><a href="#" class="smooth">Maria Giovanna</a><small class="text-muted"> Isla de Gozo</small></a></li>
	</ol>

	<p class="spacer"> <small>*Este circuito se ha imaginado pensando que la llegada y salida de Malta en avión. Pero si piensas llegar en ferry desde Sicilia, también podemos organizar tu viaje.</small></p>
                
	<?php 
		$names = array("The Burrow", "Maria Giovanna Guest House");
		$fichas = lista_alojamientos_rutas($names);
		 
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

              </div>
            </div>

            <div class="tab-pane fade" id="ficha-tecnica">
<h3>Tipo de Alojamiento:</h3>
<p>Bed and Breakfast y pequeños hoteles en La Valletta o en los pueblos de Malta y Gozo. Todas las habitaciones cuentan con baño privado en el interior.</p>

<h3>Precios de la ruta:</h3>
<p class="text-muted"><strong>Desde 466,00 € por persona </strong></p>
<strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/malta-a-tu-aire.php" 
rel="shadowbox;player=iframe;width=640;height=480;">
Ver los precios de la ruta</a></strong>

<h3>Número de días:</h3>
<p>Mínimo 8 (Para conocer y disfrutar completamente Malta sugerimos escoger la opción TOUR 15 días)</p>
<p class="text-muted"><small>Nuestra sugerencia es escoger la ruta de 15 días, lo que sería una duración perfecta para conocer Malta con tranquilidad.</small></p>

<h3>Mejores temporadas para este tipo de tour:</h3>
<p>Semana Santa - Primavera (Abr-Jun) - Septiembre - Octubre</p>
<p><u>Las Reservas para Agosto</u> las tramitamos como máximo hasta el mes de Mayo.</p>
<p>Dado que Malta es un país pequeño y bastante turístico, no es recomendable pensar en un viaje durante el mes de agosto (del 5 al 24). En esa época las islas son muy frecuentadas, con lo que los alojamientos suelen estar ocupados y hay mucha gente en playas y lugares de interés. Pensamos que es mucho más “sostenible” viajar en junio o septiembre.</p>

<h3>El Precio incluye:</h3>
<p>Alojamiento en Habitación doble estándar, Desayuno, Coche de alquiler categoría B (i), Gastos administrativos, gastos de administración paquete vacacional, IVA e impuestos.</p>
<h3>El Precio NO incluye:</h3>
<p>vuelos (ii), seguro de viaje (iii), comidas, cenas y otros gastos personales.</p>

<ol>
<li>(i) El contrato del coche incluye: kilometraje ilimitado, seguro a terceros, cdw, cobertura contra robo, tasas de aeropuerto y todos los impuestos locales. El precio también incluye un Seguro a
	Reembolso Franquicia Total para daños y hurto. (<a href="<?php bloginfo('template_directory'); ?>/inc/condiciones_flexible.pdf" rel="shadowbox;player=iframe;width=640;height=480;">Condiciones FLEXIBLE de alquiler de coche</a>).</li>
<li>(ii) No tramitamos vuelos porque la mayoría de compañías que vuelan a Malta son de bajo coste y entendemos que es más económico si los compráis online vosotros mismos. Aquí aconsejamos sobre <a href="#">como llegar a Malta</a>.</li>
<li>(iii) Bajo petición Tramitamos Seguros de Anulación y de Asistencia sanitaria. Nuestro proveedor de seguros habitual es AXA.</li>
</ol>

<h3>Opciones y Extras:</h3>
<p>Por separado es posible contratar actividades, experiencias, excursiones o cenas</p>

<p>IMPORTANTE: Para que todo quede claro no olvides de leer detenidamente nuestras <a href="#">condiciones de contratación</a> aunque es la parte más aburrida del contenido de esta página Web.</p>
</div>
            <div class="tab-pane fade in" id="reserva">
              <?php include_once (TEMPLATEPATH . '/inc/order.php' );?>
            </div>
            <div class="tab-pane fade in" id="amigo">
              <?php include_once (TEMPLATEPATH . '/inc/amigo.php' );?>
            </div>
</div>
</div>

          
      </main>

      <div class="col-md-6 col-sm-6 col-xs-12 sidebar text-muted" >
	<div class="map"><img src="<?php bloginfo('template_directory'); ?>/img/malta/rutas/malta-a-tu-aire/Mapa_Malta_a_tu aire.png" class="img-rounded img-responsive"/>
	</div>

	<div class="siderbar">
		<br/>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url()?>/testimonios">Nuestros clientes dicen...</a></li>
		<li class="linkable"><a href="<?php echo site_url()?>/malta/guia/como-llegar">Cómo llegar a Malta</a></li>
		</ul>
	</div>
          <h3>Todas nuestras rutas por Malta</h3>
          
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/malta/rutas/malta-a-tu-aire.jpg" class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/malta/rutas/malta-a-tu-aire/">Malta a tu aire</a></h2>
              </div>
          </div>
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/malta/rutas/malta-con-encanto.jpg"
		class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/malta/rutas/malta-con-encanto">Malta con encanto</a></h2>
              </div>
          </div>


          <div class="spacer"></div>
	  <a class="btn btn-warning" data-spy="affix" data-offset-top="700" href="<?php echo site_url()?>/malta/rutas/">&laquo; Rutas por Malta</a>
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/condiciones-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/politica-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
