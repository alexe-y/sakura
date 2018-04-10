<?php
class ArticleController
{
	public function __construct()
    {
        require_once  ROOT. '/Models/Article.php';

    }
    public function actionIndex()
    {
    	$articleList=Article::getArticleList();
		include_once "/Views/Article/header.php";
        include_once "/Views/Article/index.php";
        include_once "/Views/footer.php";
        include_once "/Views/Article/connect.php";
        return true;
    }
    public function actionArticle($articleId)
    {
        $article=Article::getArticleById($articleId);
        include_once "/Views/Article/header.php";
        include_once "/Views/Article/article.php";
        include_once "/Views/footer.php";
        include_once "/Views/Article/connect.php";
        return true;
    }
}