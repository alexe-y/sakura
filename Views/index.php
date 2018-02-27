<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114659457-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-834077880');
        gtag('config', 'UA-114659457-1');
    </script>

    <title>Sakura - Доставка Суши в Житомире</title>

    <link rel="shortcut icon" type="image/x-icon" href="Views/img/favicon.ico" />
    <meta name=’description’ content=’Доставка вкусных суши в Житомире’ >
    <meta name=’keywords’ content=’суши, роллы, доставка еды, доставка суши Житомир, доставка роллов, заказать еду, еда на дом’>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<link href="Views/css/style.css" rel="stylesheet" type="text/css" />
<header>
    <div class="container">
        <div class="header-wrap">
            <div class="logo header-item"><img src="Views/img/logo-light.png" alt=""></div>
            <div class="place header-item"><i class="fas fa-map-marker-alt"></i>&nbsp;Житомир</div>
            <div class="tel header-item" ><i class="fas fa-phone"></i>&nbsp;<a href="tel:0733191640" style="color: black;" onclick="gtag_report_conversion()"> (073) 319 16 40</a></div>
            <div class="basket header-item" id="basket"><!--<i class="fas fa-shopping-basket"></i><span class="jqcart-total-cnt"> x пусто</span>--></div>
        </div>
    </div>
</header>
<div class="pic-wrapper">
    <div class="pic-page">
        <a href="/" id="pic-logo"></a>

        <div class="pic-headers">
            <h1 class="header_big">Пожалуй, лучшие суши в городе</h1>
            <h2 class="header_small">С доставкой домой</h2>
        </div>
        
        <a href="#category" class="go-menu" id="go-menu">Меню</a>
    </div>
</div>
<section id="features">
    <div class="container">
        <div class="features-wrap">
                <div class="feature-item">
                    <div class="feature-icon"><i class="fab fa-apple"></i></div>
                    <div class="feature-content">
                        <h4 class="feature-title">Свежайший закрут</h4>
                        <p class="feature-text">Крутим роллы только из свежих ингридиентов.<br> И много рыбы!</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="far fa-clock"></i></div>
                    <div class="feature-content">
                        <h4 class="feature-title">Быстро доставим!</h4>
                        <p class="feature-text">Вжух, и через 40 минут уже наслаждаетесь вкуснейшим роллом</p>
                    </div>
                </div>
            <div class="feature-item">
                <div class="feature-icon"><i class="far fa-smile"></i></div>
                <div class="feature-content">
                    <h4 class="feature-title">Дарим радость</h4>
                    <p class="feature-text">При заказе от 400грн позитивное настроение в подарок! (и бесплатная доставка)</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="pic-wrapper2">
    <div class="pic-page">
        <div class="pic-headers2">
            <h1 class="header_big header_big2">Микс набор со скидкой 15%</h1>
            <h2 class="header_small header_small1">Всего 238грн.</h2>
        </div>
        <button class="add_item go-menu" data-id="132" data-title="Микс набор" data-price="238"><span>В корзину</span></button>
    </div>
</div>
<section id="category">
    <div class="container">
    <div id="cat_firm" class="menu-category">
        <div class="menu-category-title">
            <a href="#cat_firm">
                <div class="bg-image"></div>
                <h2 class="title">Фирменные</h2>
            </a>
        </div>
        <div  class=" burgers ">
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==29):?>

                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item btn-primary" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>" ><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>
    <div id="cat_dragons" class="menu-category">
        <div class="menu-category-title">
            <a href="#cat_dragons">
            <div class="bg-image">
            </div>
            <h2 class="title">Драконы</h2>
        </a>
        </div>
        <div  class=" burgers ">
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==30):?>

                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item btn-primary" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>
    <div id="cat_sets" class="menu-category">
        <div class="menu-category-title">
            <a href="#cat_sets">
                <div class="bg-image"></div>
                <h2 class="title">Сеты</h2>
            </a>
        </div>
        <div  class=" burgers ">
            <div class="burgers-item">
                <img width="288" height="192" src="Views/img/miks-nabor-min_500x333.jpg" alt="Микс набор" >
                <h6 class="item-title">
                    <a href="#">Микс-набор</a>
                </h6>
                <p class="item-ingr">Овощной ролл, калифорния в икре с лососем, филадельфия в икре с лососем,
                    крабико ролл. 800г.</p>
                <del class="price">280 грн.</del>
                <div class="item-price">
                    <div class="price action">238 грн.</div>
                    <div class="btn-cont">
                        <button class="btn add_item btn-primary" data-id="132" data-title="Микс набор" data-price="238"><span>В корзину</span></button>
                    </div>
                </div>
            </div>
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==27):?>

                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item btn-primary" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>
    <div id="cat_rolls" class="menu-category">
        <div class="menu-category-title">
            <a href="#cat_rolls">
                <div class="bg-image"></div>
                <h2 class="title">Роллы</h2>
            </a>
        </div>
        <div  class=" burgers ">
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==26):?>

                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item btn-primary" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>
    <div id="cat_sushi" class="menu-category">
        <div class="menu-category-title">
            <a href="#cat_sushi">
                <div class="bg-image"></div>
                <h2 class="title">Суши</h2>
            </a>
        </div>
        <div  class=" burgers ">
        <?if(is_array($productList)):?>
            <?php foreach($productList as $product):?>
                <?if($product['cat_id']==25):?>
                    <div class="burgers-item">
                        <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                        <h6 class="item-title">
                            <a href="#"><?echo $product['title']?></a>
                        </h6>
                        <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                        <div class="item-price">
                            <div class="price"><?echo $product['price']?> грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item btn-primary" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>
                <? endif;?>
            <? endforeach;?>
        <?endif;?>
    </div>
    </div>
        <div id="cat_adds" class="menu-category">
            <div class="menu-category-title">
                <a href="#cat_adds">
                    <div class="bg-image"></div>
                    <h2 class="title">Добавки</h2>
                </a>
            </div>
            <div  class="burgers">
                <?if(is_array($productList)):?>
                    <?php foreach($productList as $product):?>
                        <?if($product['cat_id']==0):?>

                            <div class="burgers-item">
                                <img width="288" height="192" src="Views/img/<?echo $product['image_url']?>" alt="<?echo $product['title']?>" >
                                <h6 class="item-title">
                                    <a href="#"><?echo $product['title']?></a>
                                </h6>
                                <p class="item-ingr"><?echo $product['description']?> <?echo $product['weight']?>г.</p>
                                <div class="item-price">
                                    <div class="price"><?echo $product['price']?> грн.</div>
                                    <div class="btn-cont">
                                        <button class="btn add_item btn-primary" data-id="<?echo $product['id']?>" data-title="<?echo $product['title']?>" data-price="<?echo $product['price']?>"><span>В корзину</span></button>
                                    </div>
                                </div>
                            </div>
                        <? endif;?>
                    <? endforeach;?>
                <?endif;?>
            </div>
        </div>
<!--    <div id="drinks_1" class="menu-category">-->
<!--        <div class="menu-category-title">-->
<!--            <a href="#drinks_1">-->
<!--                <div class="bg-image"></div>-->
<!--                <h2 class="title">Drinks</h2>-->
<!--            </a>-->
<!--        </div>-->
<!--    -->
<!--    <div  class=" burgers ">-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="burgers-item">-->
<!--            <img width="288" height="192" src="http://themebeer.com/soup/wp-content/uploads/2017/06/product-sushi-1-288x192.jpg" alt="" >-->
<!--            <h6 class="item-title">-->
<!--                <a href="#">Nigiri-sushi</a>-->
<!--            </h6>-->
<!--            <p class="item-ingr">Beef, cheese, fries, onion, potato</p>-->
<!--            <div class="item-price">-->
<!--                <div class="price">from $5.00</div>-->
<!--                <div class="btn-cont">-->
<!--                    <button class="btn"><span>Add to cart</span></button>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    -->
<!--    </div>-->
<!--    </div>-->
    </div>
</section>
    <footer>
       <div class="container">

        <div class="footer-wrap">
            <div class="footer-item">
                <p class="copy">Copyright Sakura© 2018. </p>
            </div>
            <div class="footer-item">
                <a href="#features" class="footer-logo">
                    <img src="Views/img/logo-light.png" alt="logo">
                </a>
            </div>
            <div class="footer-item">
                <a href="https://www.facebook.com/groups/2003535999886621/" class="inst"><i class="fab fa-facebook-square"></i></a>
                <a href="https://www.instagram.com/sakura.zt.ua/" class="inst"><i class="fab fa-instagram"></i></a>
                <a href="https://t.me/sakurasushi" class="inst"><i class="fab fa-telegram-plane"></i></a>
            </div>
        </div>
       </div>
    </footer>

    <link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
    <script src="Views/js/jquery-1.11.3.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="Views/js/main.js"></script>
    <script src="Views/js/jquery.mask.min.js"></script>
    <script src="Views/js/developer/jqcart.js"></script>
    <script>
        $(function(){
            'use strict';
            // инициализация плагина
            $.jqCart({
                buttons: '.add_item',
                handler: '/Controllers/handler.php',
                cartLabel: '.basket',
                visibleLabel: true,
                openByAdding: false,
                currency: 'грн.'
            });
            // Пример с дополнительными методами
            $('#basc').click(function(){
                $.jqCart('openCart'); // открыть корзину
            });
            $('#clear').click(function(){
                $.jqCart('clearCart'); // очистить корзину
            });
        });
    </script>
    <!-- Event snippet for Конверсия покупок conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function () {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-834077880/cHNnCKXmjX4QuIncjQM',
                'value': 100.0,
                'currency': 'UAH',
                'transaction_id': '',
                'event_callback': callback
            });
            return false;
        }
    </script>
    <script>$(document).ready(function() {
            $('#user_phone').mask('(000) 000-0000');
        });</script>
</body>
</html>