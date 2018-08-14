<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WS5PH58');</script>
    <!-- End Google Tag Manager -->

    <title><?if(isset($article)):?><?=$article['meta_title']?><?else:?>Наш суши-блог - интересно про вкусное<?endif?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/Views/img/favicon.ico" />
    <meta name="title" content="<?if(isset($article)):?><?=$article['meta_title']?><?else:?>Cуши-блог - интересно про вкусное<?endif?>"/>
     <meta name="description" content="<?if(isset($article)):?><?=$article['meta_description']?><?else:?>Пишем про нашу доставку суши, чем мы отличаемся от других и много интересных фактов о суши<?endif?>" />
    <meta name="keywords" content="интересно про суши"/>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Узнайте 7 преимуществ нового сервиса «Сакура Суши» в Житомире и закажите доставку излюбленных блюд японской кухни. Отличное суши-меню, свежие продукты, безупречное приготовление. Звоните или заказывайте online">
    <meta property="og:image" content="sakura.zt.ua/Views/img/SakuraSushi.jpg">
    <meta property="og:site_name" content="Sakura.zt.ua">
    <meta property="og:url" content="Sakura.zt.ua">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WS5PH58"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <link href="/Views/css/header.css" rel="stylesheet" type="text/css" />
<link href="/Views/css/article.css" rel="stylesheet" type="text/css" />
<?php include ROOT.'/Views/sprite.php';?> 
<header>
        <div class="header-wrap">
            <div class="place header-item" id="place"><a href="#map"><svg class="svg-icon">
                        <use xlink:href="#pin" />
                    </svg></a><span class="place">&nbsp;Житомир</span></div>
            <div class="place header-item" ><svg class="svg-icon">
                        <use xlink:href="#clock" />
                    </svg>&nbsp;11:00 - 23:00</div>        
            <div class="logo header-item"><a href="/"><img src="/Views/img/logo.svg" alt="Sakura"></a></div>
        
            <div class="tel header-item" ><svg class="svg-icon">
                        <use xlink:href="#call" />
                    </svg>&nbsp;<a href="tel:0733191640" style="color: black;" onclick="gtag_report_conversion2()"> <span class="place">(073) 319 16 40</span></a></div>
            <div class="basket header-item" id="basket"> <!--Значек корзины, подставляем из jqcart.js--></div>
        </div>
</header>
