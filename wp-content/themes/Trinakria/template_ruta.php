<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Ruta */
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=1; include_once (TEMPLATEPATH . '/inc/menu-sub.php' );?>
      <main class="main main-left col-md-6 col-sm-6 col-xs-12">
        <h1><?php echo $ruta; ?></h1>
        <div class="bs-example bs-example-tabs">
          <ul id="myTab" class="nav nav-tabs strong">
            <li class="active"><a href="#descripcion" data-toggle="tab">Descripción</a></li>
            <li><a href="#precios" data-toggle="tab">Precios</a></li>
            <li><a href="#reserva" data-toggle="tab">Reserva</a></li>
            <li><a href="#amigo" data-toggle="tab">Díselo a un amigo</a></li>
            <!--<li class="dropdown hidden-xs"> <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown">Mas <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1">
                <li><a href="#dropdown2" tabindex="-1" data-toggle="tab">Díselo a un amigo</a></li>
              </ul>
            </li> -->
          </ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade in active" id="descripcion">
              <p class="text-muted"><small>Un viaje a tu medida</small></p>
              <div class="scrolly-xs">
                <p>Viajar por <?php echo $destino; ?> descubriéndola desde sus costas hasta el misterioso y montañoso interior! Esta que os proponemos es una ruta completa de la isla que os ayudará a enamoraros de sus paisajes, sus habitantes y su maravillosa gastronomía. Viajar alojándose en B&amp;Bs quiere decir entrar a contacto directo con la gente del lugar que según nuestra manera de entender el turismo es a veces más importante del lugar en sí mismo.</p>
                <p>Los Bed and Breakfast han sido seleccionados por los guías de Trinakria Tours para saborear <?php echo $destino; ?> de manera sencilla y agradable. Esta ruta garantiza una atmósfera familiar y un ritmo calmado.</p>
                <h2>Bed &amp; Breakfast de la ruta</h2>
                <p class="text-muted">Julio y Agosto mín. 3 días por B&amp;B*:</p>
                <ol>
                <?php  $nn=0; foreach ($data[$destino]['fichas'] as $value) { $nn++; ?>
                  <li><a href="#b<?php echo $nn; ?>" class="smooth">B&amp;B “<?php echo $value; ?>” <small>Santa Venerina, Catania</small></a></li>
                  <?php } ?> 
                </ol>
                <p class="spacer"> <small>*Este tour está estudiado considerando que llegáis y salís desde el aeropuerto de Catania. Es posible invertir el sentido del tour en caso de llegada y salida desde el aeropuerto de Palermo o bien adaptarlo en caso de llegada en otro aeropuerto.</small></p>
                
                
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
                
                <div class="spacer"></div>
                <p> <small>*Este tour está estudiado considerando que llegáis y salís desde el aeropuerto de Catania. Es posible invertir el sentido del tour en caso de llegada y salida desde el aeropuerto de Palermo o bien adaptarlo en caso de llegada en otro aeropuerto.</small></p>
              </div>
            </div>
            <div class="tab-pane fade" id="precios">
              <table class="table">
                <thead>
                  <tr>
                    <th>Desde</th>
                    <th>Hasta</th>
                    <th align="right"><strong>A partir de:</strong></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>01/01/2014</td>
                    <td>04/04/2014</td>
                    <td align="right"><strong>60,00€</strong></td>
                  </tr>
                  <tr>
                    <td>05/04/2014</td>
                    <td>02/11/2014</td>
                    <td align="right"><strong>80,00€</strong></td>
                  </tr>
                  <tr>
                    <td>03/11/2014</td>
                    <td>31/12/2014</td>
                    <td align="right"><strong>70,00€</strong></td>
                  </tr>
                </tbody>
              </table>
              <small>* Precios por persona/noche en habitación doble.<br>
              Todos los precios <u>incluyen</u>: habitación con baño privado y desayuno, gastos administrativos de reserva, IVA e impuestos.<br>
              <em>Precios en habitaciones triples, cuádruples y precios para niños hasta 8 años a consultar</em></small>
              <p>&nbsp;</p>
              <h3>Tipo de Alojamiento:</h3>
              <p>Bed and Breakfast en pueblos o aldeas.</p>
              <h3>Precio B&amp;B:</h3>
              <p> Desde 540,00 € por persona (mín. 2 personas)</p>
              <h3>Días: </h3>
              <p>Mínimo 8 (Ideal TOUR 15 días)</p>
              <p class="small">Aconsejamos elegir la combinación de 15 días que es un tiempo razonable para visitar la isla con calma.</p>
              <h3>Meses Aconsejados:</h3>
              <p>Marzo, Abril, Mayo, Junio, Julio (1ª mitad), Agosto (desde el 25), Septiembre, Octubre, Noviembre, Diciembre.</p>
              <p>La Reservas para Agosto serán tramitadas hasta máximo el mes de Mayo del2014</p>
              <p>No aconsejamos planear el viaje desde el 5 hasta el 24 de Agosto porqué es la única temporada en la que la isla se llena totalmente y no es agradable viajar y visitar lugares y playas. Consideramos mucho más ‘sostenible’ elegir meses como Junio o Septiembre</p>
              <h3>El Precio incluye:</h3>
              <p>Alojamiento en habitación doble, Desayuno, Coche de alquiler categoría B (i), Gastos administrativos, management fee, IVA e impuestos.</p>
              <h3>El Precio NO incluye:</h3>
              <p>vuelos (ii), seguro de viaje (ii), comidas, cenas y otros gastos personales.</p>
              <p>(i) El contrato del coche incluye: kilometraje ilimitado, seguro a terceros, cdw, cobertura contra robo, tasas de aeropuerto y todos los impuestos locales. El precio también incluye el Seguro a Todo Riesgo y de REEMBOLSO FRANQUICIA tramitado a través nuestro broker de autos</p>
              <p>(ii) Bajo petición de los clientes es posible tramitar vuelos y seguros de cancelación y/o asistencia en cuanto disponemos de buenos acuerdos con algunas de las mejores compañías del sector.</p>
              <h3>Opciones y Extras:</h3>
              <p>Es posible contratar por separado algunas de las actividades (excursiones, etc...) que proponemos cuando estas estén hechas en las proximidades de uno de los alojamientos sugeridos.</p>
              <p><strong>IMPORTANTE: </strong><br>
                Para que todo quede claro no olvides de leer detenidamente nuestras condiciones de contratación aunque es la parte más aburrida del contenido de esta página Web.</p>
            </div>
            <div class="tab-pane fade in" id="reserva">
              <?php include_once (TEMPLATEPATH . '/inc/order.php' );?>
            </div>
            <div class="tab-pane fade in" id="amigo">
              <?php include_once (TEMPLATEPATH . '/inc/amigo.php' );?>
            </div>
            <div class="tab-pane fade" id="dropdown1">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
            </div>
            <div class="tab-pane fade" id="dropdown2">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
            </div>
          </div>
        </div>
      </main>
      <div class="col-md-6 col-sm-6 col-xs-12 sidebar text-muted" >
        <div class="map">
          <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps/ms?msa=0&amp;msid=215173641100353389040.0004b92da726a752cf11d&amp;ie=UTF8&amp;ll=37.587412,14.078637&amp;spn=1.033786,2.530289&amp;t=m&amp;output=embed"></iframe>
        </div>
        
        <!-- Slider Fotorama --> 
        <!--<div class="fotorama" data-max-width="100%" data-nav="thumbs" data-allowfullscreen="true" data-loop="true"> <img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/80.jpg" data-caption="Foto 1 descripcion"> <img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/internolume.jpg" data-caption="Foto 2 descripcion"> <img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/cameralume2.jpg" data-caption="Foto 5 descripcion"> <img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/colazionealume.jpg" data-caption="Foto 7 descripcion"> <img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/bagnolume.jpg" data-caption="Foto 8 descripcion"> <img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/cameralume.jpg" data-caption="Foto 9 descripcion"> <img src="http://gnaziu.shinesicily.com/Media/Agenzia_2/Strutture/Struttura_178/Images/Normal/61.jpg" data-caption="Foto 10 descripcion"> </div> --> 
        <!-- /.slider -->
        
        <div class="sidebar">
          
          <h3>Otras rutas por <?php echo $destino; ?></h3>
          <?php foreach ($data[$destino]['rutas'] as $value) { ?>
          <div class="row list linkable">
            <div class="col-md-2 col-sm-2 col-xs-2 offset-0"><img src="http://www.shinesicily.com/images/<?php echo $destino; ?>-a-tu-aire.jpg"  class="img-rounded img-responsive"></div>
            <div class="col-md-10 col-sm-10 col-xs10 description">
              <h2><a href="/trinakria/ruta/?ruta=<?php echo $value; ?>"><?php echo $value; ?></a></h2>
              <span class="text-muted">Un viaje a tu medida</span> </div>
          </div>
          <?php } ?>
          <div class="spacer"></div>
          <a class="btn btn-warning" data-spy="affix" data-offset-top="700" href="/trinakria/rutas/">&laquo; Rutas por <?php echo $destino; ?></a>
          
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/condiciones-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/politica-modal.php' );?>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
