<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    <link rel="stylesheet" href="/Views/css/feedback.css">
    <link rel="stylesheet" href="/Views/css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
    <script src="/Views/js/jquery-1.11.3.min.js"></script>
    <script src="/Views/js/jquery.mask.min.js"></script>
    <script src="/Views/js/developer/jqcart.js"></script>
    <script src="/Views/js/masonry.pkgd.min.js"></script>
    <script src="/Views/js/feedback.js"></script>
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
<script>$(document).ready(function() {
            $('#user_phone').mask('(000) 000-0000');
            $('.cd-testimonials-all').addClass('is-visible');
             $('header').addClass('fixedbar');
             $('.cd-testimonials-all-wrapper').children('ul').masonry({
        itemSelector: '.cd-testimonials-item'
    });
        });</script>
</body>
</html>