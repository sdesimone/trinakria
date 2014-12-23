<?php 
/* Template Name: Guia Cerdena Geografia */
get_header();
$destino="Cerdeña";
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=3; include_once (TEMPLATEPATH . '/inc/menu-sub-cerdena.php' );?>
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
        <h1>Geografía de Cerdeña</h1>

	<img src="<?php bloginfo('template_directory'); ?>/img/cerdena/guia/2-Geografia/0-Mapa_Geografía_Cerdeña.png" class="img-rounded img-responsive"/>
<p>Cerdeña tiene forma de huella de pie y por eso, los griegos antes y los romanos después, la llamaron "Ichnusa" que significa "forma de pie".</p>

<p>La capital de Cerdeña es Cagliari. La región tiene ocho provincias: <a href="#">Cagliari</a>, <a href="#">Sassari</a>, <a href="#">Nuoro</a>, <a href="#">Oristano</a>, <a href="#">Olbia-Tempio</a>, <a href="#">Ogliastra</a>, <a href="#">Carbonia-Iglesias</a> y <a href="#">Medio Campidano</a>. </p> 

<p>Cerdeña es, por su extensión, la segunda isla más grande del Mediterráneo después de Sicilia.</p>

<p>Más del 80% del territorio de Cerdeña es colinar y montañoso y sólo el 18% esta formado por llanura. El sistema montañoso más alto es el del "Gennargentu" que comprende las montañas Punta La Marmora (1.834m), Punta Erbas Irde (1.676m), Punta Paolino (1.792m) y Bruncu Spina (1.829m). La llanura se encuentra solo en la parte sur-oeste de la isla.</p>

<p>Está a 187 km de la costa italiana y a 184 km de la de Túnez; 11 km separan Cerdeña de la isla de Córcega a través del estrecho llamado "Le bocche di Bonifacio".</p>

<p>La mayor característica de sus costas es la grande presencia de golfos que la rinden variada e muy diferente de un lado al otro. Los más emblemáticos son el de la Asinara al norte, el golfo de Orosei al este, el de Cagliari al sur, y de Oristano (la península del Sinis) al oeste. </p>

<p>La isla de Cerdeña está rodeada por muchas islas e islotes. Merece la pena visitar por lo menos una de estas: Asinara, San Pietro, Sant’Antioco, Tavolara, y el archipiélago de la Magdalena, con Caprera.</p>

      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar" >
        <div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-4  offset-0  offset-xs"> 
		<h3>Secciones destacadas</h3>

		<ul class="widget">
			  <li class="active"><a href="#">Conoce a Trinakria Tours</a></li>
			  <li class="active"><a href="#">Nuestro Equipo</a></li>
			  <li class="active"><a href="#">Preguntas Frecuentes</a></li>
			  <li class="active"><a href="#">Nuestros Clientes dicen…</a></li>
			  <li class="active"><a href="#">Como llegar a Cerdeña</a></li>
		</ul>
	   </div>
          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Cerdeña</h3>

		<ul class="widget">
			  <li class="active"><a href="#">Cerdeña a tu aire</a></li>
			  <li class="active"><a href="#">Cerdeña Rural</a></li>
			  <li class="active"><a href="#">Cerdeña con Encanto</a></li>
		</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
