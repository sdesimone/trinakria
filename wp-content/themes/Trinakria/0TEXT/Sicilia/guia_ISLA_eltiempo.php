<?php 
/* Template Name: Guia Cerdena ElTiempo */
get_header();
$destino="Cerdeña";
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=3; include_once (TEMPLATEPATH . '/inc/menu-sub-cerdena.php' );?>

      <div class="sidebar col-md-2 col-sm-2 col-xs-2">
<img src="<?php bloginfo('template_directory'); ?>/img/cerdena/guia/tiempo/Arbol_Tiscali_Cerdeña.jpg" class="img-rounded img-responsive"/>
<br/>

<img src="<?php bloginfo('template_directory'); ?>/img/cerdena/guia/tiempo/Archipielago_de_la_Maddalena.jpg" class="img-rounded img-responsive"/>
<br/>

<img src="<?php bloginfo('template_directory'); ?>/img/cerdena/guia/tiempo/Capo_dorso_Cerdeña.jpg" class="img-rounded img-responsive"/>
<br/>

<img src="<?php bloginfo('template_directory'); ?>/img/cerdena/guia/tiempo/cielo.jpg" class="img-rounded img-responsive"/>
<br/>


	</div>
      <main class="main main-left col-md-7 col-sm-7 col-xs-12">
        <h1>El tiempo en Cerdeña</h1>
<p>El clima de Cerdeña es el típico de las regiones del mediterráneo. La temperatura media, entre máximas y mínimas, a lo largo de todo el año es de 17º. Dependiendo de la estación del año en la costa va de 10º a 32º y en el interior, entre 4º y 22º. En el otoño y en la primavera, Cerdeña cuenta con estaciones particularmente agradables e ideales para hacer un viaje, mientras que en el verano las temperaturas pueden subir mucho sobre todo entre mediados de Julio y mediados de Agosto.</p>

	<center><img src="<?php bloginfo('template_directory'); ?>/img/cerdena/guia/tiempo/Promedio_de_temperaturas_en_Cerdeña.png" class="img-rounded img-responsive"/></center>

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
			  <li class="linkable"><a href="#">Como llegar a Cerdeña</a></li>
		</ul>
	   </div>
          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Cerdeña</h3>

		<ul class="widget">
			  <li class="linkable"><a href="#">Cerdeña a tu aire</a></li>
			  <li class="linkable"><a href="#">Cerdeña Rural</a></li>
			  <li class="linkable"><a href="#">Cerdeña con Encanto</a></li>
		</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
