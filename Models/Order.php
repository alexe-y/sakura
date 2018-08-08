<?php
class Order
{
    public static function addOrder($orderList, $client, $totalSum, $deliveryCost, $comment, $type)
    {
        $db = db::getInstance()->db;
        $result = $db->prepare('INSERT INTO orders (client_id, summ, delivery_cost, order_content, user_comment, type) VALUES (:client_id, :summ, :delivery_cost, :orderlist, :comment, :type)');
        $result->execute(array(
            'client_id'=>$client,
            'delivery_cost'=>$deliveryCost,
            'summ'=>$totalSum,
            'orderlist'=>$orderList,
            'comment'=>$comment,
            'type'=>$type,
        ));
        return true;
    }

    //test
    public static function updateOrder($order){
        $db=db::getInstance()->db;
        $result = $db->prepare("UPDATE order SET updata_date=:update_date, close_date=:close_date, order_content=:order_content, status_id=:status_id WHERE id=:id");
        $result->execute(array(
            'update_date'=>$order['update_date'],
            'close_date'=>$order['close_date'],
            'order_content'=>$order['order_content'],
            'status_id'=>$order['status_id'],
            'id'=>$order['id'],
        ));
        return $result;
    }
}