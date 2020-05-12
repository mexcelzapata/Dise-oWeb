<?php
require 'vendor/autoload.php';
$categorias = array("botas", "ropa","accesorios");
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$collection = $client->rosse->categorias;
$colleccategorias=($collection->find());
$categorias = Array();

foreach ($colleccategorias as $entry) {
	$categorias[ $entry['_id']->__toString()] = $entry['name'];
	echo $categorias[$entry['_id']];
}






//un arreglo es un mapa, no existen los arreglos en php, por ello que a cada una de las 
//categorias se le asigna una llave.

$catprod= array(0 => array(0,1,2), 1 => array(3,4,5), 2 => array(6,7,8));

//relaciona categorias con productos o con un arreglo de productos

$productos= array("cuero","charol", "plastico","pata elefante","mom jens","basicos",
"lana","algodon","poliester");

$descripciones=array("adsadasa","sadasdasda","dasdasdasd","asadasda");

?>
