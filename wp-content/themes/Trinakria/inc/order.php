<?php
if(isset($_POST['Mail'])) {
$emailTo = 'ajl@xarop.com';
$name = $_POST['Nombre'].' '.$_POST['Apellidos'];
$email = $_POST['Mail'];
$subject = 'Contacto Web '.$name;
$message = $_POST['Mensaje'];
		
$body="
$name
$email

Mensaje:
$message

";
$headers = 'From: '.$name.' <'.$emailTo.'>' . '\r\n' . 'Reply-To: ' . $email;
mail($emailTo, $subject, $body, $headers);
?>

<h2>Formulario enviado</h2>
<p>En breve nos pondremos en contacto contigo.</p>
<?php } else {?>
<form id="contactus" name="contactar" method="post" action="<?php the_permalink(); ?>" role="form">
  
  <div class="form-group">
    <fieldset id="contacto">
      <legend class="select">Elige tu tour</legend>
      <select name="Tipo-de-Viaje" id="Tipo-de-Viaje" class="form-control">
        <option value="">Elige una opción...</option>
        <option disabled="" value="">&nbsp;</option>
        <option value="CERDENA A TU AIRE">CERDEÑA A TU AIRE</option>
        <option value="CERDENA RURAL">CERDEÑA RURAL</option>
        <option value="CERDENA CON ENCANTO">CERDEÑA CON ENCANTO</option>
        <option disabled="" value="">&nbsp;</option>
        <option value="PUGLIA A TU AIRE">PUGLIA A TU AIRE</option>
        <option value="PUGLIA RURAL">PUGLIA RURAL</option>
        <option value="PUGLIA CON ENCANTO">PUGLIA CON ENCANTO</option>
        <option disabled="" value="">&nbsp;</option>
        <option value="CRETA A TU AIRE">CRETA A TU AIRE</option>
        <option value="CRETA RURAL">CRETA RURAL</option>
        <option value="CRETA CON ENCANTO">CRETA CON ENCANTO</option>
        <option disabled="" value="">&nbsp;</option>
        <option value="MALTA A TU AIRE">MALTA A TU AIRE</option>
        <option value="MALTA CON ENCANTO">MALTA CON ENCANTO</option>
        <option disabled="" value="">&nbsp;</option>
        <option value="Alojamienstos Cerdena">Alojamientos Cerdeña</option>
        <option value="Alojamienstos Puglia">Alojamientos Puglia</option>
        <option value="Alojamienstos Creta">Alojamientos Creta</option>
        <option value="Alojamienstos Malta">Alojamientos Malta</option>
        <option disabled="" value="">&nbsp;</option>
        <option value="Tours en Sicilia">Tours en Sicilia</option>
      </select>
    </fieldset>
  </div>
  <input name="invia" type="hidden" id="invia" value="si">
  <div class="form-group">
    <fieldset id="contacto">
      <legend class="select">Datos de contacto del solicitante</legend>
      <div class="row">
        <div class="col-md-6">
          <label for="Nombre">Nombre: </label>
          <input id="Nombre" type="text" name="Nombre" title="Escribe tu nombre"  class="form-control" required>
          <p class="help-block"></p>
        </div>
        <div class="col-md-6">
          <label for="Apellidos">Apellidos:</label>
          <input id="Apellidos" type="text" name="Apellidos" title="Escribe tus apellidos"  class="form-control">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <label for="Mail">Email:</label>
          <input id="Mail" type="email" name="Mail" title="Escribe tu dirección de correo electrónico"  class="form-control" required>
          <p class="help-block"></p>
        </div>
        <div class="col-md-6">
          <label for="_Telefono"> Teléfono: </label>
          <input id="_Telefono" type="tel" name="_Telefono" title="Escribe tu número de teléfono"  class="form-control">
        </div>
      </div>
    </fieldset>
  </div>
  <div class="form-group">
    <fieldset id="viajeros">
      <legend class="select">Número de viajeros</legend>
      <div class="row">
        <div class="col-md-4">
          <label for="Adultos">Adultos:</label>
          <select name="Adultos" id="Adultos"  class="form-control">
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="Ninos">Niños <small>(4-8)</small>:</label>
          <select name="Ninos" id="Ninos"  class="form-control">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="Bebes">Bebés <small>(0-4)</small>:</label>
          <select name="Bebes" id="Bebes"  class="form-control">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>
        </div>
      </div>
    </fieldset>
  </div>
  <div class="form-group">
    <fieldset id="fechas">
      <legend class="select">Fechas del viaje</legend>
      <div class="form-group row">
        <div class="col-md-6">
        <label for="start">Fecha entrada:</label>
          <input type="date" class="form-control" name="start"  placeholder="Fecha entrada"/>
        </div>
        <div class="col-md-6">
        <label for="end">Fecha salida:</label>
          <input type="date" class="form-control" name="end" placeholder="Fecha salida"/>
        </div>
      </div>
    </fieldset>
  </div>
  <div class="form-group">
    <fieldset id="contacto">
      <legend class="select">Comentarios y extras:</legend>
      <p>Por favor usa el campo de comentarios para detallarnos bien qué tipo
        de viaje os gustaría hacer. Describirnos bien cuales son vuestra
        exigencias <strong>nos ayudará mucho</strong> a ofreceros un servicio mejor. </p>
      <div>
        <label for="Nombre">Explícanos el viaje que te gustaría hacer:</label>
        <br>
        <textarea name="Mensaje" cols="30" rows="10" id="Mensaje" placeholder="Por favor danos cuantos más detalles posibles: fechas, temporada, si ya tenéis vuelos o de que ciudad queréis salir, etc, etc..." class="form-control"></textarea>
      </div>
    </fieldset>
  </div>
  <div class="form-group">
    <fieldset id="mas_detalles" onclick="javascript:showDetalles(this);">
      <legend>Más detalles (opcional)</legend>
      <a data-toggle="collapse"  href="#collapseOne"> ¡HAZ CLICK AQUÍ! para darnos má detalles de tu viaje </a>
      <div id="collapseOne" class="collapse"> <br/>
        <?php include_once (TEMPLATEPATH . '/inc/order-more.php' );?>
      </div>
    </fieldset>
  </div>
  <div class="form-group">
    <fieldset id="finalizar">
      <legend class="select">Finalizar</legend>
      <div class="form-group">
        <label for="condiciones" class="control-label">
          <input type="checkbox" id="condiciones" name="condiciones" value="checkbox">
	  *He leído y acepto las 
<a href="<?php bloginfo('template_directory'); ?>/inc/condiciones.php" onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/condiciones.php','popup','width=700,height=700,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false"> Condiciones de Contratación</a>
</label>
      </div>


      <div class="form-group">
        <input type="submit" name="send" id="send" value="Enviar"  class="btn btn-warning .btn-lg">
      </div>
      <div id="proteccion  class="form-group""> 
<a href="#"  data-toggle="modal" data-target="#Politica" class="text-muted">
<a class="text-muted" href="<?php bloginfo('template_directory'); ?>/inc/politica.php" onclick="window.open('<?php bloginfo('template_directory'); ?>/inc/politica.php','popup','width=700,height=700,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false"><small>Política de protección de los datos personales</small>
</a>
</div>
    </fieldset>
  </div>
</form>
<?php } ?>
