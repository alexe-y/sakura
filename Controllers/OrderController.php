<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 31.01.2018
 * Time: 18:02
 */
class OrderController
{
	private $minDelivery;
	// ваш Email
	private $admin_mail;
	public function __construct(){
		$this->minDelivery=300;
		$this->admin_mail = 'alexey.dyatel@gmail.com';
		require_once ROOT.'/Models/Order.php';
		require_once ROOT.'/Models/Client.php';
	}
    public function actionSendOrder()
    {
    	if(!empty($_POST['orderlist']) && !empty($_POST['userdata'])){
			parse_str($_POST['orderlist'], $orderlist);
			parse_str($_POST['userdata'], $userdata);
			$userdata['user_phone']=preg_replace("/[^0-9]/", '', $userdata['user_phone']);
			/*
			$orderlist - массив со списком заказа
			$userdata - данные заказчика
			*/
			// При желании, можно посмотреть полученные данные, записав их в файл:
			// file_put_contents('cart_data_log.txt', var_export($orderlist, 1) . "\r\n");
			// file_put_contents('cart_data_log.txt', var_export($userdata, 1), FILE_APPEND);
			$totalSum=$this->countSumm($orderlist); //считаем сумму заказа
			$deliveryCost=$this->countDelivery($totalSum); //считаем стоимость доставки
			$send_ok=$this->sendMessage($orderlist, $userdata, $totalSum, $deliveryCost); //отправляем письмо
			// Ответ на запрос
			$response = [
			    'errors' => !$send_ok,
			    'message' => $send_ok ? 'Заказ принят в обработку!' : 'Хьюстон! У нас проблемы!'
			];
			//Получаем id клиента
			$client=Client::getClientByPhone($userdata['user_phone']);
			if($client==0){
				$client=Client::addClient($userdata['user_name'], $userdata['user_phone'],'', $userdata['user_address']);
			}
			else{
				Client::updateClient($client['id'], $userdata['user_name'], $userdata['user_address']);
			}
			//Добавляем данные заказа
			Order::addOrder($_POST['orderlist'], $client['id'], $totalSum, $deliveryCost, $userdata['user_comment'], 'Доставка');
			//Отдаем ответ клиенту
			exit( json_encode($response) );
     }
 }
	public function sendMessage($orderlist, $userdata, $totalSum, $deliveryCost){
		// Заголовок письма
			$subject = 'Заказ '.date('d.m. H:i');
			$userdata['user_mail']='dimasushimaster@gmail.com';
			// Email заказчика (как fallback - ваш же Email)
			$to = !empty($userdata['user_mail']) ? $userdata['user_mail'] : $this->admin_mail;
			$userdata['user_phone'] = preg_replace("/[^0-9]/", '', $userdata['user_phone']);
			// Формируем таблицу с заказанными товарами
			$tbl = '<table style="width: 100%; border-collapse: collapse;">
            <tr>
                <th style="width: 1%; border: 1px solid #333333; padding: 5px;">ID</th>
                <th style="border: 1px solid #333333; padding: 5px;">Наименование</th>
                <th style="border: 1px solid #333333; padding: 5px;">Цена</th>
                <th style="border: 1px solid #333333; padding: 5px;">Кол-во</th>
            </tr>';
foreach($orderlist as $id => $item_data) {
    $tbl .= '
            <tr>
                <td style="border: 1px solid #333333; padding: 5px;">'.$item_data['id'].'</td>
                <td style="border: 1px solid #333333; padding: 5px;">'.$item_data['title'].'</td>
                <td style="border: 1px solid #333333; padding: 5px;">'.$item_data['price'].'</td>
                <td style="border: 1px solid #333333; padding: 5px;">'.$item_data['count'].'</td>
            </tr>';
}
$total=$totalSum+$deliveryCost;
$tbl .= '
			<tr>
                <td  style="border: 1px solid #333333; padding: 5px;" colspan="3">Доставка:</td>
                <td style="border: 1px solid #333333; padding: 5px;"><b>'.$deliveryCost.' грн.</b></td>
                <td style="border: 1px solid #333333;">&nbsp;</td>
            </tr>
			<tr>
                <td  style="border: 1px solid #333333; padding: 5px;" colspan="3">Итого:</td>
                <td style="border: 1px solid #333333; padding: 5px;"><b>'.$total.' грн.</b></td>
                <td style="border: 1px solid #333333;">&nbsp;</td>
            </tr>
        </table>';
			// Тело письма
			$body = '
			        <html>
			        <head>
			          <title>'.$subject.'</title>
			        </head>
			        <body>
			          <p>Информация о заказчике:</p>
			            <ul>
			                <li><b>Ф.И.О.:</b> '.$userdata['user_name'].'</li>
			                <li>
			                	<a href=tel:'.$userdata['user_phone'].' <b>Тел.:</b> '.$userdata['user_phone'].'
			                </li>
			                <li><b>Адрес:</b> '.$userdata['user_address'].'</li>
			                <li><b>Комментарий:</b> '.$userdata['user_comment'].'</li>
			            </ul>
			            <p>Информация о заказае:</p>
			          '.$tbl.'
			            <p>Письмо создано автоматически. Пожалуйста, наберите Леху (на всякий случай)</p>
			        </body>
			        </html>';

			// Заголовки
			$headers   = []; // или $headers = array() для версии ниже 5.4
			$headers[] = 'MIME-Version: 1.0'; // Обязательный заголовок
			$headers[] = 'Content-type: text/html; charset=utf-8'; // Обязательный заголовок. Кодировку изменить при необходимости
			$headers[] = 'From: <Sakura@zt.ua>'; // От кого
			$headers[] = 'Bcc: Admin <'.$this->admin_mail.'>'; // скрытая копия админу сайта, т.е. вам
			$headers[] = 'X-Mailer: PHP/'.phpversion();
			// Отправка
			$send_ok = mail($to, $subject, $body, implode("\r\n", $headers));
			return $send_ok;
	}
	public function countSumm($orderlist){
		$totalSum=0;
		foreach($orderlist as $id => $item_data) {
			    $totalSum += (float)$item_data['count'] * (float)$item_data['price'];
			}
			return $totalSum;
	}
	public function countDelivery($totalSum){
		if($totalSum>=$this->minDelivery){
			$deliveryCost=0;
		}
		else {
			$deliveryCost=40;
		}
		return $deliveryCost;
	}
}