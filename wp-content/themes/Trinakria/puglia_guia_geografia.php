<?php 
/* Template Name: Guia Puglia Geografia */
get_header();
$destino="Puglia";
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <?php $submenu=3; include_once (TEMPLATEPATH . '/inc/menu-sub-puglia.php' );?>

      <main class="main main-left col-md-9 col-sm-9 col-xs-12">

<h1>Geografía de Puglia</h1>
<p>Puglia es la región más oriental de Italia y se extiende por 19.357,00 km2 ocupada en su mayoría por llanuras y alguna suave colina. Las pocas montañas se concentran sobre todo al norte de la región y en el límite con la Campania. Las alturas más importantes de Puglia son el Monte Vulture y los Montes Daunos y en el promontorio del Gargano dónde está la foresta umbra. La llanura más destacada es el Tavoliere delle Puglie, a los pies del promontorio del Gargano, una de las llanuras con más producción agrícola de toda Italia.</p>

<p>Al sur hay la península salentina (el tacón de italia), ribereña de los mares Adriático (al noreste) y Jónico al este y al sur. En la costa norte de Puglia está como rasgo notable una prominencia o península redondeada llamada Testa (cabeza) del Gargano. Por el suroeste limita con el amplio Golfo de Taranto. En la zona en que se tocan el Adriático y el Jónico se ubica el Canal de Otranto, que separa esta parte de Italia de la península de los Balcanes. Las islas de Puglia son el pequeño archipiélago de las Tremiti y el islote de Pianosa, ubicados en el Mar Adriático.</p>

<p>Apulia es una región muy árida. Los principales ríos son el Fortore, el Candelaro, el Cervaro y el Ofanto. Sus pocos ríos son torrenciales y se encuentran en el Tavoliere. En el resto de lugares, el agua de lluvia se filtra por el lecho de caliza para formar cursos subterráneos de agua que afloran cerca de la costa. El agua subterránea es por lo tanto abundante, y hay muchas cuevas y hoyos. La cuevas en Castellana Grotte son particularmente espectaculares.</p>

<p>Geográficamente la región se divide (de norte a sur) por: Daunia y Gargano, las Murgie, el Valle d'Itria y el Salento.</p>

<br/>

<div class="main container">
  <div class="row">
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/geografia/barco_polignano a mare.png" class="img-rounded img-responsive"/>
	</div>
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/geografia/campo_puglia.png" class="img-rounded img-responsive"/>
	</div>
  </div>

<br/>
  <div class="row">
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/geografia/Paisaje_puglia_andria.png" class="img-rounded img-responsive"/>
	</div>
	<div class="col-md-4 col-sm-4">
<img src="<?php bloginfo('template_directory'); ?>/img/puglia/guia/geografia/Porto Selvaggio_Puglia_Trinakria Tours.JPG" class="img-rounded img-responsive"/>
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
