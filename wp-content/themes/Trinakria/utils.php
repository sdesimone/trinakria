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

?>
