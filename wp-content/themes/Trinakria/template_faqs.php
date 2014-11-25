<?php 
/* Template Name: FAQs */
get_header();
$faq =array('¿Suspendisse pellentesque, dui ut egestas tempor, eu placerat leo justo sed dolor?','¿Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget felis tincidunt, pretium turpis non, vulputate tortor?','¿Etiam eget felis tincidunt, pretium turpis non, vulputate tortor?','¿Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid?','¿Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident?','¿Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt?','¿Synth nesciunt you probably haven heard of them accusamus labore sustainable VHS?','¿Proin mauris massa, placerat a fermentum ac, mattis vel urna?','¿Cras vehicula ornare lacus et condimentum. In hac habitasse platea dictumst. Nullam non hendrerit ipsum?','¿Sed in eros id enim faucibus tempor interdum quis est. Etiam dictum diam nec augue convallis fermentum?','¿Phasellus orci augue, iaculis non malesuada ut, tempor a augue. Mauris sollicitudin tortor nibh?');
?>
<style>
.panel .num {
	width: 30px;
	float: left;
	margin-right: 20px;
}
.panel-title a {
	color: #FF7F00;
	display:block;
	width:100%;
	text-decoration:none;
}

.panel:hover {
	border:#FF7F00 1px solid;
}

.panel:hover .panel-heading{
	background:#FFF;
}

.panel a .caret {
	float: right;
	vertical-align: top;
	transform: rotate(180deg);
	-ms-transform: rotate(180deg);
	-webkit-transform: rotate(180deg);
}
.panel a.collapsed .caret {
	transform: rotate(0deg);
	-ms-transform: rotate(0deg);
	-webkit-transform: rotate(0deg);
}
</style>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <main class="main main-left col-md-9 col-sm-9 col-xs-12">
        <h1>Preguntas frecuentes</h1>
        <p>Las 10 preguntas mas consultadas.</p>
  
        <div class="panel-group faqs" id="accordion">
          <?php for ($nfaq = 1; $nfaq <= 10; $nfaq++) { ?>
          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse<?php echo $nfaq; ?>"><span class="num label label-warning"><?php echo $nfaq; ?></span> <span class="caret"></span><?php echo $faq[$nfaq]; ?> </a> </h4>
            </div>
            <div id="collapse<?php echo $nfaq; ?>" class="panel-collapse collapse">
              <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <p>&nbsp;</p>
        <?php include_once (TEMPLATEPATH . '/inc/pagination.php' );?>
      </main>
      
      <div class="col-md-3 col-sm-3 col-xs-12 sidebar" >
        <h3>Preguntas frecuentes</h3>
        <ul class="widget">
          <li class="active">Las 10 Preguntas más consultadas</li>
          <li class="linkable"><a href="#">En el momento de la compra</a></li>
          <li class="linkable"><a href="#">Preparado para el viaje</a></li>
        </ul>
        
        <h3>¿Alguna pregunta más?</h3>
        <p>Si no encuentras la respuestas a tus dudas aquí puedes usar nuestros contactos de atención al cliente y encantados te atenderemos.</p>
        <p><strong>Twitter</strong>: <em><br>
          Usa el hashtag</em> <a href="#"><strong>#trinakriaresponde</strong></a> a <a href="#"><strong>@trinakriatours</strong></a></p>
        <p><strong>Teléfono Fijo</strong>: <br>
          <em>De Lun a Vie te contestamos al</em> <strong><a href="tel:/trinakria/quienes-somos/">93 514 78 31</a></strong> (10-18h)</p>
        <!--<p>Teléfono Móvil: <br>
          <strong><a href="tel:0034 667 798 227">0034 667 798 227</a></strong><br>
        </p> -->
        <p><strong>E mail</strong>:</strong><br>
        <em>El mejor método y más eficaz es escribirnos a </em><a href="mailto:info@zagaratravel.com" target="_blank"><strong>info@zagaratravel.com</strong></a>. </p>
        <!--<p>Formulario: <br>
          <a href="/trinakria/contactar/"><strong>CONTACTAR</strong></a></p> -->
        
      </div>
      
      
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
