<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 31.01.2018
 * Time: 18:03
 */

class Order
{
    public static function addOrder($orderList, $userdata, $total_sum)
    {
        $db = db::getInstance()->db;
        $result = $db->query('INSERT INTO mg_order (add_date, name_buyer, phone, address, user_comment, summ) VALUES ('.date("Y-m-d H:i:s").', :name, :phone, :address,  :user_comment, :summ)');
        $result->execute(array(
            'name'=>$userdata['user_name'],
            'phone'=>$userdata['user_phone'],
            'address'=>$userdata['user_address'],
            'user_comment'=>$userdata['user_comment'],
            'orderlist'=>$orderList,
            'summ'=>$total_sum,

        ));
        return true;
    }

    public static function updateOrder($order){
        $db=db::getInstance()->db;
        $result = $db->prepare("UPDATE mg_order SET updata_date=:update_date, close_date=:close_date, order_content=:order_content, status_id=:status_id WHERE id=:id");
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