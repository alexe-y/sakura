<?
class Client
{
    public static function addClient($name, $phone, $email='', $address=''){
        $userAgent=$_SERVER['HTTP_USER_AGENT'];
        $userIp=$_SERVER['REMOTE_ADDR'];
        $db=db::getInstance()->db;
        $result = $db->prepare("INSERT INTO client (name, phone, email, address, ip, agent) VALUES (:name, :phone, :email, :address, :ip, :agent)");
        $result->execute(array(
            'name'=>$name,
            'phone'=>$phone,
            'address'=>$address,
            'ip'=>$userIp,
            'agent'=>$userAgent,
            'email'=>$email,
        ));
        $client=$db->query('SELECT MAX(id) AS id FROM client');
        $client=$client->fetch();
        return $client;
    }
    public static function updateClient($id, $name, $address){
        $userAgent=$_SERVER['HTTP_USER_AGENT'];
        $userIp=$_SERVER['REMOTE_ADDR'];
        $db=db::getInstance()->db;
        $result = $db->prepare("UPDATE client SET name=:name, address=:address, ip=:ip, agent=:agent WHERE id=:id");
        $result->execute(array(
            'name'=>$name,
            'address'=>$address,
            'ip'=>$userIp,
            'agent'=>$userAgent,
            'id'=>$id,
        ));
        return $result;
    }
    public static function getClientByPhone($phone)
    {
        $db = db::getInstance()->db;
        $result = $db->prepare('SELECT * FROM client WHERE phone=:phone ORDER BY add_date DESC');
        $result->execute(array(
            'phone'=>$phone,
        ));
        $client = false;
        while ($row = $result->fetch()) {
            $client['id'] = $row['id'];
            $client['name'] = $row['name'];
            $client['phone'] = $row['phone'];
            $client['address'] = $row['address'];
            $client['date'] = $row['add_date'];
            $client['ip'] = $row['ip'];
            $client['agent'] = $row['agent'];
        }
        return $client;
    }
 }