<!-- Feedback carousel -->
<?if(is_array($feedbackList)):?>
<section>
    <div class="cd-testimonials-wrapper cd-container">
        <h2 class="header_big" id="header_feedback">Отзывы</h2>
        <h3 class="header_small" id="header_feedback_small" > </h3> 
        <ul class="cd-testimonials">
            <?foreach ($feedbackList as $feedback):?>
                <?if($feedback['main_page']==1):?>
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
            <?endif?>
            <?endforeach?>  
        </ul> 
        <a href="feedback/" class="cd-see-all">Читать все</a>
    </div>
</section>
<?endif?>
