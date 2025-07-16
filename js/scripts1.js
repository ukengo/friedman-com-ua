 
jQuery(document).ready(function () {
     var $option = $(this).find('option:selected');
     console.log($option.text());
     $('.custom-select').find('.output .text').text($option.text());
	
    if (window.PIE) {
        $('.employer img').each(function () {
            PIE.attach(this);
        });
    }

    /* placeholder */
    $('input, textarea').focus(function () {
        if ($(this).attr("value") == $(this).attr("title"))
            $(this).attr("value", "").removeClass('placeholder')
    });

    $('input, textarea').blur(function () {
        if ($(this).attr("value") == "")
            $(this).attr("value", $(this).attr("title")).addClass('placeholder')
    });

    /* header search */
    $('.search-form input').on('focus', function () {
        $(this).parent().addClass('active');
    });

    $('.search-form input').on('blur', function () {
        $(this).parent().removeClass('active');
    });

    /* custom select */
    $('.contract-box select').on('change', function () {
        var $option = $(this).find('option:selected'),
            $doc = $(this).parents('.contract-box').find('.current-document');

        $(this).parents('.custom-select').find('.output .text').text($option.text());

        $doc.stop().fadeOut();
        if ($option && $option.attr('data-doc-url')) {
            $('a', $doc).attr('href', $option.attr('data-doc-url'));
            $doc.stop().fadeIn();
        }
    });

    $('.custom-select select').on('change', function () {
        var $option = $(this).find('option:selected'),
            $doc = $(this).parents('.contract-box').find('.current-document');

        $(this).parents('.custom-select').find('.output .text').text($option.text());

        $doc.stop().fadeOut();
        if ($option && $option.attr('data-doc-url')) {
            $('a', $doc).attr('href', $option.attr('data-doc-url'));
            $doc.stop().fadeIn();
        }
    });
 
    /* toggle */
    $('.links-two-column .column > ul > li > a').on('click', function () {
        $('.links-two-column ul ul').slideUp();
        $(this).next('ul').stop().slideDown();
        return false;
    });

    /* slider */
    $('.flexslider').flexslider({
        directionNav: false,
        animation: 'slide',
        start: function () {
            $('.flexslider').animate({opacity: 1}, 100);
        }
    });
    $(function() {
        var pull 	= $('.mob_button');
        var menu 		= $('.main-nav');
        var menuHeight	= menu.height();

        $(pull).on('click', function(e) {
            if ($(".main-nav").css('display') == 'none'){
                menu.slideToggle();
                $(".main-nav").css('display','block');
                $('.mob_button span:nth-child(1)').css('transform','rotate(45deg)');
                $('.mob_button span:nth-child(2)').css('transform','rotate(-45deg)');
                $('.mob_button span:nth-child(2)').css('margin-top','-9px');
                $('.mob_button span:nth-child(3)').css('display','none');
                $('.mob_button span').css('border-color','white');
                $('body').css('overflow-y','hidden');
            }
            else{
                menu.slideToggle();
                $('.mob_button span:nth-child(1)').css('transform','rotate(0)');
                $('.mob_button span:nth-child(2)').css('transform','rotate(0)');
                $('.mob_button span:nth-child(2)').css('margin-top','0');
                $('.mob_button span:nth-child(3)').css('display','block');
                $('.mob_button span').css('border-color','#bf122e');
                $('body').css('overflow-y','auto');
            }
        });
    });
});


// Menu Animation
window.addEventListener('scroll', e => {
  let navbar = document.querySelector('.nav-search-flex').classList
  let active_class = "nav-search-flex_scrolled"
  if (scrollY > 50) navbar.add(active_class);
  else navbar.remove(active_class);
});

