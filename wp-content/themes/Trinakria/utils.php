<?php

/* converts longtidute/latitude: 
 * from DMS format (found in XML from backoffice
 * to decimal format (needed by google maps
*/
function DSMtoDEC($dsm){
	$dsm = str_replace("°", ".", $dsm);
	$deg = strtok($dsm, ".");
	$min = strtok("'");
	$sec = strtok("''");

	return $deg+((($min*60)+($sec))/3600);
}    


/* Reads the XML list of available locations and returns a list with:
 * id
 * name
 * locality
 * description
 * coordinates
 * thmubnail image
*/
function lista_alojamientos_zona($zona){
	$file = (TEMPLATEPATH . '/inc/listaAlojamientos.xml' );

	$data = array(array());
	if (file_exists($file)) {
		$xml = simplexml_load_file($file);
		$srutturas = $xml->xpath("//Sruttura[Anagrafica/Zona='$zona']");

		$indx = 0;     
		foreach($srutturas as $sruttura){
			$id = $sruttura->Identificativo;
			$name = $sruttura->Anagrafica->Nome;
			$locality = $sruttura->Anagrafica->Localita;

			$photo = $sruttura->Immagini->Immagine[0];
			if( $photo == null ){
				$photo = "";
			} else {
				$photo = $sruttura->Immagini->Immagine[0]->Url->Thumb;
			}            

			$full_description = explode(" ", $sruttura->Descrizioni->Descrizione->Espagnol->p);
			$i = 0;
			$max_words = 30;
			//$total_words = count($full_description);
			//$max_words = ($total_words > $max_words)? $max_words: $total_words);
			$description="";
			for($i = 0; $i < $max_words; $i++){
				$description = $description.$full_description[$i]." ";
			}
			if( count($full_description) > 1 )
				$description = $description."...";

			$lat = $sruttura->Anagrafica->Latitudine;
			$lat = DSMtoDEC($lat);

			$lon = $sruttura->Anagrafica->Longitudine;
			$lon = DSMtoDEC($lon);
			    
			$data[$indx++] = array('id'=>$id, 
						'name' => $name, 
						'locality' => $locality, 
						'photo' => $photo, 
						'description' => $description, 
						'lat' => $lat, 
						'lon' => $lon);
		}
	} else {
		echo 'Failed to open a.xml.';
	}   
	return $data;
}

/* Reads the XML list of available locations and returns a list with:
 * id
 * name
 * locality
 * description
 * coordinates
 * thmubnail image
*/
function datos_alojamiento($id){

    $file = (TEMPLATEPATH . '/inc/listaAlojamientos.xml' );
    $xmlDoc = new DOMDocument();
    
    if (file_exists($file)) {
        $xmlDoc->load($file);
        $xml = $xmlDoc->documentElement;
        $xpath = new DOMXPath($xmlDoc);
        $strutture = $xpath->query("//Sruttura[Identificativo='$id']");
        $sruttura = $strutture->item(0);
        
        $name = $xpath->query("//Sruttura[Identificativo='$id']/Anagrafica/Nome")->item(0)->nodeValue;
        $isla = $xpath->query("//Sruttura[Identificativo='$id']/Anagrafica/Circuito")->item(0)->nodeValue;
        
        $description = $xpath->query("//Sruttura[Identificativo='$id']/Descrizioni/Descrizione/Espagnol/p")->item(0)->nodeValue;
        $estilo = $xpath->query("//Sruttura[Identificativo='$id']/Descrizioni/Descrizione/Espagnol/p")->item(1)->nodeValue;
        $destacar = $xpath->query("//Sruttura[Identificativo='$id']/Descrizioni/Descrizione/Espagnol/p")->item(2)->nodeValue;
        $lugares = $xpath->query("//Sruttura[Identificativo='$id']/Descrizioni/Descrizione/Espagnol/p")->item(3)->nodeValue;
        
        // map        
        $address = $xpath->query("//Sruttura[Identificativo='$id']/Anagrafica/Indirizzo")->item(0)->nodeValue;
        $city = $xpath->query("//Sruttura[Identificativo='$id']/Anagrafica/Citta")->item(0)->nodeValue;
        $zip_code = $xpath->query("//Sruttura[Identificativo='$id']/Anagrafica/Cap")->item(0)->nodeValue;
        $lat = $xpath->query("//Sruttura[Identificativo='$id']/Anagrafica/Latitudine")->item(0)->nodeValue;
        $lat = DSMtoDEC($lat);        
        $lon = $xpath->query("//Sruttura[Identificativo='$id']/Anagrafica/Longitudine")->item(0)->nodeValue;
        $lon = DSMtoDEC($lon);
        
        // services
	$Parcheggio=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/Parcheggio");
	if( $Parcheggio->length!=0) $Parcheggio = $Parcheggio->item(0)->nodeValue;
	else $Parcheggio = "";
	$Area_verde=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/Area_verde");
	if( $Area_verde->length!=0) $Area_verde = $Area_verde->item(0)->nodeValue;
	else $Area_verde = "";
        $Piscina=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/Piscina");
	if( $Piscina->length!=0) $Piscina = $Piscina->item(0)->nodeValue;
	else $Piscina = "";
        $AreaBambini=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/AreaBambini");
	if( $AreaBambini->length!=0) $AreaBambini = $AreaBambini->item(0)->nodeValue;
	else $AreaBambini = "";
        $Barbecue=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/Barbecue");
	if( $Barbecue->length!=0) $Barbecue = $Barbecue->item(0)->nodeValue;
	else $Barbecue = "";
        $Jacuzzi=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/Jacuzzi");
	if( $Jacuzzi->length!=0) $Jacuzzi = $Jacuzzi->item(0)->nodeValue;
	else $Jacuzzi = "";
        $CaniAmmesi=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/CaniAmmesi");
	if( $CaniAmmesi->length!=0) $CaniAmmesi = $CaniAmmesi->item(0)->nodeValue;
	else $CaniAmmesi = "";
        $Ristorante=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/Ristorante");
	if( $Ristorante->length!=0) $Ristorante = $Ristorante->item(0)->nodeValue;
	else $Ristorante = "";
        $Biciclette=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/Biciclette");
	if( $Biciclette->length!=0) $Biciclette = $Biciclette->item(0)->nodeValue;
	else $Biciclette = "";
        $SedieASdraio=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/SedieASdraio");
	if( $SedieASdraio->length!=0) $SedieASdraio = $SedieASdraio->item(0)->nodeValue;
	else $SedieASdraio = "";
        $CucinaPerOspiti=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiGenerali/CucinaPerOspiti");
	if( $CucinaPerOspiti->length!=0) $CucinaPerOspiti = $CucinaPerOspiti->item(0)->nodeValue;
	else $CucinaPerOspiti = "";
        $Televisione=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiTecniciStanze/Televisione");
	if( $Televisione->length!=0) $Televisione = $Televisione->item(0)->nodeValue;
	else $Televisione = "";
        $AriaCondizionata=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiTecniciStanze/AriaCondizionata");
	if( $AriaCondizionata->length!=0) $AriaCondizionata = $AriaCondizionata->item(0)->nodeValue;
	else $AriaCondizionata = "";
        $Riscaldamento=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiTecniciStanze/Riscaldamento");
	if( $Riscaldamento->length!=0) $Riscaldamento = $Riscaldamento->item(0)->nodeValue;
	else $Riscaldamento = "";
        $Vendilatore=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiTecniciStanze/Vendilatore");
	if( $Vendilatore->length!=0) $Vendilatore = $Vendilatore->item(0)->nodeValue;
	else $Vendilatore = "";
        $CassaForte=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiTecniciStanze/CassaForte");
	if( $CassaForte->length!=0) $CassaForte = $CassaForte->item(0)->nodeValue;
	else $CassaForte = "";
        $Asciugamani=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiTecniciStanze/Asciugamani");
	if( $Asciugamani->length!=0) $Asciugamani = $Asciugamani->item(0)->nodeValue;
	else $Asciugamani = "";
        $Sapone=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiTecniciStanze/Sapone");
	if( $Sapone->length!=0) $Sapone = $Sapone->item(0)->nodeValue;
	else $Sapone = "";
        $FrigoBar=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/DatiTecniciStanze/FrigoBar");
	if( $FrigoBar->length!=0) $FrigoBar = $FrigoBar->item(0)->nodeValue;
	else $FrigoBar = "";
        $InternetWiFi=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/Altro/InternetWiFi");
	if( $InternetWiFi->length!=0) $InternetWiFi = $InternetWiFi->item(0)->nodeValue;
	else $InternetWiFi = "";
        $Camino=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/Altro/Camino");
	if( $Camino->length!=0) $Camino = $Camino->item(0)->nodeValue;
	else $Camino = "";
        $Lavatrice=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/Altro/Lavatrice");
    if( $Lavatrice->length!=0) $Lavatrice = $Lavatrice->item(0)->nodeValue;
    else $Lavatrice = "";
        $AccessoDisabili=$xpath->query("//Sruttura[Identificativo='$id']/SchedaTecnica/Altro/AccessoDisabili");
    if( $AccessoDisabili->length!=0) $AccessoDisabili = $AccessoDisabili->item(0)->nodeValue;
    else $AccessoDisabili = "";

        $servicios[0] = array('value' => $Parcheggio, 'icon' => 'glyphicons-car', 'text' => 'Parking en hotel');
        $servicios[1] = array('value' => $Area_verde, 'icon' => 'glyphicons-tree-conifer', 'text' => 'Jardín');
        $servicios[2] = array('value' => $Piscina, 'icon' => 'glyphicons-pool', 'text' => 'Piscina');
        $servicios[3] = array('value' => $AreaBambini, 'icon' => 'glyphicons-baby-formula', 'text' => 'Área infantil');
        $servicios[4] = array('value' => $Barbecue, 'icon' => 'glyphicons-kiosk-light', 'text' => 'Barbacoa');
        $servicios[5] = array('value' => $Jacuzzi, 'icon' => 'glyphicons-bath-bathtub', 'text' => 'Jacuzzi');
        $servicios[6] = array('value' => $CaniAmmesi, 'icon' => 'glyphicons-dog', 'text' => 'Mascotas admitidas');
        $servicios[7] = array('value' => $Ristorante, 'icon' => 'glyphicons-dining-set', 'text' => 'Restaurante');
        $servicios[8] = array('value' => $Biciclette, 'icon' => 'glyphicons-bicycle', 'text' => 'Alquiler de bicicletas');
        $servicios[9] = array('value' => $SedieASdraio, 'icon' => 'glyphicons-beach-umbrella', 'text' => 'Área relax');
        $servicios[10] = array('value' => $CucinaPerOspiti, 'icon' => 'glyphicons-pot', 'text' => 'Uso de cocina');
        $servicios[11] = array('value' => $Televisione, 'icon' => 'glyphicons-tv', 'text' => 'Televisión');            
        $servicios[12] = array('value' => $AriaCondizionata, 'icon' => 'glyphicons-snowflake', 'text' => 'Aire Acondicionado');
        $servicios[13] = array('value' => $Riscaldamento, 'icon' => 'glyphicons-sun', 'text' => 'Calefacción');
	$servicios[14] = array('value' => $Vendilatore, 'icon' => 'glyphicons-car-wheel', 'text' => 'Ventilador');
        $servicios[15] = array('value' => $CassaForte, 'icon' => 'glyphicons-lock', 'text' => 'Caja fuerte ');
        $servicios[16] = array('value' => $Asciugamani, 'icon' => 'glyphicons-server', 'text' => 'Toallas');
        $servicios[17] = array('value' => $Sapone, 'icon' => 'glyphicons-shower', 'text' => 'Gel de baño');
        $servicios[18] = array('value' => $FrigoBar, 'icon' => 'glyphicons-glass', 'text' => 'Mini-Bar o Nevera');
        $servicios[19] = array('value' => $InternetWiFi, 'icon' => 'glyphicons-wifi', 'text' => 'Zona Internet / Wi-Fi');
        $servicios[20] = array('value' => $Camino, 'icon' => 'glyphicons-fire', 'text' => 'Chimenea');
        $servicios[21] = array('value' => $Lavatrice, 'icon' => 'glyphicons-coat-hanger', 'text' => 'Lavadora');
        $servicios[22] = array('value' => $AccessoDisabili, 'icon' => 'glyphicons-person-wheelchair', 'text' => 'Acceso para discapacitados');

        // photos
	$photos = array();
	$Imagine = $xpath->query("//Sruttura[Identificativo='$id']/Immagini/Immagine");
	for ($i = 0; $i < $Imagine->length; $i++) {
		$item = $Imagine->item($i);
		$Url =  $item->getElementsByTagName('Normal')->item(0)->textContent;
		$photos[$i] = $Url;    
	}
	
        // precios
	$precios = array();
	$ListinoItem = $xpath->query("//Sruttura[Identificativo='$id']/Listino/Listino_Item");
	for ($i = 0; $i < $ListinoItem->length; $i++) {
		$item = $ListinoItem->item($i);
		$from = $item->getElementsByTagName('Data_Da')->item(0)->textContent;
		$to = $item->getElementsByTagName('Data_A')->item(0)->textContent;
		$price = $item->getElementsByTagName('Prezzo')->item(0)->textContent;

		$precios[$i] = array('from' => $from, 'to' => $to, 'price' => $price);
	}

        $data = array( 'name' => $name,
                    'isla' => $isla,
                    'description' => $description,
                    'estilo' => $estilo,
                    'destacar' => $destacar, 
                    'lugares' => $lugares, 
                    'address' => $address,
                    'city' => $city,
                    'zip_code' => $zip_code,
                    'lat' => $lat,
                    'lon' => $lon,
		    'servicios' => $servicios,
                    'photos' => $photos,
                    'precios' => $precios);
    return $data;
        
    } 
}
?>
