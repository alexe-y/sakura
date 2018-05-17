<?php
class FeedbackController
{
	public function __construct()
    {
        require_once  ROOT. '/Models/Feedback.php';
        require_once  ROOT. '/Models/Client.php';
    }
    public function actionIndex()
    {
    	$feedbackList=Feedback::getFeedbackList();
		include_once "Views/Feedback/header.php";
        include_once "Views/Feedback/feedback.php";
        include_once "Views/footer.php";
        include_once "Views/Feedback/connect.php";
        return true;
    }
    public function actionNewFeedback()
    {
    	$phone='';
    	$name='';
    	$email='';
    	$feedback='';
        $result=false;
        if(isset($_POST['submit'])) {
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $feedback=$_POST['feedback'];
            $date=date("Y-m-d");
            $phone = preg_replace("/[^0-9]/", '', $phone);
            $client=Client::getClientByPhone($phone);
            if($client==''){ //УТОЧНИТЬ
				$client['id']=Client::addClient($name, $phone, $email, $date);
            } 
            $result=Feedback::sendFeedback($client['id'], $feedback, $date);
        }
       header("Location: /feedback/");
    }
}