<?php
if(isset($_POST['Mail'])) {
$emailTo = $_POST['Mail2'];
$name = $_POST['Nombre'].' '.$_POST['Apellidos'];
$email = $_POST['Mail'];
$subject = 'Tu amigo '.$name.' te recomienda...';
$message = $_POST['Mensaje'];
		
$body="
$name
$email
$page
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
  <input name="invia" type="hidden" id="invia" value="si">
  <input name="page" type="hidden" id="invia" value="<?php the_permalink(); ?>">
  <div class="form-group">
  <fieldset id="contacto">
      <legend class="select">Recomiedaselo a un amigo</legend>
      <label for="Nombre">Tu Nombre: </label>
      <input id="Nombre" type="text" name="Nombre" title="Escribe tu nombre"  class="form-control" required>
      <p class="help-block"></p>
      <label for="Mail">Tu Email:</label>
      <input id="Mail" type="email" name="Mail" title="Escribe tu dirección de correo electrónico"  class="form-control" required>
      <p class="help-block"></p>
      <label for="Nombre">Nombre de tu amigo: </label>
      <input id="Nombre" type="text" name="Nombre2" title="Escribe el nombre de tu amigo"  class="form-control" required>
      <p class="help-block"></p>
      <label for="Mail">Email de tu amigo:</label>
      <input id="Mail" type="email" name="Mail2" title="Escribe la dirección de correo electrónico"  class="form-control" required>
      <p class="help-block"></p>
        <label for="Mensaje">Mensaje:</label>
        <br>
    <textarea name="Mensaje" cols="30" rows="10" id="Mensaje" placeholder="Mensaje" class="form-control"></textarea>
    </fieldset>
  </div>
  <div class="form-group">
    <input type="submit" name="send" id="send" value="Enviar"  class="btn btn-warning .btn-lg">
  </div>
<div id="proteccion  class="form-group""> <a href="<?php bloginfo('template_directory'); ?>/inc/politica.php" rel="shadowbox;player=iframe;width=640;height=480;"><small>Política de protección de los datos personales</small></a>
</div>
  </fieldset>
  
</form>

<?php } ?>
