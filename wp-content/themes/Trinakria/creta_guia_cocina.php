<?php 
/* Template Name: Guia Creta Cocina */
get_header();
$destino="Creta";
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=3; include_once (TEMPLATEPATH . '/inc/menu-sub-creta.php' );?>

      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
        <h1>La Cocina de Creta</h1>

<p>La Gastronomía de Creta es sin duda alguna unas de las razones para viajar a esta maravillosa isla del Mediterráneo. Es una cocina muy sana, rica en verduras y basada en el aceite de oliva, esto también porque Creta es el lugar con más olivares de toda Grecia (la isla produce hasta el 70% de todo el aceite griego!).</p>

<p>Toda la mejor gastronomía de Creta la podréis probar en los tradicionales <font color="#FF7F00">Kafenion</font> y en las famosas <font color="#FF7F00">Tabernas</font>, los restaurantes griegos, donde es típico pedir varios platos, ponerlos en el medio de la mesa y comerlos todos entre todos, el tapeo en los restaurantes griegos es muy importante. Para los Griegos compartir una comida con otros es una costumbre profundamente arraigada. La atmósfera que se respira en las tabernas de Creta es muy relajada, simple, sin formalismos y a menudo hay músicos tocando la música tradicional cretense con el laúd; </p>

<p>Durante vuestro viaje a Creta algunos de los platos que, sin duda, estarán presentes en vuestra mesa son:</p>

<p>
<strong>Dakos</strong> (pan duro mojado con agua, tomate rallado, aceite y queso tipo burgos)<br/>
<strong>Fava</strong> (habas batidas con cebolla y aceite)<br/>
<strong>Agria Xorta</strong> (verdura salvaje; hay varios tipos dependiendo de la época, normalmente hervida y servida sencillamente con aceite, sal y limón)<br/>
<strong>Biftekia</strong> (una hamburguesa tipo kebab, normalmente aromatizada con ajo y <strong>menta</strong>)<br/>
<strong>Paidákia</strong> (chuletas de cordero)<br/>
<strong>Gemistá</strong> (tomates, pimientos o calabacines rellenos de arroz)<br/>
<strong>Kolokithoanthoi</strong> (Flores de calabacín rellenas de arroz y hierbas)<br/>
<strong>Horiátiki</strong> (Ensalada griega con tomates, pepinos, pimientos verdes, aceitunas, cebolla y feta, aliñada con aceite de oliva y orégano)<br/>
<strong>Mousakás</strong> (típico plato Griego que de todas maneras podéis encontrar en Creta también hecho de carne picada alternada a estratos de berenjenas, patatas, todo cubierto por bechamel)</p>

<p>En Creta también se puede comer el pescado aunque su mar no ofrece una buena pesca (contrariamente a lo que se podría pensar) y seguramente la comida campesina y de carne es más importante y auténtica que la de mar.</p>
<br/>

<center>
<div class="main container bgcolor">
  <div class="row">
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/creta/guia/cocina/personas_Creta2.JPG" class="img-rounded img-responsive"/>
	</div>

	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/creta/guia/cocina/particular taverna.JPG" class="img-rounded img-responsive"/>
	</div>
  </div>

<br/>
  <div class="row">
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/creta/guia/cocina/comida_Creta1.JPG" class="img-rounded img-responsive"/>
	</div>
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/creta/guia/cocina/taberna.JPG" class="img-rounded img-responsive"/>
	</div>
  </div>
</div>
</center>


<div class="spacer"/>

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
