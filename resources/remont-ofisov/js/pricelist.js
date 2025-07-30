$(function(){ 
    
    
    let $window = $(window);
    let $sidebar = $(".estimates__menu");
    let $sidebarHeight = $(".estimates__menu").height();
    let $memu = $(".estimates__menu_block");
    let $menuHeight = $(".estimates__menu_block").height();

    let $sidebarTop = $sidebar.position().top;
    let $stop = $('.estimates__content');
    let $price = $('.estimates__sum');
    let $stopTop = ($stop.position().top + $stop.height()) + 90;
    
    let $scrollTop = $window.scrollTop();
    
    
    $window.scroll(function(event) {
        
        $scrollTop = $window.scrollTop();

        $sidebarHeight = $(".estimates__menu").height();
        $menuHeight = $(".estimates__menu_block").height();
        $sidebarTop = $sidebar.position().top;

        $stopTop = ($stop.position().top + $stop.height()) + 90;
        
        let $scrollView = $window.height() + $scrollTop;
        
            
        /* if ($scrollView > ($stop.position().top + 450) ) {
            $price.addClass("fixed");
        }  */

        if ($scrollView < ($stop.position().top + 450) || $scrollView > $stopTop + 90 ) {
            $price.removeClass("fixed");
        } 
        
    });
                   
    if ($(window).width() > 9999) {
       
        $window.scroll(function(event) {        
            
            if (($menuHeight + 100) < $stop.height()) {
                if ($sidebarTop < $scrollTop - 108) {
                    $memu.addClass("fixed");  
                    $memu.css("margin-top", 0);
                } 

                if ($sidebarTop > $scrollTop - 108) {
                    $memu.removeClass("fixed");    
                }

                if ($scrollTop + $menuHeight > $stopTop) {
                    $topPosition = $stopTop - $scrollTop - $menuHeight;
                    $memu.css("margin-top", $topPosition);   

                }    
            } else {
                $memu.removeClass("fixed");    
                
                $memu.css("margin-top", 0);
            }
            
           
        });    
    }
    
    
    $('.yellow_action_block .estimates__menu li, .estimatesContent .estimates__menu li').click(function(){
        
        $stopTop = ($stop.position().top + $stop.height()) + 90;
        if (($menuHeight + 100) > $stop.height()) {
            $memu.removeClass("fixed");    
            $memu.css("margin-top", 0);     
        }
        
        $('.estimates__menu li, .estimates__items').removeClass('active');
        $(this).addClass('active');

        $('.estimates__items').eq($(this).index()).addClass('active');

        $('body,html').animate({
            scrollTop: $('.estimates__content').offset().top - 66,
        }, 400);
        
    });

    $('.estimatesPopup .estimates__menu li').click(function(){
        $('.estimates__menu li, .estimates__items').removeClass('active');
        $(this).addClass('active');

        $('.estimates__items').eq($(this).index()).addClass('active');

        $('.estimates__content').animate({
                scrollTop: 0,
        }, 400); 
    });

    $('.estimates_close').click(function(){
            $('.estimatesPopup').removeClass('is_active');    
            $('html').removeClass('is_popup');
        });
    $('.estimatesPopup').click(function(e){
        if(e.target.className == 'estimatesPopup is_active') {
            $('.estimatesPopup').removeClass('is_active');    
            $('html').removeClass('is_popup');  
        }
    }); 
    $('.go_estimatesPopup').click(function(){
        $('.estimatesPopup').addClass('is_active');    
        $('html').addClass('is_popup');
    });

    $('.yellow_action').click(function(){
        
        $(this).toggleClass('hide');	
        $('.yellow_action_block').slideToggle();
    });
    
    
    
    document.oninput = function() {
        var input = document.querySelector('.input_count');
        input.value = input.value.replace (/[^\d]/g, '');
    }
    $('.minus_count').click(function() {
        calcSmeta($(this), '-');
    });

    $('.plus_count').click(function() {
        calcSmeta($(this), '+');
    });

    $(".input_count").keyup(function(){

        calcSmeta($(this), "=");

    });


    function calcSmeta(context, type) {
        let sum = $('#calc_sum');
        let sum_list = $('.calc_sum');
        let final_sum = 0;
        let input_count;
        let value_count;

        if (type == '-') {
            input_count = context.next();
            value_count = input_count.val();
        } 

        if (type == '+') {
            input_count = context.prev();
            value_count = input_count.val();
        }

        if (type == '=') {
            input_count = context;
            value_count = input_count.val().replace (/\_/g, '');
        }

        let calc_price =  input_count.closest('.calc_row').find('.calc_price').text();
        let sum_price =  input_count.closest('.calc_row').find('.calc_sum');

        if (type == '-') {    
            if (value_count > 0) {
                value_count--;
            }
        }

        if (type == '+') {
            value_count++;
        }

        input_count.val(value_count);  

        sum_price.text(value_count * calc_price);


        sum_list.each(function(i, elem){ 
             final_sum += Number.parseInt($(elem).text());
        });

        final_sum = ('' + final_sum).replace(/.+?(?=\D|$)/, function(f) {
           return f.replace(/(\d)(?=(?:\d\d\d)+$)/g, "$1 ");
        });

        sum.text(final_sum);
    }
    
    let cardTexts = document.querySelectorAll('.service-block__card-text');

    cardTexts.forEach((cardTextBlock) => {
        let buttonMore = cardTextBlock.querySelector('.service-block__card-open');
        buttonMore.addEventListener('click', () => {
      cardTextBlock.classList.toggle('active');
    });
  });
});    