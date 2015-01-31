<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Ruta Creta 3 */
get_header();
$destino='Creta';
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub-creta.php' );?>
      <main class="main main-left col-md-6 col-sm-6 col-xs-12">

	<h1>Creta con encanto <small><small>Tour de charme en los mejores hoteles de Creta</small></small></h1>
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

<p>Creta con encanto es una ruta particular, muy sugestiva que os permitirá descubrir las costas pero también el interior de la isla. </p>

<p>Cada Hotel, en su mayoría antiguas casas, es fruto de un atento trabajo de restauración por parte de sus propietarios, el resultado es excelente e indicado para los huéspedes que aman alojarse en fincas importantes.</p>

<p>Este tour de Creta os dejará boquiabierto por la belleza de los hoteles y de sus instalaciones y equipamientos.</p>

<p>Todos los pequeños hoteles con encanto de la ruta han sido escogidos uno a uno por Trinakria Tours para saborear Creta de manera única y con charme. </p>


<p><strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/creta-con-encanto.php" 
onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/precios/creta-con-encanto.php','popup','width=500,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">
Ver los precios de la ruta</a></strong></p>

<p><strong>Importante:</strong>Los tours presentes en esta web son ejemplos de <u>Tours de Creta de 15 días</u>. Es posible ajustar cada tour a tus exigencias reales y modificar número de días de estancia en cada Hotel así como cambiar zonas del tour.</p>

                <h2>Pequeños Hoteles de la ruta</h2>
                <p class="text-muted"><strong>Julio y Agosto mínimo 3 noches por B&amp;B*:</strong></p>
                <ol>
		  <li><a href="#" class="smooth">Villa Kerasia</a> <small class="text-muted">Palliani, Heraklion</small></a></li>
		  <li><a href="#" class="smooth">Kapsaliana</a>, <small class="text-muted">Arkadi, Rethymnon</small></a></li>
		  <li><a href="#" class="smooth">Eliah</a>, <small class="text-muted">Chania</small></a></li>
                </ol>
		<p class="spacer"> <small>*Este tour está estudiado considerando que llegáis al aeropuerto de Heraklion y salís desde el aeropuerto de Chania. Es posible invertir el sentido del tour o adaptarlo en caso de llegadas y salidas diferentes.</small></p>
                
                
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
<p>Pequeños Hoteles con encanto en pueblos o en la naturaleza. Todas las habitaciones tienen baño privado dentro de la habitación.</p>

<h3>Precios de la ruta:</h3>
<p class="text-muted"><strong>Desde 620,00 € por persona </strong></p>
<strong><a href="<?php bloginfo('template_directory'); ?>/inc/precios/creta-con-encanto.php" 
onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/precios/creta-con-encanto.php','popup','width=500,height=500,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">
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
<li>(i) El contrato del coche incluye: kilometraje ilimitado, seguro a terceros, cdw, cobertura contra robo, tasas de aeropuerto y todos los impuestos locales. El precio también incluye un Seguro a Todo Riesgo para daños y hurto. (<a href="#">Condiciones de alquiler de coche</a>)</li>
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
	<div class="map"><img src="<?php bloginfo('template_directory'); ?>/img/creta/rutas/creta-con-encanto/Mapa_Creta_con_encanto.png" class="img-rounded img-responsive"/>
	</div>
        
        <div class="sidebar">
          
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
