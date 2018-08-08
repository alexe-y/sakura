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
                     <div class="star-info">
                        <?php for ($i=0; $i < $feedback['rating']; $i++):?> 
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;"  viewBox="0 0 12.92 12.29"><defs><style>.cls-1{fill:#ffbb00;}</style></defs><title>star</title><g id="star" data-name="star"><g id="Desktop"><polygon class="cls-1" points="6.46 0 8.55 3.92 12.92 4.7 9.85 7.89 10.46 12.29 6.46 10.35 2.47 12.29 3.08 7.89 0 4.7 4.37 3.92 6.46 0"/></g></g></svg>
                        <?php endfor ?>
                    </div>
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
