<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Ruta Malta 2 */
get_header();
$destino='Malta';
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub-malta.php' );?>
      <main class="main main-left col-md-6 col-sm-6 col-xs-12">

	<h1>Malta con encanto <small><small>un tour ideal para familias que quieren descubrir Malta</small></small></h1>
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

<p>La ruta "Malta con encanto" es un viaje especial, organizado con cariño y atención para que podáis disfrutar de todos los tesoros de Malta y Gozo. </p>

<p>Todos los alojamientos, tanto los hoteles como los B&amp;B poseen algún elemento especial que ha hecho que los escogiéramos después de visitarlos. Encanto, atención personalizada, situación privilegiada y calma, así como todos los servicios para unas vacaciones únicas.</p>

<p>La Malta menos conocida y más auténtica, hoteles encantadores, todo a dos pasos de lugares espectacularmente bellos y tranquilos.</p>

<p>Elegidos por su atención al público, amabilidad y calidad del servicio, los B&amp;B y pequeños hoteles son el resultado de una búsqueda exigente y selectiva. Ahora, os toca disfrutar a vosotros.</p>

<p><strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/malta-con-encanto.php" 
onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/precios/malta-con-encanto.php','popup','width=500,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">
Ver los precios de la ruta</a></strong></p>

<p><strong>Importante:</strong>Los circuitos que se pueden ver en está página son sólo ejemplo de <u>Tours de Malta en 15 días</u>. Por supuesto, adaptaremos cada viaje a tus necesidades, gustos, etc… El número de días es adaptable y los hoteles se pueden cambiar dependiendo de la calidad buscada y la disponibilidad.
</p>

                <h2>Pequeños Hoteles de la ruta con encanto</h2>
                <p class="text-muted"><strong>Julio y Agosto mínimo 3 noches por B&amp;B*:</strong></p>
                <ol>
		  <li><a href="#" class="smooth">Chapel 5</a> <small class="text-muted">Isla de Malta</small></li>
		  <li><a href="#" class="smooth">Thirtyseven</a> <small class="text-muted">Isla de Gozo</small></li>
                </ol>
		<p class="spacer"> <small>*Este viaje se pensado en la llegada en avión a Malta. De todas formas se puede adaptar si llegáis en Ferry desde Sicilia..</small></p>
                
                
                <?php  $nn=0; foreach ($data[$destino]['fichas'] as $value) { $nn++; ?>
                <span class="anchor" id="b<?php echo $nn; ?>"></span>
                <div class="row list linkable">
                  <div class="col-md-2 col-sm-2 col-xs-4 offset-0"> <a href="/trinakria/ficha/?ruta=<?php echo $ruta; ?>&ficha=<?php echo $value; ?>"><img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/80.jpg"  class="img-rounded img-responsive"></a> </div>
                  <div class="col-md-10 col-sm-10 col-xs-8 description">
                    <h2><a href="/trinakria/ficha/?ruta=<?php echo $ruta; ?>&ficha=<?php echo $value; ?>"><?php echo $value; ?></a></h2>
                    <span class="text-muted">Sant’Agata Militello, Messina</span>
                    <p class="hidden-xs">Este Bed &amp; Breakfast Rural ofrece una atmósfera tradicional y al mismo tiempo original.</p>
                  </div>
                </div>
                 <?php } ?>
                
              </div>
            </div>
            <div class="tab-pane fade" id="ficha-tecnica">
<h3>Tipo de Alojamiento:</h3>
<p>Se trata de hoteles pequeños y Bed &amp; Breakfast situados en La Valletta, en pueblecitos o en un entorno natural privilegiado. Habitaciones siempre con baño privado dentro de la habitación.</p>

<h3>Precios de la ruta:</h3>
<p class="text-muted"><strong>Desde 714,00 € por persona </strong></p>
<strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/malta-con-encanto.php" 
onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/precios/malta-con-encanto.php','popup','width=500,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">
Ver los precios de la ruta</a></strong>

<h3>Número de días:</h3>
<p>Por lo menos 8 (Para visitar bien la isla nos parece interesante escoger la opción TOUR 15 días)</p>
<p class="text-muted"><small>Elegir el circuito de 15 días puede ser la mejor idea para conocer perfectamente Malta, con la calma necesaria.</small></p>

<h3>Mejores temporadas para este tipo de tour:</h3>
<p>Semana Santa - Primavera (Abr-Jun) - Septiembre - Octubre</p>
<p>Todas <u>las Reservas para Agosto</u> serán tramitadas hasta máximo el mes de Mayo.</p>
<p>Es preferible no planear el viaje entre el 5 y el 24 de Agosto por ser la temporada alta, lo que significa que hay muchos turistas y la mayoría de los servicios y lugares están llenos. Creemos que es mucho mejor y más ‘sostenible’ decidirse por meses como Junio o Septiembre.</p>

<h3>El Precio incluye:</h3>
<p>Alojamiento en Habitación doble estándar, Desayuno, Coche de alquiler categoría B (i), Gastos administrativos, gastos de administración paquete vacacional, IVA e impuestos.</p>
<h3>El Precio NO incluye:</h3>
<p>vuelos (ii), seguro de viaje (iii), comidas, cenas y otros gastos personales.</p>

<ol>
<li>(i) El contrato del coche incluye: kilometraje ilimitado, seguro a terceros, cdw, cobertura contra robo, tasas de aeropuerto y todos los impuestos locales. El precio también incluye un Seguro a Todo Riesgo para daños y hurto. (<a href="#">Condiciones de alquiler de coche</a>)</li>
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
	<div class="map"><img src="<?php bloginfo('template_directory'); ?>/img/malta/rutas/malta-con-encanto/Mapa_Malta_con_encanto.png" class="img-rounded img-responsive"/>
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
	      <h2><a href="<?php echo site_url()?>/malta/rutas/malta-a-tu-aire">Malta a tu aire</a></h2>
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
