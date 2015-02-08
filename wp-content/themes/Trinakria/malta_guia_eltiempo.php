<?php 
/* Template Name: Guia Malta ElTiempo */
get_header();
$destino="Malta";
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=3; include_once (TEMPLATEPATH . '/inc/menu-sub-malta.php' );?>


      <div class="sidebar col-md-2 col-sm-2 col-xs-2">
<img src="<?php bloginfo('template_directory'); ?>/img/malta/guia/eltiempo/La Valletta bay.JPG" class="img-rounded img-responsive"/>
<br/>

<img src="<?php bloginfo('template_directory'); ?>/img/malta/guia/eltiempo/salinas_Gozo2.JPG" class="img-rounded img-responsive"/>
<br/>

<img src="<?php bloginfo('template_directory'); ?>/img/malta/guia/eltiempo/the blue window_malta.jpg" class="img-rounded img-responsive"/>
<br/>

<img src="<?php bloginfo('template_directory'); ?>/img/malta/guia/eltiempo/Victoria Gozo.JPG" class="img-rounded img-responsive"/>
<br/>
	</div>
      <main class="main main-left col-md-7 col-sm-7 col-xs-12">

<h1>El Tiempo en Malta</h1>

<p>En la zona sur del Mediterráneo el tiempo es muy estable y muy agradable, perfecto para unas vacaciones en casi cualquier época del año. Malta posee <a href="#"><em>un clima seco casi todo el año</em></a>, únicamente en los meses centrales del invierno (diciembre, enero y febrero) se nota humedad y llueve algo.</p>

<p>El viento añade sequedad al ambiente reduciendo en la práctica las estaciones a dos, el corto invierno, con temperaturas que, sin embargo, no suelen bajar de 15 grados de media (en invierno algunos días se llega a 5º) y el largo verano donde incluso en octubre podemos tener 25º de media.</p>
 
<p>En pleno verano, (junio, julio y agosto) las medias se acercan a los 30º. Llueve muy poco y sobre todo en invierno, poco más de cincuenta días al año.</p>
 
<p>Para saber más sobre el clima y las temperaturas en Malta se puede consultar la  web de: <a href="http://www.accuweather.com/es/mt/valletta/233779/weather-forecast/233779">AccuWeather</a></p>
 
<p>Malta posee un clima perfecto para unas vacaciones desde marzo a octubre. Ambos extremos del periodo (<a href="#"><em>abril</em></a>, <a href="#"><em>mayo</em></a>, <a href="#"><em>septiembre</em></a> y <a href="#"><em>octubre</em></a> son ideales ya que las temperaturas son muy agradables y cálidas y el tiempo estable. En julio y agosto, además de ser la temporada alta y de mayor afluencia, es la época del año con mayor calor. Por eso, si no aguantas bien las altas temperaturas es mejor que planees tu viaje un poco antes o un poco después.</p>
	<center><img src="<?php bloginfo('template_directory'); ?>/img/malta/guia/eltiempo/0-promedio de temperaturas en Malta.png" class="img-rounded img-responsive"/></center>

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
		<li class="linkable"><a href="<?php echo site_url();?>/malta/como-llegar/">Como llegar a Malta</a></li>
		</ul>
	   </div>
          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Malta</h3>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/malta/rutas/malta-a-tu-aire/">Malta a tu aire</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/malta/rutas/malta-con-encanto/">Malta con encanto</a></li>
		</ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
