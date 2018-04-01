<?php
class ArticleController
{
    public function actionIndex()
    {
		include_once "Views/header.php";
        include_once "Views/Article/index.php";
        include_once "Views/footer.php";
        include_once "Views/Article/connect.php";
        return true;
        }
}