<?
class Feedback
{
    public static function sendFeedback($id_client, $feedback, $rating){
        $db=db::getInstance()->db;
        $result = $db->prepare("INSERT INTO feedback (id_client, feedback, rating) VALUES (:id_client, :feedback, :rating)");
        $result->execute(array(
            'id_client'=>$id_client,
            'feedback'=>$feedback,
            'rating'=>$rating,
        ));
        return true;
    }
    public static function getFeedbackList($mainPage=0)
    {
        $db = db::getInstance()->db;
        if($mainPage==1){
            $result = $db->prepare('SELECT f.*, date_format(`f`.`add_date`,"%d.%m.%Y") AS `date`, c.name AS name FROM feedback f JOIN client c ON f.id_client=c.id WHERE active="1" AND main_page=:main_page  ORDER BY f.add_date DESC');
        }
        else{
            $result = $db->prepare('SELECT f.*, date_format(`f`.`add_date`,"%d.%m.%Y") AS `date`, c.name AS name FROM feedback f JOIN client c ON f.id_client=c.id WHERE active="1" ORDER BY f.add_date DESC');
        }
        $result->execute(array(
            'main_page'=>$mainPage,
        ));
        $i = 0;
        $feedbackList = false;
        while ($row = $result->fetch()) {
            $feedbackList[$i]['id'] = $row['id'];
            $feedbackList[$i]['date'] = $row['date'];
            $feedbackList[$i]['feedback'] = $row['feedback'];
            $feedbackList[$i]['name'] = $row['name'];
            $feedbackList[$i]['rating'] = $row['rating'];
            $feedbackList[$i]['main_page'] = $row['main_page'];
            $feedbackList[$i]['active'] = $row['active'];
            $i++;
        }
        return $feedbackList;
    }
    public static function getFeedbackRating(){
        $db=db::getInstance()->db;
        $result = $db->prepare("SELECT AVG(rating) as average, COUNT(id) as count FROM feedback WHERE active=1");
        $result->execute(array());
        while ($row = $result->fetch()) {
            $rating['average'] = $row['average'];
            $rating['count'] = $row['count'];
        }
        return $rating;
    }
 }