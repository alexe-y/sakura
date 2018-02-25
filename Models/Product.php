<?php
class Product
{


    public static function getProductList()
    {
        $db = db::getInstance()->db;
        $result = $db->query('SELECT * FROM mg_product WHERE activity="1"  ORDER BY sort ASC');
        $i = 0;
        $productList = false;
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['cat_id'] = $row['cat_id'];
            $productList[$i]['title'] = $row['title'];
            $productList[$i]['description'] = $row['description'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['image_url'] = $row['image_url'];
            $productList[$i]['active'] = $row['activity'];
            $productList[$i]['weight'] = $row['weight'];
            $i++;
        }
        return $productList;
    }
}
