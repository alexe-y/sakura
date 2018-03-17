<section id="category">
    <div class="container">
        <h2 class="header_big" id="header_menu">Меню</h2>
            <h3 class="header_small" id="header_menu_small">Суши и роллы на любой вкус</h3>
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
                        <img width="288" height="192" src="Views/img/huyase-nabor-min_500x333.jpg" alt="Хуясэ набор" >
                        <h6 class="item-title">
                            <a href="#">Хуясэ набор</a>
                        </h6>
                        <p class="item-ingr">Хуясэ ролл, чиз ролл, острый осьминог, футомаки с креветкой, маки лосось,
филадельфия в икре с угрем. 1150г.</p>
<del class="price" >435 грн.</del>
                        <div class="item-price">
                            
                             <div class="price action">392 грн.</div>
                            <div class="btn-cont">
                                <button class="btn add_item btn-primary" data-id="130" data-title="Хуясэ набор" data-price="392"><span>В корзину</span></button>
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
    </div>
</section>