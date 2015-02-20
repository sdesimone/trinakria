<?php 
/* Template Name: Guia Puglia ComoLlegar */
get_header();
$destino="Puglia";
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=3; include_once (TEMPLATEPATH . '/inc/menu-sub-puglia.php' );?>
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
	<h1>Como llegar a Puglia</h1>

<p>En los últimos años han subido bastante los vuelos directos que llegan a los aeropuertos de Puglia desde España y esto denota un interés siempre mayor por esta región.</p>

<p>Casi todas las compañías con vuelos a Puglia desde los aeropuertos españoles son de bajo o medio coste, si no encuentras la combinación que estás buscando, <a href="<?php echo site_url();?>/contactar">envíanos un mail</a> y te ayudaremos.</p>
  
<strong>CÓMO LLEGAR A PUGLIA EN AVIÓN</strong>

<p>Las compañías principales que vuelan a Puglia desde España son:</p>

<ul>
<li><a href="http://www.ryanair.com/" target="blank">Ryanair</a>: ofrece los vuelos directos <strong>Girona-Brindisi</strong> y <strong>Valencia-Bari</strong></li>
<li><a href="http://www.vueling.com/" target="blank">Vueling</a>: con esta compañía hay el directo <strong>Barcelona-Bari</strong> o sino, haciendo escala en Barcelona, se puede volar a Puglia desde muchos aeropuertos españoles. Otra posibilidad de vuelo directo es coger el <strong>Barcelona-Nápoles</strong> y luego alquilar un coche (unas 2h de autopista)</li>
<li><a href="http://www.volotea.com/" target="blank">Volotea</a>: Solo durante el verano tiene el <strong>Mallorca-Bari</strong> e <strong>Ibiza-Bari</strong></li>
<li><a href="http://www.alitalia.com/" target="blank">Alitalia</a>: ofrece buenas conexiones pero siempre haciendo una escala en Roma o Milán (si se decidiera de volar directo a Roma, desde aquí hasta el primer pueblo de Puglia donde tenemos un alojamiento hay unas 4h de autopista)</li>
<li><a href="http://www.easyjet.com/" target="blank">EasyJet</a>: ofrece conexiones a Bari o Brindisi vía Milán Malpensa (a lo mejor habrá que dormir una noche allí) desde Madrid, Barcelona, Málaga y Baleares</li>
</ul>

<p>Esta es la página web oficial de los aeropuertos de Puglia: </p>

<ul>
<li><a href="http://www.aeroportidipuglia.it/" target="blank">Aeroporti di Puglia</a></li>
</ul>

<p>Puglia cuenta con 4 aeropuertos pero de hecho sólo los de Bari ("Karol Wojtila") y de Brindisi ("Aeropuerto del Salento") tienen conexiones todo el año y vuelos de línea. </p>



<p>CÓMO LLEGAR EN BARCO </p>
 
<p>La mejor conexión es la BARCELONA-CIVITAVECCHIA con <a href="http://www.grimaldi-lines.com/es/" target="blank">GRIMALDI</a>. Una vez llegado a Civitavecchia habrá unas 4 horas y media de coche hasta el primer pueblo de Puglia donde tenemos alojamientos.</p>
<br/>
	

<div class="main container bgcolor">
  <div class="row">
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/comollegar/Ape_Salento.JPG" class="img-rounded img-responsive"/>
	</div>
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/comollegar/bicicleta bianco e nero.JPG" class="img-rounded img-responsive"/>
	</div>
  </div>

<br/>
  <div class="row">
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/comollegar/tren_vapor_italia.png" class="img-rounded img-responsive"/>
	</div>
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/comollegar/Vespa_Lecce_Trinakria Tours.JPG" class="img-rounded img-responsive"/>
	</div>
  </div>
</div>

<br/>

      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        <div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> 
		<h3>Secciones destacadas</h3>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/quienes-somos/">Conoce a Trinakria Tours</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/nuestro-equipo/">Nuestro Equipo</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/faq/">Preguntas Frecuentes</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/testimonios/">Nuestros Clientes dicen…</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/puglia/como-llegar/">Como llegar a Puglia</a></li>
		</ul>
	   </div>
          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Puglia</h3>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/puglia/rutas/puglia-a-tu-aire/">Puglia a tu aire</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/puglia/rutas/puglia-rural/">Puglia Rural</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/puglia/rutas/puglia-con-encanto/">Puglia con Encanto</a></li>
		</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
