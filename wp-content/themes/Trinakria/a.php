function datos_alojamiento($id){    
    $file = 'a.xml';

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
        $parking = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Parcheggio, 'icon' => 'glyphicons-car', 'text' => 'Pakring en hotel'];
        $jardin = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Area_verde, 'icon' => 'glyphicons-tree-conifer', 'text' => 'Jardín'];
        $piscina = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Piscina, 'icon' => 'glyphicons-pool', 'text' => 'Piscina'];
        $baby_area = ['value' => $sruttura->SchedaTecnica->DatiGenerali->AreaBambini, 'icon' => 'glyphicons-baby', 'text' => 'Área infantil'];
        $bbq = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Barbecue, 'icon' => 'glyphicons-kiosk-light', 'text' => 'Barbacoa'];
        $jacuzzi = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Jacuzzi, 'icon' => 'glyphicons-bath-bathtub', 'text' => 'Jacuzzi'];
        $pets = ['value' => $sruttura->SchedaTecnica->DatiGenerali->CaniAmmesi, 'icon' => 'glyphicons-dog', 'text' => 'Mascotas admitidas'];
        $restaurant = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Ristorante, 'icon' => 'glyphicons-dining-set', 'text' => 'Restaurante'];
        $bikes = ['value' => $sruttura->SchedaTecnica->DatiGenerali->Biciclette, 'icon' => 'glyphicons-bicycle', 'text' => 'Alquiler de bicicletas'];
        $area_relax = ['value' => $sruttura->SchedaTecnica->DatiGenerali->SedieASdraio, 'icon' => 'glyphicons-beach-umbrella', 'text' => 'Área relax'];
        $cocina = ['value' => $sruttura->SchedaTecnica->DatiGenerali->CucinaPerOspiti, 'icon' => 'glyphicons-pot', 'text' => 'Uso de cocina'];
        $tv = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Televisione, 'icon' => 'glyphicons-tv', 'text' => 'Televisión'];            
        $ac = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->AriaCondizionata, 'icon' => 'glyphicons-snowflake', 'text' => 'Aire Acondicionado'];
        $heating = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Riscaldamento, 'icon' => 'glyphicons-sun', 'text' => 'Calefacción'];
	    $vendilation = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Vendilatore, 'icon' => 'glyphicons-car-wheel', 'text' => 'Ventilador'];
        $caja_fuerte = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->CassaForte, 'icon' => 'glyphicons-lock', 'text' => 'Caja fuerte '];
        $toallas = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Asciugamani, 'icon' => 'glyphicons-server', 'text' => 'Toallas'];
        $gel = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->Sapone, 'icon' => 'glyphicons-shower', 'text' => 'Gel de baño'];
        $minibar = ['value' => $sruttura->SchedaTecnica->DatiTecniciStanze->FrigoBar, 'icon' => 'glyphicons-glass', 'text' => 'Mini-Bar o Nevera'];
        $wifi = ['value' => $sruttura->SchedaTecnica->Altro->InternetWiFi, 'icon' => 'glyphicons-wifi', 'text' => 'Zona Internet / Wi-Fi'];
        $fireplace = ['value' => $sruttura->SchedaTecnica->Altro->Camino, 'icon' => 'glyphicons-fire', 'text' => 'Chimenea'];
        $lavadora = ['value' => $sruttura->SchedaTecnica->Altro->Lavatrice, 'icon' => 'glyphicons-coat-hanger', 'text' => 'Lavadora'];
        $acceso_disab = ['value' => $sruttura->SchedaTecnica->Altro->AccessoDisabili, 'icon' => 'glyphicons-person-wheelchair', 'text' => 'Acceso para discapacitados'];

        
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
                    'parking' => $parking,
                    'jardin' => $jardin,
                    'piscina' => $piscina,
                    'baby_area' => $baby_area,
                    'bbq' => $bbq,
                    'jacuzzi' => $jacuzzi,
                    'pets' => $pets,
                    'restaurant' => $restaurant,
                    'bikes' => $bikes,
                    'area_relax' => $area_relax,
                    'cocina' => $cocina,
                    'tv' => $tv,
                    'ac' => $ac,
                    'heating' => $heating,
                    'vendilation' => $vendilation,
                    'caja_fuerte' => $caja_fuerte,
                    'toallas' => $toallas,
                    'gel' => $gel,
                    'minibar' => $minibar,
                    'wifi' => $wifi,
                    'fireplace' => $fireplace,
                    'lavadora' => $lavadora,
                    'acceso_disab' => $acceso_disab,
                    'photos' => $photos,
                    'precios' => $precios];
        
    } else {
        return null;
    }
}
