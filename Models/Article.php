<?
class Article
{
    public static function getArticleList()
    {
        $db = db::getInstance()->db;
        $result = $db->query('SELECT a.*, date_format(`a`.`date`,"%d.%m.%Y") AS `date` FROM article a WHERE active="1"  ORDER BY date DESC');
        $i = 0;
        $articleList = false;
        while ($row = $result->fetch()) {
            $articleList[$i]['id'] = $row['id'];
            $articleList[$i]['date'] = $row['date'];
            $articleList[$i]['title_h1'] = $row['title_h1'];
            $articleList[$i]['title_h2'] = $row['title_h2'];
            $articleList[$i]['meta_title'] = $row['meta_title'];
            $articleList[$i]['meta_description'] = $row['meta_description'];
            $articleList[$i]['text'] = $row['text'];
            $articleList[$i]['img'] = $row['img'];
            $articleList[$i]['active'] = $row['active'];
            $i++;
        }
        return $articleList;
    }
    public static function getArticleById($id)
    {
        $db = db::getInstance()->db;
        $result = $db->prepare('SELECT a.*, date_format(`a`.`date`,"%d.%m.%Y") AS `date` FROM article a WHERE active="1" AND id=:id ORDER BY date DESC');
        $result->execute(array(
            'id'=>$id,
        ));
        $i = 0;
        $article = false;
        while ($row = $result->fetch()) {
            $article['id'] = $row['id'];
            $article['date'] = $row['date'];
            $article['title_h1'] = $row['title_h1'];
            $article['title_h2'] = $row['title_h2'];
            $article['meta_title'] = $row['meta_title'];
            $article['meta_description'] = $row['meta_description'];
            $article['text'] = $row['text'];
            $article['img'] = $row['img'];
            $article['active'] = $row['active'];
        }
        return $article;
    }
}
