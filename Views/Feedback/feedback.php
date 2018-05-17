 <div class="cd-testimonials-all">
    <div class="cd-testimonials-all-wrapper">
    <form class="feedback-wrapper" action="/feedback/newFeedback/" method="post">
        <label>Оставить отзыв</label>
        <input required="required" name="name" placeholder="ФИО"/>
        <input required="required" name="phone" placeholder="Телефон" id="user_phone"/>
        <input placeholder="E-mail" name="email" />
        <textarea placeholder="Отзыв" name="feedback" rows="5" required="required"></textarea>
        <button type="submit" name="submit" class="btn btn-feedback">Отправить</button>
    </form>
        <ul style="position: relative; height: 2212px;">
            <?if(is_array($feedbackList)):?>
            <?foreach ($feedbackList as $feedback):?>
            <li class="cd-testimonials-item">
                <p><?=$feedback['feedback']?></p>
                <div class="cd-author">
                    <!--<img src="img/avatar-1.jpg" alt="Author image">-->
                    <ul class="cd-author-info">
                        <li><?=$feedback['name']?></li>
                        <li><?=$feedback['date']?></li>
                    </ul>
                </div> <!-- cd-author -->
            </li>
            <?endforeach?>
            <?endif?>
        </ul>
    </div>  <!-- cd-testimonials-all-wrapper -->
</div>
 