<?php 
/* Template Name: Contact */
get_header();
?>

<div class="container nopadding shadow"> 
  
  <!-- Main -->
  <div class="container shadow">
    <div class="row">
      <main class="main main-left col-md-8 col-sm-8 col-xs-12">
        <h1>Contacta con nosotros</h1>
        <p>Bienvenido a la página de contacto de los viajes organizados por Trinakria Tours! Elige el <strong>circuito o servicio que más te gusta</strong> e indica <strong>las fechas en las cuales quieres viajar</strong> y te enviaremos un presupuesto en 24/48 horas. </p>
        <?php include_once (TEMPLATEPATH . '/inc/order.php' );?>
      </main>
      <div class="col-md-4 col-sm-4 col-xs-12 sidebar">
        
          <div class="row skype">
          
          
          ¡Llamanos con Skype!
          
          <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
<div id="SkypeButton_Call_trinakriatours_1">
  <script type="text/javascript">
    Skype.ui({
      "name": "call",
      "element": "SkypeButton_Call_trinakriatours_1",
      "participants": ["trinakriatours"],
      "imageColor": "blak",
      "imageSize": 24
    });
  </script>
</div>


          
       
        </div> 
        <p>Teléfono Fijo: <em><br>
          </em><strong><a href="tel:/trinakria/quienes-somos/">0034 93 514 78 31</a></strong> </p>
        <p>Teléfono Móvil: <br>
          <strong><a href="tel:0034 667 798 227">0034 667 798 227</a></strong><br>
        </p>
        <p><strong>Reuniones:</strong><br>
          Estaremos encantados de recibiros para hablar de vuestro viaje (ofrecemos asesoramiento personal a todos aquellos que ya han contratado el viaje a través nuestra página Web) y os recordamos que para citas en nuestras oficinas <strong>se ruega concertarlas previamente</strong> llamando al 667 798 227 o escribiéndonos un email a <a href="mailto:info@zagaratravel.com" target="_blank"><strong>info@zagaratravel.com</strong></a>. </p>
        <p><strong>Oficinas TRINAKRIA TOURS</strong>: <br>
          C) de Santa Anna 28 1º 2ª (centro DESPAIS)<br>
          08002 BARCELONA</p>
        <p><a href="/trinakria/quienes-somos/"><strong>Sobre Nosotros</strong></a></p>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
