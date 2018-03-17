<?php
class FeedbackController
{
    public function actionIndex()
    {
		include_once "Views/header.php";
        include_once "Views/Feedback/feedback.php";
        include_once "Views/footer.php";
        include_once "Views/Feedback/connect.php";
        return true;
        }
}