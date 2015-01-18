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


function datos_alojamiento($id){

    $file = (TEMPLATEPATH . '/inc/listaAlojamientos.xml' );


    if (file_exists($file)) {
        $xml = simplexml_load_file($file);
        $strutture = $xml->xpath("//Sruttura[Identificativo='$id']");
        $sruttura = $strutture[0];
        
        $name = $sruttura->Anagrafica->Nome;
        $isla = $sruttura->Anagrafica->Circuito;
        $description = $sruttura->Descrizioni->Descrizione->Espagnol->p;
       
        // map        
        $address = $sruttura->Anagrafica->Indirizzo;
        $city = $sruttura->Anagrafica->Citta;
        $zip_code = $sruttura->Anagrafica->Cap;
        $lat = $sruttura->Anagrafica->Latitudine;
        $lat = DSMtoDEC($lat);        
        $lon = $sruttura->Anagrafica->Longitudine;
        $lon = DSMtoDEC($lon);
        
        // services
//        $servicios[0] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Parcheggio, 'icon' => 'glyphicons-car', 'text' => 'Pakring en hotel'];
        $servicios[0] = array($sruttura->SchedaTecnica->DatiGenerali->Parcheggio, 'glyphicons-car', 'Parking en hotel');
        $servicios[1] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->Area_verde, 'icon' => 'glyphicons-tree-conifer', 'text' => 'Jardín');
        $servicios[2] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->Piscina, 'icon' => 'glyphicons-pool', 'text' => 'Piscina');
        $servicios[3] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->AreaBambini, 'icon' => 'glyphicons-baby-formula', 'text' => 'Área infantil');
        $servicios[4] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->Barbecue, 'icon' => 'glyphicons-kiosk-light', 'text' => 'Barbacoa');
        $servicios[5] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->Jacuzzi, 'icon' => 'glyphicons-bath-bathtub', 'text' => 'Jacuzzi');
        $servicios[6] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->CaniAmmesi, 'icon' => 'glyphicons-dog', 'text' => 'Mascotas admitidas');
        $servicios[7] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->Ristorante, 'icon' => 'glyphicons-dining-set', 'text' => 'Restaurante');
        $servicios[8] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->Biciclette, 'icon' => 'glyphicons-bicycle', 'text' => 'Alquiler de bicicletas');
        $servicios[9] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->SedieASdraio, 'icon' => 'glyphicons-beach-umbrella', 'text' => 'Área relax');
        $servicios[10] = array('value' => $sruttura->SchedaTecnica->DatiGenerali->CucinaPerOspiti, 'icon' => 'glyphicons-pot', 'text' => 'Uso de cocina');
        $servicios[11] = array('value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Televisione, 'icon' => 'glyphicons-tv', 'text' => 'Televisión');            
        $servicios[12] = array('value' => $sruttura->SchedaTecnica->DatiTecniciStanze->AriaCondizionata, 'icon' => 'glyphicons-snowflake', 'text' => 'Aire Acondicionado');
        $servicios[13] = array('value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Riscaldamento, 'icon' => 'glyphicons-sun', 'text' => 'Calefacción');
	$servicios[14] = array('value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Vendilatore, 'icon' => 'glyphicons-car-wheel', 'text' => 'Ventilador');
        $servicios[15] = array('value' => $sruttura->SchedaTecnica->DatiTecniciStanze->CassaForte, 'icon' => 'glyphicons-lock', 'text' => 'Caja fuerte ');
        $servicios[16] = array('value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Asciugamani, 'icon' => 'glyphicons-server', 'text' => 'Toallas');
        $servicios[17] = array('value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Sapone, 'icon' => 'glyphicons-shower', 'text' => 'Gel de baño');
        $servicios[18] = array('value' => $sruttura->SchedaTecnica->DatiTecniciStanze->FrigoBar, 'icon' => 'glyphicons-glass', 'text' => 'Mini-Bar o Nevera');
        $servicios[19] = array('value' => $sruttura->SchedaTecnica->Altro->InternetWiFi, 'icon' => 'glyphicons-wifi', 'text' => 'Zona Internet / Wi-Fi');
        $servicios[20] = array('value' => $sruttura->SchedaTecnica->Altro->Camino, 'icon' => 'glyphicons-fire', 'text' => 'Chimenea');
        $servicios[21] = array('value' => $sruttura->SchedaTecnica->Altro->Lavatrice, 'icon' => 'glyphicons-coat-hanger', 'text' => 'Lavadora');
        $servicios[22] = array('value' => $sruttura->SchedaTecnica->Altro->AccessoDisabili, 'icon' => 'glyphicons-person-wheelchair', 'text' => 'Acceso para discapacitados');

        
        // photos
        $photos = array();
        $i = 0;
        foreach($sruttura->Immagini->Immagine as $photo){
            $photos[$i++] = $photo->Url->Normal;    
        }
        // precios
        $i = 0;
        foreach($sruttura->Listino->Listino_Item as $item){
            $from = $item->Data_Da;
            $to = $item->Data_A;
            $price = $item->Prezzo;
        
            $precios[$i++] = array('from' => $from, 'to' => $to, 'price' => $price);
        }

        $data = array( 'name' => $name,
                    'isla' => $isla,
                    'description' => $description,
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
