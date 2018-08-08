<link href="/Views/css/style.css" rel="stylesheet" type="text/css" />
<div class="pic-wrapper">
    <div class="pic-page" data-velocity="-0.5">
        <a nofollow id="pic-logo"></a>

        <div class="pic-headers">
            <h1 class="header_big">Закажите свежие суши и роллы сейчас  </h1>
            <h2 class="header_small">Приготовим и доставим до двери<br> за 45 минут</h2>
        </div>
        
        <a href="#category" class="go-menu" id="go-menu">B Меню</a>
    </div>
    <div class="pic-column">
        <div class="pic-items">
            <div class="pic-item">
                <svg class="svg-icon">
                    <use xlink:href="#clock" />
                </svg>
            </div>
            <div class="pic-item">График сегодня:</div> 
            <div class="pic-item"><?=$shedule['from']?> - <?=$shedule['to']?>
            </div>
        </div>
        <!-- <div class="pic-items"></div> -->
        <a href="/feedback/" class="pic-items">
            <div class="pic-item">
                <svg class="svg-icon">
                    <use xlink:href="#speech-bubbles-outline" />
                </svg>
            </div>
            <div class="pic-item">Отзывы</div> 
            <div class="pic-item">
                <?php for ($i=0; $i < round($rating['average'],2); $i++):?> 
                            <svg xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;"  viewBox="0 0 12.92 12.29"><defs><style>.cls-1{fill:#ffbb00;}</style></defs><title>star</title><g id="star" data-name="star"><g id="Desktop"><polygon class="cls-1" points="6.46 0 8.55 3.92 12.92 4.7 9.85 7.89 10.46 12.29 6.46 10.35 2.47 12.29 3.08 7.89 0 4.7 4.37 3.92 6.46 0"/></g></g></svg>
                <?php endfor ?> <br>
             <!-- (<?= $rating['count']?> отзыва) --></div>
        </a>
    </div>
</div>
<section id="features">
        <div class="features-wrap">
                <div class="feature-item">
                    <div class="feature-icon"><svg class="svg-icon">
                        <use xlink:href="#food-2" />
                    </svg></div>
                    <div class="feature-content">
                        <h4 class="feature-title">Свежайший закрут</h4>
                        <p class="feature-text">Крутим роллы только из свежих ингредиентов.<br> И много рыбы!</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><svg class="svg-icon">
                        <use xlink:href="#people-2" />
                    </svg></div>
                    <div class="feature-content">
                        <h4 class="feature-title">Быстрая доставка</h4>
                        <p class="feature-text">Приготовим и доставим до двери за 45 минут</p>
                    </div>
                </div>
            <div class="feature-item">
                <div class="feature-icon"><svg class="svg-icon">
                        <use xlink:href="#japanese-food" />
                    </svg></div>
                <div class="feature-content">
                    <h4 class="feature-title">Дарим радость</h4>
                    <p class="feature-text">Доставка по городу 40грн. При заказе от 300грн - бесплатно</p>
                </div>
            </div>
        </div>

</section>


    
    