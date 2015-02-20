<?php 
/* Template Name: Guia Malta Geografia */
get_header();
$destino="Malta";
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=3; include_once (TEMPLATEPATH . '/inc/menu-sub-malta.php' );?>

      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
        <h1>Geografía de Malta</h1>

<p>Malta se compone de tres islas, <font color="#FF7F00"><em>Malta</em></font> la mayor, al noroeste se encuentra <font color="#FF7F00"><em>Gozo</em></font>, separada por un pequeño estrecho que los ferries recorren en 20 minutos de travesía. Entre ambas, <font color="#FF7F00"><em>Comino</em></font>, rocosa y bella con la preciosa Blue Lagoon.</p>

<p>Las islas no poseen montañas pero si colinas y acantilados sobre todo en la parte oeste. Pequeñas mesas se alzan entre las llanuras que a veces acaban en los acantilados. El relieve es rocoso y ausente de ríos o lagos permanentes. <font color="#FF7F00"><em>El clima es típicamente mediterráneo</em></font> con veranos muy secos y cálidos e invierno templados donde se concentran las lluvias aunque las temperaturas medias no suelan bajar de 15º. Esto hace que la primavera y el otoño sean veranos suaves ideales para viajar a Malta. El número de días lluviosos al año nunca supera los 60.</p>

<p>La costa este es más recortada y posee bahías donde se asientan las ciudades y pueblos (<font color="#FF7F00"><em>La Valletta</em></font>, <font color="#FF7F00"><em>Sliema</em></font>, <font color="#FF7F00"><em>St Julian's</em></font>, <font color="#FF7F00"><em>Bormla</em></font>, <font color="#FF7F00"><em>Birgu</em></font>, <font color="#FF7F00"><em>L'Isla</em></font>, <font color="#FF7F00"><em>Marsaxlokk</em></font>, <font color="#FF7F00"><em>Mgarr</em></font>) y las principales playas (las bahías de <font color="#FF7F00"><em>Mellieha</em></font>, <font color="#FF7F00"><em>Bubbiba</em></font>, <font color="#FF7F00"><em>St Paul</em></font>, <font color="#FF7F00"><em>Ramla</em></font>)</p>

<p>El interior es más seco y llano. Sin embargo, el paisaje cambia mucho durante el invierno y la primavera donde los tonos ocres y amarillos se ven substituidos por un verde deslumbrante. </p>

<p>Al oeste <font color="#FF7F00"><em>los acantilados de Dingli</em></font> son un balcón inmenso hacia el Mediterráneo. Ideal para ver bellas puestas de sol.</p>

<p>La isla de Gozo está también rodeada de acantilados. El interior es una meseta con algunas colinas, como la de la capital Victoria. Al oeste de Gozo se encuentra el arco natural de <font color="#FF7F00"><em>Azure Window</em></font>, una bella estampa donde rompen las olas y el sol se va cada día.</p>

<p>En Comino se encuentra la famosa <font color="#FF7F00"><em>playa de Blue Lagoon</em></font>.</p>

<p>Las distancias son cortas y se puede recorrer la isla de Malta de norte a sur en media hora.</p>

<br/>

<div class="main container bgcolor">
  <div class="row">
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/malta/guia/geografia/Campo_Malta_Zagara travel.png" class="img-rounded img-responsive"/>
	</div>

	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/malta/guia/geografia/Salinas_Gozo.JPG" class="img-rounded img-responsive"/>
	</div>
	</div>

<br/>

  <div class="row">
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/malta/guia/geografia/The blue lagoon3.JPG" class="img-rounded img-responsive"/>
	</div>

	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/malta/guia/geografia/The blue window_Malta_Trinakria tours.png" class="img-rounded img-responsive"/>
	</div>
</div>

<div class="spacer"></div>

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
