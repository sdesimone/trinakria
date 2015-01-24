<?php 
/* Template Name: Guia Puglia ElTiempo */
get_header();
$destino="Puglia";
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=3; include_once (TEMPLATEPATH . '/inc/menu-sub-puglia.php' );?>

      <div class="sidebar col-md-2 col-sm-2 col-xs-2">

<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/tiempo/El Tiempo_Puglia1.png" class="img-rounded img-responsive"/><br/>
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/tiempo/El Tiempo_Puglia2.png" class="img-rounded img-responsive"/><br/>
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/tiempo/El Tiempo_Puglia3.png" class="img-rounded img-responsive"/><br/>
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/tiempo/El Tiempo_Puglia4.png" class="img-rounded img-responsive"/><br/>


	</div>
      <main class="main main-left col-md-7 col-sm-7 col-xs-12">
<h1>El Tiempo en Puglia</h1>
<p>El clima de Puglia es el típico de las regiones del mediterráneo. La temperatura media es de 17º. Generalmente templado, en el otoño y en la primavera cuenta con estaciones particularmente agradables mientras que en el verano la temperatura sube mucho sobre todo en la parte sur de Puglia. La ventilación procedente del este permite una buena circulación de aire también en las grandes ciudades. El Norte, la zona del Gargano, suele ser la más fría y lluviosa de la región. Las principales ciudades de Puglia son Foggia, Bari, Brindisi y Lecce de norte a sur. </p>

<p>El clima mediterráneo de Puglia la rinde ideal para viajes a lo largo de todo el año. </p>

<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/tiempo/0-Promedio de temperaturas en Puglia.png" class="img-rounded img-responsive"/><br/>
      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        <div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> 
		<h3>Secciones destacadas</h3>

		<ul class="widget">
			  <li class="linkable"><a href="#">Conoce a Trinakria Tours</a></li>
			  <li class="linkable"><a href="#">Nuestro Equipo</a></li>
			  <li class="linkable"><a href="#">Preguntas Frecuentes</a></li>
			  <li class="linkable"><a href="#">Nuestros Clientes dicen…</a></li>
			  <li class="linkable"><a href="#">Como llegar a Puglia</a></li>
		</ul>
	   </div>
          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Puglia</h3>

		<ul class="widget">
			  <li class="linkable"><a href="#">Puglia a tu aire</a></li>
			  <li class="linkable"><a href="#">Puglia Rural</a></li>
			  <li class="linkable"><a href="#">Puglia con Encanto</a></li>
		</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
