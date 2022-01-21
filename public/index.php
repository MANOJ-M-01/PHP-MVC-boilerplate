<?php 
require_once __DIR__.'/../config/config.php';
require_once __DIR__.'/../autoload.php';
 
use controllers\ProductController As Products;
 
$obj=new Products();
 
$datas=$obj->GetProducts();

foreach($datas as $data){
    echo $data['product_name']."<br />";
}