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
			$description = $sruttura->Descrizioni->Descrizione->Espagnol->p;

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
        $servicios[0] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Parcheggio, 'icon' => 'glyphicons-car', 'text' => 'Pakring en hotel'];
        $servicios[1] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Area_verde, 'icon' => 'glyphicon-tree-conifer', 'text' => 'Jardín'];
        $servicios[2] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Piscina, 'icon' => 'glyphicon-pool', 'text' => 'Piscina'];
        $servicios[3] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->AreaBambini, 'icon' => 'glyphicon-baby', 'text' => 'Área infantil'];
        $servicios[4] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Barbecue, 'icon' => 'glyphicon-kiosk-light', 'text' => 'Barbacoa'];
        $servicios[5] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Jacuzzi, 'icon' => 'glyphicon-bath-bathtub', 'text' => 'Jacuzzi'];
        $servicios[6] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->CaniAmmesi, 'icon' => 'glyphicon-dog', 'text' => 'Mascotas admitidas'];
        $servicios[7] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Ristorante, 'icon' => 'glyphicon-dining-set', 'text' => 'Restaurante'];
        $servicios[8] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Biciclette, 'icon' => 'glyphicon-bicycle', 'text' => 'Alquiler de bicicletas'];
        $servicios[9] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->SedieASdraio, 'icon' => 'glyphicon-beach-umbrella', 'text' => 'Área relax'];
        $servicios[10] = ['value' => $sruttura->SchedaTecnica->DatiGenerali->CucinaPerOspiti, 'icon' => 'glyphicon-pot', 'text' => 'Uso de cocina'];
        $servicios[11] = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Televisione, 'icon' => 'glyphicon-tv', 'text' => 'Televisión'];            
        $servicios[12] = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->AriaCondizionata, 'icon' => 'glyphicon-snowflake', 'text' => 'Aire Acondicionado'];
        $servicios[13] = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Riscaldamento, 'icon' => 'glyphicon-sun', 'text' => 'Calefacción'];
	$servicios[14] = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Vendilatore, 'icon' => 'glyphicon-car-wheel', 'text' => 'Ventilador'];
        $servicios[15] = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->CassaForte, 'icon' => 'glyphicon-lock', 'text' => 'Caja fuerte '];
        $servicios[16] = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Asciugamani, 'icon' => 'glyphicon-server', 'text' => 'Toallas'];
        $servicios[17] = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Sapone, 'icon' => 'glyphicon-shower', 'text' => 'Gel de baño'];
        $servicios[18] = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->FrigoBar, 'icon' => 'glyphicon-glass', 'text' => 'Mini-Bar o Nevera'];
        $servicios[19] = ['value' => $sruttura->SchedaTecnica->Altro->InternetWiFi, 'icon' => 'glyphicon-wifi', 'text' => 'Zona Internet / Wi-Fi'];
        $servicios[20] = ['value' => $sruttura->SchedaTecnica->Altro->Camino, 'icon' => 'glyphicon-fire', 'text' => 'Chimenea'];
        $servicios[21] = ['value' => $sruttura->SchedaTecnica->Altro->Lavatrice, 'icon' => 'glyphicon-coat-hanger', 'text' => 'Lavadora'];
        $servicios[22] = ['value' => $sruttura->SchedaTecnica->Altro->AccessoDisabili, 'icon' => 'glyphicon-person-wheelchair', 'text' => 'Acceso para discapacitados'];

        
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
        
            $precios[$i++] = ['from' => $from, 'to' => $to, 'price' => $price];
        }

        $data = [ 'name' => $name,
                    'isla' => $isla,
                    'description' => $description,
                    'address' => $address,
                    'city' => $city,
                    'zip_code' => $zip_code,
                    'lat' => $lat,
                    'lon' => $lon,
		    'servicios' => $servicios,
                    'photos' => $photos,
                    'precios' => $precios];
	return $data;
        
    } 
}
?>