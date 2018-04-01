<?php

class LandingController
{
    public function __construct()
    {
        require_once  ROOT. '/Models/Product.php';

    }

    public function actionMainPage(){
        $productList=Product::getProductList();

        include_once ROOT.'/Views/header.php';
        //include_once ROOT.'/Views/test.php';
        include_once ROOT.'/Views/about.php';
        include_once ROOT.'/Views/products.php';
        //include_once ROOT.'/Views/feedback.php';
        //include_once ROOT.'/Views/article.php';
        include_once ROOT.'/Views/location.php';
        include_once ROOT.'/Views/footer.php';
        include_once ROOT.'/Views/connect.php';
        return true;
    }

    public function actionIndex(){
        $this->actionMainPage();
        return true;
    }



}