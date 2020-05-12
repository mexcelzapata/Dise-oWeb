<?php
include_once("header.php");
require 'vendor/autoload.php';
$uri="mongodb://localhost";
$client=new MongoDB\Client($uri);

$collection = $client->rosse->categorias->find();
$categorias = Array();
$descripcion=Array();
$precio=Array();
$categorias= Array();

foreach ($collection as $entry) {
        $categorias[ $entry['_id']->__toString()] = $entry['name'];
        $descripcion[$entry['_id']->__toString()]=$entry['desc'];
        $precio[$entry['_id']->__toString()]=$entry['precios'];
}

?>


	<div class= "container my-5">
		<div class="row">
			<div class="col-12 row justify-content-between align-items-center "> 
				<div>
					<h3>Categorias</h3>
				</div>
				<div>
					<small><a href="#" class="text-decoration-none">Ver todos</a></small>
				</div>
			</div> 
			<?php
				foreach($categorias as $key => $cat ){
          
          
			?>
				
				<div class="row container mt3 card-deck d-flex justify-content-center col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-sm-3 mt-xs-3">
					
						<div class="card">
							<img class="card-img-top " src="image/slider3.jpg" alt="###########" >
							<div class="card-body">
								<h5 class="card-title"><a href="cat.php?key=<?php echo $key?>"><?php echo $cat?></a></h5>
								<h6 class="card-subtitle md-2 text-muted"><?php echo $desc?></h6>
								<p class="card-text"><?php  echo $descripcion ?></p>
								<div class="d-flex justify-content-between">
									<a href="#" class="card-link text-center">Ver productos</a>
									<a href="#" class="card-link text-center">
										<snap style="font-size: 16px;">
											<i class="fas fa-cart-plus"></i>
									</snap> añadir </a>
								</div>    
							</div>
						</div>
					
				</div>
				<?php
				}
				?>
		
			</div>   

		</div>

	</div>