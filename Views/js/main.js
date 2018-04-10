$(document).ready(function(){
    var panelItem = document.getElementsByClassName('menu-category-title'),
    bodyItem = document.getElementsByClassName('burgers');
    panelItem.__proto__.forEach = [].__proto__.forEach;

    // Прикрепляем Хедер
    var HeaderTop = $('#features').offset().top-60;
    $(window).scroll(function(){
        if( $(window).scrollTop() > HeaderTop ) {
            $('header').addClass('fixedbar');
        } else {
            $('header').removeClass('fixedbar');
        }
    });

    //Раскрытие аккордеона
    // $(".menu-category-title").on("click","a", function (event) {
    //     //отменяем стандартную обработку нажатия по ссылке
    //     event.preventDefault();
    
    //     //забираем идентификатор бока с атрибута href
    //     var id  = $( $(this).attr('href') );
    //     //console.log(id.offset);
        
    //     //анимируем переход на расстояние - top за 1500 мс
    //    //var top = $(id).offset().top;
    //     //console.log(top);
    //         //$('html').animate({scrollTop: top - 60 }, 200, 'swing', function() { 
    //        //console.log("Finished animating burg");
    //         // });
    // });
    //Раскрытие аккордеона
    var activePanel;
    panelItem.forEach(function(item, i, panelItem) {
        item.addEventListener('click', function(e) {
            
        //show new thingy;
        this.classList.add('active');
        //window.scrollBy({ top: 400, behavior: 'smooth' });
        
        this.nextElementSibling.style.maxHeight = this.nextElementSibling.scrollHeight + 50 + "px";
        this.nextElementSibling.style.padding = "15px 7.5px 15px 7.5px";
    
        //hide old thingy
        if (activePanel) {
            activePanel.classList.remove('active');
    
            activePanel.nextElementSibling.style.maxHeight = null;
            activePanel.nextElementSibling.style.padding = "0";
        }
        //update thingy
        activePanel = (activePanel === this) ? 0 : this;
    });
    });
//Анимация перехода до якоря
    $("#go-menu, .footer-logo").on("click", function (event) {
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();

		//забираем идентификатор бока с атрибута href
		var gg  = $(this).attr('href'),

		//узнаем высоту от начала страницы до блока на который ссылается якорь
			rr = $(gg).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').delay(1000).animate({scrollTop: rr}, 500, 'swing', function() { 
           //console.log("Finished animating");
        });
	});
     $(".svg-border").on("click", function (event) {
        $(".map-content").addClass('hide');
    });
//Слайдер отзывов
    $('.cd-testimonials-wrapper').flexslider({
        selector: ".cd-testimonials > li",
        animation: "slide",
        controlNav: false,
        slideshow: false,
        smoothHeight: true,
        start: function(){
            $('.cd-testimonials').children('li').css({
                'opacity': 1,
                'position': 'relative'
            });
        }
    });
});

    
