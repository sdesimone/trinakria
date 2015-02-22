<?php
$destino=$_GET['destino'];
$ruta=$_GET['ruta'];
$zona=$_GET['zona'];
$ficha=$_GET['ficha'];
if (!$destino) $destino='Sicilia';
if (!$ruta) $ruta=$destino.' a tu aire';
if (!$zona) $zona='Norte';
if (!$ficha) $ficha='A Lume di Candele';
// DATA
$data['destino']=array('Sicilia','Cerdeña','Puglia','Creta','Malta');

// Sicilia
$data['Sicilia']=array('rutas','zonas','fichas');
$data['Sicilia']['rutas']=array('Sicilia a tu aire','Sicilia Rural','Sicilia Deluxe','Las islas Eolias');
$data['Sicilia']['zonas']=array('Palermo y Trapani','Agrigento e Interior','Norte e Islas Eolias','Catania y Etna','Ragusa y Siracusa');
$data['Sicilia']['fichas']=array('A Lume di Candele','La Casa di Pippinitto','Il Giardino di Sicilia','Casale Corcella','Val di Kam','Al Sakali');

$data['Palermo y Trapani']['position']='NW';
$data['Agrigento e Interior']['position']='S';
$data['Norte e Islas Eolias']['position']='N';
$data['Catania y Etna']['position']='E';
$data['Ragusa y Siracusa']['position']='W';

// Cerdeña
$data['Cerdeña']=array('rutas','zonas','fichas');
$data['Cerdeña']['rutas']=array('Cerdeña a tu aire','Cerdeña Rural','Cerdeña con Encanto');
$data['Cerdeña']['zonas']=array('Alghero','Oristiano','Sulcis-Iglesiente','Cagliari','Orosei','Gallura y C. Esmeralda');
$data['Cerdeña']['fichas']=array('La Casa di Pippinitto','Il Giardino di Sicilia','Casale Corcella','Val di Kam','Al Sakali');

// positions
$data['Alghero']['position']='NW';
$data['Oristano']['position']='W';
$data['Sulcis-Iglesiente']['position']='SW';
$data['Cagliari']['position']='S';
$data['Orosei']['position']='E';
$data['Gallura y C. Esmeralda']['position']='NE';

// fichas
$data['A Lume di Candele']['position']='';
$data['A Lume di Candele']['description']='';

$filtrados = array();
$filtrados['Zona Palermo y Trapani'] = array( "Agriturismo Don Carlo", "Al Galileo Siciliano", "Baglio Fontanasalsa", "Casale Corcella", "Case Colomba", "Baglio Donna Santa", "La Portazza resort", "Foresteria Planeta", "La Gancia", "Porta delle botteghelle", "B&B Zagara"); 
$filtrados['Zona Agrigento e Interior'] = array( "Terrazze di Montelusa", "Val di Kam", "Feudo Muxarello");
$filtrados['Zona Norte e Islas Eolias'] = array( "Baglio Palamara", "B&B Lirma", "Il Giardino di Sicilia", "Hotel Solemar", "La Locanda del Postino", "Hotel Villaggio Stromboli", "La Sirenetta Park Hotel", "Hotel Signum");
$filtrados['Zona Catania y Etna'] = array( "Case Perrotta", "Fondo Cipollate", "La Casa di Pippinitto", "Sciaraviva", "Il Glicine", "Zash");
$filtrados['Zona Ragusa y Siracusa'] = array( "Agriturismo Case Brizza", "Al Sakali", "Aretusa Vacanze", "Casina Grotta di Ferro", "Scicli Albergo Diffuso", "La Muraglia", "Mangiabove Guesthouse");
$filtrados['Zona Alghero'] = array( "Aigua", "I Vigneti", "Nidi della Poiana", "Piazza San Pantaleo", "Rosso di sera", "Country Hotel Vessus", "Wine Resort Leda d'Ittiri", "B&B Kapì country", "Villa Mosca", "Country Hotel Domominore");
$filtrados['Zona Oristano'] = array( "Agriturismo S'Omu", "Hotel Lucrezia", "L'Orto");
$filtrados['Zona Sulcis-Iglesiente'] = array( "Agriturismo Biologico Fighezia", "S'Anninnia");
$filtrados['Zona Cagliari'] = array( "B&B Kastrum", "Su Leunaxiu", "Casa Anedda", "Casa Mascia", "La fattoria delle tartarughe", "Hotel Relais Villa del Borgo", "B&B Casa Camboni", "B&B Martina", "B&B Caravelle");
$filtrados['Zona Orosei'] = array( "Agriturismo Canales", "Agriturismo Guthiddai", "Antico Palathos", "Albergo diffuso Mannois");
$filtrados['Zona Gallura y Costa Esmeralda'] = array( "Il muto di Gallura", "Li Pireddi", "Lu Pastruccialeddu", "Stazzo Lu Ciaccaru", "Jaddhu Resort");
$filtrados['Zona Salento'] = array( "B&B Corte San Giuseppe", "B&B Novecento", "BioMasseria Santa Lucia", "Masseria Uccio");
$filtrados['Zona Valle d\'Itria'] = array( "Agriturismo Serragambetta", "B&B dei Serafini", "Masseria Cervarolo", "Terra e Mare");
$filtrados['Zona Matera'] = array( "Borgo Vallerita", "Orto di lucania");
$filtrados['Zona Gargano'] = array( "B&B Zia Ní");
$filtrados['Zona Chania y Oeste'] = array( "Elia", "Hotel Bozzali", "Kamares");
$filtrados['Zona Heraklion'] = array( "Asion Lithos", "Viglatoras", "Villa Kerasia");
$filtrados['Zona Lasithi (Este)'] = array( "George Villas", "Stella Traditional", "Terra Minoica", "Aspros Potamos");
$filtrados['Zona Rethimno'] = array( "Dalabelos", "Kapsaliana");
$filtrados['Zona Malta'] = array( "The Burrow", "Chapel 5 suites", "The Host");
$filtrados['Zona Gozo'] = array("Thirtyseven", "Maria Giovanna Guest House", "Maria's BnB");
?>
