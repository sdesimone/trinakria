<?php include_once (TEMPLATEPATH . '/inc/_data.php' );?>
<?php 
/* Template Name: Alojamientos Malta
 */
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
    
    <?php $submenu=2; include_once (TEMPLATEPATH . '/inc/menu-sub-malta.php' );?>
    
    
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
        <h1>Alojamientos en Malta</h1>

<p><strong>Trinakria Tours</strong> siempre escoge sus alojamientos basándose en tres criterios: encanto, belleza del lugar y trato cercano. ¡Para sentirse como en casa en Malta, en <strong>hoteles pequeños, B&amp;B y casas rurales</strong>!</p>

<p>Junto a la exigencia en los servicios, una distribución estratégica es esencial para poder cubrir toda Malta y Gozo. Así, podemos ofrecer alojamientos de todo tipo y en todos los lugares interesantes y atractivos del país.</p>

<p>Los packs que construimos se orientan hacia vacaciones más relajantes y tranquilas, <strong>alejándonos de los circuitos de turismo de masa</strong>. Nuestra filosofía se dirige más hacia el concepto “slow”, que intentamos desarrollar gracias a alojamientos escogidos por esos criterios.</p>

<p>Por ello, aconsejamos pasar <strong>3 noches en cada alojamiento</strong> (con desayuno incluido) para conocer bien a los dueños y a los lugares donde se encuentran. Lugares siempre especiales.</p>

<p>La situación de los alojamiento en Malta y Gozo ha sido elegida de forma estratégica. Cercanos a los lugares que queremos que se descubran, disfrutando de las islas del Mediterráneo, en ambientes tranquilos y placenteros, con total libertad.</p>

        <h2>Mira nuestro catálogo de alojamientos en Malta</h2>
        <ul class="widget">

	  <li class="linkable">
<a href="<?php echo site_url(); ?>/malta/alojamientos/zona-malta"><strong>Isla de Malta </strong></a> La Valletta, capital fortificada de la antigua isla de los Templarios. Las tres ciudades de Cottonera, también amuralladas, al sur de la capital con sus abigarradas calles, y sus estrechos puertos. Mdina, quizá la ciudad más bonita de Malta. Rabat, Mosta o Marsaxlokk el coqueto puerto del sur. Las animadas Sliema, St Julian’s, Paceville Buggiba o Mellieha, completan nuestra oferta de alojamientos. </li>

	  <li class="linkable"><a href="<?php echo site_url(); ?>/malta/alojamientos/zona-gozo"><strong>Isla de Gozo </strong></a> Alojamientos en Victoria, la capital, o en los pueblos pequeños, tranquilos pero animados de Qala, Nadur, Xagra, Għajnsielem o San Lawrenz.
        </ul>


	<div class="row">
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/malta/alojamientos/Alojamientos_Malta_1.JPG" class="img-rounded img-responsive">
		</div>
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/malta/alojamientos/Alojamientos_Malta_2.JPG" class="img-rounded img-responsive">
		</div>
		<div class="col-md-4 col-sm-4">
			<img src="<?php bloginfo('template_directory'); ?>/img/malta/alojamientos/Alojamientos_Malta_3.JPG" class="img-rounded img-responsive">
		</div>
	</div>
<br/>
      </main>
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar text-muted" >
        
		<h3>Secciones destacadas</h3>
		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/faqs">Preguntas Frecuentes</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/testimonios">Nuestros Clientes dicen…</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/malta/guia/como-llegar">Como llegar a Malta</a></li>
		</ul>

          <div class="col-md-12 col-sm-12 col-xs-8 offset-0 offset-xs">
		<h3>Nuestros Tours a Malta</h3>

		<ul class="widget">
		<li class="linkable"><a href="<?php echo site_url();?>/malta/rutas/malta-a-tu-aire">Malta a tu aire</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/malta/rutas/malta-rural">Malta Rural</a></li>
		<li class="linkable"><a href="<?php echo site_url();?>/malta/rutas/malta-con-encanto">Malta con Encanto</a></li>
		</ul>
          </div>

        
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
