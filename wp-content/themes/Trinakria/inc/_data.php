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
$data['Oristiano']['position']='W';
$data['Sulcis-Iglesiente']['position']='SW';
$data['Cagliari']['position']='S';
$data['Orosei']['position']='E';
$data['Gallura y C. Esmeralda']['position']='NE';

// fichas
$data['A Lume di Candele']['position']='';
$data['A Lume di Candele']['description']='';
?>
