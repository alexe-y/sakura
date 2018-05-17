<?
class Feedback
{
    public static function sendFeedback($id_client, $feedback, $add_date){
        $db=db::getInstance()->db;
        $result = $db->prepare("INSERT INTO feedback (id_client, feedback, add_date) VALUES (:id_client, :feedback, :add_date)");
        $result->execute(array(
            'id_client'=>$id_client,
            'feedback'=>$feedback,
            'add_date'=>$add_date,
        ));
        return true;
    }
    public static function getFeedbackList()
    {
        $db = db::getInstance()->db;
        $result = $db->query('SELECT f.*, date_format(`f`.`add_date`,"%d.%m.%Y") AS `date`, c.name AS name FROM feedback f JOIN client c ON f.id_client=c.id WHERE active="1"  ORDER BY date DESC');
        $i = 0;
        $feedbackList = false;
        while ($row = $result->fetch()) {
            $feedbackList[$i]['id'] = $row['id'];
            $feedbackList[$i]['date'] = $row['date'];
            $feedbackList[$i]['feedback'] = $row['feedback'];
            $feedbackList[$i]['name'] = $row['name'];
            $feedbackList[$i]['main_page'] = $row['main_page'];
            $feedbackList[$i]['active'] = $row['active'];
            $i++;
        }
        return $feedbackList;
    }
 }