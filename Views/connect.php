<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
    <link rel="stylesheet" href="/Views/css/feedback.css">
    <link rel="stylesheet" href="/Views/css/article.css">
    <link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
    <script src="/Views/js/jquery-1.11.3.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="/Views/js/main.js"></script>
    <script src="/Views/js/jquery.mask.min.js"></script>
    <script src="/Views/js/developer/jqcart.js"></script>
    <script src="/Views/js/jquery.flexslider-min.js"></script>
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
                'value': 40.0,
                'currency': 'UAH',
                'transaction_id': '',
                'event_callback': callback
            });
            return false;
        }
    </script>

    <!-- Event snippet for Звонок с сайта conversion page
    In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion2(url) {
            var callback = function () {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-834077880/TxH9CP7TmH4QuIncjQM',
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