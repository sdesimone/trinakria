<?php 
/* Template Name: Guia Creta ElTiempo */
get_header();
$destino="Creta";
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=3; include_once (TEMPLATEPATH . '/inc/menu-sub-creta.php' );?>

      <div class="sidebar col-md-2 col-sm-2 col-xs-2">
<img src="<?php bloginfo('template_directory'); ?>/img/creta/guia/eltiempo/DSC_0942.jpg" class="img-rounded img-responsive"/>
<br/>

<img src="<?php bloginfo('template_directory'); ?>/img/creta/guia/eltiempo/DSC_1468.jpg" class="img-rounded img-responsive"/>
<br/>

<img src="<?php bloginfo('template_directory'); ?>/img/creta/guia/eltiempo/DSC_1478.jpg" class="img-rounded img-responsive"/>
<br/>

<img src="<?php bloginfo('template_directory'); ?>/img/creta/guia/eltiempo/DSC_1961.jpg" class="img-rounded img-responsive"/>
<br/>




	</div>
      <main class="main main-left col-md-7 col-sm-7 col-xs-12">
        <h1>El tiempo en Creta</h1>
<p>El tiempo en Creta es <strong>Mediterráneo</strong>, aunque dependiendo de la zona de la isla cambia bastante, más húmedo en el norte, más seco en el sur (casi sub-tropical), debido a los vientos del oeste.</p>

<p>Las temperaturas varían a lo largo del año aunque en la costa se mantienen bastante suaves todo el invierno y más bien cálidas en primavera, verano (con picos de 40º) y otoño.</p>

<p>Para ver el clima de Creta consultar la web: <a href="http://www.accuweather.com/es/us/crete-ne/68333/weather-forecast/334404" target="blank">AccuWeather</a></p>

<p>Creta, gracias a su clima agradable y típicamente mediterráneo, es un lugar ideal para organizar viajes durante todo el año.</p> 

	<center><img src="<?php bloginfo('template_directory'); ?>/img/creta/guia/eltiempo/0-promedio de temperaturas en Creta.png" class="img-rounded img-responsive"/></center>

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
		<li class="linkable"><a href="<?php echo site_url();?>/creta/como-llegar/">Como llegar a Creta</a></li>
		</ul>
	   </div>
          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Creta</h3>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/creta/rutas/creta-a-tu-aire/">Creta a tu aire</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/creta/rutas/creta-rural/">Creta rural</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/creta/rutas/creta-con-encanto/">Creta con encanto</a></li>
		</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
