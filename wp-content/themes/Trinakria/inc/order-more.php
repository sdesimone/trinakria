<div id="optional_fields" class="form-group">
  <fieldset id="vuelos">
    <legend class="select">Vuelos</legend>
    <div class="form-group">
    <label>¿Tienes ya el vuelo?</label>
    <div class="form-group">
      <label class="checkbox-inline" id="vuelono" >
        <input name="vuelo" type="radio" value="NO" id="vuelono" checked="CHECKED">
        No </label>
      <label class="checkbox-inline">
        <input name="vuelo" type="radio" value="SI" id="vuelosi">
        Sí </label>
    </div>
    <div class=""> 
      <!-- Sezione a scomparsa visualizzata quando si seleziona "si tiene vuelo" -->
      <div id="tiene_vuelo" style="display:none;">
        <div class="form-group">
          <label for="CiudadIda">¿De qué aeropuertoi sales?</label>
          <select name="CiudadIda" id="CiudadIda"  class="form-control">
            <option value="-1" selected="">Elige un aeropuerto...</option>
            <option value="Alicante">Alicante</option>
            <option value="Almeria">Almeria</option>
            <option value="Asturias">Asturias</option>
            <option value="Barcelona">Barcelona</option>
            <option value="Bilbao">Bilbao</option>
            <option value="Fuerteventura">Fuerteventura</option>
            <option value="Girona">Girona</option>
            <option value="Granada">Granada</option>
            <option value="Ibiza">Ibiza</option>
            <option value="Jerez de la Frontera">Jerez de la Frontera</option>
            <option value="La Coruna">La Coruña</option>
            <option value="Lanzarote">Lanzarote</option>
            <option value="Las Palmas">Las Palmas</option>
            <option value="Leon">Leon</option>
            <option value="Madrid (Barajas)">Madrid (Barajas)</option>
            <option value="Malaga">Malaga</option>
            <option value="Menorca">Menorca</option>
            <option value="Murcia">Murcia</option>
            <option value="Palma Mallorca">Palma Mallorca</option>
            <option value="Pamplona">Pamplona</option>
            <option value="Reus">Reus</option>
            <option value="San Sebastian">San Sebastian</option>
            <option value="Santiago de Compostela">Santiago de Compostela</option>
            <option value="Santander">Santander</option>
            <option value="Sevilla">Sevilla</option>
            <option value="Tenerife">Tenerife</option>
            <option value="Valencia">Valencia</option>
            <option value="Vigo">Vigo</option>
            <option value="Vitoria">Vitoria</option>
            <option value="Zaragoza">Zaragoza</option>
            <option value="Otro">Otro</option>
          </select>
        </div>
        <div class="form-group">
          <label for="CompanyaIda">¿Con qué compañía sales?</label>
          <input name="CompanyaIda" id="CompanyaIda"  class="form-control">
        </div>
        <div class="form-group">Por favor, especifica si posible la
          hora de llegada aproximativa y el aeropuerto de destino y la hora de salida el ultimo día:
          <textarea name="HorarioVuelos" cols="20" rows="3"  class="form-control"></textarea>
        </div>
      </div>
      <!-- Fine sezione a scomparsa --> 
      
      <!-- Sezione a scomparsa visualizzata quando si seleziona "si tiene vuelo" -->
      <div id="no_tiene_vuelo">
        <div class="form-group">Con el fin de informarte sobre el mejor vuelo que puedes comprar, por favor dinos de que ciudad te gustaría salir: </div>
        <div class="form-group">
          <label for="aeropuerto">¿De qué ciudad sales?</label>
          <select name="aeropuerto" id="aeropuerto"  class="form-control">
            <option value="-1" selected="">Elige un aeropuerto...</option>
            <option value="Alicante">Alicante</option>
            <option value="Almeria">Almeria</option>
            <option value="Asturias">Asturias</option>
            <option value="Barcelona">Barcelona</option>
            <option value="Bilbao">Bilbao</option>
            <option value="Fuerteventura">Fuerteventura</option>
            <option value="Girona">Girona</option>
            <option value="Granada">Granada</option>
            <option value="Ibiza">Ibiza</option>
            <option value="Jerez de la Frontera">Jerez de la Frontera</option>
            <option value="La Coruna">La Coruña</option>
            <option value="Lanzarote">Lanzarote</option>
            <option value="Las Palmas">Las Palmas</option>
            <option value="Leon">Leon</option>
            <option value="Madrid (Barajas)">Madrid (Barajas)</option>
            <option value="Malaga">Malaga</option>
            <option value="Menorca">Menorca</option>
            <option value="Murcia">Murcia</option>
            <option value="Palma Mallorca">Palma Mallorca</option>
            <option value="Pamplona">Pamplona</option>
            <option value="Reus">Reus</option>
            <option value="San Sebastian">San Sebastian</option>
            <option value="Santiago de Compostela">Santiago de Compostela</option>
            <option value="Santander">Santander</option>
            <option value="Sevilla">Sevilla</option>
            <option value="Tenerife">Tenerife</option>
            <option value="Valencia">Valencia</option>
            <option value="Vigo">Vigo</option>
            <option value="Vitoria">Vitoria</option>
            <option value="Zaragoza">Zaragoza</option>
            <option value="Otro">Otro</option>
          </select>
        </div>
	<div class="alert alert-info form-group">
Mira la manera más fácil de llegar a:
<ul>
<li><a href="<?php echo site_url();?>/cerdena" target="_blank">Cerdeña</a></li>
<li><a href="<?php echo site_url();?>/puglia" target="_blank">Puglia</a></li>
<li><a href="<?php echo site_url();?>/creta" target="_blank">Creta</a></li>
<li><a href="<?php echo site_url();?>/malta" target="_blank">Malta</a></li>
<ul>

	</div>
      </div>
    </div>
  </fieldset>
</div>
<div class="form-group">
  <fieldset id="seguros">
    <legend class="select">Seguros</legend>
    <label for="vuelo">¿Quieres un seguro asistencia y/o cancelación?</label>
    <div class="form-group">
      <label class="checkbox-inline">
        <input type="radio" name="seguro" value="NO">
        No </label>
      <label class="checkbox-inline">
        <input type="radio" name="seguro" value="SI" checked="">
        Sí </label>
    </div>
    
    <!-- Sezione a scomparsa visualizzata quando si seleziona "quiere seguro" -->
    <div id="quiere_seguro">
      <label>Elige el seguro:</label>
      <div class="form-group">
        <label for="seguro_minimo" class="control-label">
          <input type="radio" name="tipo_seguro" value="minimo" id="seguro_minimo">
          Sólo anulación (32 € por persona) <a target="_blank" href="http://www.winsartorio.com/w_10aplicativos/ap3_formularios/w_acav/docs/extacavexclusivoplus1500.pdf">ver detalles</a> </label>
        <label for="seguro_completo" class="control-label">
          <input type="radio" name="tipo_seguro" value="completo" id="seguro_completo">
          Anulación + Asistencia en viaje (32 + 6 € por persona) <a target="_blank" href="http://www.winsartorio.com/w_10aplicativos/ap3_formularios/w_acav/docs/extacavbasicplus.pdf">ver detalles</a> </label>
      </div>
    </div>
  </fieldset>
</div>
<div class="form-group">
  <fieldset id="vuelos">
    <legend class="select">Informaciones adicionales y estadísticas</legend>
    <label for="encontrado">¿Cómo nos has encontrado?</label>
    <select name="encontrado" id="encontrado" class="form-control">
      <option value="-1" selected="">Elige una opción...</option>
      <option value="google">Buscando en Google</option>
      <option value="otros_motores">Buscando en otros (yahoo, bing, etc)</option>
      <option value="amigo">Me lo ha aconsejado un amigo</option>
      <option value="adwords">Google Adwords</option>
      <option value="otros_portales">En otros portales/blogs de viajes</option>
      <option value="prensa">Prensa</option>
      <option value="ya_cliente">Ya he viajado con vosotros</option>
    </select>
    <br/>
    <label for="edad">¿Cúal es la edad mediana de los adultos de vuestro grupo?</label>
    <select name="edad" id="edad" class="form-control">
      <option value="-1" selected="">Elige una franja de edad...</option>
      <option value="20_29">20-29</option>
      <option value="30_39">30-39</option>
      <option value="40_49">40-49</option>
      <option value="50_59">50-59</option>
      <option value="60_69">60-69</option>
      <option value="70_79">70-79</option>
      <option value="80_89">80-89</option>
    </select>
  </fieldset>
</div>

