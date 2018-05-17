<?
class Client
{
    public static function addClient($name, $phone, $email='', $add_date){
        $db=db::getInstance()->db;
        $result = $db->prepare("INSERT INTO client (name, phone, email, add_date) VALUES (:name, :phone, :email, :add_date)");
        $result->execute(array(
            'name'=>$name,
            'phone'=>$phone,
            'email'=>$email,
            'add_date'=>$add_date,
        ));
        $id=$db->query('SELECT MAX(id) FROM client');
        $id=$id->fetch();
        return $id['MAX(id)'];
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
            $client['email'] = $row['email'];
            $client['date'] = $row['add_date'];
        }
        return $client;
    }
 }