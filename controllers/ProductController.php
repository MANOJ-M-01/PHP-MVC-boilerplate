<?php
namespace controllers;
use models\Products;

class ProductController{
    public function GetProducts(){
        $res=Products::All();
        return $res;
    }
}