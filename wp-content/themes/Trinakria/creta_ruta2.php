<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php include_once (TEMPLATEPATH . '/utils.php' );?>
<?php 
/* Template Name: Ruta Creta 2 */
get_header();
$destino='Creta';
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub-creta.php' );?>
      <main class="main main-left col-md-6 col-sm-6 col-xs-12">

	<h1>Creta rural <small><small>un tour ideal para familias que quieren descubrir Creta</small></small></h1>
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

<p>Viajar en agroturismos por Creta es un itinerario de viaje dirigido a los amantes de la naturaleza y a las familias con niños que quieren alojarse en estructuras con entornos tranquilos y con muchos espacios verdes </p>

<p>Hemos decidido añadir este tour porque durante nuestro primer viaje a Creta, hemos quedado muy sorprendidos de la belleza de los lugares y del cuidado que los propietarios habían puesto en la creación de estas pequeñas oasis de paz.</p>

<p>Creta Rural es relax al estado puro, ideal para descansar y olvidarse de los ritmos frenéticos de las ciudades. </p>

<p>Si eliges este tour por Creta es aconsejable estar  bien dispuestos a ver menos puntos turísticos y a disfrutar más de los entornos naturales que ofrece la isla porque en algún caso los hoteles rurales de la ruta no permiten hacer muchas rutas debido a su posición y las carreteras de Creta no permiten mucha movilidad.</p>

<p>Los alojamientos propuestos han sido directamente seleccionados por el team de Trinakria Tours para conocer la Creta lenta y más natural. Esta ruta es ideal para familias y pequeños grupos de amigos.</p>

<p><strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/creta-rural.php" 
rel="shadowbox;player=iframe;width=640;height=480;">
Ver los precios de la ruta</a></strong></p>

<p><strong>Importante:</strong>Las combinaciones presentes en esta ruta son ejemplos de <u>Tours de Creta de 15 días</u>. Es posible adaptarlas a tus exigencias y elegir combinaciones de más o menos días de estancia.
</p>

                <h2>Casas Rurales de la ruta</h2>
                <p class="text-muted"><strong>Julio y Agosto mínimo 3 noches por B&amp;B*:</strong></p>
                <ol>
		  <li><a href="#" class="smooth">Terra Minoica</a> <small class="text-muted">Kato Zakros</small></li>
		  <li><a href="#" class="smooth">Kamares</a> <small class="text-muted">Chania</small></li>
		  <li><a href="#" class="smooth">Asion Lithos</a> <small class="text-muted">Heraklion</small></li>
                </ol>
		<p class="spacer"> <small>*Este tour está estudiado considerando que llegáis y salís desde los aeropuertos de HERAKLION. Es posible invertir el sentido del tour en caso de llegada y salida a o desde otros aeropuertos.</small></p>
                
	<?php 
		$names = array("Terra Minoica", "Kamares", "Asion Lithos");
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
<p>Casas rurales y apartamentos turísticos en pueblos o en la naturaleza. Todas las habitaciones tienen baño privado dentro de la habitación.</p>

<h3>Precios de la ruta:</h3>
<p class="text-muted"><strong>Desde 560,00 € por persona </strong></p>
<strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/creta-rural.php" 
rel="shadowbox;player=iframe;width=640;height=480;">
Ver los precios de la ruta</a></strong>

<h3>Número de días:</h3>
<p>Mínimo 8 (Para visitar bien la isla aconsejamos elegir la opción TOUR 15 días)</p>
<p class="text-muted"><small>Aconsejamos elegir la combinación de 15 días que es un tiempo razonable para visitar Creta con calma.</small></p>

<h3>Mejores temporadas para este tipo de tour:</h3>
<p>Semana Santa - Primavera (Abr-Jun) - Septiembre - Octubre</p>
<p>La <u>Reservas para Agosto</u> serán tramitadas hasta máximo el mes de Mayo.</p>
<p>No aconsejamos planear el viaje desde el 5 hasta el 24 de Agosto porque es la única temporada en la que la isla se llena totalmente y no es agradable viajar y visitar lugares y playas. Consideramos mucho más ‘sostenible’ elegir meses como Junio o Septiembre</p>

<h3>El Precio incluye:</h3>
<p>Alojamiento en Habitación doble estándar, Desayuno, Coche de alquiler categoría B (i), Gastos administrativos, gastos de administración paquete vacacional, IVA e impuestos.</p>
<h3>El Precio NO incluye:</h3>
<p>vuelos (ii), seguro de viaje (iii), comidas, cenas y otros gastos personales.</p>

<ol>
<li>(i) El contrato del coche incluye: kilometraje ilimitado, seguro a terceros, cdw, cobertura contra robo, tasas de aeropuerto y todos los impuestos locales. El precio también incluye un Seguro a
	Reembolso Franquicia Total para daños y hurto. (<a href="<?php bloginfo('template_directory'); ?>/inc/condiciones_flexible.pdf" rel="shadowbox;player=iframe;width=640;height=480;">Condiciones FLEXIBLE de alquiler de coche</a>).</li>

<li>(ii) No tramitamos vuelos porque la mayoría de compañías que vuelan a Creta son de bajo coste y entendemos que es más económico si los compráis online vosotros mismos. Aquí aconsejamos sobre <a href="#">como llegar a Creta</a>.</li>
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
	<div class="map"><img src="<?php bloginfo('template_directory'); ?>/img/creta/rutas/creta-rural/Mapa_Creta_Rural.png" class="img-rounded img-responsive"/>
	</div>
        
	<div class="siderbar">
		<br/>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url()?>/testimonios">Nuestros clientes dicen...</a></li>
		<li class="linkable"><a href="<?php echo site_url()?>/creta/guia/como-llegar">Cómo llegar a Creta</a></li>
		</ul>
	</div>

          <h3>Todas nuestras rutas por Creta</h3>
          
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/creta/rutas/creta-a-tu-aire.jpg" class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/creta/rutas/creta-a-tu-aire">Creta a tu aire</a></h2>
              </div>
          </div>
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/creta/rutas/creta-rural.jpg"
		class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/creta/rutas/creta-rural">Creta Rural</a></h2>
              </div>
          </div>
          <div class="row list linkable">
	  <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="<?php bloginfo('template_directory')?>/img/creta/rutas/creta-con-encanto.jpg"
		class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
	      <h2><a href="<?php echo site_url()?>/creta/rutas/creta-con-encanto">Creta con encanto</a></h2>
              </div>
          </div>


          <div class="spacer"></div>
	  <a class="btn btn-warning" data-spy="affix" data-offset-top="700" href="<?php echo site_url()?>/creta/rutas/">&laquo; Rutas por Creta</a>
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/condiciones-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/politica-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
