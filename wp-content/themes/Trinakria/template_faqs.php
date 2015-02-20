<?php include_once (TEMPLATEPATH . '/utils.php' );?>
<?php 
/* Template Name: FAQs */
get_header();
$faq=array(
	'',
	'¿Porqué elegir Trinakria Tours entre las muchas agencias de viaje que hay?',
	'¿Sois una agencia online?',
	'¿Tenéis oficinas?',
	'¿Qué garantías tengo que sois un Tour Operador fiable?',
	'¿Qué incluyen vuestros paquetes?',
	'¿Como se reservan vuestros tours y cuales son las condiciones de pago?',
	'¿Vuestras salidas se realizan solo en fechas pre-establecidas?',
	'¿Cual es la temporada mejor para visitar vuestros destinos?',
	'¿Cual es vuestra política de cancelación?',
	'¿Con qué tipología de alojamientos trabajais?',
	'¿Cual es el estándar de habitaciones de vuestros alojamientos?',
	'¿Tenéis hoteles a pie de playa?',
	'Soy celiaco, ¿sería un problema desayunar en vuestros alojamientos?',
	'¿Es posible contratar con vosotros un seguro de viaje?',
	'¿Están los vuelos incluidos?',
	'¿Con qué compañía de alquiler de coches trabajáis?',
	'¿Qué seguros van incluidos con el coche de alquiler?',
	'¿Qué otras cosas incluye el alquiler del coche?',
	'¿Qué pasa si ya tengo el coche alquilado por mi cuenta?',
	'¿Es posible reservar sólo el coche con vosotros?',
	'¿Los coches llevan incluido el GPS?',
	'¿Puedo recoger/devolver el coche temprano o tarde?',
	'¿Organizáis viajes para grupos?',
	'¿Compro antes los vuelos y luego os contacto?',
	'¿Las rutas que tenéis son estándar?',
	'¿Cuando es conveniente reservar?',
	'¿Qué documentación me enviareis para el viaje?',
	'¿Alquiláis coches con conductor?',
	'¿Si ya tengo alguna noche reservada me organizais igualmente el resto de los días de mi tour?',
	'¿Aparte los destinos presentes en vuestra web, organizais otros tipos de viajes?',
	'¿Puedo llamaros por teléfono?',
	'¿Os puedo llamar con Skype?',
	'¿Puedo pagar con Tarjeta de Crédito?',
	'¿Qué peligros hay en vuestros destinos?'
);

$faq_answers=array(
	'',
	'Desde el año 2006 que abrimos la web, nuestra misión siempre ha sido ofrecer experiencias inolvidables a nuestros viajeros y podemos decir con total seguridad que lo hemos conseguido! Hemos hecho vivir Sicilia, Cerdeña, Puglia, Malta o Creta de forma auténtica y original a miles de viajeros. Quien nos contacta busca un servicio de calidad y la garantía que, siendo nosotros especialistas en nuestros destinos, sabemos aconsejar de la mejor forma al viajero para proporcionarle el servicio más adaptado a sus exigencias; <em>como los sastres artesanales, diseñamos el tour de forma totalmente personalizada</em>. Otro valor añadido es que no tenéis que preocuparos de contactar con diferentes alojamientos y proveedores de servicios turísticos (con los supuestos problemas de comprensión del idioma local, escrito y/u oral), hacer diferentes transferencias sino que solo una y que tendréis la confianza de un Tour Operador (nosotros) que os gestione todo y que os asesore durante toda la programación del viaje y también después (si hay alguna incidencia). Quien ha confiado en nosotros, siempre ha valorado mucho nuestra completa dedicación al diseño del tour, consejos de rutas que damos y como seguimos los clientes durante la fase de la preparación del viaje. Y para saber más, mira que dicen de nosotros <a href="../testimonios">nuestros clientes</a>.',
	'SI, lo somos. Nuestro sistema de trabajo está pensado para que cómodamente desde casa, cada viajero que nos contacta pueda recibir <em>una información detallada, fácil de consultar y clara del paquete que hemos preparado</em>. Además estamos en continua evolución para proporcionar un servicio siempre más eficiente en cuanto a rapidez de respuesta, claridad, exhaustividad y herramientas tecnológicas. Sin duda, proporcionalmente a lo pequeños que somos como Tour Operador, nuestra plataforma informática es muy avanzada.',
	'Nuestras oficinas están ubicadas en el corazón del barrio gótico de Barcelona. Estamos en un espacio de trabajo compartido (Coworking) porque nos parece muy divertido y muy moderno compartir espacios y gastos con otros profesionales (<a href="../oficinas">aquí</a> hablamos más de las oficinas). Generalmente el primer contacto, el diseño del tour y el presupuesto lo hacemos via email o teléfono, es más práctico, pero en cuanto definamos bien el tipo de tour que deseáis, si lo preferís, encantados podemos concertar una entrevista personal en nuestras oficinas para beber un café juntos, conocernos y hablar del tour. De lo contrario si no estáis en Barcelona o preferís hacer todo via email o telefono, nuestro sistema es ágil, rápido y práctico.',
	'La primera y más importante garantía (según nuestro punto de vista) <em>es vuestro propio olfato</em>, una vez nos hayais contactado, recibido via email la primera propuesta de viaje, no tengáis la más mínima duda de que confiareis en nosotros. Con respecto a nuestra información legal, deciros que Trinakria Tours es una Sociedad Limitada inscrita en el Registro Mercantil de Barcelona, Tomo 39243, Folio 0106, Hoja/Dup 342825 y el título-licencia otorgado por la Generalitat de Catalunya bajo nuestra solicitud es el GC-1441. También hacemos parte de <a href="http://www.acave.travel/es/node/8120" target="blank">ACAVE</a>, asociación del sector de agencias de viajes (nuestra ficha en su portal la encontrareis aquí). En las redes sociales podéis encontrarnos aquí: <a href="http://www.facebook.com/trinakriatours", target="blank">facebook</a>, <a href="http://twitter.com/trinakriatours" target="blank">twitter</a>, <a href="https://plus.google.com/+TrinakriaToursBarcelona" target="blank">google+</a>',
	'Nuestra especialización es el <em>‘tour por libre totalmente personalizado’</em>, es decir un tour donde nosotros, después de haber diseñado el tour en base a vuestros deseos y a nuestra experiencia,  os contratamos y pre-fijamos los alojamientos (en régimen de alojamiento+desayuno) y os proveemos el coche de alquiler. No es un tour con guía o donde cada hora teneis algo que hacer. Estamos firmemente convencidos que para descubrir el Mediterráneo en toda su esencia hay que alojarse en bonitos lugares y hay que seguir un ritmo propio de visita, ya que sea ver y visitar monumentos todo el día o estar sentados delante de un buen helado viendo la gente pasar por toda la tarde, o una inteligente mezcla de las dos cosas. Por supuesto enviamos también muchos consejos de lugares por visitar y ver, playas especiales y donde comer fuera de los circuitos de masa, pero son simples consejos sin ninguna obligación! El IVA, los impuestos y nuestros gastos de gestión (aproximadamente 30 € por persona)  también siempre van ya incluidos en nuestros paquetes. ',
	'Una vez solicitado el viaje a través del formulario de contacto, nosotros verificaremos la disponibilidad de lo/s alojamientos/s y te enviaremos, en el plazo máximo de 48 horas, una propuesta hecha a medida para tus exigencias. Si decidís ir adelante con las reservas, entonces os enviaremos una email con el enlace a vuestra área cliente personal donde tendréis que cumplimentar el formulario de datos y aceptar formalmente las condiciones de contrato. Una vez recibamos el todo procederemos con las pre-reservas y entonces, si los alojamientos están todos disponibles, os enviaremos la factura y/o recibo y el número de cuenta de nuestra agencia de viajes donde efectuar el ingreso del 30% en concepto de reserva. El 70% se paga 45 días antes de la salida (lógicamente si ya estamos dentro este plazo la factura a abonar será directamente del 100%) y entonces os enviaremos todos los documentos y vouchers del viaje que deberéis imprimir y llevar con vosotros. Solo en el caso haya algún alojamiento que ya está lleno, antes de abonar el 30% o 100%, os avisaremos y os propondremos una alternativa en la misma zona y si aceptáis entonces procedemos con el proceso estándar de reserva explicado  arriba.',
	'NO, nosotros organizamos los tours de forma totalmente personalizada, de Febrero a Noviembre, en cualquier fecha y para el número de día que deseáis. Siempre aconsejamos un mínimos de 10 noches para nuestros destinos pero esto no es obligatorio, si teneis solo una semana intentaremos diseñar el mejor tour para ese número de días.',
	'Siendo destinos mediterráneos, somos unos enamorados de la primavera, pensamos que Abril, Mayo y Junio son con diferencia los mejores meses del año para viajar, muchas flores, buen tiempo, días largos...también Septiembre y Octubre son meses fenomenales. Julio es sin duda preferible a Agosto, que es el único mes del año en el cual no os aconsejamos viajar (aunque si lo organizamos con unos 3 meses de antelación por lo menos podemos hacerlo) y esto es debido básicamente al hecho que en casi todos los lugares hay mucha concentración de gente y si hay alguna incidencia es de más difícil resolución. De todas maneras la organización cuidadosa de nuestros viajes es la clave del éxito en su grande mayoría en todos los meses del año.',
	'Nuestra política de cancelación se basa en con cuánta antelación recibimos el aviso por parte de los clientes: un 5% si se produce con más de 10 días antes de la salida, un 15% entre 10 y 3 días antes y un 25% en las 48hs anteriores. Si el cliente no se presenta a la salida, los gastos de anulación serían del 100%. A esto se le tiene que añadir posibles condiciones de cancelación de cada alojamiento + unos gastos administrativos que retenemos (aprox. 25 € por persona). Al margen de estas condiciones oficiales, muchos de nuestros paquetes tienen un seguro de cancelación, y si no lo tienen y teneis que anular igualmente, antes de proceder a aplicar las penales intentamos estudiar una buena solución para todos, como por ejemplo, si existe la posibilidad, de posponer el viaje a otras fechas.',
	'Nosotros trabajamos solo y exclusivamente con Pequeños Hoteles, Bed & Breakfast (B&B) y Agroturismos. Todos nuestros alojamientos han sido seleccionados personalmente por nuestro equipo y esto es el gran valor añadido de nuestros tours y catalogo ya que garantizamos lugares estratégicamente ubicados, de buen ambiente familiar y con encanto. Naturalmente en base al precio serán más sencillos o más de lujo pero en todos se respetan los criterios base de nuestra manera de seleccionar los lugares. A menos que no se trata de alquiler de casas, siempre va incluido en desayuno y todas las habitaciones tienen baño privado. ',
	'Lógicamente depende mucho del tipo de alojamiento, si es un pequeño hotel o un B&B. El hilo común a todos es que siempre buscamos lugares con encanto, donde el concepto de hospitalidad sea importante y donde elementos como el desayuno sean también protagonistas en la manera de hacer turismo (aunque los desayunos dependen mucho de la sensibilidad de las personas que los preparan, a veces los hay espectaculares y muy caseros y otras veces más de productos confeccionados). También destacar que en nuestros alojamientos todas las habitaciones siempre tienen BAÑO PRIVADO y nunca compartido con otras habitaciones. ',
	'Nuestros alojamientos, por lo general, nunca se encuentran a pie de playa, solemos siempre privilegiar alojamientos rurales o urbanos. Eso sí, todos están bien localizados para desplazarse a los lugares de mayor interés que hay en los alrededores y casi todos están a máximo 30 km de la costa. ',
	'NO, solo tenéis que avisarnos en fase de reserva y lo comunicaremos a los propietarios de cada alojamiento y entonces prepararán algo adecuado. ',
	'Si, por supuesto. Bajo vuestra petición podemos incluir seguros de anulación y/o médicos. Nosotros trabajamos con productos AXA porque creemos que son flexibles, reúnen buenos supuestos asegurados y tienen precios razonables aunque es importante que leais las condiciones que os enviaremos si estais interesados en estos productos ya que siempre como en cualquier seguro, hay excepciones no cubiertas. ',
	'NO, lo que no incluimos son los vuelos y esto es porque habiendo muchas ofertas de low cost en todos nuestros destinos os sale más a cuenta comprarlos directamente online. Sin embargo si cuando nos contactáis no tenéis todavía los vuelos comprados, junto con el presupuesto del tour os enviaremos la mejor combinación de vuelos que podeis comprar si deseáis aprovechar de nuestra oferta.  ',
	'Tenemos contrato preferencial con una de las compañías líderes del mercado, NATIONAL, que en Italia trabaja bajo la marca Maggiore (y en España con el nombre Atesa). Para los alquileres en Creta y Malta, utilizamos los servicios de un broker: Flexible Autos que alquila con varios proveedores. ',
	'Nosotros trabajamos solo y exclusivamente con alquileres de alta calidad y siempre incluimos el seguro a todo riesgo a eliminación de la franquicia para daños y robos. Atención esto no quiere decir que todo está siempre incluido ya que también los todos riesgos tienen excepciones, los de nuestras compañías son: los gastos administrativos (aprox 38 EUR), daños causados voluntariamente y por conducción negligente (ej. ir en sentido contrario de marcha) o bajo los efectos de alcohol y drogas, ruedas, llantas, bajos del coche, daños causados al embrague (mal uso o quemadura) e interiores. Todas estas causas son de sentido común ya que implican un mal uso del coche. Todas las demás causas están incluidas. En algunos destinos, no encontrando seguros a todo riesgo, contratamos uno de reembolso franquicia, es decir de cara al proveedor teneis una limitación de la franquicia pero si os cobra algún daño a vuestra vuelta os lo reembolsamos. Esto al día de hoy pasa sucede solo en Creta y Malta. ',
	'Siempre incluye el Km Ilimitado, dos conductores (solo en Creta el 2º es de pago), el ONE WAY (es decir posibilidad de recoger y devolver el coche en dos puntos distintos, como dos aeropuerto, sin costes añadidos. Servicio de pago solo en Creta y Malta), RCA (seguro de responsabilidad civil) y los seguros de ocupantes. También siempre incluye impuestos aeroportuarios e IVA local y nacional. Extras como sillitas del coche o GPS nosotros os los podemos solo reservar pero los pagareis directamente en destino a la recogida del coche. ',
	'Nada, simplemente podemos organizaros la ruta de alojamientos. Solo teneis que que tener en cuenta que nuestro alquiler es de alta calidad y tiene el seguro a todo riesgo para daños y robo. ',
	'Si lo que deseáis es contratar solo el coche con nosotros podemos hacerlo sin problema alguno aunque aconsejamos reservar todo el tour ya que es el producto principal de Trinakria Tours y lo que tratamos mejor. ',
	'Algunas categorías, la más lujosas y caras, lo llevan integrado pero por general nuestras categorías básicas no lo llevan. Se puede alquilar aparte directamente a la recogida del coche pero  es un servicio caro (aprox. 15 € al día) con lo cual aconsejamos, si ya no teneis GPS en vuestro móvil, comprar un buen mapa de carreteras y con eso es suficiente. Además para llegar a los alojamientos os enviaremos una explicación sobre como llegar fácilmente. ',
	'Para las devoluciones fuera de los horarios de oficina, las llaves se tendrán que dejar en el buzón del parking de la empresa de alquiler. Para las recogidas fuera de los horarios de oficina depende de la hora de recogida: si es muy temprano se tendrá que esperar hasta la abertura de la oficina, si es muy tarde, el personal de la oficina os esperará hasta las 2:00h de la madrugada (pero esto supone un cargo extra de unos 25 € aprox.), en caso de llegadas más tarde de las 2, el coche tendrá que ser recogido la mañana siguiente. De todas maneras en fase de reserva siempre avisamos de las varias excepciones en base a la hora de vuestro vuelo. ',
	'Si sois un grupo familiar o de amigos de un máximo de 20-25 personas y estáis disponibles a conducir vosotros mismos los coches, encantados os organizaremos el viaje pero mejor contratarlo con buena antelación para definir todo en detalle. Para otros tipos de grupos o servicios (choferes, hoteles tradicionales, guías...) sería mejor hablarlo por email o por teléfono aunque pocas veces nos hemos encargado de estos tipos de grupos. ',
	'Si lo deseais podeis comprar los vuelos antes y luego contactarnos para que os organicemos el tour pero siempre es mejor contactar con nosotros antes, así podremos planificar juntos la mejor ruta y el mejor vuelo posible. Nosotros, aunque NO tramitamos los vuelos, siempre asesoramos sobre cual es la mejor combinación posible y la manera más rápida de llegar en destino. ',
	'En la web hemos puesto unos ejemplos de los tours que podemos organizar. Una vez recibimos un primer contacto con datos como fechas del viaje, aeropuertos de entrada/salida y la explicación del tipo de viaje que se quiere realizar, confeccionamos una propuesta totalmente hecha a medida combinando los varios alojamientos de nuestro catálogo. Nuestros tours se dividen en ‘a tu aire’, ‘rural’ y ‘con encanto’. Cada alojamiento tiene sus precios y entonces el precio global del tour será el resultado de los precios de cada alojamiento ofrecido, coche de alquiler, nuestros servicios y todos los impuestos e iva. ',
	'Las reservas para la temporada alta (Julio y Agosto) por regla general las tramitamos hasta Mayo, y esto es debido a que nuestros alojamientos son pequeños y se llenan con mucha facilidad. Si, después de Mayo, en base a la disponibilidad que tenemos logramos ofreceros un tour que tenga cierta coherencia lo tramitaremos pero preferimos no ofrecer tours “forzados” (durmiendo por ejemplo una noche a sur luego otra al norte para otra vez volver al sur), se perdería el encanto de nuestros viajes y el tour bajaría de calidad. En general cuanto antes se reserva más posibilidades tenemos de poder ofrecer un buen producto. ',
	'Una vez tengamos confirmación de nuestro banco del pago del paquete, en pocos días te enviaremos por email toda la documentación de viaje que consiste en un voucher o bono de prepago para cada servicio contratado (alojamientos y coche) y toda una serie de consejos de ruta que cada año vamos renovando e integrando a medida de que conocemos cosas nuevas e interesantes de nuestros destinos para nuestros viajeros. Es una documentación ágil y completa y que incluye todos los datos importantes para acceder a cada servicio contratado, solo hay que imprimirla y llevarla durante el viaje. ',
	'Al estado actual no disponemos de este servicio. Nuestros alquileres son coches o furgonetas a 9 plazas (que se pueden conducir con el carnet de conducir normal, el B) que conducireis vosotros mismos. ',
	'Si, nuestros tours están hechos totalmente a medida con lo cual es posible hacerlo. ',
	'El sistema de trabajo que hemos elegido (visitar personalmente todos los alojamientos antes de ofrecerlos, hacernos una idea completa de todo el destino ofrecido y conocerlo en profundidad, etc..) no nos permite trabajar en todo el Mediterráneo. De momento organizamos viajes a Sicilia, Cerdeña, Puglia...el maravilloso tacón de italia y la isla de Creta. Nuestra intención es ampliar nuestro catálogo en los próximos años y como prioridades miramos con mucho interés otros maravillosos lugares mediterráneos como la Toscana, la Croacia, la Corsega o las Islas Baleares. Cada novedad la comunicaremos en nuestros boletines anuales con lo cual os aconsejamos <a href="#">apuntaros a nuestra newsletter</a>. ',
	'Por supuesto que sí! Aunque las propuestas siempre las enviamos por correo electrónico, tener un contacto telefónico es la manera más práctica para despejar dudas antes de empezar con nuestro proceso de reservas. ',
	'Sí, en los horarios de oficina tenemos nuestra cuenta Skype activa y la encontrareis en la página ‘contactar’ ',
	'SÍ no hay ningún inconveniente pero el pago por visa supone un coste añadido del 0,90% del total del viaje. Nosotros trabajamos en los circuitos "VERIFIED BY VISA" y "MASTERCARD SECURECODE", esto supone que el usuario de la tarjeta de crédito tenga que estar dado de alta por ‘compras seguras online’ ya que nuestro sistema, una vez añadido el número de tarjeta de crédito, reenvía a una página web de vuestro banco donde tendréis que añadir un código secreto para ir adelante con el proceso de compra. Antes de pagar con la tarjeta de crédito, es conveniente informaros acerca de estos métodos de pago con vuestro banco y sinceraros que no hay problemas con ellos. En el caso de tarjetas emitidas por bancos de latinoamérica, es probable que deberéis, después de haber obtenido el código, pedir autorización para procesar el pago y avisar a vuestro banco. A continuación podéis leer más acerca de estos métodos seguros de pago: www.visa.com/verified y www.mastercardsecurecode.com. ',
	'El Mediterráneo es un lugar caótico, ruidoso y a veces, si estás en un mercado de una grande ciudad, puede aparecerte peligroso. En nuestros destinos la gente por lo general es muy amable y ayuda mucho al viajero y además nosotros trabajamos mayormente en pueblos, aldeas rurales o alojamientos en el campo, con lo cual la seguridad y tranquilidad está asegurada. Las medidas de seguridad que hay que tomar en cuenta son las generales de cualquier viaje y cualquier destino: si vais en las grandes ciudades hay que tener más cuidado y sobre todo en los lugares más turísticos. Aparte esto, os podréis con total seguridad relajar plenamente. '
); 

$faq_tags=array(
	'',
	'nosotros',
	'nosotros',
	'nosotros',
	'nosotros',
	'servicios, tours',
	'nosotros, servicios',
	'tours',
	'nosotros, tours',
	'servicios',
	'alojamientos, tours',
	'alojamientos',
	'alojamientos',
	'alojamientos',
	'servicios',
	'servicios',
	'coche',
	'coche',
	'coche',
	'coche',
	'coche',
	'coche',
	'coche',
	'servicios',
	'tours, servicios',
	'tours',
	'tours, servicios',
	'servicios',
	'coche, servicios',
	'tours',
	'nosotros',
	'servicios',
	'servicios',
	'servicios',
	'nosotros, tours'
); 
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
      <main class="main main-left col-md-8 col-sm-8 col-xs-12">
        <h1>Preguntas frecuentes</h1>
  
        <div class="panel-group faqs" id="accordion">
	  <?php 
		global $wp_query;
		if (isset($wp_query->query_vars['page'])) {
			$page = $wp_query->query_vars['page'];
		}
		if ($page == 0) $page = 1;

		if (isset($wp_query->query_vars['tag'])) {
			$tag = $wp_query->query_vars['tag'];
		}
		if ($tag == "") $tag = "todas";

		$filtered_faq = filter($faq, $faq_tags, $tag);
		$filtered_faq_answers = filter($faq_answers, $faq_tags, $tag);

		$total_pages=count($filtered_faq)/10+1;
		for ($nfaq = ($page-1)*10+1; $nfaq <= $page*10 && $nfaq < count($filtered_faq); $nfaq++) { ?>

          <div class="panel">
            <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse<?php echo $nfaq; ?>"><span class="num label label-warning"><?php echo $nfaq; ?></span> <span class="caret"></span><?php echo $filtered_faq[$nfaq]; ?> </a> </h4>
            </div>
            <div id="collapse<?php echo $nfaq; ?>" class="panel-collapse collapse">
	    <div class="panel-body"><?php echo $filtered_faq_answers[$nfaq]; ?></div>
            </div>
          </div>
          <?php } ?>
        </div>
        <p>&nbsp;</p>

<div class="col-md-12 text-center">
<ul class="pagination">
<li><a href="<?php echo site_url();?>/faqs?tag=<?php echo $tag?>">«</a> </li>
<?php 
	$site_root = site_url();
	for( $i = 1; $i<= $total_pages; $i++) {
		echo "<li ";
		if ($i == $page) { 
			echo "class='active'><a href='#'>$i</a></li>\n";
		} else {
			echo "><a href='$site_root/faqs?page=$i&tag=$tag'>$i</a></li>\n";
		} 
	}
?>
	<li><a href="<?php echo site_url();?>/faqs?page=<?php echo ceil($total_pages)-1;?>&tag=<?php echo $tag;?>">»</a> </li>
</ul>
<div>

      </main>
      
      <div class="col-md-4 col-sm-4 col-xs-12 sidebar" >
        <h3>Preguntas frecuentes</h3>
        <ul class="widget">
<?php 
	$site_root = site_url();
	$tag_names = array("todas", "nosotros", "tours", "alojamientos", "servicios", "coche");
	$tag_links = array("Todas las preguntas más frecuentes", "Acerca de nosotros", "Nuestros Tours", "Nuestros Alojamientos", "Nuestros Servicios", "Alquiler de coche");

	$total_tags = count($tag_names);
	for( $i = 0; $i<= $total_tags; $i++) {
		echo "<li ";
		if (strcmp($tag_names[$i], $tag) == 0 ) { 
			echo "class='active'>$tag_links[$i]</a></li>\n";
		} else {
			echo "><a href='$site_root/faqs?tag=$tag_names[$i]'>$tag_links[$i]</a></li>\n";
		} 
	}
?>
        </ul>
        
        <h3>¿Alguna pregunta más?</h3>
        <p>Si no encuentras la respuestas a tus dudas aquí puedes usar nuestros contactos de atención al cliente y encantados te atenderemos.</p>
        <p><strong>Twitter</strong>:<br>
	<a href="http://twitter.com/trinakriatours" target="blank"><strong>@trinakriatours</strong></a></p>
        <p><strong>Teléfono Fijo</strong>: <br>
          <em>De Lun a Vie te contestamos al</em> <strong><a href="tel:+34 935147831">93 514 78 31</a></strong> (10-18h)</p>
        <p><strong>E mail</strong>:</strong><br>
	<em>Escribenos a nuestros correos-e:</em><br/>
	<a href="mailto:info@zagaratravel.com" target="_blank"><strong>info@zagaratravel.com</strong></a><br/>
	<a href="mailto:info@shinesicily.com" target="_blank"><strong>info@shinesicily.com</strong></a><br/>
      </div>
    </div>
  </div>
</div>
<?php include_once (TEMPLATEPATH . '/inc/teaser.php' );?>
<?php get_footer(); ?>
