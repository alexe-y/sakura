<?php

class LandingController
{
    public function __construct()
    {
        require_once  ROOT. '/Models/Product.php';
        require_once  ROOT. '/Models/Article.php';
        require_once  ROOT. '/Models/Feedback.php';
    }

    public function actionMainPage(){
        $shedule=$this::getShedule();
        $rating=Feedback::getFeedbackRating();
        $productList=Product::getProductList();
        $articleList=Article::getArticleList();
        $feedbackList=Feedback::getFeedbackList(1);
        include_once ROOT.'/Views/header.php';
        include_once ROOT.'/Views/about.php';
        include_once ROOT.'/Views/promo.php';
        include_once ROOT.'/Views/products.php';
        include_once ROOT.'/Views/feedback.php';
        include_once ROOT.'/Views/article.php';
        include_once ROOT.'/Views/location.php';
        include_once ROOT.'/Views/footer.php';
        include_once ROOT.'/Views/connect.php';
        return true;
    }

    public function actionIndex(){
        $this->actionMainPage();
        return true;
    }
    public static function getShedule(){
        $date=date("l");
        $shedule=array();
        $shedule['from']='12:00';
        if($date=='Friday' || $date=='Saturday'){
            $shedule['to']='24:00';
        }
        else{
            $shedule['to']='23:00';
        }
        return $shedule;
    }

}