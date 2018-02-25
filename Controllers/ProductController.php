<?php

class ProductController
{
    public function __construct()
    {
        require_once  ROOT. '/Models/Product.php';

    }

    public function actionProduct(){
        $productList=Product::getProductList();

        include ROOT.'/Views/index.php';
        return true;
    }

    public function actionIndex(){
        $this->actionProduct();
        return true;
    }



}