 <!-- <div class="container"> -->
 <div class="cd-testimonials-all">
    <div class="cd-testimonials-all-wrapper">
        <?php if(!isset($_SESSION['message']))
            $_SESSION['message']='';
        ?>
 <div id="form" style="position: relative;">
    <i id="spinner" class="spinner" style="display: none"></i>
    <form class="feedback-wrapper" action="javascript:void(null);"
                      onsubmit="newFeedback(this);">
        
       <h2> Вкусно? <?=$_SESSION['message'];?></h2>
        <div class="stars">
            <div id="reviewStars-input"">
                <input id="star-4" type="radio" name="reviewStars" required value='5'/>
                <label title="отлично" for="star-4"></label>

                <input id="star-3" type="radio" name="reviewStars" value='4'/>
                <label title="хорошо" for="star-3"></label>

                <input id="star-2" type="radio" name="reviewStars" value='3'/>
                <label title="нейтрально" for="star-2"></label>

                <input id="star-1" type="radio" name="reviewStars" value='2'/>
                <label title="плохо" for="star-1"></label>

                <input id="star-0" type="radio" name="reviewStars" value='1'/>
                <label title="ужасно" for="star-0"></label>
            </div>
        </div>
         <h3>Есть пожелания? </h3>
         <label style="margin-top: 5px;">Оставьте, пожалуйста, отзыв :)</label>
        <label style="margin-top: 5px;">Помогите другим сделать правильный выбор</label>
        <input required="required" name="name" placeholder="ФИО"/>
        <input required="required" name="phone" placeholder="Телефон" id="user_phone"/>
        <input placeholder="E-mail" name="email" />
        <textarea placeholder="Отзыв" name="feedback" rows="3" required="required"></textarea>
        <div class="button-wrapper">
            <button type="submit" name="submit" class="btn btn-feedback">Отправить</button>
        </div>
    </form>
</div>
        <ul style="position: relative; height: 2212px;">
            <?if(is_array($feedbackList)):?>
            <?foreach ($feedbackList as $feedback):?>
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
            <?endforeach?>
            <?endif?>
        </ul>
    </div>  <!-- cd-testimonials-all-wrapper -->
</div>
<!-- </div> -->
 