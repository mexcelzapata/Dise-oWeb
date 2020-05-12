
<?php
include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$collection = $client->rosse->categorias->find();
$categorias = Array();


foreach ($collection as $entry) {
        $categorias[ $entry['_id']->__toString()] = $entry['name'];
}




?>

<?php include_once("slider.php");?>
<?php include_once("categorias.php");?>





<h1> Categorias </h1>
<ul>
<?php
foreach($categorias as $key => $cat){

?>
        <li><a href="cat.php?key=<?php echo $key?>"><?php echo $cat?></a></li>

<?php
}

?>
</ul>

<?php
include_once("footer.php");
?>
