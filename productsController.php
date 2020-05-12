<?php
   require 'vendor/autoload.php';
   $uri="mongodb://localhost";
   $client=new MongoDB\Client($uri);

    class ProductsController{
        $client=new MongoDB\Client($uri);
        $db = $client->rosse;
        $productsDB = $db->productos;
        $this->productos = $productsDB;
    }
    public function findAll(){
        $result= $this->productos->find();
        return $result;
        
    }
    public function findOne($_id){
        $_id = new MongoDB\BSON\ObjectId('_id'=>$_id);
        return findOneProduct($_id);
    }


?>
