<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php include_once (TEMPLATEPATH . '/utils.php' );?>
<?php 
/* Template Name: Ruta Cerdena 2 */
get_header();
$destino='Cerdeña';
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub-cerdena.php' );?>
      <main class="main main-left col-md-6 col-sm-6 col-xs-12">

	<h1>Cerdeña rural <small><small>un Viaje a Cerdeña apto para las Familias y grupos de amigos</small></small></h1>
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
<p>Cerdeña Rural quiere decir poder tener un conocimiento más profundo de esta tierra, cruzando de norte a sur, de este a oeste con espíritu de aventura y curiosidad, y no como un turista cualquiera. Mar y montaña de Cerdeña, el interior, los pueblos más típicos, los parques naturales, los ‘nuragues’, la hospitalidad de la gente que encontraréis y sobre todo la naturaleza, este tour os dejará un recuerdo del viaje inolvidable. </p>

<p>Cerdeña Rural es un itinerario y un viaje familiar donde adultos y pequeños disfrutarán de instalaciones idóneas para las familias en un entorno tranquilo pero al mismo tiempo accesible y bien posicionado para visitar los puntos más importantes de la zona donde os alojais.</p>

<p>Los Alojamientos (por lo general Agroturismos) han sido seleccionados personalmente por el equipo de <strong>Trinakria Tours</strong> para aproximarte a la vida rural de la isla. El ambiente familiar y cálido te permitirá sumergirte en un entorno ideal para descansar y reflexionar.</p>

<p><strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/cerdena-rural.php" 
onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/precios/cerdena-rural.php','popup','width=500,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">
Ver los precios de la ruta</a></strong></p>

<p><strong>Importante:</strong> El itinerario aquí presentado es un ejemplo de <em>Tour de Cerdeña de 15 días</em>, pero una vez nos contactéis <strong>personalizaremos esta ruta</strong> según vuestras exigencias y tiempo de estada en Cerdeña.</p>

                <h2>Casas Rurales de la ruta</h2>
                <p class="text-muted"><strong>Julio y Agosto mínimo 3 noches por Agroturismo*:</strong></p>
                <ol>
		  <li><a href="#" class="smooth">Agriturismo "I Vigneti"</a> <small class="text-muted">Olmedo, Alghero</small></li>
		  <li><a href="#" class="smooth">Agriturismo "L’Orto"</a> <small class="text-muted">San Vero Milis, Oristano</small></li>
		  <li><a href="#" class="smooth">"La Fattoria delle Tartarughe"</a> <small class="text-muted">Cagliari</small></li>
		  <li><a href="#" class="smooth">Agriturismo "Canales"</a> <small class="text-muted">Dorgali, Nuoro</small></li>
		  <li><a href="#" class="smooth">"Il Muto di Gallura"</a> <small class="text-muted">Aggius, Olbia-Tempio</small></li>
                </ol>
		<p class="spacer"> <small>*Este tour está estudiado considerando que llegáis y salís desde el aeropuerto de ALGHERO. Es posible invertir el sentido del tour en caso de llegada y salida a o desde el aeropuerto de Cagliari o bien adaptarlo en caso de llegada en otro aeropuerto.</small></p>
                
                
	<?php 
		$names = array( "I Vigneti", "L'Orto", "La Fattoria delle Tartarughe", "Agriturismo Canales", "Il Muto di Gallura");
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
<p>Agroturismos y Hotel Rurales (cerca de pueblos o aldeas). Todas las habitaciones tienen baño privado dentro de la habitación.</p>

<h3>Precios de la ruta:</h3>
<p class="text-muted"><strong>Desde 500,00 € por persona </strong></p>
<strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/cerdena-rural.php" 
onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/precios/cerdena-rural.php','popup','width=500,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">
Ver los precios de la ruta</a></strong>

<h3>Número de días:</h3>
<p>Mínimo 8 (Para visitar bien la isla aconsejamos elegir la opción TOUR 15 días)</p>
<p class="text-muted"><small>Aconsejamos elegir la combinación de 15 días que es un tiempo razonable para visitar la isla con calma.</small></p>

<h3>Mejores temporadas para este tipo de tour:</h3>
<p>Semana Santa - Primavera (Abr-Jun) - Septiembre - Octubre</p>
<p>La <u>Reservas para Agosto</u> serán tramitadas hasta máximo el mes de Mayo.</p>
<p>No aconsejamos planear el viaje desde el 5 hasta el 24 de Agosto porque es la única temporada en la que la isla se llena totalmente y no es agradable viajar y visitar lugares y playas. Consideramos mucho más ‘sostenible’ elegir meses como Junio o Septiembre</p>

<h3>El Precio incluye:</h3>
<p>Alojamiento en Habitación doble estándar, Desayuno, Coche de alquiler categoría B (i), Gastos administrativos, gastos de administración paquete vacacional, IVA e impuestos.</p>
<h3>El Precio NO incluye:</h3>
<p>vuelos (ii), seguro de viaje (iii), comidas, cenas y otros gastos personales.</p>

<ol>
<li>(i) El contrato del coche incluye: kilometraje ilimitado, seguro a terceros, cdw, cobertura contra robo, tasas de aeropuerto y todos los impuestos locales. El precio también incluye un Seguro a Todo Riesgo para daños y hurto. (<a href="#">Condiciones de alquiler de coche</a>)</li>
<li>(ii) No tramitamos vuelos porque la mayoría de compañías que vuelan a Cerdeña son de bajo coste y entendemos que es más económico si los compráis online vosotros mismos. Aquí aconsejamos sobre <a href="#">como llegar a Cerdeña</a>.</li>
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
	<div class="map"><img src="<?php bloginfo('template_directory'); ?>/img/cerdena/rutas/cerdena-rural/Mapa_Cerdeña_Rural.png" class="img-rounded img-responsive"/>
	</div>
        
	<div class="siderbar">
		<br/>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url()?>/testimonios">Nuestros clientes dicen...</a></li>
		<li class="linkable"><a href="<?php echo site_url()?>/cerdena/guia/como-llegar">Cómo llegar a Cerdeña</a></li>
		</ul>
	</div>

          <h3>Todas nuestras rutas por Cerdeña</h3>
          
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/cerdena/rutas/cerdena-a-tu-aire.jpg" class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/cerdena/rutas/cerdena-a-tu-aire">Cerdeña a tu aire</a></h2>
              </div>
          </div>
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/cerdena/rutas/cerdena-rural.jpg"
		class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/cerdena/rutas/cerdena-rural">Cerdeña Rural</a></h2>
              </div>
          </div>
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/cerdena/rutas/cerdena-con-encanto.jpg"
		class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/cerdena/rutas/cerdena-con-encanto">Cerdeña con encanto</a></h2>
              </div>
          </div>


          <div class="spacer"></div>
	  <a class="btn btn-warning" data-spy="affix" data-offset-top="700" href="<?php echo site_url()?>/cerdena/rutas/">&laquo; Rutas por Cerdeña</a>
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/condiciones-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/politica-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
