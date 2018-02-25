/*!
 * jQuery jqCart Plugin v1.1.2
 * requires jQuery v1.9 or later
 *
 * http://incode.pro/
 *
 * Date: Date: 2016-05-18 19:15
 */
;(function($) {
  'use strict';
  var cartData,
    itemData,
    orderPreview = '',
    totalCnt = 0,
    visibleLabel = false,
    label = $('<div class="jqcart-cart-label"><span class="jqcart-title"><i class="fas fa-shopping-basket"> </i> </span><span class="jqcart-total-cnt"> 0</span></div>'),
      modal = '<div id="overlay"></div><div id="modal_form" class="jqcart-layout" ><div class="jqcart-checkout"></div></div>',
    orderform = '<div id="form2"><p class="jqcart-cart-title-no">Контактная информация:</p><form class="jqcart-orderform"><p><label>ФИО:</label><input type="text" name="user_name"></p><p><label>Телефон:</label><input type="text" name="user_phone"></p><p><label>Адрес:</label><input type="text" name="user_address"></p><p><label>Коментарий:</label><textarea name="user_comment"></textarea></p><p><button type="submit" class="btn btn-primary btn-basket">Отправить заказ</button></p></form></div>';
  var opts = {
		buttons: '.add_item',
		cartLabel: 'body',
		visibleLabel: false,
		openByAdding: false,
    handler: '/sendOrder',
		currency: '$'
  };
  var actions = {
    init: function(o) {
      opts = $.extend(opts, o);
      cartData = actions.getStorage();
      if (cartData !== null && Object.keys(cartData).length) {
        for (var key in cartData) {
          if (cartData.hasOwnProperty(key)) {
            totalCnt += cartData[key].count;
          }
        }
        visibleLabel = true;
      }
      label.prependTo(opts.cartLabel)[visibleLabel || opts.visibleLabel ? 'show' : 'hide']()
        .on('click', actions.openCart)
        .find('.jqcart-total-cnt').text(totalCnt);
      $(document)
        .on('click', opts.buttons, actions.addToCart)
        .on('click', '#overlay', function(e) {
          if (e.target === this) {
            actions.hideCart();
          }
        })
        .on('click', '.jqcart-incr', actions.changeAmount)
				.on('input keyup', '.jqcart-amount', actions.changeAmount)
        .on('click', '.jqcart-del-item', actions.delFromCart)
        .on('submit', '.jqcart-orderform', actions.sendOrder)
        .on('click', '#to-form2', function(){
          document.getElementById('form1').style.display="none";
          document.getElementById('form2').style.display="block";

        })
        .on('reset', '.jqcart-orderform', actions.hideCart)
				.on('click', '.jqcart-print-order', actions.printOrder);
      return false;
    },
    addToCart: function(e) {
      e.preventDefault();
      itemData = $(this).data();
			if(typeof itemData.id === 'undefined') {
				console.log('Отсутствует ID товара');
				return false;
			}
      cartData = actions.getStorage() || {};
      if (cartData.hasOwnProperty(itemData.id)) {
        cartData[itemData.id].count++;
      } else {
        itemData.count = 1;
        cartData[itemData.id] = itemData;
      }
      actions.setStorage(cartData);
      actions.changeTotalCnt(1);
      label.show();
			if(opts.openByAdding) {
				actions.openCart();
			}
      return false;
    },
    delFromCart: function() {
      var $that = $(this),
        line = $that.closest('.jqcart-tr'),
        itemId = line.data('id');
      cartData = actions.getStorage();
      actions.changeTotalCnt(-cartData[itemId].count);
      delete cartData[itemId];
      actions.setStorage(cartData);
      line.remove();
      actions.recalcSum();
      return false;
    },
    changeAmount: function() {
      var $that = $(this),
				manually = $that.hasClass('jqcart-amount'),
        amount = +(manually ? $that.val() : $that.data('incr')),
        itemId = $that.closest('.jqcart-tr').data('id');
      cartData = actions.getStorage();
			if(manually) {
      	cartData[itemId].count = isNaN(amount) || amount < 1 ? 1 : amount;
			} else {
				cartData[itemId].count += amount;
			}
      if (cartData[itemId].count < 1) {
        cartData[itemId].count = 1;
      }
			if(manually) {
				$that.val(cartData[itemId].count);
			} else {
      	$that.siblings('input').val(cartData[itemId].count);
			}
      actions.setStorage(cartData);
      actions.recalcSum();
      return false;
    },
    recalcSum: function() {
      var subtotal = 0,
        amount,
        sum = 0,
        totalCnt = 0;
      $('.jqcart-tr').each(function() {
        amount = +$('.jqcart-amount', this).val();
        sum = Math.ceil((amount * $('.jqcart-price', this).text()) * 100) / 100;
        $('.jqcart-sum', this).html(sum + ' ' + opts.currency);
				subtotal = Math.ceil((subtotal + sum) * 100) / 100;
        totalCnt += amount;
      });
        
        if(subtotal < 400){
            subtotal = subtotal + 40;
            $(".delivery strong").text("40грн");
        } else {
            $(".delivery strong").text("0грн");
        }
      $('.jqcart-subtotal strong').text(subtotal);
      $('.jqcart-total-cnt').text(totalCnt);
      if (totalCnt <= 0) {
				actions.hideCart();
				if(!opts.visibleLabel) {
        	label.hide();
				}
      }
      return false;
    },
    changeTotalCnt: function(n) {
      var cntOutput = $('.jqcart-total-cnt');
      cntOutput.text((+cntOutput.text() + n));
      return false;
    },
    openCart: function() {
      var subtotal = 0,
			cartHtml = '';
      cartData = actions.getStorage();
      orderPreview = '<div id="form1"><p class="jqcart-cart-title">Корзина </p> <div class="containerTovar">';
      var key, sum = 0, counter=1;
      for (key in cartData) {
        if (cartData.hasOwnProperty(key)) {
            sum = Math.ceil((cartData[key].count * cartData[key].price) * 100) / 100;
            subtotal = Math.ceil((subtotal + sum) * 100) / 100;
					
            orderPreview += '<div class="jqcart-tr" data-id="' + cartData[key].id + '">';
            orderPreview += '<div class="jqcart-small-td jqcart-num">' + counter + '. </div>';
            orderPreview += '<div class="jqcart-name"> ' + cartData[key].title + '</div>';
            orderPreview += '<div class="jqcart-price">' + cartData[key].price + '</div>';
            
            orderPreview += '<div class="jqcart-count"><div class="jqcart-count-wrap"><span class="jqcart-incr" data-incr="-1">&#8211;</span><input type="text" class="jqcart-amount" value="' + cartData[key].count + '"><span class="jqcart-incr" data-incr="1">+</span></div></div>';
            orderPreview += '<div class="jqcart-sum">' + sum + ' ' + opts.currency + '</div>';
            orderPreview += '<div class="jqcart-small-td"><span class="jqcart-del-item">x</span></div>';
            orderPreview += '</div>';
        }
        counter++;
      }
      orderPreview += '</div><div class="delivery" style="position: absolute;    bottom: 95px;    right: 40px;    font-size: 16px;    color: #135b13;    display:  block;">Доставка: <strong></strong></div>';
        
//        if(subtotal < 400){
//            subtotal = subtotal + 40;
//            $(".delivery").css( "display", "block" );
//        } else {
//            $(".delivery").css( "display", "none" );
//        }
        
      orderPreview += '<div class="jqcart-subtotal">Всего: <strong>' + subtotal + '</strong> ' + opts.currency + '</div>';
      orderPreview += '<button type="button" id="to-form2" class="btn btn-primary btn-basket" name="button">Оформить заказ</button></div>';
      
			cartHtml = subtotal ? (orderPreview + orderform) : '<h2 class="jqcart-empty-cart">Корзина пуста</h2>';
        
      $(modal).appendTo('body').find('.jqcart-checkout').html(cartHtml);
        //actions.recalcSum();
        if(subtotal < 400){
            subtotal = subtotal + 40;
            $(".jqcart-subtotal strong").text(subtotal);
            $(".delivery strong").text("40грн");
        } else {
            $(".delivery strong").text("0грн");
        }
    },
      hideCart: function() {
          $('.jqcart-layout, #overlay').fadeOut('fast', function() {
              $(this).remove();
          });
          return false;
      },
    sendOrder: function(e) {
      e.preventDefault();
      var $that = $(this);
      if ($.trim($('[name=user_name]', $that).val()) === '' || $.trim($('[name=user_phone]', $that).val()) === '') {
        $('<p class="jqcart-error">Пожалуйста, укажите свое имя и контактный телефон!</p>').insertBefore($that).delay(3000).fadeOut();
        return false;
      }
      $.ajax({
        url: opts.handler,
        type: 'POST',
				dataType: 'json',
        data: {
            orderlist: $.param(actions.getStorage()),
            userdata: $that.serialize()
        },
        error:
            function (jqXHR, exception) {
                console.log("Ошишка");
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                console.log(msg);
        },
        success: function(resp) {
          console.log("заказ принят");
          $('.jqcart-checkout').html('<h2 class="jqcart-success">Спасибо!<br> Ваш заказ принят.</h2>');
            if(!resp.errors) {
                setTimeout(methods.clearCart, 2000);
            }
        }
      });
    },
		printOrder: function (){
			var data = $(this).closest('.jqcart-checkout').prop('outerHTML');
			if(!data) {
				return false;
			}
			var win = window.open('', 'Печать заказа', 'width='+screen.width+',height='+screen.height),
			cssHref = $(win.opener.document).find('link[href$="jqcart.css"]').attr('href'),
			d = new Date(),
			curDate = ('0' + d.getDate()).slice(-2) + '-' + ('0' + (d.getMonth() + 1)).slice(-2) + '-' + d.getFullYear() + ' ' + ('0' + d.getHours()).slice(-2) + ':' + ('0' + d.getMinutes()).slice(-2) + ':' + ('0' + d.getSeconds()).slice(-2);
			
			
			win.document.write('<html><head><title>Заказ ' + curDate + '</title>');
			win.document.write('<link rel="stylesheet" href="' + cssHref + '" type="text/css" />');
			win.document.write('</head><body >');
			win.document.write(data);
			win.document.write('</body></html>');
			
			setTimeout(function(){
				win.document.close(); // нужно для IE >= 10
				win.focus(); // нужно для IE >= 10			
				win.print();
				win.close();
			}, 100);
			
			return true;
		},
    setStorage: function(o) {
      localStorage.setItem('jqcart', JSON.stringify(o));
      return false;
    },
    getStorage: function() {
      return JSON.parse(localStorage.getItem('jqcart'));
    }
  };
  var methods = {
		clearCart: function(){
			localStorage.removeItem('jqcart');
			label[opts.visibleLabel ? 'show' : 'hide']().find('.jqcart-total-cnt').text(0);
			actions.hideCart();
		},
		openCart: actions.openCart,
		printOrder: actions.printOrder,
		test: function(){
			actions.getStorage();
		}
	};
  $.jqCart = function(opts) {
    if (methods[opts]) {
      return methods[opts].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof opts === 'object' || !opts) {
      return actions.init.apply(this, arguments);
    } else {
      $.error('Метод с именем "' + opts + '" не существует!');
    }
  };
})(jQuery);

