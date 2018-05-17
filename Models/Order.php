<?php
class Order
{
    public static function addOrder($orderList, $userdata, $total_sum)
    {
        $db = db::getInstance()->db;
        $result = $db->prepare('INSERT INTO orders (name_buyer, phone, address, user_comment, summ, order_content) VALUES (:name, :phone, :address,  :user_comment, :summ, :orderlist)');
        $result->execute(array(
            'name'=>$userdata['user_name'],
            'phone'=>$userdata['user_phone'],
            'address'=>$userdata['user_address'],
            'user_comment'=>$userdata['user_comment'],
            'summ'=>$total_sum,
            'orderlist'=>$orderList,
        ));
        return true;
    }

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