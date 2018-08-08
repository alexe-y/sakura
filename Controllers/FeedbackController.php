<?php
class FeedbackController
{
	public function __construct()
    {
        require_once  ROOT. '/Models/Feedback.php';
        require_once  ROOT. '/Models/Client.php';
        require_once  ROOT. '/Controllers/LandingController.php';
    }
    public function actionIndex()
    {
        $shedule=LandingController::getShedule();
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
        $rating='';
        $result=false;
        if(isset($_POST['submit'])) {
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $rating=$_POST['reviewStars'];
            $feedback=$_POST['feedback'];
            $phone = preg_replace("/[^0-9]/", '', $phone);
            $client=Client::getClientByPhone($phone);
            // $_SESSION['client']=$client;
            if($client==false){ 
				$client=Client::addClient($name, $phone, $email);
            } 
            $result=Feedback::sendFeedback($client['id'], $feedback, $rating);
        }
        if($result){
            $message='Спасибо за отзыв!';
        }
        else{
            $message='Что-то пошло не так.. =(';
        }
        echo "LOLLOLOLOLOLO";
       //echo $message;
       return true;
    }
}