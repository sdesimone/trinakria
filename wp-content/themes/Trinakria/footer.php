<!-- Fotter -->

<footer>
  <div class="container text-muted">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <h3>Nuestros Tours</h3>
        <ul class="widget">
	<li><a href="<?php echo site_url();?>/sicilia/" target="blank">Sicilia</a> </li>
          <li><a href="<?php echo site_url(); ?>/cerdena/">Cerdeña</a> </li>
          <li><a href="<?php echo site_url(); ?>/puglia/">Puglia</a></li>
          <li><a href="<?php echo site_url(); ?>/creta/">Creta</a></li>
          <li><a href="<?php echo site_url(); ?>/malta/">Malta</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-sm-4">
        <h3>Conócenos mejor</h3>
        <ul class="widget">
          <li><a href="<?php echo site_url(); ?>/quienes-somos/">Trinakria Tours</a> </li>
          <li><a href="<?php echo site_url(); ?>/nuestro-equipo/">Nuestro Equipo</a> </li>
          <li><a href="<?php echo site_url(); ?>/filosofia/">Filosofia</a> </li>
          <li><a href="<?php echo site_url(); ?>/testimonios/">Nuestros clientes dicen...</a></li>
          <li><a href="<?php echo site_url(); ?>/faqs/">Preguntas frecuentes</a></li>
        </ul>
      </div>
      <div class="col-md-4  col-sm-4">
        <h3>Contacta y sigue</h3>
        <ul class="widget">
          <li><a href="<?php echo site_url(); ?>/contactar/">Formulario de contacto</a> </li>
          <li><a href="<?php echo site_url(); ?>/oficinas/">Oficinas</a> </li>
          <li><a href="http://www.facebook.com/trinakriatours/" target="_blank">Facebook</a></li>
          <li><a href="https://plus.google.com/+TrinakriaToursBarcelona"  target="_blank">Google+</a></li>
          <li><a href="https://twitter.com/hashtag/Pasi%C3%B3nMediterr%C3%A1nea" target="_blank">#PasiónMediterránea</a></li>
          <!--<li><a href="mailto:info@zagaratravel.com">info@zagaratravel.com</a></li> -->
        </ul>
      </div>
    </div>
  </div>
  <div class="badges">
    <div class="container text-center text-muted">
      <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.es_ES" target="_blank" title="Zágara Travel de Trinakria Tour está bajo una licencia Creative Commons."><img alt="Licencia de Creative Commons" style="border-width:0" src="<?php bloginfo('template_directory'); ?>/img/b-cc.png" /></a><p class="visible-xs">
          <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">ZágaraTravel</span> bajo una licencia <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons</a>. </p>
	 <a href="http://www.acave.travel/es/node/8120" target="_blank" title="Trinakria Tours es miembro de ACAVE: asociación corporativa de agencias de viajes especializadas."><img src="<?php bloginfo('template_directory'); ?>/img/b-acav.png"><p class="visible-xs"> Agencia de Viajes miembro de ACAV</p></a>
	<a href="http://www.lonelyplanet.es/" target="_blank" title="Web recomendada por Lonely Planet en la Guía de Sicilia. De 2008 en adelante."><img src="<?php bloginfo('template_directory'); ?>/img/b-lonely.png"> <p class="visible-xs">
          Web recomendada por Lonely Planet</p></a>

</div>
  </div>
  <div class="bottom">
    <div class="container text-muted">
      <p class="pull-right">Designed by <a href="http://www.xarop.com" target="_blank">xarop.com</a></p>
      <p>&copy; <?php echo date('Y'); ?> Zagaratravel.com 
| <a href="<?php bloginfo('template_directory'); ?>/inc/condiciones.php" rel="shadowbox;player=iframe;width=640;height=480;"> Condiciones de Contratación</a>

| <a href="<?php echo site_url(); ?>/contactar/">Contacta con nosotros</a> | <a href="<?php echo site_url(); ?>/sitemap/">Mapa Web</a> | <a href="mailto:info@zagaratravel.com">info@zagaratravel.com</a></p>     
    </div>
  </div>
</footer>
<!-- /.footer--> 

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/affix.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jqBootstrapValidation.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/fotorama/fotorama.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/affix.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.stickycol.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/custom.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/shadowbox/build/adapter/shadowbox-base.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/shadowbox/build/shadowbox.js"></script> 
<script>
	Shadowbox.loadSkin('trinakria', '<?php bloginfo('template_directory'); ?>/js/shadowbox/src/skin');
  Shadowbox.loadLanguage('en', '<?php bloginfo('template_directory'); ?>/js/shadowbox/src/lang');
  Shadowbox.loadPlayer(['flv', 'html', 'iframe', 'img', 'qt', 'swf', 'wmp'], '<?php bloginfo('template_directory'); ?>/js/shadowbox/src/player');
</script>

<script>
  jQuery(document).ready(function($) {
	
	$("a").each(function(key, val) {
    $(this).attr('title', $(this).text());
	});

	$(".sidebar img").each(function(key, val) {
	$(this).wrap(document.createElement( "a" )).parent().attr('href', $(this).attr('src')).attr('rel', 'shadowbox[Gallery]');
	});

	Shadowbox.init({
//	skipSetup: true
  });

	$(".sidebar").each(function() {
	$(this).stickyColumn();
	});

	});
	
</script>

<script type="text/javascript"> window.onload = function(){ var
	options = { assetURL: "resources/", keysClose: ['c','q','x',27],
	handleUnsupported: 'remove', skin: { main:
	'<div id="shadowbox_overlay"></div>' +
	'<div id="shadowbox_container">' + '<div id="shadowbox">' +
			'<div id="shadowbox_title">' +
				'<div id="shadowbox_title_inner"></div>' + '</div>' +
			'<div id="shadowbox_body">' +
				'<div id="shadowbox_body_inner"></div>' +
				'<div id="shadowbox_loading"></div>' + '</div>' +
			'<div id="shadowbox_toolbar">' +
				'<div id="shadowbox_toolbar_inner"></div>' + '</div>' +
			'</div>' + '</div>', loading: '<img src="{0}" alt="{1}" />' +
	'<span><a href="#">{2}</a></span>', counter:
	'<div id="shadowbox_counter">{0}</div>', close:
	'<div id="shadowbox_nav_close">' + '<a href="#">{0}</a>' + '</div>',
	next: '<div id="shadowbox_nav_next">' + '<a href="#">{0}</a>' +
		'</div>', prev: '<div id="shadowbox_nav_previous">' +
		'<a href="#">{0}</a>' + '</div>' }, }; Shadowbox.init(options);
	};
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-946862-4', 'auto');
  ga('send', 'pageview');

</script>

<?php //include_once (TEMPLATEPATH . '/inc/share.php' );?>


</body></html>
